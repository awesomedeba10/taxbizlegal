<?php

namespace App\Traits;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

trait ServiceComponents
{
    protected $utilities_map = [
        'service_plans',
        'faqs',
        'steps'
    ];
    protected $default_cache_store_time = 2;

    public function init(string $page)
    {
        foreach ($this->utilities_map as $map):
            $util = Cache::get($map, []);
            $method = 'load_' . $map;

            if (!array_key_exists($page, $util) && method_exists($this, $method)):
                Cache::put(
                    $map,
                    $util + [$page => $this->{$method}($page)],
                    now()->addHours($this->default_cache_store_time)
                );
            endif;

        endforeach;
    }

    public function get_utils(string $type, string $page): array
    {
        return Cache::get($type, [])[$page] ?? [];
    }

    private function load_service_plans(string $page): array
    {
        $file = 'company_plans.txt';
        $decryptedData = Crypt::decryptString(File::get(public_path('storage/' . $file)));

        return array_map(function ($plan) {
            return array_merge($plan, ['uuid' => Str::random(11)]);
        }, Arr::get(unserialize($decryptedData), $page, []));
    }

    private function load_faqs(string $page): array
    {
        return Config::get('services.faqs.' . $page, []);
    }

    private function load_steps(string $page): array
    {
        return Config::get('services.steps.' . $page, []);
    }
}
