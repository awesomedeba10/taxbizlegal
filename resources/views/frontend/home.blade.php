@extends('frontend._layouts.master')

@section('content')
    <main class="flex-grow-1">

        <section class="slideshow bg-blue-100">
            <div class="splide" id="homeSlideshow" aria-label="Představení aplikace">
                <div class="splide__track">
                    <div class="splide__list">

                        <div class="splide__slide slideshow-slide">
                            <div class="slideshow-content">
                                <p class="h5 text-primary mb-0">Get Company Registration & Compliance Solutions Under One
                                    Roof!</p>
                                <h1 class="h1 mb-0" data-slideshow-title>Top-Rated Business Services in Just a Few Taps</h1>

                                <div class="slideshow-fade">
                                    <div class="service-grid">
                                        <div class="service-item">
                                            <a
                                                href="{{ route('front.services', ['slug' => Str::slug('Private Limited Company', '-')]) }}">
                                                <img src="{{ asset('images/svg/service-company.svg') }}">Company
                                                Registration
                                            </a>
                                        </div>
                                        <div class="service-item">
                                            <a
                                                href="{{ route('front.services', ['slug' => Str::slug('GST Registration', '-')]) }}">
                                                <img src="{{ asset('images/svg/service-gst.svg') }}">
                                                GST & Tax Filings</a>
                                        </div>
                                        <div class="service-item">
                                            <a
                                                href="{{ route('front.services', ['slug' => Str::slug('Trademark Registration', '-')]) }}">
                                                <img src="{{ asset('images/svg/service-trademark.svg') }}">
                                                Trademark Registration
                                            </a>
                                        </div>
                                        <div class="service-item">
                                            <a
                                                href="{{ route('front.services', ['slug' => Str::slug('ROC Search Reports', '-')]) }}">
                                                <img src="{{ asset('images/svg/service-legal.svg') }}">
                                                Legal & Compliance
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="slideshow-media slideshow-media--custom">
                                <figure class="slideshow-figure slideshow-figure--custom">
                                    <img alt="Business Solutions Made Easy" class="slideshow-img slideshow-img--custom"
                                        src="{{ asset('images/img/home/banner-home-first.svg') }}" width="1184"
                                        height="837">
                                </figure>
                            </div>
                        </div>
                        <div class="splide__slide slideshow-slide">
                            <div class="slideshow-content">
                                <p class="h5 text-primary mb-0">Start Your Business Today!</p>
                                <h1 class="h1 mb-0" data-slideshow-title>Start Your Private Limited Company Hassle-Free</h1>
                                <p class="mb-0 slideshow-fade">Register your company with ease and compliance. Get expert
                                    guidance, end-to-end documentation, and fast approvals.</p>
                                <div class="slideshow-fade">
                                    <a href="{{ route('front.services', ['slug' => Str::slug('Private Limited Company', '-')]) }}"
                                        class="d-block btn btn-lg btn-primary">Register
                                        Now</a>
                                </div>
                            </div>
                            <div class="slideshow-media slideshow-media--custom">
                                <figure class="slideshow-figure slideshow-figure--custom">
                                    <img alt="Kdo řekl, že novou práci musíte hledat?"
                                        class="slideshow-img slideshow-img--custom"
                                        src="{{ asset('images/img/home/home-banner-company.webp') }}" width="1184"
                                        height="837">
                                </figure>
                            </div>
                        </div>
                        <div class="splide__slide slideshow-slide">
                            <div class="slideshow-content">
                                <p class="h5 text-primary mb-0">Get Your Tax Filed in Minutes!</p>
                                <h2 class="h1 mb-0" data-slideshow-title>File Your Income Tax Returns Accurately On Time
                                </h2>
                                <p class="mb-0 slideshow-fade">Avoid penalties and maximize tax savings with our
                                    expert-assisted ITR filing service.</p>
                                <div class="slideshow-fade">
                                    <a href="{{ route('front.services', ['slug' => 'income-tax-returns']) }}" class="d-block btn btn-lg btn-primary">File ITR Now</a>
                                </div>
                            </div>
                            <div class="slideshow-media slideshow-media--custom">
                                <figure class="slideshow-figure slideshow-figure--custom">
                                    <img alt="Kdo řekl, že novou práci musíte hledat?"
                                        class="slideshow-img slideshow-img--custom"
                                        src="{{ asset('images/img/home/home-banner-itr.webp') }}" width="1184"
                                        height="837">
                                </figure>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="splide__arrows">
                    <button type="button" class="btn btn-rounded icon-hover-left splide__arrow splide__arrow--prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path fill="#001C35" fill-rule="evenodd"
                                d="M15.7071 21.7071C15.3166 22.0976 14.6834 22.0976 14.2929 21.7071L5.29289 12.7071C4.90237 12.3166 4.90237 11.6834 5.29289 11.2929L14.2929 2.29289C14.6834 1.90237 15.3166 1.90237 15.7071 2.29289C16.0976 2.68342 16.0976 3.31658 15.7071 3.70711L7.41421 12L15.7071 20.2929C16.0976 20.6834 16.0976 21.3166 15.7071 21.7071Z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                    <button type="button" class="btn btn-rounded icon-hover-right splide__arrow splide__arrow--next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path fill="#001C35" fill-rule="evenodd"
                                d="M8.29289 2.29289C8.68342 1.90237 9.31658 1.90237 9.70711 2.29289L18.7071 11.2929C19.0976 11.6834 19.0976 12.3166 18.7071 12.7071L9.70711 21.7071C9.31658 22.0976 8.68342 22.0976 8.29289 21.7071C7.90237 21.3166 7.90237 20.6834 8.29289 20.2929L16.5858 12L8.29289 3.70711C7.90237 3.31658 7.90237 2.68342 8.29289 2.29289Z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </div>

            <p class="slideshow-typewriter h1 mb-0" hidden data-slideshow-writer></p>
        </section>

        <section class="position-relative z-2 pt-40 pt-md-0 mt-md-n40 text-center">
            <div class="container">
                <div class="row gy-3 gy-md-0 gx-lg-40">
                    <div class="col-md-4">

                        <div class="h-100 shadow-primary rounded-35 bg-white p-4 p-lg-32">
                            <p class="display-6 mod-font-semibold mb-2 text-primary">Recognized by MCA</p>
                            <p class="mb-0">Ensuring compliance with government regulations for your business needs</p>
                        </div>

                    </div>
                    <div class="col-md-4">

                        <div class="h-100 shadow-primary rounded-35 bg-white p-4 p-lg-32">
                            <p class="display-6 mod-font-semibold mb-2 text-primary"><span data-counter="100">1</span> %
                                Moneyback Guarantee</p>
                            <p class="mb-0">Zero-risk Moneyback Guaranteed with our hassle free Full-Refund policy
                                <a href="{{ route('front.refund') }}" class="mod-pl-3 mod-font-semibold moneyback-conditon" target="_blank">*Conditions
                                    Apply</a>
                            </p>
                        </div>

                    </div>
                    <div class="col-md-4">

                        <div class="h-100 shadow-primary rounded-35 bg-white p-4 p-lg-32">
                            <p class="display-6 mod-font-semibold mb-2 text-primary">Expert Guidance</p>
                            <p class="mb-0">Get Professional helps from our Trusted Experts for all your business needs
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        {{-- <section class="container my-80 top-services">
            <div class="mod-flex mod-flex-wrap mod-items-center mod-my-20">
                <div class="col-3 col-label"> <span class="label">Explore our Top Services
                    </span>
                </div>
                <div class="col-9 mod-flex mod-flex-grow mod-w-auto mod-justify-around md:mod-flex-wrap sm:mod-flex-wra md:mod-gap-4 sm:mod-gap-4"> 
                    <span class="mod-flex mod-justify-center mod-items-center"> 
                        <img width="124" height="49"
                            src="https://mo.work/wp-content/uploads/2024/10/ovo-energy-2.png"
                            class="attachment-full size-full" alt="" loading="lazy" decoding="async">
                    </span>
                    <span class="mod-flex mod-justify-center mod-items-center">
                            <img width="137" height="37"
                                src="https://mo.work/wp-content/uploads/2024/10/gocarcredit.png"
                                class="attachment-full size-full" alt="" loading="lazy" decoding="async"> 
                    </span> 
                    <span class="mod-flex mod-justify-center mod-items-center"> 
                            <img width="51" height="55"
                            src="https://mo.work/wp-content/uploads/2024/10/tottenham-1.png"
                            class="attachment-full size-full" alt="" loading="lazy" decoding="async"> 
                    </span>
                    <span class="mod-flex mod-justify-center mod-items-center"> 
                        <img width="51" height="55"
                        src="https://mo.work/wp-content/uploads/2024/10/tottenham-1.png"
                        class="attachment-full size-full" alt="" loading="lazy" decoding="async"> 
                    </span>
                    <span class="mod-flex mod-justify-center mod-items-center"> 
                        <img width="51" height="55"
                        src="https://mo.work/wp-content/uploads/2024/10/tottenham-1.png"
                        class="attachment-full size-full" alt="" loading="lazy" decoding="async"> 
                    </span>
                </div>
            </div>
        </section> --}}

        <section class="container mod-my-16 lg:mod-my-24 reveal-me">
            <article class="banner bg-blue-100 pb-40 px-4 p-lg-5 p-xxl-80">
                <div class="row gy-4 gx-lg-4 justify-content-center justify-content-lg-between align-items-center">
                    <div class="col-md-9 col-lg-8 d-flex flex-column gap-3 gap-lg-4">
                        <h2 class="display-6 mod-font-semibold mb-0">Why Do Customers Love Us?</h2>
                        <p class="text-lg mb-0">We provide hassle-free legal and financial solutions with expert
                            assistance, ensuring transparency and efficiency at every step.</p>
                        <div class="row gx-3 gx-lg-40 svg-scale scale-4 text-sm">
                            <div class="col-4">
                                <figure class="mb-12 text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" fill="none" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M12 22C10.6167 22 9.31667 21.7375 8.1 21.2125C6.88333 20.6875 5.825 19.975 4.925 19.075C4.025 18.175 3.3125 17.1167 2.7875 15.9C2.2625 14.6833 2 13.3833 2 12C2 10.6167 2.2625 9.31667 2.7875 8.1C3.3125 6.88333 4.025 5.825 4.925 4.925C5.825 4.025 6.88333 3.3125 8.1 2.7875C9.31667 2.2625 10.6167 2 12 2C13.3833 2 14.6833 2.2625 15.9 2.7875C17.1167 3.3125 18.175 4.025 19.075 4.925C19.975 5.825 20.6875 6.88333 21.2125 8.1C21.7375 9.31667 22 10.6167 22 12C22 13.3833 21.7375 14.6833 21.2125 15.9C20.6875 17.1167 19.975 18.175 19.075 19.075C18.175 19.975 17.1167 20.6875 15.9 21.2125C14.6833 21.7375 13.3833 22 12 22ZM12 20C12.9 20 13.7667 19.8542 14.6 19.5625C15.4333 19.2708 16.2 18.85 16.9 18.3L5.7 7.1C5.15 7.8 4.72917 8.56667 4.4375 9.4C4.14583 10.2333 4 11.1 4 12C4 14.2333 4.775 16.125 6.325 17.675C7.875 19.225 9.76667 20 12 20ZM18.3 16.9C18.85 16.2 19.2708 15.4333 19.5625 14.6C19.8542 13.7667 20 12.9 20 12C20 9.76667 19.225 7.875 17.675 6.325C16.125 4.775 14.2333 4 12 4C11.1 4 10.2333 4.14583 9.4 4.4375C8.56667 4.72917 7.8 5.15 7.1 5.7L18.3 16.9Z" />
                                    </svg></figure>
                                <h3 class="h6 mb-2">Affordable Professional Services</h3>
                                <p>Get expert legal and financial assistance at competitive prices, tailored to your needs.
                                </p>
                            </div>
                            <div class="col-4">
                                <figure class="mb-12 text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" fill="none" viewBox="0 0 20 21">
                                        <path fill="currentColor"
                                            d="M12.7917 14.0417L13.8542 12.9792L10.75 9.875V5.5H9.25V10.5L12.7917 14.0417ZM10 18.5C8.89756 18.5 7.86153 18.2917 6.89192 17.875C5.92231 17.4583 5.07292 16.8854 4.34375 16.1562C3.61458 15.4271 3.04167 14.5767 2.625 13.605C2.20833 12.6334 2 11.5952 2 10.4905C2 9.38571 2.20833 8.34722 2.625 7.375C3.04167 6.40278 3.61458 5.55556 4.34375 4.83333C5.07292 4.11111 5.92332 3.54167 6.89496 3.125C7.86661 2.70833 8.90481 2.5 10.0095 2.5C11.1143 2.5 12.1528 2.71 13.1251 3.13C14.0974 3.55 14.9432 4.12 15.6625 4.84C16.3817 5.56 16.9511 6.40667 17.3707 7.38C17.7902 8.35333 18 9.39333 18 10.5C18 11.6024 17.7917 12.6385 17.375 13.6081C16.9583 14.5777 16.3889 15.4271 15.6667 16.1562C14.9444 16.8854 14.0963 17.4583 13.1223 17.875C12.1482 18.2917 11.1075 18.5 10 18.5ZM10.0099 17C11.8082 17 13.3395 16.3646 14.6037 15.0938C15.8679 13.8229 16.5 12.2884 16.5 10.4901C16.5 8.69177 15.8679 7.16052 14.6037 5.89631C13.3395 4.6321 11.8082 4 10.0099 4C8.21165 4 6.67708 4.6321 5.40625 5.89631C4.13542 7.16052 3.5 8.69177 3.5 10.4901C3.5 12.2884 4.13542 13.8229 5.40625 15.0938C6.67708 16.3646 8.21165 17 10.0099 17Z" />
                                    </svg></figure>
                                <h3 class="h6 mb-2">Diverse Expert Network</h3>
                                <p>Consult top-tier lawyers, CA, and secretaries for seamless compliance and advisory</p>
                            </div>
                            <div class="col-4">
                                <figure class="mb-12 text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" fill="none" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M10.6 16.6L17.65 9.55L16.25 8.15L10.6 13.8L7.75 10.95L6.35 12.35L10.6 16.6ZM12 22C10.6167 22 9.31667 21.7375 8.1 21.2125C6.88333 20.6875 5.825 19.975 4.925 19.075C4.025 18.175 3.3125 17.1167 2.7875 15.9C2.2625 14.6833 2 13.3833 2 12C2 10.6167 2.2625 9.31667 2.7875 8.1C3.3125 6.88333 4.025 5.825 4.925 4.925C5.825 4.025 6.88333 3.3125 8.1 2.7875C9.31667 2.2625 10.6167 2 12 2C13.3833 2 14.6833 2.2625 15.9 2.7875C17.1167 3.3125 18.175 4.025 19.075 4.925C19.975 5.825 20.6875 6.88333 21.2125 8.1C21.7375 9.31667 22 10.6167 22 12C22 13.3833 21.7375 14.6833 21.2125 15.9C20.6875 17.1167 19.975 18.175 19.075 19.075C18.175 19.975 17.1167 20.6875 15.9 21.2125C14.6833 21.7375 13.3833 22 12 22ZM12 20C14.2333 20 16.125 19.225 17.675 17.675C19.225 16.125 20 14.2333 20 12C20 9.76667 19.225 7.875 17.675 6.325C16.125 4.775 14.2333 4 12 4C9.76667 4 7.875 4.775 6.325 6.325C4.775 7.875 4 9.76667 4 12C4 14.2333 4.775 16.125 6.325 17.675C7.875 19.225 9.76667 20 12 20Z" />
                                    </svg></figure>
                                <h3 class="h6 mb-2">Quick Customer Support</h3>
                                <p>We value your time—get responses to your queries within 24 hours* with dedicated support.
                                </p>
                            </div>
                        </div>
                        <div>
                            <a href="{{ route('front.contact') }}"
                                class="btn btn-primary icon-hover-right d-flex d-lg-inline-flex">
                                Talk to Expert Now
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M16.175 13L10.575 18.6L12 20L20 12L12 4L10.575 5.4L16.175 11L4 11L4 13L16.175 13Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-xl-4 order-first order-lg-last">
                        <figure class="ratio text-primary mx-auto my-20" style="--bs-aspect-ratio:100%;">
                            <img src="{{ asset('images/img/13184991_5138237.webp') }}">
                        </figure>
                    </div>
                </div>
            </article>
        </section>

        <section class="container mod-my-16 lg:mod-my-24">
            <div class="mod-mr-auto mod-ml-auto mod-w-full">
                <div class="mod-flex mod-items-center mod-flex-col mod-flex-nowwrap mod-justify-start">
                    <div
                        class="process mod-flex mod-items-center mod-flex-col mod-flex-nowwrap mod-justify-start mod-mr-auto mod-ml-auto mod-text-center">
                        <h1 class="mod-text-s-32 md:mod-text-s-20 sm:mod-text-s-20 text-blue">Simple. Fast. Hassle-Free
                        </h1>
                        <h2> Get Started with Us in Just <span class="text-blue">4 simple steps</span> curated Just for
                            <span class="text-blue">You</span>
                        </h2>
                        <div class="timeline-content">
                            <div class="timeline-progress">
                                <div class="timeline-fade-overlay-top"></div><img
                                    src="https://cdn.prod.website-files.com/670e055571ec3fdaefa6c351/67af2969208b102a44ad93a2_hor-golf-balls.svg"
                                    loading="lazy" alt="golf balls" class="timeline-line">
                                <div class="timeline-fade-overlay-bottom"></div>
                                <div class="timeline-progress-line-cover"></div>
                            </div>
                            <div class="timeline-content-right">
                                <div class="mod-relative">
                                    <div class="timeline-circle-wrapper">
                                        <div class="timeline-circle">
                                            <img src="{{ asset('images/svg/count-number-1.svg') }}" loading="lazy"
                                                alt="golf success icon" class="timeline-icon">
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <div class="mod-text-left">
                                            <h1 class="mod-mb-4">Book a Free Consultation</h1>
                                            <p>Tell us what you need! Our experts will connect with you to understand your
                                                requirements and guide you through the process.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mod-relative">
                                    <div class="timeline-circle-wrapper">
                                        <div class="timeline-circle">
                                            <img src="{{ asset('images/svg/count-number-2.svg') }}" loading="lazy"
                                                alt="golf success icon" class="timeline-icon">
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <div class="mod-text-left">
                                            <h1 class="mod-mb-4">Pick the Right Service</h1>
                                            <p>
                                                No Hidden Fess - Select from a wide range of professional services tailored
                                                to your needs. Our transparent process ensures you get exactly what you’re
                                                looking for.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mod-relative">
                                    <div class="timeline-circle-wrapper">
                                        <div class="timeline-circle">
                                            <img src="{{ asset('images/svg/count-number-3.svg') }}" loading="lazy"
                                                alt="golf success icon" class="timeline-icon">
                                        </div>
                                    </div>
                                    <div class="timeline-item">
                                        <div class="mod-text-left">
                                            <h1 class="mod-mb-4">Share Your Details – We Handle the Rest!</h1>
                                            <p>
                                                Skip the paperwork! Our experts will ask for the necessary documents & we'll
                                                take care of everything for you.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="mod-relative">
                                    <div class="timeline-circle-wrapper">
                                        <div class="timeline-circle">
                                            <img src="https://cdn.prod.website-files.com/670e055571ec3fdaefa6c351/679cac16a679337a4633d8cb_success-icon.svg"
                                                loading="lazy" alt="golf success icon">
                                        </div>
                                        <img src="https://cdn.prod.website-files.com/670e055571ec3fdaefa6c351/679caf900953594022ab7eac_arrow-down.svg"
                                            loading="lazy" alt="arrow down" class="timeline-last-arrow">
                                    </div>
                                    <div class="timeline-item">
                                        <div class="mod-text-left">
                                            <h1 class="mod-mb-4">We Handle It, You Relax</h1>
                                            <p>
                                                Stay in the loop with real-time updates while we handle the heavy lifting.
                                                Once everything is processed, you’ll receive confirmations securely &
                                                hassle-free!
                                            </p>
                                        </div>
                                        <div id="w-node-_86eb85cf-5873-2916-7991-48c17ff6deeb-65a559f1"
                                            class="spacer-large"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mod-flex mod-justify-start mod-w-full mod-mt-16">
                            <a href="http://127.0.0.1:8000/contact-us"
                                class="btn btn-primary icon-hover-right d-flex d-lg-inline-flex">
                                Talk to Expert Now
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M16.175 13L10.575 18.6L12 20L20 12L12 4L10.575 5.4L16.175 11L4 11L4 13L16.175 13Z">
                                    </path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
        </section>

        <section class="container mod-my-16 lg:mod-my-24 reveal-me">
            <div class="mod-mr-auto mod-ml-auto mod-w-full">
                <h2 class="display-6 mod-font-semibold mb-32">Explore our Top-rated Services</h2>

                <div class="row">
                    <div class="col-12 col-lg-4 mb-3 col-md-6">
                        <div class="top-service-card-grid mod-relative mod-rounded-xxl mod-p-8 md:mod-p-4 sm:mod-p-4">
                            <h2 class="mod-flex mod-justify-start mod-gap-4 mod-items-center mod-mb-4">
                                <img decoding="async" width="129" height="110"
                                    src="{{ asset('images/svg/service-gst.svg') }}" alt="" loading="lazy">
                                GST Registration
                                <span class="arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM297 385c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l71-71L120 280c-13.3 0-24-10.7-24-24s10.7-24 24-24l214.1 0-71-71c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L409 239c9.4 9.4 9.4 24.6 0 33.9L297 385z">
                                        </path>
                                    </svg>
                                </span>
                            </h2>
                            <p>Get your GST registration done quickly and effortlessly with our expert assistance.</p>
                            <a href="{{ route('front.services', ['slug' => 'gst-registration']) }}"> <span
                                    class="visually-hidden"> Read More</span> </a>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4 mb-3 col-md-6">
                        <div class="top-service-card-grid mod-relative mod-rounded-xxl mod-p-8 md:mod-p-4 sm:mod-p-4">
                            <h2 class="mod-flex mod-justify-start mod-gap-4 mod-items-center mod-mb-4">
                                <img decoding="async" width="129" height="110"
                                    src="{{ asset('images/svg/service-company.svg') }}" alt="" loading="lazy">
                                Company Registration
                                <span class="arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM297 385c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l71-71L120 280c-13.3 0-24-10.7-24-24s10.7-24 24-24l214.1 0-71-71c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L409 239c9.4 9.4 9.4 24.6 0 33.9L297 385z">
                                        </path>
                                    </svg>
                                </span>
                            </h2>
                            <p>Start your business the right way with hassle-free company registration services.</p>
                            <a href="{{ route('front.services', ['slug' => 'private-limited-company']) }}"> <span
                                    class="visually-hidden"> Read More</span> </a>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4 mb-3 col-md-6">
                        <div class="top-service-card-grid mod-relative mod-rounded-xxl mod-p-8 md:mod-p-4 sm:mod-p-4">
                            <h2 class="mod-flex mod-justify-start mod-gap-4 mod-items-center mod-mb-4">
                                <img decoding="async" width="129" height="110"
                                    src="{{ asset('images/svg/service-compliance.svg') }}" alt=""
                                    loading="lazy">
                                FSSAI Registration
                                <span class="arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM297 385c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l71-71L120 280c-13.3 0-24-10.7-24-24s10.7-24 24-24l214.1 0-71-71c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L409 239c9.4 9.4 9.4 24.6 0 33.9L297 385z">
                                        </path>
                                    </svg>
                                </span>
                            </h2>
                            <p>Ensure your food business meets legal standards with expert FSSAI registration services
                                tailored to your requirements.</p>
                            <a href="{{ route('front.services', ['slug' => 'fssai-registration']) }}"> <span
                                    class="visually-hidden"> Read More</span> </a>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4 mb-3 col-md-6">
                        <div class="top-service-card-grid mod-relative mod-rounded-xxl mod-p-8 md:mod-p-4 sm:mod-p-4">
                            <h2 class="mod-flex mod-justify-start mod-gap-4 mod-items-center mod-mb-4">
                                <img decoding="async" width="129" height="110"
                                    src="{{ asset('images/svg/service-trademark.svg') }}" alt="" loading="lazy">
                                Trademark Registration
                                <span class="arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM297 385c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l71-71L120 280c-13.3 0-24-10.7-24-24s10.7-24 24-24l214.1 0-71-71c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L409 239c9.4 9.4 9.4 24.6 0 33.9L297 385z">
                                        </path>
                                    </svg>
                                </span>
                            </h2>
                            <p>Protect your brand identity with a hassle-free trademark registration process.</p>
                            <a href="{{ route('front.services', ['slug' => 'trademark-registration']) }}"> <span
                                    class="visually-hidden"> Read More</span> </a>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4 mb-3 col-md-6">
                        <div class="top-service-card-grid mod-relative mod-rounded-xxl mod-p-8 md:mod-p-4 sm:mod-p-4">
                            <h2 class="mod-flex mod-justify-start mod-gap-4 mod-items-center mod-mb-4">
                                <img decoding="async" width="129" height="110"
                                    src="{{ asset('images/svg/service-tax.svg') }}" alt="" loading="lazy">
                                Income Tax Return
                                <span class="arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM297 385c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l71-71L120 280c-13.3 0-24-10.7-24-24s10.7-24 24-24l214.1 0-71-71c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L409 239c9.4 9.4 9.4 24.6 0 33.9L297 385z">
                                        </path>
                                    </svg>
                                </span>
                            </h2>
                            <p>File your Income Tax Return accurately and on time with our expert assistance.</p>
                            <a href="{{ route('front.services', ['slug' => 'income-tax-returns']) }}"> <span
                                    class="visually-hidden"> Read More</span> </a>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4 mb-3 col-md-6">
                        <div class="top-service-card-grid mod-relative mod-rounded-xxl mod-p-8 md:mod-p-4 sm:mod-p-4">
                            <h2 class="mod-flex mod-justify-start mod-gap-4 mod-items-center mod-mb-4">
                                <img decoding="async" width="129" height="110"
                                    src="{{ asset('images/svg/service-legal.svg') }}" alt="" loading="lazy">
                                Legal Drafting
                                <span class="arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                        <path
                                            d="M0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM297 385c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l71-71L120 280c-13.3 0-24-10.7-24-24s10.7-24 24-24l214.1 0-71-71c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0L409 239c9.4 9.4 9.4 24.6 0 33.9L297 385z">
                                        </path>
                                    </svg>
                                </span>
                            </h2>
                            <p>Get professionally drafted legal documents tailored to your business needs.</p>
                            <a href="{{ route('front.services', ['slug' => 'legal-drafting']) }}"> <span
                                    class="visually-hidden"> Read More</span> </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="container my-80">
            <p class="text-center"><strong>We've partnered with</strong></p>
            <div class="partner-box-logo-scroller">
                <div class="slide-track">
                    @for ($i = 0; $i < 3; $i++)
                        <div class="slide"><img src="{{ asset('images/svg/meta.svg') }}" alt="" /></div>
                        <div class="slide"><img src="{{ asset('images/svg/google.svg') }}" alt="" /></div>
                        <div class="slide"><img src="{{ asset('images/svg/godaddy.svg') }}" alt="" /></div>
                        <div class="slide"><img src="{{ asset('images/svg/payu.svg') }}" alt="" /></div>
                        <div class="slide"><img src="{{ asset('images/svg/trustpilot.svg') }}" alt="" /></div>
                    @endfor
                </div>
            </div>
        </section>


        <section class="container my-80 mt-lg-120 mb-xxl-80 mod-pt-12 md:mod-pt-4 sm:mod-pt-0">
            <div class="row gy-5 gx-20 gx-lg-40">
                <h2 class="display-6 mod-font-semibold col-lg-4 pe-120 pe-lg-3 mb-2">Hear from our customers</h2>

                <div class="col-9 col-md-8 ms-auto pb-2">

                    <blockquote class="rounded-2 bg-blue-100 px-4 pb-4 p-lg-32 pt-lg-40 px-xl-40 mb-0">

                        <div class="row gx-4">
                            <div class="col-7 col-lg-4 mt-n5 mt-lg-n80 ms-auto">
                                <figure class="mt-n3 mb-n2 ms-auto mt-xl-n20 ratio max-w-scale scale-120 scale-lg-auto"
                                    style="--bs-aspect-ratio:104%">
                                    <img alt="Monika, Náborářka" src="images/img/home/monika.png" width="476"
                                        height="496">
                                </figure>
                            </div>
                            <div class="col-12 col-lg-8 svg-scale scale-32 scale-lg-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="54" height="34" fill="none"
                                    viewBox="0 0 32 20">
                                    <path fill="#006EEC" fill-opacity=".08"
                                        d="M1.59483 20C1.12229 20 0.738348 19.8512 0.443009 19.5536C0.14767 19.1964 0 18.8095 0 18.3929C0 17.9167 0.0590678 17.5 0.177204 17.1429L5.93632 2.32143C6.29072 1.60714 6.67467 1.04167 7.08814 0.625003C7.50162 0.208334 8.09229 0 8.86017 0H13.4675C13.9991 0 14.4126 0.178571 14.7079 0.535713C15.0032 0.892858 15.1214 1.36905 15.0623 1.96429L12.6701 17.1429C12.5519 17.9762 12.2566 18.6607 11.784 19.1964C11.3115 19.7321 10.6617 20 9.83479 20H1.59483ZM18.5178 20C18.1043 20 17.7204 19.8512 17.3659 19.5536C17.0706 19.1964 16.9229 18.8095 16.9229 18.3929C16.9229 18.0952 17.0115 17.6786 17.1887 17.1429L22.9479 2.32143C23.5385 0.77381 24.5131 0 25.8717 0H30.479C30.9515 0 31.3355 0.178571 31.6308 0.535713C31.9262 0.892858 32.0443 1.36905 31.9852 1.96429L29.6816 17.1429C29.3272 19.0476 28.3526 20 26.7577 20H18.5178Z" />
                                </svg>
                                <p class="text-h3 mt-1 mb-2 mb-sm-3 mt-lg-3">Filing my ITR was so easy! Quick process and
                                    great support.</p>
                                <cite class="text-h5 text-secondary">Keerthana Nair</cite>
                            </div>
                        </div>
                    </blockquote>

                </div>

                <div class="col-9 col-md-8 pb-2">

                    <blockquote class="rounded-2 bg-blue-300 px-4 pb-4 p-lg-32 pt-lg-40 px-xl-40 mb-0">

                        <div class="row gx-4">
                            <div class="col-7 col-lg-4 mt-n32 mt-lg-n80">
                                <figure class="mt-xl-n20 ratio max-w-scale scale-120 scale-lg-auto"
                                    style="--bs-aspect-ratio:104%">
                                    <img alt="" src="images/img/home/jaroslav.png" width="476"
                                        height="496">
                                </figure>
                            </div>
                            <div class="col-12 col-lg-8 svg-scale scale-32 scale-lg-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="54" height="34" fill="none"
                                    viewBox="0 0 32 20">
                                    <path fill="#006EEC" fill-opacity=".08"
                                        d="M1.59483 20C1.12229 20 0.738348 19.8512 0.443009 19.5536C0.14767 19.1964 0 18.8095 0 18.3929C0 17.9167 0.0590678 17.5 0.177204 17.1429L5.93632 2.32143C6.29072 1.60714 6.67467 1.04167 7.08814 0.625003C7.50162 0.208334 8.09229 0 8.86017 0H13.4675C13.9991 0 14.4126 0.178571 14.7079 0.535713C15.0032 0.892858 15.1214 1.36905 15.0623 1.96429L12.6701 17.1429C12.5519 17.9762 12.2566 18.6607 11.784 19.1964C11.3115 19.7321 10.6617 20 9.83479 20H1.59483ZM18.5178 20C18.1043 20 17.7204 19.8512 17.3659 19.5536C17.0706 19.1964 16.9229 18.8095 16.9229 18.3929C16.9229 18.0952 17.0115 17.6786 17.1887 17.1429L22.9479 2.32143C23.5385 0.77381 24.5131 0 25.8717 0H30.479C30.9515 0 31.3355 0.178571 31.6308 0.535713C31.9262 0.892858 32.0443 1.36905 31.9852 1.96429L29.6816 17.1429C29.3272 19.0476 28.3526 20 26.7577 20H18.5178Z" />
                                </svg>
                                <p class="text-h3 mt-1 mb-2 mb-sm-3 mt-lg-3">Seamless and hassle-free! Registered my
                                    company in no time. Highly recommend!</p>
                                <cite class="text-h5 text-secondary">Arvind Singh</cite>
                            </div>
                        </div>
                    </blockquote>

                </div>
            </div>
        </section>

        <section class="templateShowcase mb-80 mb-xxl-120 sm:mod-mb-10">

            <div class="splide" id="templateShowcase" aria-label="Ukázka šablon CV">
                <div class="splide__arrows">
                    <button type="button" class="btn btn-rounded icon-hover-left splide__arrow splide__arrow--prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path fill="#001C35" fill-rule="evenodd"
                                d="M15.7071 21.7071C15.3166 22.0976 14.6834 22.0976 14.2929 21.7071L5.29289 12.7071C4.90237 12.3166 4.90237 11.6834 5.29289 11.2929L14.2929 2.29289C14.6834 1.90237 15.3166 1.90237 15.7071 2.29289C16.0976 2.68342 16.0976 3.31658 15.7071 3.70711L7.41421 12L15.7071 20.2929C16.0976 20.6834 16.0976 21.3166 15.7071 21.7071Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="visually-hidden">Předchozí šablony</span>
                    </button>
                    <button type="button" class="btn btn-rounded icon-hover-right splide__arrow splide__arrow--next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path fill="#001C35" fill-rule="evenodd"
                                d="M8.29289 2.29289C8.68342 1.90237 9.31658 1.90237 9.70711 2.29289L18.7071 11.2929C19.0976 11.6834 19.0976 12.3166 18.7071 12.7071L9.70711 21.7071C9.31658 22.0976 8.68342 22.0976 8.29289 21.7071C7.90237 21.3166 7.90237 20.6834 8.29289 20.2929L16.5858 12L8.29289 3.70711C7.90237 3.31658 7.90237 2.68342 8.29289 2.29289Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="visually-hidden">Další šablony</span>
                    </button>
                </div>
                <div class="splide__track">
                    <div class="splide__list">

                        <x-reviews-slide></x-reviews-slide>

                    </div>
                </div>
            </div>
        </section>

        {{-- <x-article-list page="home"></x-article-list> --}}
    </main>
@endsection
