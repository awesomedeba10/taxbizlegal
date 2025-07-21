<?php

namespace App\Livewire;

use App\Models\Blog;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class BlogFilter extends Component
{
    use WithPagination;

    #[Url(as: 'tags', keep: true)]
    public array $selectedTags = [];

    public Collection $availableTags;
    public int $blogsCount = 0;

    protected $paginationTheme = 'tailwind';

    public function mount(): void
    {
        $this->loadAvailableTags();
    }

    public function updatedSelectedTags(): void
    {
        $this->resetPage();
        $this->dispatch('tagsUpdated', $this->selectedTags);
    }

    public function toggleTag(string $tag): void
    {
        if (in_array($tag, $this->selectedTags)) {
            $this->selectedTags = array_values(
                array_filter($this->selectedTags, fn($t) => $t !== $tag)
            );
        } else {
            $this->selectedTags[] = $tag;
        }

        $this->updatedSelectedTags();
    }

    public function clearAllTags(): void
    {
        $this->selectedTags = [];
        $this->resetPage();
        $this->dispatch('tagsUpdated', []);
    }

    public function getFilteredBlogsProperty()
    {
        return $this->getFilteredBlogs();
    }

    private function getFilteredBlogs()
    {
        $query = Blog::where('is_published', true)
                    ->whereNotNull('published_at');

        // Apply tag filtering using optimized FIND_IN_SET for multiple tags
        if (!empty($this->selectedTags)) {
            $query->where(function ($subQuery) {
                foreach ($this->selectedTags as $tag) {
                    $subQuery->whereRaw('FIND_IN_SET(?, tags)', [trim($tag)]);
                }
            });
        }

        $blogs = $query->orderBy('created_at', 'desc')
                      ->paginate(6);

        $this->blogsCount = $blogs->total();

        return $blogs;
    }

    private function loadAvailableTags(): void
    {
        $this->availableTags = Cache::remember('blog_tags_list', 3600, function () {
            $allTags = Blog::where('is_published', true)
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

            return $allTags;
        });
    }

    public function render(): View
    {
        return view('livewire.blog-filter', [
            'filteredBlogs' => $this->filteredBlogs,
        ]);
    }
}
