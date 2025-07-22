<?php

namespace App\Livewire;

use App\Models\Blog;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Collection;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class BlogFilter extends Component
{
    use WithPagination;

    // Use native Livewire URL binding with indexed format
    #[Url(as: 'tags', except: '')]
    public string $tagsString = '';

    // Internal array for component logic
    public array $selectedTags = [];

    public Collection $availableTags;
    public int $blogsCount = 0;

    protected $paginationTheme = 'tailwind';

    public function mount(): void
    {
        $this->loadAvailableTags();
        $this->syncTagsFromString();
    }

    public function paginationView(): string
    {
        return 'vendor.pagination.custom-design-frontend-livewire-1';
    }

    // Convert URL string to internal array format
    private function syncTagsFromString(): void
    {
        if (empty($this->tagsString)) {
            $this->selectedTags = [];
            return;
        }

        // Parse indexed parameters from string format: "tags_1=Tag1&tags_2=Tag2"
        $this->selectedTags = $this->parseIndexedTags($this->tagsString);
    }

    // Convert internal array to URL string format
    private function syncStringFromTags(): void
    {
        if (empty($this->selectedTags)) {
            $this->tagsString = '';
            return;
        }

        // Convert to indexed format: "tags_1=Tag1&tags_2=Tag2"
        $this->tagsString = $this->formatTagsAsIndexed($this->selectedTags);
    }

    // Parse "tags_1=Tag1&tags_2=Tag2" format
    private function parseIndexedTags(string $tagsString): array
    {
        $tags = [];
        $params = [];

        // Handle both formats: indexed parameters or direct URL params
        if (request()->has('tags_1')) {
            // Load from current request indexed parameters
            $index = 1;
            while (request()->has("tags_{$index}")) {
                $tags[] = request()->get("tags_{$index}");
                $index++;
            }
        } elseif (!empty($tagsString)) {
            // Parse from string format if available
            parse_str($tagsString, $params);
            foreach ($params as $key => $value) {
                if (preg_match('/^tags_\d+$/', $key)) {
                    $tags[] = $value;
                }
            }
        }

        return array_filter($tags);
    }

    // Format array as "tags_1=Tag1&tags_2=Tag2"
    private function formatTagsAsIndexed(array $tags): string
    {
        $params = [];
        foreach ($tags as $index => $tag) {
            $params["tags_" . ($index + 1)] = $tag;
        }

        return http_build_query($params);
    }

    // Livewire lifecycle: when URL string changes
    public function updatedTagsString(): void
    {
        $this->syncTagsFromString();
        $this->resetPage();
        $this->dispatch('tagsUpdated', $this->selectedTags);
    }

    // When internal tags change, update URL
    public function updatedSelectedTags(): void
    {
        $this->syncStringFromTags();
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
        $this->updatedSelectedTags();
    }

    public function getFilteredBlogsProperty()
    {
        return $this->getFilteredBlogs();
    }

    private function getFilteredBlogs()
    {
        $blogs = Blog::scopeWithTags($this->selectedTags);
        $this->blogsCount = $blogs->total();
        return $blogs;
    }

    private function loadAvailableTags(): void
    {
        $this->availableTags = Blog::getAllTags();
    }

    public function render(): View
    {
        return view('livewire.blog-filter', [
            'filteredBlogs' => $this->filteredBlogs,
        ]);
    }
}
