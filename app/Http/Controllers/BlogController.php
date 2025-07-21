<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index() {
        return view('frontend.blogs.index', [
            'blogs' => Blog::getBlogs()
        ]);
    }

    public function view($slug) {
        $blog = Blog::getBlogs($slug);

        return view('frontend.blogs.view', [
            'blog' => $blog
        ]);
    }
}
