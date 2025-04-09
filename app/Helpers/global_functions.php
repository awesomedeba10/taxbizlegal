<?php

use Illuminate\Support\Str;

if (!function_exists('slugToTitle')) {
    function service_asset($icon = null) {
        if (strpos($icon, '/') !== false) {
            $icon = str_ireplace('/', '', $icon);
        }
        return asset('images/service_icon/'. $icon);
    }
}


if (!function_exists('slugToTitle')) {
    function slugToTitle($slug) {
        return Str::title(str_replace('-', ' ', $slug));
    }
}

if (!function_exists('readCsv')) {
    function readCsv() {
        $filePath = public_path('extras\company_plans_flat.csv');

        if (!file_exists($filePath) || !is_readable($filePath)) {
            return response()->json(['error' => 'CSV file not found or unreadable'], 404);
        }

        $rows = [];

        if (($handle = fopen($filePath, 'r')) !== false) {
            $headers = fgetcsv($handle);
    
            while (($data = fgetcsv($handle)) !== false) {
                $rows[] = array_combine($headers, $data);
            }
    
            fclose($handle);
        }

        $formatted = [];

        foreach($rows as $row):
            $companyKey = strtolower(str_replace(' ', '-', $row['Company Type']));

            $planName = $row['Plan Name'];
            $price = (int) $row['Price'];
            $isPopular = strtolower($row['Is Popular']) === 'true';
            $serviceName = $row['Service Name'];
            $isActive = (int) $row['Is Active'];

            $existingPlanIndex = null;
    if (isset($formatted[$companyKey])) {
        foreach ($formatted[$companyKey] as $index => $plan) {
            if ($plan['plan_name'] === $planName) {
                $existingPlanIndex = $index;
                break;
            }
        }
    } else {
        $formatted[$companyKey] = [];
    }

    if ($existingPlanIndex === null) {
        $formatted[$companyKey][] = [
            'plan_name'   => $planName,
            'price'       => $price,
            'description' => '', // You can populate later
            'is_popular'  => $isPopular,
            'services'    => [
                ['name' => $serviceName, 'is_active' => $isActive],
            ],
        ];
    } else {
        $formatted[$companyKey][$existingPlanIndex]['services'][] = [
            'name' => $serviceName,
            'is_active' => $isActive,
        ];
    }


        endforeach;

        // dd($formatted);
        $export = "<?php\n\nreturn " . var_export($formatted, true) . ";\n";
        file_put_contents(config_path('company_plans.php'), $export);
    }
}