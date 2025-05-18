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
    public string $fileName;

    /**
     * Create a new message instance.
     */
    public function __construct($leads)
    {
        $this->leads = $leads;
        $this->fileName = 'tbl-leads-' . now()->format('Y-m-d_H-i') . '.csv';

        $csvData = $this->generateCsv($leads);
        Storage::disk('local')->put($this->fileName, $csvData);
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            from: new Address(config('mail.from.address'), config('mail.from.name')),
            subject: 'TaxBIzLegal <> Leads Received in the Last 30 Minutes',
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
                'leadCount' => $this->leads->count()
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
        return [
            Attachment::fromPath(Storage::path($this->fileName))
                ->as($this->fileName)
                ->withMime('text/csv'),
        ];
    }

    private function generateCsv($leads): string
    {
        $csv = fopen('php://temp', 'r+');
        fputcsv($csv, ['Order Id' , 'Name', 'Email', 'Phone', 'State' ,
            'Service Name' , 'Current Stage' , 'Service Plan' , 'Service Plan Price' ,
            'Lead Submitted At']);

        foreach ($leads as $lead) {
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
        }

        rewind($csv);
        return stream_get_contents($csv);
    }
}
