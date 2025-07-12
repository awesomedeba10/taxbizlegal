<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class MetaTags extends Model
{
    protected $fillable = [
        'url',
        'meta_title',
        'meta_description',
        'og_title',
        'og_description',
        'og_type',
        'og_image'
    ];

    public static function syncBlogTags(array $data, ?string $old_slug = null)
    {
        if (!is_null($old_slug)):
            self::where('url', '/blogs/' . $old_slug)->delete();
        endif;

        self::updateOrCreate(
            ['url' => '/blogs/' . $data['slug']],
            [
                'meta_title'        => $data['title'],
                'meta_description'  => $data['excerpt'],
                'og_title'          => $data['title'],
                'og_description'    => $data['excerpt'],
                'og_type'           => 'Website',
                'og_image'          => asset('storage/' . $data['banner_img'])
            ]
        );

        Cache::forget('site_meta_tags');
    }
}
