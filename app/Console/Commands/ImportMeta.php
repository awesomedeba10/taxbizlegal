<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use App\Models\MetaTags;
use Illuminate\Support\Str;

class ImportMeta extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import-meta';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    public $file_name = 'Tax Biz Legal - Meta Tags - Set-1.csv';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $filePath = Storage::disk('local')->path($this->file_name);

        if (!file_exists($filePath) || !is_readable($filePath)):
            $this->error('CSV file not found or unreadable.');
            return Command::FAILURE;
        endif;

        MetaTags::truncate();

        if (($handle = fopen($filePath, 'r')) !== false):
            $headers = fgetcsv($handle);

            while (($data = fgetcsv($handle)) !== false) {
                $csvRow = array_combine($headers, $data);

                $dbRow = [
                    'url'              => Str::replace('https://taxbizlegal.com', '', $csvRow['URL'], caseSensitive: false),
                    'meta_title'       => $csvRow['Meta Title'] ?? null,
                    'meta_description' => $csvRow['Meta Description'] ?? null,
                    'og_title'         => $csvRow['og:title'] ?? null,
                    'og_description'   => $csvRow['og:description'] ?? null,
                    'og_type'          => $csvRow['og:type'] ?? null,
                    'og_image'         => $csvRow['og:image'] ?? null,
                ];

                MetaTags::insert($dbRow);
            }

            fclose($handle);
        endif;

    }
}
