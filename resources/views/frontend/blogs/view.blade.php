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
                        <img class="img-fluid rounded-5 lazyloaded entered loaded"
                            alt="{{ $blog->title }}"
                            src="{{ asset('storage/' . $blog->banner_img) }}"
                            data-src="{{ asset('storage/' . $blog->banner_img) }}">
                    </figure>

                    <div class="content mod-break-words">{!! clean_html_content($blog->content) !!}</div>
                </div>

                <div class="col-xl-4 col-xxl-4">
                        <h1 class="h2 mb-lg-3">
                            <font class="text-primary" style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Have a Question?</font>
                            </font>
                        </h1>
                        <p class="mb-4 mb-lg-3">Need assistance or have a question? Our expert team is here to help you. Feel free to reach out via phone, email, or by submitting the form below to get a callback.</p>
                        <form action="{{ route('front.contact.leads') }}" method="post" id="frm-adeptRegistrationForm-form"
                            class="loadable loadable-overlayed ajax" novalidate="">


                            <div class="form-floating required">
                                <input type="text" name="name" maxlength="128" placeholder=""
                                    class="form-control text" id="frm-enquiryForm-form-user-name" required
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
                                <input type="checkbox" name="_comply" class="form-check-input"
                                    id="frm-enquiryForm-form-_comply" required=""
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

            <a href="{{ route('front.blogs') }}" class="btn btn-link icon-hover-right mt-32 mt-lg-40">
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
