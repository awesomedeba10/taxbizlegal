@extends('frontend._layouts.master')

@section('content')
    <main class="flex-grow-1">
        <section class="container py-40 py-lg-5 py-xxl-80">
            <h1 class="lead mb-4 mb-lg-5">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Tax Biz Legal Blogs</font>
                </font>
            </h1>
            <div class="mt-32 mt-xxl-80">
                <div class="row g-3 g-md-4 g-lg-40">
                    @foreach ($blogs as $blog)
                        <div class="col-6">
                            <div class="mod-flex mod-flex-col card card--lg card--white article">
                                <div class="article-card-image">
                                    <div class="mod-absolute mod-z-5 tags">
                                        @foreach (array_map('trim', explode(',', $blog->tags)) as $tag)
                                            <a href="javascript:void(0)" class="tag">{{ $tag }}</a>
                                        @endforeach
                                    </div>
                                    <img class="mod-w-full mod-h-full mod-object-contain" decoding="async" width="1024"
                                        height="530" src="{{ asset('storage/' . $blog->banner_img) }}"
                                        class="attachment-large size-large" alt="{{ $blog->title }}" loading="lazy"
                                        sizes="auto, (max-width: 1024px) 100vw, 1024px" data-clarity-loaded="1ukpk4r">
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
                                            <span>
                                                {{ $blog->estimated_reading_time }} min. reading</span>
                                        </span>
                                        <span class="mod-text-grey-500">Published On &nbsp;&nbsp;
                                            <span class="mod-text-black">{{ $blog->created_at->format('d M. Y') }}</span>
                                        </span>
                                    </div>
                                    <h3 class="article-heading mod-mb-4">
                                        <a class="mod-text-none"
                                            href="{{ route('front.blogs.view', $blog->slug) }}">{{ $blog->title }}</a>
                                    </h3>
                                    <p>{{ $blog->excerpt }}</p>
                                    <div class="post-author mod-flex mod-mb-0 mod-items-center mod-gap-3">
                                        <div class="avatar">
                                            <img alt="TBL" src="https://avatar.iran.liara.run/public/24"
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

            {{-- <nav class="mt-32 mt-lg-40 mt-xxl-80">
                <ul class="list-unstyled d-flex flex-wrap gap-2 align-items-center justify-content-center m-0 p-0">
                    <li class="me-2 me-md-3">

                        <span class="btn btn-rounded icon-hover-left disabled">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path fill="#001C35" fill-rule="evenodd"
                                    d="M15.7071 21.7071C15.3166 22.0976 14.6834 22.0976 14.2929 21.7071L5.29289 12.7071C4.90237 12.3166 4.90237 11.6834 5.29289 11.2929L14.2929 2.29289C14.6834 1.90237 15.3166 1.90237 15.7071 2.29289C16.0976 2.68342 16.0976 3.31658 15.7071 3.70711L7.41421 12L15.7071 20.2929C16.0976 20.6834 16.0976 21.3166 15.7071 21.7071Z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </span>

                    </li>

                    <li>
                        <a href="/blog" class="btn btn-roundedBlank active" aria-label="Go to page 1 of 2">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    1
                                </font>
                            </font>
                        </a>
                    </li>
                    <li>
                        <a href="/blog/strana/2" class="btn btn-roundedBlank" aria-label="Go to page 2 of 2">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    2
                                </font>
                            </font>
                        </a>
                    </li>

                    <li class="ms-2 ms-md-3">
                        <a href="/blog/strana/2" class="btn btn-rounded icon-hover-right" aria-label="Previous page">

                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path fill="#001C35" fill-rule="evenodd"
                                    d="M8.29289 2.29289C8.68342 1.90237 9.31658 1.90237 9.70711 2.29289L18.7071 11.2929C19.0976 11.6834 19.0976 12.3166 18.7071 12.7071L9.70711 21.7071C9.31658 22.0976 8.68342 22.0976 8.29289 21.7071C7.90237 21.3166 7.90237 20.6834 8.29289 20.2929L16.5858 12L8.29289 3.70711C7.90237 3.31658 7.90237 2.68342 8.29289 2.29289Z"
                                    clip-rule="evenodd"></path>
                            </svg>

                        </a>
                    </li>
                </ul>
            </nav> --}}
        </section>
    </main>
@endsection
