<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index() {
        $blogs = Blog::where('is_published', true)->whereNotNull('published_at')->get();

        return view('frontend.blogs.index', [
            'blogs' => $blogs
        ]);
    }

    public function view($slug) {
        $blog = Blog::where('slug', $slug)
            ->where('is_published', true)
            ->whereNotNull('published_at')
            ->firstOrFail();

        return view('frontend.blogs.view', [
            'blog' => $blog
        ]);
    }
}
