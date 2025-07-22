@extends('frontend._layouts.master')

@section('content')
    <main class="flex-grow-1">
        <section class="container py-40 py-lg-5 py-xxl-80">
            <h1 class="lead">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Tax Biz Legal Blogs</font>
                </font>
            </h1>

            {{-- Include the Livewire Filter Component --}}
            <div class="mt-3">
                @livewire('blog-filter')
            </div>
        </section>
    </main>
@endsection

   {{-- ($el.closest('body') || document.querySelector('body')).scrollIntoView() --}}
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
