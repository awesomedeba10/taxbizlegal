@extends('frontend._layouts.master')

@section('content')
    <main class="flex-grow-1">
        <div class="container py-40 py-lg-5 py-xxl-80">

            <article class="row justify-content-center">
                <div class="col-xl-8 col-xxl-8">
                    <h1 class="lead mb-3 mb-lg-40">{{ $blog->title }}</h1>

                    <div class="d-flex flex-wrap align-items-center gap-3 icon-size-20 mb-4 mb-lg-40">
                        <time datetime="$post->toCreated()->format('Y-m-d')"
                            class="d-inline-flex align-items-center gap-1 me-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M3 4C3 3.44772 3.44772 3 4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4ZM5 5V19H19V5H5Z"
                                    clip-rule="evenodd"></path>
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M7 2C7.55228 2 8 2.44772 8 3V4C8 4.55228 7.55228 5 7 5 6.44772 5 6 4.55228 6 4V3C6 2.44772 6.44772 2 7 2ZM17 2C17.5523 2 18 2.44772 18 3V4C18 4.55228 17.5523 5 17 5 16.4477 5 16 4.55228 16 4V3C16 2.44772 16.4477 2 17 2ZM3 8C3 7.44772 3.44772 7 4 7H20C20.5523 7 21 7.44772 21 8 21 8.55228 20.5523 9 20 9H4C3.44772 9 3 8.55228 3 8Z"
                                    clip-rule="evenodd"></path>
                                <path fill="currentColor"
                                    d="M7 15H9V17H7V15ZM7 11H9V13H7V11ZM11 11H13V13H11V11ZM11 15H13V17H11V15ZM15 11H17V13H15V11ZM15 15H17V17H15V15Z">
                                </path>
                            </svg>
                            {{ $blog->created_at->format('d. m. Y') }}
                        </time>
                        <span class="d-inline-flex align-items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 20 21">
                                <path fill="currentColor"
                                    d="M12.7917 14.0417L13.8542 12.9792L10.75 9.875V5.5H9.25V10.5L12.7917 14.0417ZM10 18.5C8.89756 18.5 7.86153 18.2917 6.89192 17.875C5.92231 17.4583 5.07292 16.8854 4.34375 16.1562C3.61458 15.4271 3.04167 14.5767 2.625 13.605C2.20833 12.6334 2 11.5952 2 10.4905C2 9.38571 2.20833 8.34722 2.625 7.375C3.04167 6.40278 3.61458 5.55556 4.34375 4.83333C5.07292 4.11111 5.92332 3.54167 6.89496 3.125C7.86661 2.70833 8.90481 2.5 10.0095 2.5C11.1143 2.5 12.1528 2.71 13.1251 3.13C14.0974 3.55 14.9432 4.12 15.6625 4.84C16.3817 5.56 16.9511 6.40667 17.3707 7.38C17.7902 8.35333 18 9.39333 18 10.5C18 11.6024 17.7917 12.6385 17.375 13.6081C16.9583 14.5777 16.3889 15.4271 15.6667 16.1562C14.9444 16.8854 14.0963 17.4583 13.1223 17.875C12.1482 18.2917 11.1075 18.5 10 18.5ZM10.0099 17C11.8082 17 13.3395 16.3646 14.6037 15.0938C15.8679 13.8229 16.5 12.2884 16.5 10.4901C16.5 8.69177 15.8679 7.16052 14.6037 5.89631C13.3395 4.6321 11.8082 4 10.0099 4C8.21165 4 6.67708 4.6321 5.40625 5.89631C4.13542 7.16052 3.5 8.69177 3.5 10.4901C3.5 12.2884 4.13542 13.8229 5.40625 15.0938C6.67708 16.3646 8.21165 17 10.0099 17Z">
                                </path>
                            </svg>
                            {{ $blog->estimated_reading_time }} minutes read
                        </span>

                        <div class="d-flex flex-wrap align-items-center gap-3 ms-sm-auto">
                            <span class="badge">
                                {{ $blog->blog_type }}
                            </span>
                        </div>
                    </div>

                    <figure class="mb-lg-40 ratio ratio-16x9">
                        <img class="img-fluid rounded-5 lazyloaded entered loaded" alt="{{ $blog->title }}"
                            src="{{ asset('storage/' . $blog->banner_img) }}"
                            data-src="{{ asset('storage/' . $blog->banner_img) }}">
                    </figure>

                    <div class="content mod-break-words">{!! clean_html_content($blog->content) !!}</div>
                </div>

                <div class="blog-sticky-section col-xl-4 col-xxl-4 lg:mod-pl-10 xl:mod-pl-10">
                    <h1 class="h2 mb-lg-3">
                        <font class="text-primary" style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Have a Question?</font>
                        </font>
                    </h1>
                    {{-- <p class="mb-4 mb-lg-3">Need assistance or have a question? Our expert team is here to help you. Feel
                        free to reach out via phone, email, or by submitting the form below to get a callback.</p> --}}
                    <form action="{{ route('front.contact.leads') }}" method="post" id="frm-adeptRegistrationForm-form"
                        class="loadable loadable-overlayed ajax" novalidate="">


                        <div class="form-floating required">
                            <input type="text" name="name" maxlength="128" placeholder="" class="form-control text"
                                id="frm-enquiryForm-form-user-name" required
                                data-nette-rules='[{"op":":filled","msg":"Please type your Full Name"}]'>
                            <label for="frm-enquiryForm-form-user-name" class="required">
                                Name
                            </label>
                        </div>

                        <div class="form-floating required">
                            <input type="tel" name="phone" pattern="^[+\(\) 0-9]+$" placeholder=" "
                                class="form-control" id="frm-enquiryForm-form-user-phone" required=""
                                data-nette-rules="[
                                        {&quot;op&quot;:&quot;:filled&quot;, &quot;msg&quot;:&quot;Please share your contact number.&quot;},
                                        {&quot;op&quot;:&quot;:pattern&quot;, &quot;msg&quot;:&quot;The mobile number may contain only digits, spaces, and the + symbol.&quot;, &quot;arg&quot;:&quot;^[+\\(\\) 0-9]+$&quot;}
                                    ]">

                            <label for="frm-enquiryForm-form-user-phone" class="required">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Mobile number</font>
                                </font>
                            </label>
                        </div>

                        <div class="form-floating required">
                            <input type="email" name="email" placeholder=" " class="form-control text"
                                id="frm-enquiryForm-form-user-mail" required=""
                                data-nette-rules="[
                                        {&quot;op&quot;:&quot;:filled&quot;, &quot;msg&quot;:&quot;Please share your email.&quot;},
                                        {&quot;op&quot;:&quot;:email&quot;, &quot;msg&quot;:&quot;The email address formnat is not valid.&quot;}
                                    ]">
                            <label for="frm-enquiryForm-form-user-mail" class="required">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">E-mail</font>
                                </font>
                            </label>
                        </div>

                        <div class="form-floating">
                            <textarea name="message" rows="2" data-textarea="" maxlength="512" placeholder=" " class="form-control"
                                id="frm-enquiryForm-form-message"></textarea>

                            <label for="frm-enquiryForm-form-message">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Write your message here</font>
                                </font>
                            </label>
                        </div>

                        <div class="form-check required mt-4 mod-items-start">
                            <input type="checkbox" name="_comply" class="form-check-input" id="frm-enquiryForm-form-_comply"
                                required=""
                                data-nette-rules="[
                                    {&quot;op&quot;:&quot;:filled&quot;,
                                    &quot;msg&quot;:&quot;Please agree to T&C to continue.&quot;}
                            ]">

                            <label class="form-check-label required" for="frm-adeptRegistrationForm-form-_comply">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">By submitting the form, you agree to allow
                                        TaxBizLegal representative to contact you for service-related assistance and
                                        acknowledge that you accept our</font>
                                </font><a class="text-blue mod-font-medium" href="{{ route('front.terms') }}"
                                    target="_blank" rel="noopener norefererrer">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;"> Terms & Conditions
                                        </font>
                                    </font>
                                </a>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;"> and </font>
                                </font><a class="text-blue mod-font-medium" href="{{ route('front.privacy') }}"
                                    target="_blank" rel="noopener noreferrer">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">the Privacy Policy.</font>
                                    </font>
                                </a>
                            </label>
                        </div>

                        <div class="form-submit">


                            <button type="submit" name="_submit"
                                class="icon-hover-right btn btn-sm btn-primary loadable-disabled">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Send Your Inquiry</font>
                                </font><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="none" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M16.175 13L10.575 18.6L12 20L20 12L12 4L10.575 5.4L16.175 11L4 11L4 13L16.175 13Z">
                                    </path>
                                </svg>
                            </button>
                        </div>

                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                    </form>
                </div>
            </article>

            <div class="row mod-mt-10">

                <p class="text-start mod-mb-2"><strong>Share this Story</strong></p>

                <div class="mod-flex col-md-12 mod-gap-3 sm:mod-gap-2">
                    <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($blog->title) }}"
                        target="_blank" rel="external noopener nofollow" class="share-btn" title="Share on X (Twitter)">
                        <svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision"
                            text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd"
                            clip-rule="evenodd" viewBox="0 0 512 509.64">
                            <rect width="512" height="509.64" rx="115.61" ry="115.61" />
                            <path fill="#fff" fill-rule="nonzero"
                                d="M323.74 148.35h36.12l-78.91 90.2 92.83 122.73h-72.69l-56.93-74.43-65.15 74.43h-36.14l84.4-96.47-89.05-116.46h74.53l51.46 68.04 59.53-68.04zm-12.68 191.31h20.02l-129.2-170.82H180.4l130.66 170.82z" />
                        </svg>
                    </a>

                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}"
                        target="_blank" rel="external noopener nofollow" class="share-btn"
                        title="Share on Meta (Facebook)">
                        <svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision"
                            text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd"
                            clip-rule="evenodd" viewBox="0 0 512 509.64" fill="#0a52c7">
                            <path
                                d="M115.613 0h280.774C459.974 0 512 52.026 512 115.612v278.415c0 63.588-52.026 115.613-115.613 115.613H287.015V332.805h69.253l14.365-78.229h-83.618v-27.667c0-41.341 16.218-57.241 58.194-57.241 13.04 0 23.533.317 29.576.953V99.706c-11.448-3.18-39.434-6.361-55.651-6.361-85.545 0-124.977 40.388-124.977 127.522v33.709h-52.79v78.229h52.79V509.64h-78.544C52.026 509.64 0 457.615 0 394.027V115.612C0 52.026 52.026 0 115.613 0z" />
                        </svg>
                    </a>

                    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ urlencode(url()->current()) }}&title={{ $blog->title }}"
                        target="_blank" rel="external noopener nofollow" class="share-btn" title="Share on LinkedIn">
                        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 122.88 122.31" fill="2275c8">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: #0a66c2;
                                    }

                                    .cls-1,
                                    .cls-2 {
                                        fill-rule: evenodd;
                                    }

                                    .cls-2 {
                                        fill: #fff;
                                    }
                                </style>
                            </defs>
                            <title>linkedin-app</title>
                            <path class="cls-1"
                                d="M27.75,0H95.13a27.83,27.83,0,0,1,27.75,27.75V94.57a27.83,27.83,0,0,1-27.75,27.74H27.75A27.83,27.83,0,0,1,0,94.57V27.75A27.83,27.83,0,0,1,27.75,0Z" />
                            <path class="cls-2"
                                d="M49.19,47.41H64.72v8h.22c2.17-3.88,7.45-8,15.34-8,16.39,0,19.42,10.2,19.42,23.47V98.94H83.51V74c0-5.71-.12-13.06-8.42-13.06s-9.72,6.21-9.72,12.65v25.4H49.19V47.41ZM40,31.79a8.42,8.42,0,1,1-8.42-8.42A8.43,8.43,0,0,1,40,31.79ZM23.18,47.41H40V98.94H23.18V47.41Z" />
                        </svg>
                    </a>

                    <a href="https://api.whatsapp.com/send?text={{ urlencode($blog->title) . '%0D%0A' . url()->current() }}"
                        target="_blank" rel="external noopener nofollow" class="share-btn whatsapp" title="Share via WhatsApp">
                        <svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision"
                            text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd"
                            clip-rule="evenodd" viewBox="0 0 510 512.459" height="28" width="28">
                            <path fill="#f1f1f1"
                                d="M435.689 74.468C387.754 26.471 324 .025 256.071 0 116.098 0 2.18 113.906 2.131 253.916c-.024 44.758 11.677 88.445 33.898 126.946L0 512.459l134.617-35.311c37.087 20.238 78.85 30.891 121.345 30.903h.109c139.949 0 253.88-113.917 253.928-253.928.024-67.855-26.361-131.645-74.31-179.643v-.012zm-179.618 390.7h-.085c-37.868-.011-75.016-10.192-107.428-29.417l-7.707-4.577-79.886 20.953 21.32-77.889-5.017-7.987c-21.125-33.605-32.29-72.447-32.266-112.322.049-116.366 94.729-211.046 211.155-211.046 56.373.025 109.364 22.003 149.214 61.903 39.853 39.888 61.781 92.927 61.757 149.313-.05 116.377-94.728 211.058-211.057 211.058v.011zm115.768-158.067c-6.344-3.178-37.537-18.52-43.358-20.639-5.82-2.119-10.044-3.177-14.27 3.178-4.225 6.357-16.388 20.651-20.09 24.875-3.702 4.238-7.403 4.762-13.747 1.583-6.343-3.178-26.787-9.874-51.029-31.487-18.86-16.827-31.597-37.598-35.297-43.955-3.702-6.355-.39-9.789 2.775-12.943 2.849-2.848 6.344-7.414 9.522-11.116s4.225-6.355 6.343-10.581c2.12-4.238 1.06-7.937-.522-11.117-1.584-3.177-14.271-34.409-19.568-47.108-5.151-12.37-10.385-10.69-14.269-10.897-3.703-.183-7.927-.219-12.164-.219s-11.105 1.582-16.925 7.939c-5.82 6.354-22.209 21.709-22.209 52.927 0 31.22 22.733 61.405 25.911 65.642 3.177 4.237 44.745 68.318 108.389 95.812 15.135 6.538 26.957 10.446 36.175 13.368 15.196 4.834 29.027 4.153 39.96 2.52 12.19-1.825 37.54-15.353 42.824-30.172 5.283-14.818 5.283-27.529 3.701-30.172-1.582-2.641-5.819-4.237-12.163-7.414l.011-.024z" />
                        </svg>
                    </a>

                    <a href=mailto:?subject={{ rawurlencode($blog->title) }}&body={{ rawurlencode(url()->current()) }}"
                        target="_blank" rel="external noopener nofollow" class="share-btn email"
                        title="Share via Email">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="white">
                            <path
                                d="M0 3v18h24v-18h-24zm6.623 7.929l-4.623 5.712v-9.458l4.623 3.746zm-4.141-5.929h19.035l-9.517 7.713-9.518-7.713zm5.694 7.188l3.824 3.099 3.83-3.104 5.612 6.817h-18.779l5.513-6.812zm9.208-1.264l4.616-3.741v9.348l-4.616-5.607z" />
                        </svg>
                    </a>

                    <a href="javascript:void(0)" class="share-btn email copy-text" title="Copy Link"
                        data-copy-element="{{ url()->current() }}">
                        <?xml version="1.0" encoding="utf-8"?><svg version="1.1" id="Layer_1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 111.07 122.88" width="24" height="24"
                            style="enable-background:new 0 0 111.07 122.88" xml:space="preserve" fill="white">
                            <style type="text/css">
                                <![CDATA[
                                .st0 {
                                    fill-rule: evenodd;
                                    clip-rule: evenodd;
                                }
                                ]]>
                            </style>
                            <g>
                                <path class="st0"
                                    d="M97.67,20.81L97.67,20.81l0.01,0.02c3.7,0.01,7.04,1.51,9.46,3.93c2.4,2.41,3.9,5.74,3.9,9.42h0.02v0.02v75.28 v0.01h-0.02c-0.01,3.68-1.51,7.03-3.93,9.46c-2.41,2.4-5.74,3.9-9.42,3.9v0.02h-0.02H38.48h-0.01v-0.02 c-3.69-0.01-7.04-1.5-9.46-3.93c-2.4-2.41-3.9-5.74-3.91-9.42H25.1c0-25.96,0-49.34,0-75.3v-0.01h0.02 c0.01-3.69,1.52-7.04,3.94-9.46c2.41-2.4,5.73-3.9,9.42-3.91v-0.02h0.02C58.22,20.81,77.95,20.81,97.67,20.81L97.67,20.81z M0.02,75.38L0,13.39v-0.01h0.02c0.01-3.69,1.52-7.04,3.93-9.46c2.41-2.4,5.74-3.9,9.42-3.91V0h0.02h59.19 c7.69,0,8.9,9.96,0.01,10.16H13.4h-0.02v-0.02c-0.88,0-1.68,0.37-2.27,0.97c-0.59,0.58-0.96,1.4-0.96,2.27h0.02v0.01v3.17 c0,19.61,0,39.21,0,58.81C10.17,83.63,0.02,84.09,0.02,75.38L0.02,75.38z M100.91,109.49V34.2v-0.02h0.02 c0-0.87-0.37-1.68-0.97-2.27c-0.59-0.58-1.4-0.96-2.28-0.96v0.02h-0.01H38.48h-0.02v-0.02c-0.88,0-1.68,0.38-2.27,0.97 c-0.59,0.58-0.96,1.4-0.96,2.27h0.02v0.01v75.28v0.02h-0.02c0,0.88,0.38,1.68,0.97,2.27c0.59,0.59,1.4,0.96,2.27,0.96v-0.02h0.01 h59.19h0.02v0.02c0.87,0,1.68-0.38,2.27-0.97c0.59-0.58,0.96-1.4,0.96-2.27L100.91,109.49L100.91,109.49L100.91,109.49 L100.91,109.49z" />
                            </g>
                        </svg>
                    </a>
                </div>

            </div>

            {{-- <div class="mt-40 mt-xxl-80">
                <h2 class="h3 mb-4 mb-lg-40">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">You might be interested</font>
                    </font>
                </h2>

                <div class="row g-3 g-md-4 g-lg-40">
                    <div class="col-6">
                        <article class="card card--lg card--white h-100">
                            <figure class="card-figure">
                                <img class="card-img-top lazyloaded"
                                    alt="Weaknesses in an interview? An unexpected opportunity to shine."
                                    src="/upload/blog/50/priprava-na-pracovni-pohovor-klicove-kroky-k-uspechu.10x6.fit.q10.jpg"
                                    width="600" height="400"
                                    data-src="/upload/blog/50/priprava-na-pracovni-pohovor-klicove-kroky-k-uspechu.620x400.fit.q85.jpg">
                            </figure>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h2 class="card-title mb-3 mb-sm-4">
                                    <a href="/blog/slabe-stranky-u-pohovoru-necekana-prilezitost-jak-zazarit"
                                        class="stretched-link">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                Weaknesses in an interview? An unexpected opportunity to shine.
                                            </font>
                                        </font>
                                    </a>
                                </h2>
                                <div
                                    class="card-text d-flex align-items-center gap-40 text-sm text-secondary icon-size-20 pt-1 mt-auto mt-md-0">
                                    <time datetime="$post->toCreated()->format('Y-m-d')"
                                        class="d-inline-flex align-items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" viewBox="0 0 24 24">
                                            <path fill="currentColor" fill-rule="evenodd"
                                                d="M3 4C3 3.44772 3.44772 3 4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4ZM5 5V19H19V5H5Z"
                                                clip-rule="evenodd"></path>
                                            <path fill="currentColor" fill-rule="evenodd"
                                                d="M7 2C7.55228 2 8 2.44772 8 3V4C8 4.55228 7.55228 5 7 5 6.44772 5 6 4.55228 6 4V3C6 2.44772 6.44772 2 7 2ZM17 2C17.5523 2 18 2.44772 18 3V4C18 4.55228 17.5523 5 17 5 16.4477 5 16 4.55228 16 4V3C16 2.44772 16.4477 2 17 2ZM3 8C3 7.44772 3.44772 7 4 7H20C20.5523 7 21 7.44772 21 8 21 8.55228 20.5523 9 20 9H4C3.44772 9 3 8.55228 3 8Z"
                                                clip-rule="evenodd"></path>
                                            <path fill="currentColor"
                                                d="M7 15H9V17H7V15ZM7 11H9V13H7V11ZM11 11H13V13H11V11ZM11 15H13V17H11V15ZM15 11H17V13H15V11ZM15 15H17V17H15V15Z">
                                            </path>
                                        </svg>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                14. 06. 2025
                                            </font>
                                        </font>
                                    </time>
                                    <span class="d-none d-md-inline-flex align-items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" viewBox="0 0 20 21">
                                            <path fill="currentColor"
                                                d="M12.7917 14.0417L13.8542 12.9792L10.75 9.875V5.5H9.25V10.5L12.7917 14.0417ZM10 18.5C8.89756 18.5 7.86153 18.2917 6.89192 17.875C5.92231 17.4583 5.07292 16.8854 4.34375 16.1562C3.61458 15.4271 3.04167 14.5767 2.625 13.605C2.20833 12.6334 2 11.5952 2 10.4905C2 9.38571 2.20833 8.34722 2.625 7.375C3.04167 6.40278 3.61458 5.55556 4.34375 4.83333C5.07292 4.11111 5.92332 3.54167 6.89496 3.125C7.86661 2.70833 8.90481 2.5 10.0095 2.5C11.1143 2.5 12.1528 2.71 13.1251 3.13C14.0974 3.55 14.9432 4.12 15.6625 4.84C16.3817 5.56 16.9511 6.40667 17.3707 7.38C17.7902 8.35333 18 9.39333 18 10.5C18 11.6024 17.7917 12.6385 17.375 13.6081C16.9583 14.5777 16.3889 15.4271 15.6667 16.1562C14.9444 16.8854 14.0963 17.4583 13.1223 17.875C12.1482 18.2917 11.1075 18.5 10 18.5ZM10.0099 17C11.8082 17 13.3395 16.3646 14.6037 15.0938C15.8679 13.8229 16.5 12.2884 16.5 10.4901C16.5 8.69177 15.8679 7.16052 14.6037 5.89631C13.3395 4.6321 11.8082 4 10.0099 4C8.21165 4 6.67708 4.6321 5.40625 5.89631C4.13542 7.16052 3.5 8.69177 3.5 10.4901C3.5 12.2884 4.13542 13.8229 5.40625 15.0938C6.67708 16.3646 8.21165 17 10.0099 17Z">
                                            </path>
                                        </svg>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                3 minutes read
                                            </font>
                                        </font>
                                    </span>
                                </div>
                                <div
                                    class="pt-40 pb-1 d-none d-md-inline-flex flex-wrap gap-3 position-relative z-1 mt-auto">
                                    <span class="badge badge-xl">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Job interview</font>
                                        </font>
                                    </span>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-6">
                        <article class="card card--lg card--white h-100">
                            <figure class="card-figure">
                                <img class="card-img-top lazyloaded"
                                    alt="The first minutes of the interview: make an impression, not a mistake"
                                    src="/upload/blog/e4/prvni_minuty.2.10x6.fit.q10.jpg" width="600" height="400"
                                    data-src="/upload/blog/e4/prvni_minuty.2.620x400.fit.q85.jpg">
                            </figure>
                            <div class="card-body d-flex flex-column flex-grow-1">
                                <h2 class="card-title mb-3 mb-sm-4">
                                    <a href="/blog/prvni-minuty-pohovoru-udelejte-dojem-ne-chybu" class="stretched-link">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                The first minutes of the interview: make an impression, not a mistake
                                            </font>
                                        </font>
                                    </a>
                                </h2>
                                <div
                                    class="card-text d-flex align-items-center gap-40 text-sm text-secondary icon-size-20 pt-1 mt-auto mt-md-0">
                                    <time datetime="$post->toCreated()->format('Y-m-d')"
                                        class="d-inline-flex align-items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" viewBox="0 0 24 24">
                                            <path fill="currentColor" fill-rule="evenodd"
                                                d="M3 4C3 3.44772 3.44772 3 4 3H20C20.5523 3 21 3.44772 21 4V20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V4ZM5 5V19H19V5H5Z"
                                                clip-rule="evenodd"></path>
                                            <path fill="currentColor" fill-rule="evenodd"
                                                d="M7 2C7.55228 2 8 2.44772 8 3V4C8 4.55228 7.55228 5 7 5 6.44772 5 6 4.55228 6 4V3C6 2.44772 6.44772 2 7 2ZM17 2C17.5523 2 18 2.44772 18 3V4C18 4.55228 17.5523 5 17 5 16.4477 5 16 4.55228 16 4V3C16 2.44772 16.4477 2 17 2ZM3 8C3 7.44772 3.44772 7 4 7H20C20.5523 7 21 7.44772 21 8 21 8.55228 20.5523 9 20 9H4C3.44772 9 3 8.55228 3 8Z"
                                                clip-rule="evenodd"></path>
                                            <path fill="currentColor"
                                                d="M7 15H9V17H7V15ZM7 11H9V13H7V11ZM11 11H13V13H11V11ZM11 15H13V17H11V15ZM15 11H17V13H15V11ZM15 15H17V17H15V15Z">
                                            </path>
                                        </svg>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                15. 04. 2025
                                            </font>
                                        </font>
                                    </time>
                                    <span class="d-none d-md-inline-flex align-items-center gap-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            fill="none" viewBox="0 0 20 21">
                                            <path fill="currentColor"
                                                d="M12.7917 14.0417L13.8542 12.9792L10.75 9.875V5.5H9.25V10.5L12.7917 14.0417ZM10 18.5C8.89756 18.5 7.86153 18.2917 6.89192 17.875C5.92231 17.4583 5.07292 16.8854 4.34375 16.1562C3.61458 15.4271 3.04167 14.5767 2.625 13.605C2.20833 12.6334 2 11.5952 2 10.4905C2 9.38571 2.20833 8.34722 2.625 7.375C3.04167 6.40278 3.61458 5.55556 4.34375 4.83333C5.07292 4.11111 5.92332 3.54167 6.89496 3.125C7.86661 2.70833 8.90481 2.5 10.0095 2.5C11.1143 2.5 12.1528 2.71 13.1251 3.13C14.0974 3.55 14.9432 4.12 15.6625 4.84C16.3817 5.56 16.9511 6.40667 17.3707 7.38C17.7902 8.35333 18 9.39333 18 10.5C18 11.6024 17.7917 12.6385 17.375 13.6081C16.9583 14.5777 16.3889 15.4271 15.6667 16.1562C14.9444 16.8854 14.0963 17.4583 13.1223 17.875C12.1482 18.2917 11.1075 18.5 10 18.5ZM10.0099 17C11.8082 17 13.3395 16.3646 14.6037 15.0938C15.8679 13.8229 16.5 12.2884 16.5 10.4901C16.5 8.69177 15.8679 7.16052 14.6037 5.89631C13.3395 4.6321 11.8082 4 10.0099 4C8.21165 4 6.67708 4.6321 5.40625 5.89631C4.13542 7.16052 3.5 8.69177 3.5 10.4901C3.5 12.2884 4.13542 13.8229 5.40625 15.0938C6.67708 16.3646 8.21165 17 10.0099 17Z">
                                            </path>
                                        </svg>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">
                                                3 minutes read
                                            </font>
                                        </font>
                                    </span>
                                </div>
                                <div
                                    class="pt-40 pb-1 d-none d-md-inline-flex flex-wrap gap-3 position-relative z-1 mt-auto">
                                    <span class="badge badge-xl">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Job interview</font>
                                        </font>
                                    </span>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div> --}}

            <a href="{{ route('front.blogs') }}" class="btn btn-link icon-hover-right mt-32 mt-lg-40 mod-text-none">
                <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">
                        All posts
                    </font>
                </font><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                    viewBox="0 0 24 24">
                    <path fill="currentColor" fill-rule="evenodd"
                        d="M8.29289 2.29289C8.68342 1.90237 9.31658 1.90237 9.70711 2.29289L18.7071 11.2929C19.0976 11.6834 19.0976 12.3166 18.7071 12.7071L9.70711 21.7071C9.31658 22.0976 8.68342 22.0976 8.29289 21.7071C7.90237 21.3166 7.90237 20.6834 8.29289 20.2929L16.5858 12L8.29289 3.70711C7.90237 3.31658 7.90237 2.68342 8.29289 2.29289Z"
                        clip-rule="evenodd"></path>
                </svg>
            </a>

        </div>
    </main>
@endsection
