<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Crypt;

class ImportPricing extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import-pricing';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import pricing plans from CSV to config file';

    public $file_name = 'company_plans_flat.csv';

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

        $rows = [];

        if (($handle = fopen($filePath, 'r')) !== false):
            $headers = fgetcsv($handle);

            while (($data = fgetcsv($handle)) !== false) {
                $rows[] = array_combine($headers, $data);
            }

            fclose($handle);
        endif;

        $formatted = [];

        foreach ($rows as $row):
            $companyKey = strtolower(str_replace(' ', '-', $row['Company Type']));
            $planName = $row['Plan Name'];
            $price = (int) $row['Price'];
            $isPopular = $row['Is Popular'];
            $serviceName = $row['Service Name'];
            $isActive = (int) $row['Is Active'];

            $existingPlanIndex = null;
            if (isset($formatted[$companyKey])):
                foreach ($formatted[$companyKey] as $index => $plan):
                    if ($plan['plan_name'] === $planName):
                        $existingPlanIndex = $index;
                        break;
                    endif;
                endforeach;
            else:
                $formatted[$companyKey] = [];
            endif;

            if ($existingPlanIndex === null):
                $formatted[$companyKey][] = [
                    'plan_name'   => $planName,
                    'price'       => $price,
                    'description' => '', // Empty for now
                    'is_popular'  => $isPopular,
                    'services'    => [
                        ['name' => $serviceName, 'is_active' => $isActive],
                    ],
                ];
            else:
                $formatted[$companyKey][$existingPlanIndex]['services'][] = [
                    'name' => $serviceName,
                    'is_active' => $isActive,
                ];
            endif;
        endforeach;

        Storage::disk('public')->put('company_plans.txt', Crypt::encryptString(serialize($formatted)));

        $this->info('Pricing plans imported and config file updated successfully.');
        return Command::SUCCESS;
    }
}
