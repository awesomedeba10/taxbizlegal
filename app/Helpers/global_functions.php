<?php

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Crypt;

if (!function_exists('service_asset')) {
    function service_asset($icon = null)
    {
        if (strpos($icon, '/') !== false) {
            $icon = str_ireplace('/', '', $icon);
        }
        return asset('images/service_icon/' . $icon);
    }
}

if (!function_exists('slugToTitle')) {
    function slugToTitle($slug)
    {
        return Str::title(str_replace('-', ' ', $slug));
    }
}

if (!function_exists('slugToTitle')) {
    function slugToTitle($slug)
    {
        return Str::title(str_replace('-', ' ', $slug));
    }
}

if (!function_exists('custom_encrypt')) {
    function custom_encrypt($param)
    {
        $gzipped = gzcompress(json_encode($param));
        return base64_encode($gzipped);
    }
}

if (!function_exists('custom_decrypt')) {
    function custom_decrypt($param)
    {
        $decoded = base64_decode($param);
        return json_decode(gzuncompress($decoded), true);
    }
}
