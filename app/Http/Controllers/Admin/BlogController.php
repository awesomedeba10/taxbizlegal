<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('admin.blogs.index', [
            'blogs' => $blogs
        ]);
    }

    public function create()
    {
        return view('admin.blogs.create');
    }

    public function store(Request $request)
    {
        $now = Carbon::now();
        $isPublished  = $request->input('type') == 1;
        $publishedAt = $isPublished ? $now : null;
        $msg = $isPublished ? 'Blog Published Successfully' : 'Blog is in draft, keep editing or make any changes';

        if ($request->hasFile('banner_img')) {
            $file = $request->file('banner_img');
            $filePath = $file->storeAs('upload/blogs', Str::slug($request->input('title')) . '.' . $file->getClientOriginalExtension(), 'public');
        }

        if (!is_null($request->input('banner_img'))) {
            $fileName = Str::slug($request->input('title')) . '.' . pathinfo($request->input('banner_img'), PATHINFO_EXTENSION);
            $filePath = Storage::disk('public')->putFileAs('upload/blogs', new File(Storage::path($request->input('banner_img'))), $fileName);
        }

        Blog::create([
            'title'        => $request->input('title'),
            'slug'         => Str::slug($request->input('title')) . '-' . Str::lower($now->format('Hi') . random_int(100, 999) . $now->format('m') . $now->format('s') . Str::random(4)),
            'excerpt'      => $request->input('excerpt'),
            'tags'         => $request->has('tags')
                ? implode(',', $request->input('tags'))
                : null,
            'blog_type'    => $request->input('blog_type'),
            'estimated_reading_time' => $this->estimatedReadingTime($request->input('content')),
            'content'      => $request->input('content'),
            'banner_img' => $filePath ?? null,
            'user_id'       => Auth::id(),
            'is_published' => $isPublished,
            'published_at' => $publishedAt,
        ]);

        return redirect()->route('admin.blogs.index')->with('success', $msg);
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail(decrypt($id));
        return view('admin.blogs.edit', [
            'blog' => $blog
        ]);
    }

    public function update(Request $request, $id)
    {
        $now = Carbon::now();
        $isPublished  = $request->input('type') == 1;

        $blog = Blog::findOrFail(decrypt($id));

        if ($request->hasFile('banner_img')) {
            if ($blog->banner_img && Storage::disk('public')->exists($blog->banner_img)) {
                Storage::disk('public')->delete($blog->banner_img);
            }

            $file = $request->file('banner_img');
            $filePath = $file->storeAs('upload/blogs', Str::slug($request->input('title')) . '.' . $file->getClientOriginalExtension(), 'public');
        }

        $blog->update([
            'title'        => $request->input('title'),
            'slug'         => Str::slug($request->input('title')) . '-' . Str::lower($now->format('Hi') . random_int(100, 999) . $now->format('m') . $now->format('s') . Str::random(4)),
            'excerpt'      => $request->input('excerpt'),
            'tags'         => $request->has('tags')
                ? implode(',', $request->input('tags'))
                : null,
            'blog_type'    => $request->input('blog_type'),
            'content'      => $request->input('content'),
            'banner_img' => $filePath ?? null,
            'estimated_reading_time' => $this->estimatedReadingTime($request->input('content')),
            'user_id'      => Auth::id(),
            'is_published' => $isPublished,
            'published_at' => $isPublished ? $now : null,
        ]);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully.');
    }

    private function estimatedReadingTime($html, int $wordsPerMinute = 200): string
    {
        if(is_null($html) || $html = '') return 1;
        $wordCount = str_word_count(html_entity_decode(strip_tags($html)));
        return (int) ceil($wordCount / $wordsPerMinute);
    }
}
