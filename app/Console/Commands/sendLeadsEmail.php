<?php

namespace App\Console\Commands;

use App\Mail\IncomingLeads;
use App\Models\Order;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class sendLeadsEmail extends Command
{
    protected $sender = 'info@taxbizlegal.com';
    protected $scheduledMinutes = 30;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-leads-email';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send leads email to admin';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $leads = Order::getLatestLeads($this->scheduledMinutes);
        if($leads->isEmpty()):
            $this->info('No new leads to send at ' . now()->format('F j, Y, g:i A'));
            return Command::SUCCESS;
        endif;

        $mail = new IncomingLeads($leads);
        Mail::to($this->sender)->send($mail);

        if (Storage::fileExists($mail->fileName)):
            Storage::delete($mail->fileName);
        endif;

        $this->info('Leads email sent at ' . now()->format('F j, Y, g:i A'));
        return Command::SUCCESS;
    }
}
