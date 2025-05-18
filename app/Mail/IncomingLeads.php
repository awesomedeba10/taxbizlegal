<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class IncomingLeads extends Mailable
{
    use Queueable, SerializesModels;

    public $leads;
    public $enquiries;
    public string $leadsFileName;
    public string $enquiriesFileName;

    /**
     * Create a new message instance.
     */
    public function __construct($leads, $enquiries)
    {
        $this->leads = $leads;
        $this->enquiries = $enquiries;

        if ($leads->isNotEmpty()):
            $this->leadsFileName = 'tbl-leads-' . now()->format('Y-m-d_H-i') . '.csv';
            $csv = $this->generateCsv($leads, 'leads');
            Storage::put($this->leadsFileName, $csv);
        endif;

        if ($enquiries->isNotEmpty()):
            $this->enquiriesFileName = 'tbl-enquiries-' . now()->format('Y-m-d_H-i') . '.csv';
            $csv = $this->generateCsv($enquiries, 'enquiries');
            Storage::put($this->enquiriesFileName, $csv);
        endif;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address(config('mail.from.address'), config('mail.from.name')),
            subject: 'TaxBIzLegal <> Leads & Enquiries from the Last 30 Minutes',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'frontend.mail.incoming-leads',
            with: [
                'leadCount' => $this->leads->count(),
                'enquiryCount' => $this->enquiries->count()
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        $attachments = [];

        if(!empty($this->leadsFileName)):
            $attachments[] = Attachment::fromPath(Storage::path($this->leadsFileName))
                ->as($this->leadsFileName)
                ->withMime('text/csv');
        endif;

        if(!empty($this->enquiriesFileName)):
            $attachments[] = Attachment::fromPath(Storage::path($this->enquiriesFileName))
                ->as($this->enquiriesFileName)
                ->withMime('text/csv');
        endif;

        return $attachments;
    }

    private function generateCsv($data, $type): string
    {
        $csv = fopen('php://temp', 'r+');

        if($type == 'leads'):
            fputcsv($csv, ['Order Id' , 'Name', 'Email', 'Phone', 'State' ,
                'Service Name' , 'Current Stage' , 'Service Plan' , 'Service Plan Price' ,
                'Lead Submitted At']);

            foreach ($data as $lead):
                fputcsv($csv, [
                    '#' . Str::upper($lead->order_id),
                    $lead->cus_name,
                    $lead->cus_email,
                    $lead->cus_phone,
                    $lead->cus_state,
                    Str::title(str_replace('-', ' ', $lead->service_name)),
                    Str::title(str_replace('_', ' ', $lead->current_stage)),
                    $lead->service_plan_name,
                    $lead->service_price,
                    $lead->created_at
                ]);
            endforeach;
        elseif($type == 'enquiries'):
            fputcsv($csv, ['Name', 'Email', 'Phone', 'State', 'Message', 'Redirected From', 'Submitted At']);

            foreach ($data as $item):
                fputcsv($csv, [
                    $item->name,
                    $item->email,
                    $item->phone,
                    $item->state,
                    $item->message,
                    Str::title(str_replace('_', ' ', $item->redirected_from)),
                    $item->created_at
                ]);
            endforeach;
        endif;

        rewind($csv);
        return stream_get_contents($csv);
    }
}
