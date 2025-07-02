<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Blog;

class ArticleList extends Component
{
    public $page;
    public $blogs;

    /**
     * Create a new component instance.
     */
    public function __construct($page)
    {
        $this->page = $page;
        $this->blogs = Blog::where('is_published', true)
            ->whereNotNull('published_at')
            ->orderByDesc('published_at') // Optional: show latest first
            ->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.article-list', [
            'blogs' => $this->blogs
        ]);
    }
}
