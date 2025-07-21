<section class="bg-blue-100 py-80">
    <div class="container">
        <div class="row mb-40 mb-lg-3">
            <div class="col-lg-8">
                <h3 class="lead mb-3">Related Articles</h3>
                <p class="text-lg mb-4">Discover expert tips and guides to simplify your living.
                </p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="{{ route('front.blogs') }}" class="btn btn-link icon-hover-right mod-text-none">
                    Explore More
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M16.175 13L10.575 18.6L12 20L20 12L12 4L10.575 5.4L16.175 11L4 11L4 13L16.175 13Z" />
                    </svg>
                </a>
            </div>
        </div>

        <div class="row g-3 g-md-4 g-lg-40">
            @foreach ($blogs as $blog)
            <div class="col-12 col-lg-4 mb-4">
                <div class="mod-flex mod-flex-col card card--lg card--white article">
                    <div class="article-card-image">
                        <div class="mod-absolute mod-z-5 tags">
                            @foreach (array_map('trim', explode(',', $blog->tags)) as $tag)
                            <a href="javascript:void(0)" class="tag">{{ $tag }}</a>
                            @endforeach
                        </div>
                        <img class="mod-w-full mod-h-full mod-object-contain"
                             decoding="async" width="1024" height="530"
                            src="{{ asset('storage/' . $blog->banner_img) }}"
                            class="attachment-large size-large" alt="{{ $blog->title }}"
                            loading="lazy"
                            sizes="auto, (max-width: 1024px) 100vw, 1024px" data-clarity-loaded="1ukpk4r">
                    </div>
                    <div class="article-card-body mod-p-6">
                        <div class="post-meta mod-mb-3 mod-flex mod-items-center mod-flex-nowwrap mod-gap-4">
                            <a href="javascript:void(0)">{{ $blog->blog_type }}</a>
                            <span class="hr"></span>
                            <span class="mod-inline-flex mod-items-center mod-gap-2">
                                <span class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M256 0a256 256 0 1 1 0 512A256 256 0 1 1 256 0zM232 120l0 136c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2 280 120c0-13.3-10.7-24-24-24s-24 10.7-24 24z">
                                        </path>
                                    </svg>
                                </span>
                                <span>
                                    {{ $blog->estimated_reading_time }} min. reading</span>
                            </span>
                        </div>
                        <h3 class="article-heading mod-mb-12">
                            <a class="mod-text-none" href="{{ route('front.blogs.view', $blog->slug) }}">{{ $blog->title }}</a>
                        </h3>
                        <div class="post-author mod-flex mod-mb-0 mod-items-center mod-gap-3">
                            <div class="avatar">
                                <img alt="TBL"
                                    src="{{ asset('images/img/executive-avatar.png') }}"
                                    class="avatar avatar-30 photo" height="30" width="30">
                            </div>
                            <div class="name">
                                <p class="mod-mb-0 mod-leading-loose">
                                    Admin <br><span class="mod-opacity-75">Tax Biz Legal</span> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
