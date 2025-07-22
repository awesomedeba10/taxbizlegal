<div>
    {{-- Filter Section --}}
    <div class="row bg-blue-100 gx-md-4 gx-lg-40 mod-mx-0 mod-mt-8 mod-mb-12 mod-pt-2 mod-pb-4 mod-rounded-6">

        <div class="clear-blog-filter mod-flex mod-items-center mod-justify-between mod-mb-0">
            <h3 class="mod-mb-0 mod-py-2">Explore Topics</h3>
            @if (!empty($selectedTags))
                <button wire:click="clearAllTags" class="clear-blog-filter">
                    Clear All Filters 🧹
                </button>
            @endif
        </div>

        <div class="blog-filter mod-flex mod-flex-wrap mod-items-center mod-my-2 mod-gap-4" id="blog-tags">
            @forelse($availableTags as $tag)
                <input type="checkbox" wire:model.live="selectedTags" data-type="{{ $tag }}"
                    id="type-{{ $tag }}" value="{{ $tag }}"
                    @if (in_array($tag, $selectedTags)) checked @endif>
                <label for="type-{{ $tag }}">{{ $tag }}</label>
            @empty
                <span class="mod-text-font-600">No tags available</span>
            @endforelse
        </div>

        {{-- Results Count --}}
        <div class="text-sm mod-text-grey-600 mod-mt-1">
            Found {{ $blogsCount }} hand-picked {{ Str::plural('article', $blogsCount) }} for you
        </div>
    </div>

    {{-- Blogs Grid --}}
    <div class="row gx-md-4 gx-lg-40" id="blog-grid">
        @forelse ($filteredBlogs as $blog)
            <div class="col-lg-6 col-md-12 mod-flex mod-flex-wrap">
                <div class="mod-flex mod-flex-col card card--lg card--white article">
                    <div class="article-card-image">
                        <div class="mod-absolute mod-z-5 tags">
                            @foreach (array_map('trim', explode(',', $blog->tags)) as $tag)
                                <button wire:click="toggleTag('{{ $tag }}')"
                                    class="tag {{ in_array($tag, $selectedTags) ? 'tag--active' : '' }}">
                                    {{ $tag }}
                                </button>
                            @endforeach
                        </div>
                        <img class="mod-w-full mod-h-full mod-object-contain" decoding="async" width="1024"
                            height="530" src="{{ asset('storage/' . $blog->banner_img) }}" alt="{{ $blog->title }}"
                            loading="lazy" sizes="auto, (max-width: 1024px) 100vw, 1024px">
                    </div>
                    <div class="article-card-body mod-p-6">
                        <div class="post-meta mod-mb-3 mod-flex mod-items-center mod-flex-nowwrap mod-gap-4">
                            <a href="javascript:void(0)">{{ $blog->blog_type }}</a>
                            <span class="hr"></span>
                            <span class="mod-inline-flex mod-items-center mod-gap-2">
                                <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z">
                                        </path>
                                    </svg>
                                </span>
                                <span>{{ $blog->estimated_reading_time }} min. reading</span>
                            </span>
                            <span class="mod-text-grey-500">Published On &nbsp;&nbsp;
                                <span class="mod-text-black">{{ $blog->created_at->format('d M. Y') }}</span>
                            </span>
                        </div>
                        <h3 class="article-heading mod-mb-4">
                            <a class="mod-text-none" href="{{ route('front.blogs.view', $blog->slug) }}">
                                {{ $blog->title }}
                            </a>
                        </h3>
                        <p>{{ $blog->excerpt }}</p>
                        <div class="post-author mod-flex mod-mb-0 mod-items-center mod-gap-3">
                            <div class="avatar">
                                <img alt="TBL" src="{{ asset('images/img/executive-avatar.png') }}"
                                    class="avatar avatar-30 photo" height="30" width="30">
                            </div>
                            <div class="name">
                                <p class="mod-mb-0 mod-leading-loose">
                                    Admin <br><span class="mod-opacity-75">Tax Biz Legal</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="text-center py-8">
                    <div class="text-gray-500 text-lg mb-2">No blogs found</div>
                    <p class="text-gray-400">Try adjusting your filter criteria</p>
                </div>
            </div>
        @endforelse
    </div>

    {{-- Pagination --}}
    @if ($filteredBlogs->hasPages())
        <div class="mt-8">
            {{ $filteredBlogs->links() }}
        </div>
    @endif
</div>