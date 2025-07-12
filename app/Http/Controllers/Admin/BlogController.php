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
use Illuminate\Support\Facades\Cache;
use App\Models\Service;
use App\Models\MetaTags;

class BlogController extends Controller
{
    protected $services;

    public function __construct()
    {
        $this->services = Cache::remember('all_services_for_filter', now()->addHours(12), function () {
            return Service::select('slug', 'name')->orderBy('sort_order')->get();
        });
    }

    public function index()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('admin.blogs.index', [
            'blogs' => $blogs
        ]);
    }

    public function create()
    {
        return view('admin.blogs.create', [
            'services' => $this->services
        ]);
    }

    public function store(Request $request)
    {
        $now = Carbon::now();
        $isPublished  = $request->input('type') == 1;
        $publishedAt = $isPublished ? $now : null;
        $msg = $isPublished ? 'Blog Published Successfully' : 'Blog is in draft, keep editing or make any changes';
        $slug = Str::slug($request->input('title')) . '-' . Str::lower($now->format('Hi') . random_int(100, 999) . $now->format('m') . $now->format('s') . Str::random(4));

        if (!is_null($request->input('banner_img'))) {
            $fileName = Str::slug($request->input('title')) . '.' . pathinfo($request->input('banner_img'), PATHINFO_EXTENSION);
            $filePath = Storage::disk('public')->putFileAs('upload/blogs', new File(Storage::path($request->input('banner_img'))), $fileName);
        }

        Blog::create([
            'title'             => $request->input('title'),
            'slug'              => $slug,
            'excerpt'           => $request->input('excerpt'),
            'tags'              => $request->has('tags')
                ? implode(',', $request->input('tags'))
                : null,
            'blog_type'         => $request->input('blog_type'),
            'related_services'  => $request->has('related_services')
                ? implode(',', $request->input('related_services'))
                : null,
            'estimated_reading_time' => $this->estimatedReadingTime($request->input('content')),
            'content'           => $request->input('content'),
            'banner_img'        => $filePath ?? null,
            'user_id'           => Auth::id(),
            'is_published'      => $isPublished,
            'published_at'      => $publishedAt,
        ]);

        MetaTags::syncBlogTags([
            'slug' => $slug,
            'title' => $request->input('title'),
            'excerpt' => $request->input('excerpt'),
            'banner_img' => $filePath ?? null
        ]);

        return redirect()->route('admin.blogs.index')->with('success', $msg);
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail(decrypt($id));

        return view('admin.blogs.edit', [
            'blog' => $blog,
            'services' => $this->services
        ]);
    }

    public function update(Request $request, $id)
    {
        $now = Carbon::now();
        $isPublished  = $request->input('type') == 1;

        $blog = Blog::findOrFail(decrypt($id));

        if (!is_null($request->input('banner_img'))) {
            if ($blog->banner_img && Storage::disk('public')->exists($blog->banner_img)) {
                Storage::disk('public')->delete($blog->banner_img);
            }

            $fileName = Str::slug($request->input('title')) . '.' . pathinfo($request->input('banner_img'), PATHINFO_EXTENSION);
            $filePath = Storage::disk('public')->putFileAs('upload/blogs', new File(Storage::path($request->input('banner_img'))), $fileName);
        }

        if (strcasecmp($blog->title, $request->input('title')) === 0) {
            $slug = $blog->slug;
        } else {
            $old_slug = $blog->slug;
            $slug = Str::slug($request->input('title')) . '-' . Str::lower($now->format('Hi') . random_int(100, 999) . $now->format('m') . $now->format('s') . Str::random(4));
        }

        $blog->update([
            'title'        => $request->input('title'),
            'slug'         => $slug,
            'excerpt'      => $request->input('excerpt'),
            'tags'         => $request->has('tags')
                ? implode(',', $request->input('tags'))
                : null,
            'blog_type'    => $request->input('blog_type'),
            'related_services'  => $request->has('related_services')
                ? implode(',', $request->input('related_services'))
                : null,
            'content'      => $request->input('content'),
            'banner_img' => $filePath ?? null,
            'estimated_reading_time' => $this->estimatedReadingTime($request->input('content')),
            'user_id'      => Auth::id(),
            'is_published' => $isPublished,
            'published_at' => $isPublished ? $now : null,
        ]);

        MetaTags::syncBlogTags([
            'slug' => $slug,
            'title' => $request->input('title'),
            'excerpt' => $request->input('excerpt'),
            'banner_img' => $filePath ?? null
        ], $old_slug ?? null);

        return redirect()->route('admin.blogs.index')->with('success', 'Blog updated successfully.');
    }

    private function estimatedReadingTime($html, int $wordsPerMinute = 200): int
    {
        if (empty($html)) return 1;
        $wordCount = str_word_count(html_entity_decode(strip_tags($html)));
        return (int) ceil($wordCount / $wordsPerMinute);
    }
}
