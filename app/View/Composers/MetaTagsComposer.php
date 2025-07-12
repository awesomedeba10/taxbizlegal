<?php

namespace App\View\Composers;

use App\Models\MetaTags;
use Illuminate\View\View;
use Illuminate\Support\Facades\Cache;
use App\Models\Service;

class MetaTagsComposer
{
    /**
     * Create a new profile composer.
     */
    public function __construct(
        protected MetaTags $meta_tags,
    ) {}

    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $currentPath = request()->path() == '/' ? '/' : '/' . request()->path();

        $allMetaTags = Cache::remember('site_meta_tags', now()->addHours(6), function () {
            return $this->meta_tags::all()->keyBy('url');
        });

        $view->with('meta', $allMetaTags[$currentPath] ?? null);
    }
}