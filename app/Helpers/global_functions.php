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