<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Blog extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'banner_img',
        'excerpt',
        'content',
        'tags',
        'blog_type',
        'related_services',
        'estimated_reading_time',
        'user_id',
        'is_published',
        'published_at'
    ];

    public function formattedCreatedAt(): Attribute
    {
        return Attribute::get(function () {
            return $this->created_at
                ? $this->created_at->format('d/m/y h:i:s A')
                : null;
        });
    }
}
