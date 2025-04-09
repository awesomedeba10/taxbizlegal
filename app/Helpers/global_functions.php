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
        $filePath = storage_path('app/data/your-file.csv');

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

        dd($rows);
    }
}