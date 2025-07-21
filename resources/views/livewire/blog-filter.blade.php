<div>
    {{-- Filter Section --}}
    <div class="mb-6 p-4 bg-gray-50 rounded-lg">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-semibold text-gray-800">Filter by Tags</h3>
            @if(!empty($selectedTags))
                <button
                    wire:click="clearAllTags"
                    class="text-sm text-red-600 hover:text-red-800 transition-colors duration-200"
                >
                    Clear All Filters
                </button>
            @endif
        </div>

        {{-- Available Tags --}}
        @if($availableTags->count() > 0)
            <div class="flex flex-wrap gap-2 mb-4">
                @foreach($availableTags as $tag)
                    <label class="cursor-pointer">
                        <input
                            type="checkbox"
                            wire:model.live="selectedTags"
                            value="{{ $tag }}"
                            class="sr-only"
                        >
                        <span class="inline-flex items-center px-3 py-2 text-sm font-medium rounded-full transition-all duration-200
                            {{ in_array($tag, $selectedTags)
                                ? 'bg-blue-100 text-blue-800 border-2 border-blue-300'
                                : 'bg-white text-gray-700 border-2 border-gray-200 hover:border-gray-300' }}">
                            {{ $tag }}
                            @if(in_array($tag, $selectedTags))
                                <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            @endif
                        </span>
                    </label>
                @endforeach
            </div>
        @endif

        {{-- Selected Tags Display --}}
        @if(!empty($selectedTags))
            <div class="mb-4">
                <div class="text-sm text-gray-600 mb-2">Active filters:</div>
                <div class="flex flex-wrap gap-2">
                    @foreach($selectedTags as $tag)
                        <span class="inline-flex items-center px-2 py-1 text-xs font-medium bg-blue-100 text-blue-800 rounded-full">
                            {{ $tag }}
                            <button
                                wire:click="toggleTag('{{ $tag }}')"
                                class="ml-1 p-0.5 text-blue-600 hover:text-blue-800"
                            >
                                <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </span>
                    @endforeach
                </div>
            </div>
        @endif

        {{-- Results Count --}}
        <div class="text-sm text-gray-600">
            {{ $blogsCount }} {{ Str::plural('result', $blogsCount) }} found
        </div>
    </div>

    {{-- Blogs Grid --}}
    <div class="row g-3 g-md-4 g-lg-40">
        @forelse ($filteredBlogs as $blog)
            <div class="col-lg-6 col-md-12 mod-flex mod-flex-wrap">
                <div class="mod-flex mod-flex-col card card--lg card--white article">
                    <div class="article-card-image">
                        <div class="mod-absolute mod-z-5 tags">
                            @foreach (array_map('trim', explode(',', $blog->tags)) as $tag)
                                <button
                                    wire:click="toggleTag('{{ $tag }}')"
                                    class="tag {{ in_array($tag, $selectedTags) ? 'tag--active' : '' }}"
                                >
                                    {{ $tag }}
                                </button>
                            @endforeach
                        </div>
                        <img class="mod-w-full mod-h-full mod-object-contain"
                             decoding="async" width="1024" height="530"
                             src="{{ asset('storage/' . $blog->banner_img) }}"
                             alt="{{ $blog->title }}" loading="lazy"
                             sizes="auto, (max-width: 1024px) 100vw, 1024px">
                    </div>
                    <div class="article-card-body mod-p-6">
                        <div class="post-meta mod-mb-3 mod-flex mod-items-center mod-flex-nowwrap mod-gap-4">
                            <a href="javascript:void(0)">{{ $blog->blog_type }}</a>
                            <span class="hr"></span>
                            <span class="mod-inline-flex mod-items-center mod-gap-2">
                                <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"></path>
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
    @if($filteredBlogs->hasPages())
        <div class="mt-8">
            {{ $filteredBlogs->links() }}
        </div>
    @endif
</div>