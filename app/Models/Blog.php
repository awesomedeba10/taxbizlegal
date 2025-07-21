<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Cache;

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

    /**
     * Scope to filter blogs by tags using FIND_IN_SET for better performance
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param array $tags
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWithTags($query, array $tags)
    {
        if (empty($tags)) {
            return $query;
        }

        return $query->where(function ($subQuery) use ($tags) {
            foreach ($tags as $tag) {
                $subQuery->whereRaw('FIND_IN_SET(?, tags)', [trim($tag)]);
            }
        });
    }

    /**
     * Get all unique tags from published blogs (cached)
     *
     * @return \Illuminate\Support\Collection
     */
    public static function getAllTags()
    {
        return Cache::remember('all_blog_tags', 3600, function () {
            return self::where('is_published', true)
                ->whereNotNull('published_at')
                ->whereNotNull('tags')
                ->where('tags', '!=', '')
                ->pluck('tags')
                ->flatMap(function ($tags) {
                    return array_map('trim', explode(',', $tags));
                })
                ->filter()
                ->unique()
                ->sort()
                ->values();
        });
    }

    /**
     * Enhanced getBlogs method with tag filtering
     *
     * @param string|null $slug
     * @param array $tags
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model
     */
    public static function getBlogs($slug = null, array $tags = [])
    {
        $query = self::where('is_published', true)
            ->whereNotNull('published_at');

        // Apply tag filtering if provided
        if (!empty($tags)) {
            $query->withTags($tags);
        }

        if ($slug === null) {
            return $query->orderBy('created_at', 'desc')->get();
        }

        return $query->where('slug', $slug)->firstOrFail();
    }
}
