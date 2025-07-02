<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index() {
        $blogs = Blog::where('is_published', true)->whereNotNull('published_at')->get();

        dd($blogs);
    }
}
