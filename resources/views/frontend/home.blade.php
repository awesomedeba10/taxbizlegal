@extends('frontend._layouts.master')

@section('content')
    <main class="flex-grow-1">
        <section class="slideshow bg-blue-100">
            <div class="splide" id="homeSlideshow" aria-label="Představení aplikace Huntee.net">
                <div class="splide__track">
                    <div class="splide__list">

                        <div class="splide__slide slideshow-slide">
                            <div class="slideshow-content">
                                <p class="h5 text-primary mb-0">Start Your Business Today!</p>
                                <h1 class="h1 mb-0" data-slideshow-title>Start Your Private Limited Company Hassle-Free</h1>
                                <p class="mb-0 slideshow-fade">Register your company with ease and compliance. Get expert
                                    guidance, end-to-end documentation, and fast approvals.</p>
                                <div class="slideshow-fade">
                                    <a href="registrace/adept.html" class="d-block btn btn-lg btn-primary">Register Now</a>
                                </div>
                            </div>
                            <div class="slideshow-media slideshow-media--custom">
                                <figure class="slideshow-figure slideshow-figure--custom">
                                    <img alt="Kdo řekl, že novou práci musíte hledat?"
                                        class="slideshow-img slideshow-img--custom" src="{{ asset('images/img/organic-flat-people-business-training-illustration - Copy.webp') }}"
                                        width="1184" height="837">
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
                                    <a href="registrace/adept.html" class="d-block btn btn-lg btn-primary">File ITR Now</a>
                                </div>
                            </div>
                            <div class="slideshow-media slideshow-media--custom">
                                <figure class="slideshow-figure slideshow-figure--custom">
                                    <img alt="Kdo řekl, že novou práci musíte hledat?"
                                        class="slideshow-img slideshow-img--custom" src="{{ asset('images/img/11235935_11116.png') }}"
                                        width="1184" height="837">
                                </figure>
                            </div>
                        </div>
                        <div class="splide__slide slideshow-slide">
                            <div class="slideshow-content">
                                <p class="h5 text-primary mb-0">Pracovní profil</p>
                                <h2 class="h1 mb-0" data-slideshow-title>Why Do Customers Love Us?</h2>
                                <p class="mb-0 slideshow-fade">Nechcete, aby váš zaměstnavatel věděl, že hledáte lepší
                                    práci? Bez problému</p>
                                <div class="slideshow-fade">
                                    <a href="registrace/adept.html" class="d-block btn btn-lg btn-primary">Vytvořit
                                        profil</a>
                                </div>
                            </div>
                            <div class="slideshow-media slideshow-media--icon">
                                <figure class="slideshow-figure slideshow-figure--icon">

                                    <img alt="Soukromí na prvním místě" class="slideshow-img slideshow-img--icon"
                                        src="images/svg/secured-colored.svg" width="800" height="800">
                                </figure>
                            </div>
                        </div>
                        <div class="splide__slide slideshow-slide">
                            <div class="slideshow-content">
                                <p class="h5 text-primary mb-0">Knihovna kontaktů</p>
                                <h2 class="h1 mb-0" data-slideshow-title>Víte, koho hledáte? Ušetřete čas i kredity.
                                </h2>
                                <p class="mb-0 slideshow-fade">Seznamte se s pracovními profily kandidátů ještě
                                    předtím, než utratíte jediný kredit.</p>
                                <div class="slideshow-fade">
                                    <a href="registrace/lovec.html" class="d-block btn btn-lg btn-primary">Hledat
                                        zaměstnance</a>
                                </div>
                            </div>
                            <div class="slideshow-media slideshow-media--custom">
                                <figure class="slideshow-figure slideshow-figure--custom">

                                    <img alt="Víte, koho hledáte? Ušetřete čas i kredity."
                                        class="slideshow-img slideshow-img--custom"
                                        src="images/img/home/hledat-kandidaty.png" width="1184" height="701">
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
                        <span class="visually-hidden">Předchozí slide</span>
                    </button>
                    <button type="button" class="btn btn-rounded icon-hover-right splide__arrow splide__arrow--next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path fill="#001C35" fill-rule="evenodd"
                                d="M8.29289 2.29289C8.68342 1.90237 9.31658 1.90237 9.70711 2.29289L18.7071 11.2929C19.0976 11.6834 19.0976 12.3166 18.7071 12.7071L9.70711 21.7071C9.31658 22.0976 8.68342 22.0976 8.29289 21.7071C7.90237 21.3166 7.90237 20.6834 8.29289 20.2929L16.5858 12L8.29289 3.70711C7.90237 3.31658 7.90237 2.68342 8.29289 2.29289Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="visually-hidden">Další slide</span>
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
                            <p class="display-6 fw-bold mb-2 text-primary"><span data-counter="10">0</span> Lc+</p>
                            <p class="mb-0">Customers Served</p>
                        </div>

                    </div>
                    <div class="col-md-4">

                        <div class="h-100 shadow-primary rounded-35 bg-white p-4 p-lg-32">
                            <p class="display-6 fw-bold mb-2 text-primary"><span data-counter="8000">0</span> Cr+</p>
                            <p class="mb-0">Worth of Businesses Registered</p>
                        </div>

                    </div>
                    <div class="col-md-4">

                        <div class="h-100 shadow-primary rounded-35 bg-white p-4 p-lg-32">
                            <p class="display-6 fw-bold mb-2 text-primary"><span data-counter="25">0</span> k+</p>
                            <p class="mb-0">Tax Returns Filed</p>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section class="container my-80">
            <h2 class="h6 mb-3 mb-lg-32 text-center">We're partnered with</h2>
            <div class="row g-3 gx-lg-5 gy-xxl-4 gx-xxl-80 justify-content-center align-items-center">
                <div class="col-4 col-lg-auto text-center">
                    <img alt="Multisport" class="img-fluid opacity-40" src="images/svg/partners/multisport.svg"
                        width="150" height="150">
                </div>
                <div class="col-4 col-lg-auto text-center">
                    <img alt="Teta drogerie" class="img-fluid opacity-40" src="images/svg/partners/teta-drogerie.svg"
                        width="150" height="150">
                </div>
                <div class="col-4 col-lg-auto text-center">
                    <img alt="Equans" class="img-fluid opacity-40" src="images/svg/partners/equans.svg" width="150"
                        height="150">
                </div>
            </div>
        </section>
        <section class="container mod-my-16 lg:mod-my-24">
            <article class="banner bg-blue-100 pb-40 px-4 p-lg-5 p-xxl-80">
                <div class="row gy-4 gx-lg-4 justify-content-center justify-content-lg-between align-items-center">
                    <div class="col-md-9 col-lg-8 d-flex flex-column gap-3 gap-lg-4">
                        <h2 class="display-6 fw-bold mb-0">Why Do Customers Love Us?</h2>
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
                            <img src="{{ asset('images/img/13184991_5138237.png') }}">
                        </figure>
                    </div>
                </div>
            </article>
        </section>
        <section class="container my-80 my-xxl-120">
            <article class="banner bg-blue-100 py-40 px-4 p-lg-5 px-xxl-80 pb-xxl-4">
                <div class="row gy-4 gx-xl-40 justify-content-center justify-content-lg-between align-items-center">
                    <div class="col-md-9 col-lg-6 d-flex flex-column gap-3 gap-lg-4">
                        <h2 class="display-6 fw-bold mb-0">Zvyšte šance na nové zaměstnání</h2>
                        <p class="text-lg mb-0 pe-xl-80 me-xxl-4">Řekněte personalistům, jakou práci hledáte a určete
                            za jakých podmínek chcete pracovat. Třeba získáte práci snů.</p>
                        <div
                            class="d-flex justify-content-center justify-content-lg-start gap-2 gap-sm-3 gap-xl-4 text-center svg-scale scale-4 mb-0 order-first order-lg-0">
                            <figure class="mb-0" style="width:3.5rem">
                                <span class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" fill="none" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M1 20V17.2C1 16.6333 1.14583 16.1125 1.4375 15.6375C1.72917 15.1625 2.11667 14.8 2.6 14.55C3.63333 14.0333 4.68333 13.6458 5.75 13.3875C6.81667 13.1292 7.9 13 9 13C10.1 13 11.1833 13.1292 12.25 13.3875C13.3167 13.6458 14.3667 14.0333 15.4 14.55C15.8833 14.8 16.2708 15.1625 16.5625 15.6375C16.8542 16.1125 17 16.6333 17 17.2V20H1ZM19 20V17C19 16.2667 18.7958 15.5625 18.3875 14.8875C17.9792 14.2125 17.4 13.6333 16.65 13.15C17.5 13.25 18.3 13.4208 19.05 13.6625C19.8 13.9042 20.5 14.2 21.15 14.55C21.75 14.8833 22.2083 15.2542 22.525 15.6625C22.8417 16.0708 23 16.5167 23 17V20H19ZM9 12C7.9 12 6.95833 11.6083 6.175 10.825C5.39167 10.0417 5 9.1 5 8C5 6.9 5.39167 5.95833 6.175 5.175C6.95833 4.39167 7.9 4 9 4C10.1 4 11.0417 4.39167 11.825 5.175C12.6083 5.95833 13 6.9 13 8C13 9.1 12.6083 10.0417 11.825 10.825C11.0417 11.6083 10.1 12 9 12ZM19 8C19 9.1 18.6083 10.0417 17.825 10.825C17.0417 11.6083 16.1 12 15 12C14.8167 12 14.5833 11.9792 14.3 11.9375C14.0167 11.8958 13.7833 11.85 13.6 11.8C14.05 11.2667 14.3958 10.675 14.6375 10.025C14.8792 9.375 15 8.7 15 8C15 7.3 14.8792 6.625 14.6375 5.975C14.3958 5.325 14.05 4.73333 13.6 4.2C13.8333 4.11667 14.0667 4.0625 14.3 4.0375C14.5333 4.0125 14.7667 4 15 4C16.1 4 17.0417 4.39167 17.825 5.175C18.6083 5.95833 19 6.9 19 8ZM3 18H15V17.2C15 17.0167 14.9542 16.85 14.8625 16.7C14.7708 16.55 14.65 16.4333 14.5 16.35C13.6 15.9 12.6917 15.5625 11.775 15.3375C10.8583 15.1125 9.93333 15 9 15C8.06667 15 7.14167 15.1125 6.225 15.3375C5.30833 15.5625 4.4 15.9 3.5 16.35C3.35 16.4333 3.22917 16.55 3.1375 16.7C3.04583 16.85 3 17.0167 3 17.2V18ZM9 10C9.55 10 10.0208 9.80417 10.4125 9.4125C10.8042 9.02083 11 8.55 11 8C11 7.45 10.8042 6.97917 10.4125 6.5875C10.0208 6.19583 9.55 6 9 6C8.45 6 7.97917 6.19583 7.5875 6.5875C7.19583 6.97917 7 7.45 7 8C7 8.55 7.19583 9.02083 7.5875 9.4125C7.97917 9.80417 8.45 10 9 10Z" />
                                    </svg></span>
                                <figcaption class="text-h6 mt-2">Pozice</figcaption>
                            </figure>
                            <figure class="mb-0" style="width:3.5rem">
                                <span class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="25"
                                        height="24" fill="none" viewBox="0 0 25 24">
                                        <path fill="currentColor"
                                            d="M14.5 13C13.6667 13 12.9583 12.7083 12.375 12.125C11.7917 11.5417 11.5 10.8333 11.5 10C11.5 9.16667 11.7917 8.45833 12.375 7.875C12.9583 7.29167 13.6667 7 14.5 7C15.3333 7 16.0417 7.29167 16.625 7.875C17.2083 8.45833 17.5 9.16667 17.5 10C17.5 10.8333 17.2083 11.5417 16.625 12.125C16.0417 12.7083 15.3333 13 14.5 13ZM7.5 16C6.95 16 6.47917 15.8042 6.0875 15.4125C5.69583 15.0208 5.5 14.55 5.5 14V6C5.5 5.45 5.69583 4.97917 6.0875 4.5875C6.47917 4.19583 6.95 4 7.5 4H21.5C22.05 4 22.5208 4.19583 22.9125 4.5875C23.3042 4.97917 23.5 5.45 23.5 6V14C23.5 14.55 23.3042 15.0208 22.9125 15.4125C22.5208 15.8042 22.05 16 21.5 16H7.5ZM9.5 14H19.5C19.5 13.45 19.6958 12.9792 20.0875 12.5875C20.4792 12.1958 20.95 12 21.5 12V8C20.95 8 20.4792 7.80417 20.0875 7.4125C19.6958 7.02083 19.5 6.55 19.5 6H9.5C9.5 6.55 9.30417 7.02083 8.9125 7.4125C8.52083 7.80417 8.05 8 7.5 8V12C8.05 12 8.52083 12.1958 8.9125 12.5875C9.30417 12.9792 9.5 13.45 9.5 14ZM20.5 20H3.5C2.95 20 2.47917 19.8042 2.0875 19.4125C1.69583 19.0208 1.5 18.55 1.5 18V7H3.5V18H20.5V20Z" />
                                    </svg></span>
                                <figcaption class="text-h6 mt-2">Mzda</figcaption>
                            </figure>
                            <figure class="mb-0" style="width:3.5rem">
                                <span class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" fill="none" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M12 12C12.55 12 13.0208 11.8042 13.4125 11.4125C13.8042 11.0208 14 10.55 14 10C14 9.45 13.8042 8.97917 13.4125 8.5875C13.0208 8.19583 12.55 8 12 8C11.45 8 10.9792 8.19583 10.5875 8.5875C10.1958 8.97917 10 9.45 10 10C10 10.55 10.1958 11.0208 10.5875 11.4125C10.9792 11.8042 11.45 12 12 12ZM12 19.35C14.0333 17.4833 15.5417 15.7875 16.525 14.2625C17.5083 12.7375 18 11.3833 18 10.2C18 8.38333 17.4208 6.89583 16.2625 5.7375C15.1042 4.57917 13.6833 4 12 4C10.3167 4 8.89583 4.57917 7.7375 5.7375C6.57917 6.89583 6 8.38333 6 10.2C6 11.3833 6.49167 12.7375 7.475 14.2625C8.45833 15.7875 9.96667 17.4833 12 19.35ZM12 22C9.31667 19.7167 7.3125 17.5958 5.9875 15.6375C4.6625 13.6792 4 11.8667 4 10.2C4 7.7 4.80417 5.70833 6.4125 4.225C8.02083 2.74167 9.88333 2 12 2C14.1167 2 15.9792 2.74167 17.5875 4.225C19.1958 5.70833 20 7.7 20 10.2C20 11.8667 19.3375 13.6792 18.0125 15.6375C16.6875 17.5958 14.6833 19.7167 12 22Z" />
                                    </svg></span>
                                <figcaption class="text-h6 mt-2">Lokality</figcaption>
                            </figure>
                            <figure class="mb-0" style="width:3.5rem">
                                <span class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" fill="none" viewBox="0 0 49 48">
                                        <path fill="currentColor"
                                            d="M24.083 40.9998C24.2497 40.9998 24.4413 40.9581 24.658 40.8748C24.8747 40.7915 25.0497 40.6831 25.183 40.5498L42.033 23.6498C42.4663 23.2165 42.7913 22.722 43.008 22.1665C43.2247 21.6109 43.333 21.0554 43.333 20.4998C43.333 19.9331 43.2247 19.3665 43.008 18.7998C42.7913 18.2331 42.4663 17.7331 42.033 17.2998L33.033 8.2998C32.5997 7.86647 32.0997 7.54147 31.533 7.3248C30.9663 7.10814 30.3997 6.9998 29.833 6.9998C29.2774 6.9998 28.7219 7.10814 28.1664 7.3248C27.6108 7.54147 27.1163 7.86647 26.683 8.2998L25.783 9.1998L29.833 13.2998C30.2663 13.7665 30.6497 14.3081 30.983 14.9248C31.3163 15.5415 31.483 16.2165 31.483 16.9498C31.483 18.2165 30.9913 19.3331 30.008 20.2998C29.0247 21.2665 27.8997 21.7498 26.633 21.7498C25.7997 21.7498 25.108 21.6248 24.558 21.3748C24.008 21.1248 23.5049 20.7691 23.0488 20.3078L19.383 16.6498L10.333 25.6998C10.1663 25.8665 10.0497 26.0419 9.98301 26.2261C9.91634 26.4103 9.88301 26.6077 9.88301 26.8182C9.88301 27.2393 10.0247 27.5915 10.308 27.8748C10.5913 28.1581 10.9441 28.2998 11.3664 28.2998C11.5775 28.2998 11.7747 28.2498 11.958 28.1498C12.1413 28.0498 12.2997 27.9331 12.433 27.7998L19.333 20.8998L21.433 22.9998L14.583 29.8498C14.4163 30.0165 14.2997 30.1998 14.233 30.3998C14.1663 30.5998 14.133 30.7998 14.133 30.9998C14.133 31.3998 14.283 31.7498 14.583 32.0498C14.883 32.3498 15.233 32.4998 15.633 32.4998C15.833 32.4998 16.0247 32.4581 16.208 32.3748C16.3913 32.2915 16.5497 32.1831 16.683 32.0498L23.583 25.1498L25.683 27.2498L18.833 34.0998C18.6997 34.2331 18.5913 34.4054 18.508 34.6165C18.4247 34.8276 18.383 35.0387 18.383 35.2498C18.383 35.6498 18.533 35.9998 18.833 36.2998C19.133 36.5998 19.483 36.7498 19.883 36.7498C20.083 36.7498 20.2663 36.7165 20.433 36.6498C20.5997 36.5831 20.7663 36.4665 20.933 36.2998L27.833 29.3998L29.933 31.4998L23.033 38.3998C22.8663 38.5665 22.7497 38.7498 22.683 38.9498C22.6163 39.1498 22.583 39.3331 22.583 39.4998C22.583 39.9665 22.7163 40.3331 22.983 40.5998C23.2497 40.8665 23.6163 40.9998 24.083 40.9998ZM24.0862 43.9998C22.9841 43.9998 21.9997 43.5915 21.133 42.7748C20.2663 41.9581 19.7497 40.9478 19.583 39.7439C18.4497 39.5812 17.4997 39.1165 16.733 38.3498C15.9663 37.5831 15.4997 36.6331 15.333 35.4998C14.1997 35.3331 13.258 34.8581 12.508 34.0748C11.758 33.2915 11.2997 32.3498 11.133 31.2498C9.89967 31.0831 8.88301 30.5831 8.08301 29.7498C7.28301 28.9165 6.88301 27.9165 6.88301 26.7498C6.88301 26.1831 6.99507 25.6157 7.21921 25.0474C7.44334 24.4791 7.76461 23.9799 8.18301 23.5498L19.383 12.3498L24.883 17.8498C25.1497 18.1165 25.4386 18.3248 25.7497 18.4748C26.0608 18.6248 26.3719 18.6998 26.683 18.6998C27.1163 18.6998 27.5247 18.5081 27.908 18.1248C28.2913 17.7415 28.483 17.3306 28.483 16.8921C28.483 16.6972 28.4247 16.4748 28.308 16.2248C28.1913 15.9748 27.9997 15.7165 27.733 15.4498L20.583 8.2998C20.1497 7.86647 19.6497 7.54147 19.083 7.3248C18.5163 7.10814 17.9497 6.9998 17.383 6.9998C16.8274 6.9998 16.2719 7.10814 15.7164 7.3248C15.1608 7.54147 14.6673 7.86409 14.236 8.29265L6.63301 15.8998C6.16634 16.3665 5.84134 16.8581 5.65801 17.3748C5.47467 17.8915 5.36634 18.4748 5.33301 19.1248C5.29967 19.7748 5.42467 20.4081 5.70801 21.0248C5.99134 21.6415 6.33301 22.1998 6.73301 22.6998L4.58301 24.8498C3.91634 24.1165 3.37467 23.2331 2.95801 22.1998C2.54134 21.1665 2.33301 20.1165 2.33301 19.0498C2.33301 18.0498 2.52467 17.0915 2.90801 16.1748C3.29134 15.2581 3.83301 14.4498 4.53301 13.7498L12.083 6.1998C12.8163 5.46647 13.6462 4.9248 14.5727 4.5748C15.4991 4.2248 16.4491 4.0498 17.4227 4.0498C18.3962 4.0498 19.3413 4.2248 20.258 4.5748C21.1747 4.9248 21.9997 5.46647 22.733 6.1998L23.633 7.0998L24.533 6.1998C25.2663 5.46647 26.0962 4.9248 27.0227 4.5748C27.9491 4.2248 28.8991 4.0498 29.8727 4.0498C30.8462 4.0498 31.7913 4.2248 32.708 4.5748C33.6247 4.9248 34.4497 5.46647 35.183 6.1998L44.133 15.1498C44.8663 15.8831 45.4163 16.717 45.783 17.6515C46.1497 18.5859 46.333 19.5359 46.333 20.5015C46.333 21.467 46.1497 22.4081 45.783 23.3248C45.4163 24.2415 44.8663 25.0665 44.133 25.7998L27.283 42.6498C26.8497 43.0831 26.3575 43.4165 25.8064 43.6498C25.2553 43.8831 24.6819 43.9998 24.0862 43.9998Z" />
                                    </svg></span>
                                <figcaption class="text-h6 mt-2">Pracovní vztah</figcaption>
                            </figure>
                            <figure class="mb-0" style="width:3.5rem">
                                <span class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" fill="none" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M13 17.5L16.5 14C16.6833 13.8167 16.8292 13.6 16.9375 13.35C17.0458 13.1 17.1 12.8333 17.1 12.55C17.1 11.9833 16.9 11.5 16.5 11.1C16.1 10.7 15.6167 10.5 15.05 10.5C14.7333 10.5 14.4208 10.5917 14.1125 10.775C13.8042 10.9583 13.4333 11.2667 13 11.7C12.5 11.2333 12.1083 10.9167 11.825 10.75C11.5417 10.5833 11.25 10.5 10.95 10.5C10.3833 10.5 9.9 10.7 9.5 11.1C9.1 11.5 8.9 11.9833 8.9 12.55C8.9 12.8333 8.95417 13.1 9.0625 13.35C9.17083 13.6 9.31667 13.8167 9.5 14L13 17.5ZM21.4 14.25L14.25 21.4C14.05 21.6 13.825 21.75 13.575 21.85C13.325 21.95 13.075 22 12.825 22C12.575 22 12.325 21.95 12.075 21.85C11.825 21.75 11.6 21.6 11.4 21.4L2.575 12.575C2.39167 12.3917 2.25 12.1792 2.15 11.9375C2.05 11.6958 2 11.4417 2 11.175V4C2 3.45 2.19583 2.97917 2.5875 2.5875C2.97917 2.19583 3.45 2 4 2H11.175C11.4417 2 11.7 2.05417 11.95 2.1625C12.2 2.27083 12.4167 2.41667 12.6 2.6L21.4 11.425C21.6 11.625 21.7458 11.85 21.8375 12.1C21.9292 12.35 21.975 12.6 21.975 12.85C21.975 13.1 21.9292 13.3458 21.8375 13.5875C21.7458 13.8292 21.6 14.05 21.4 14.25ZM12.825 20L19.975 12.85L11.15 4H4V11.15L12.825 20ZM6.5 8C6.91667 8 7.27083 7.85417 7.5625 7.5625C7.85417 7.27083 8 6.91667 8 6.5C8 6.08333 7.85417 5.72917 7.5625 5.4375C7.27083 5.14583 6.91667 5 6.5 5C6.08333 5 5.72917 5.14583 5.4375 5.4375C5.14583 5.72917 5 6.08333 5 6.5C5 6.91667 5.14583 7.27083 5.4375 7.5625C5.72917 7.85417 6.08333 8 6.5 8Z" />
                                    </svg></span>
                                <figcaption class="text-h6 mt-2">Benefity</figcaption>
                            </figure>
                        </div>
                        <div>
                            <a href="registrace/adept.html"
                                class="btn btn-primary icon-hover-right d-flex d-lg-inline-flex">
                                Chci to zkusit
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M16.175 13L10.575 18.6L12 20L20 12L12 4L10.575 5.4L16.175 11L4 11L4 13L16.175 13Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-6 order-first order-lg-last">
                        {{-- <figure class="ratio mb-0" style="--bs-aspect-ratio:86.7%">

                            <img alt="Ukázka nastavení požadavků na vaše nové zaměstnání"
                                src="images/img/home/requests.png" width="1112" height="964">
                        </figure> --}}
                    </div>
                </div>
            </article>
        </section>
        <section class="container my-80 my-xxl-120">
            <h2 class="display-6 fw-bold mb-32">Jak to funguje?</h2>

            <div class="row gy-40 gx-lg-40">
                <div class="col-lg-4">
                    <div class="d-flex flex-column gap-12 gap-lg-3 mx-auto">
                        <figure class="text-primary svg-scale scale-40 mb-0"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 49 48">
                                <path fill="currentColor"
                                    d="M24.083 40.9998C24.2497 40.9998 24.4413 40.9581 24.658 40.8748C24.8747 40.7915 25.0497 40.6831 25.183 40.5498L42.033 23.6498C42.4663 23.2165 42.7913 22.722 43.008 22.1665C43.2247 21.6109 43.333 21.0554 43.333 20.4998C43.333 19.9331 43.2247 19.3665 43.008 18.7998C42.7913 18.2331 42.4663 17.7331 42.033 17.2998L33.033 8.2998C32.5997 7.86647 32.0997 7.54147 31.533 7.3248C30.9663 7.10814 30.3997 6.9998 29.833 6.9998C29.2774 6.9998 28.7219 7.10814 28.1664 7.3248C27.6108 7.54147 27.1163 7.86647 26.683 8.2998L25.783 9.1998L29.833 13.2998C30.2663 13.7665 30.6497 14.3081 30.983 14.9248C31.3163 15.5415 31.483 16.2165 31.483 16.9498C31.483 18.2165 30.9913 19.3331 30.008 20.2998C29.0247 21.2665 27.8997 21.7498 26.633 21.7498C25.7997 21.7498 25.108 21.6248 24.558 21.3748C24.008 21.1248 23.5049 20.7691 23.0488 20.3078L19.383 16.6498L10.333 25.6998C10.1663 25.8665 10.0497 26.0419 9.98301 26.2261C9.91634 26.4103 9.88301 26.6077 9.88301 26.8182C9.88301 27.2393 10.0247 27.5915 10.308 27.8748C10.5913 28.1581 10.9441 28.2998 11.3664 28.2998C11.5775 28.2998 11.7747 28.2498 11.958 28.1498C12.1413 28.0498 12.2997 27.9331 12.433 27.7998L19.333 20.8998L21.433 22.9998L14.583 29.8498C14.4163 30.0165 14.2997 30.1998 14.233 30.3998C14.1663 30.5998 14.133 30.7998 14.133 30.9998C14.133 31.3998 14.283 31.7498 14.583 32.0498C14.883 32.3498 15.233 32.4998 15.633 32.4998C15.833 32.4998 16.0247 32.4581 16.208 32.3748C16.3913 32.2915 16.5497 32.1831 16.683 32.0498L23.583 25.1498L25.683 27.2498L18.833 34.0998C18.6997 34.2331 18.5913 34.4054 18.508 34.6165C18.4247 34.8276 18.383 35.0387 18.383 35.2498C18.383 35.6498 18.533 35.9998 18.833 36.2998C19.133 36.5998 19.483 36.7498 19.883 36.7498C20.083 36.7498 20.2663 36.7165 20.433 36.6498C20.5997 36.5831 20.7663 36.4665 20.933 36.2998L27.833 29.3998L29.933 31.4998L23.033 38.3998C22.8663 38.5665 22.7497 38.7498 22.683 38.9498C22.6163 39.1498 22.583 39.3331 22.583 39.4998C22.583 39.9665 22.7163 40.3331 22.983 40.5998C23.2497 40.8665 23.6163 40.9998 24.083 40.9998ZM24.0862 43.9998C22.9841 43.9998 21.9997 43.5915 21.133 42.7748C20.2663 41.9581 19.7497 40.9478 19.583 39.7439C18.4497 39.5812 17.4997 39.1165 16.733 38.3498C15.9663 37.5831 15.4997 36.6331 15.333 35.4998C14.1997 35.3331 13.258 34.8581 12.508 34.0748C11.758 33.2915 11.2997 32.3498 11.133 31.2498C9.89967 31.0831 8.88301 30.5831 8.08301 29.7498C7.28301 28.9165 6.88301 27.9165 6.88301 26.7498C6.88301 26.1831 6.99507 25.6157 7.21921 25.0474C7.44334 24.4791 7.76461 23.9799 8.18301 23.5498L19.383 12.3498L24.883 17.8498C25.1497 18.1165 25.4386 18.3248 25.7497 18.4748C26.0608 18.6248 26.3719 18.6998 26.683 18.6998C27.1163 18.6998 27.5247 18.5081 27.908 18.1248C28.2913 17.7415 28.483 17.3306 28.483 16.8921C28.483 16.6972 28.4247 16.4748 28.308 16.2248C28.1913 15.9748 27.9997 15.7165 27.733 15.4498L20.583 8.2998C20.1497 7.86647 19.6497 7.54147 19.083 7.3248C18.5163 7.10814 17.9497 6.9998 17.383 6.9998C16.8274 6.9998 16.2719 7.10814 15.7164 7.3248C15.1608 7.54147 14.6673 7.86409 14.236 8.29265L6.63301 15.8998C6.16634 16.3665 5.84134 16.8581 5.65801 17.3748C5.47467 17.8915 5.36634 18.4748 5.33301 19.1248C5.29967 19.7748 5.42467 20.4081 5.70801 21.0248C5.99134 21.6415 6.33301 22.1998 6.73301 22.6998L4.58301 24.8498C3.91634 24.1165 3.37467 23.2331 2.95801 22.1998C2.54134 21.1665 2.33301 20.1165 2.33301 19.0498C2.33301 18.0498 2.52467 17.0915 2.90801 16.1748C3.29134 15.2581 3.83301 14.4498 4.53301 13.7498L12.083 6.1998C12.8163 5.46647 13.6462 4.9248 14.5727 4.5748C15.4991 4.2248 16.4491 4.0498 17.4227 4.0498C18.3962 4.0498 19.3413 4.2248 20.258 4.5748C21.1747 4.9248 21.9997 5.46647 22.733 6.1998L23.633 7.0998L24.533 6.1998C25.2663 5.46647 26.0962 4.9248 27.0227 4.5748C27.9491 4.2248 28.8991 4.0498 29.8727 4.0498C30.8462 4.0498 31.7913 4.2248 32.708 4.5748C33.6247 4.9248 34.4497 5.46647 35.183 6.1998L44.133 15.1498C44.8663 15.8831 45.4163 16.717 45.783 17.6515C46.1497 18.5859 46.333 19.5359 46.333 20.5015C46.333 21.467 46.1497 22.4081 45.783 23.3248C45.4163 24.2415 44.8663 25.0665 44.133 25.7998L27.283 42.6498C26.8497 43.0831 26.3575 43.4165 25.8064 43.6498C25.2553 43.8831 24.6819 43.9998 24.0862 43.9998Z" />
                            </svg></figure>
                        <h3 class="mb-0">Pracovní profil</h3>
                        <p class="mb-0 text-lg">Ušetřete čas. Nechte se ulovit. Řekněte personalistům jaké zaměstnání
                            hledáte. Třeba získáte práci snů.</p>
                        <div class="mx-n1">
                            <a href="registrace/adept.html" class="btn btn-link">Přidat pracovní profil</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex flex-column gap-12 gap-lg-3 mx-auto">
                        <figure class="text-primary svg-scale scale-40 mb-0"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M19.95 21C17.8667 21 15.8083 20.5458 13.775 19.6375C11.7417 18.7292 9.89167 17.4417 8.225 15.775C6.55833 14.1083 5.27083 12.2583 4.3625 10.225C3.45417 8.19167 3 6.13333 3 4.05C3 3.75 3.1 3.5 3.3 3.3C3.5 3.1 3.75 3 4.05 3H8.1C8.33333 3 8.54167 3.07917 8.725 3.2375C8.90833 3.39583 9.01667 3.58333 9.05 3.8L9.7 7.3C9.73333 7.56667 9.725 7.79167 9.675 7.975C9.625 8.15833 9.53333 8.31667 9.4 8.45L6.975 10.9C7.30833 11.5167 7.70417 12.1125 8.1625 12.6875C8.62083 13.2625 9.125 13.8167 9.675 14.35C10.1917 14.8667 10.7333 15.3458 11.3 15.7875C11.8667 16.2292 12.4667 16.6333 13.1 17L15.45 14.65C15.6 14.5 15.7958 14.3875 16.0375 14.3125C16.2792 14.2375 16.5167 14.2167 16.75 14.25L20.2 14.95C20.4333 15.0167 20.625 15.1375 20.775 15.3125C20.925 15.4875 21 15.6833 21 15.9V19.95C21 20.25 20.9 20.5 20.7 20.7C20.5 20.9 20.25 21 19.95 21ZM6.025 9L7.675 7.35L7.25 5H5.025C5.10833 5.68333 5.225 6.35833 5.375 7.025C5.525 7.69167 5.74167 8.35 6.025 9ZM14.975 17.95C15.625 18.2333 16.2875 18.4583 16.9625 18.625C17.6375 18.7917 18.3167 18.9 19 18.95V16.75L16.65 16.275L14.975 17.95Z" />
                            </svg></figure>
                        <h3 class="mb-0">Soukromí na 1. místě</h3>
                        <p class="mb-0 text-lg">Zadejte společnosti, které neuvidí váš pracovní profil, nebo uveďte,
                            kdy a jak vás mohou personalisté kontaktovat.</p>
                        <div class="mx-n1">
                            <a href="registrace/adept.html" class="btn btn-link">Chci to zkusit</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex flex-column gap-12 gap-lg-3 mx-auto">
                        <figure class="text-primary svg-scale scale-40 mb-0"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 48 48">
                                <path fill="currentColor"
                                    d="M13.85 34.05H27.6V31.05H13.85V34.05ZM13.85 25.5H34.15V22.5H13.85V25.5ZM13.85 16.95H34.15V13.95H13.85V16.95ZM9 42C8.2 42 7.5 41.7 6.9 41.1C6.3 40.5 6 39.8 6 39V9C6 8.2 6.3 7.5 6.9 6.9C7.5 6.3 8.2 6 9 6H39C39.8 6 40.5 6.3 41.1 6.9C41.7 7.5 42 8.2 42 9V39C42 39.8 41.7 40.5 41.1 41.1C40.5 41.7 39.8 42 39 42H9ZM9 39H39V9H9V39Z" />
                            </svg></figure>
                        <h3 class="mb-0">Dokonalý životopis</h3>
                        <p class="mb-0 text-lg">Provedeme vás tvorbou profesionálního CV. Životopis můžete kdykoliv
                            upravit a stáhnout jako PDF. Máte vlastní? Můžete ho nahrát.</p>
                        <div class="mx-n1">
                            <a href="registrace/adept.html" class="btn btn-link">To se mi líbí</a>
                        </div>
                    </div>
                </div>
            </div>


        </section>
        <section class="container my-80 my-xxl-120">
            <article class="banner bg-blue-100 pb-40 px-4 p-lg-5 p-xxl-80">
                <div class="row gy-4 gx-lg-4 justify-content-center justify-content-lg-between align-items-center">
                    <div class="col-md-9 col-lg-8 d-flex flex-column gap-3 gap-lg-4">
                        <h2 class="display-6 fw-bold mb-0">Why Do Customers Love Us?</h2>
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
                            <img src="{{ asset('images/img/home/cusss.png') }}">
                        </figure>
                    </div>
                </div>
            </article>
        </section>
        <section class="container my-80 mt-lg-120 mb-xxl-120">
            <div class="row gy-5 gx-20 gx-lg-40">
                <h2 class="display-6 fw-bold col-lg-4 pe-120 pe-lg-3 mb-2">Hear from our customers</h2>

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
                                <p class="text-h3 mt-1 mb-2 mb-sm-3 mt-lg-3">Filing my ITR was so easy! Quick process and great support.</p>
                                <cite class="text-h5 text-secondary">#User1</cite>
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
                                    <img alt="Jaroslav, Projektant" src="images/img/home/jaroslav.png" width="476"
                                        height="496">
                                </figure>
                            </div>
                            <div class="col-12 col-lg-8 svg-scale scale-32 scale-lg-auto">
                                <svg xmlns="http://www.w3.org/2000/svg" width="54" height="34" fill="none"
                                    viewBox="0 0 32 20">
                                    <path fill="#006EEC" fill-opacity=".08"
                                        d="M1.59483 20C1.12229 20 0.738348 19.8512 0.443009 19.5536C0.14767 19.1964 0 18.8095 0 18.3929C0 17.9167 0.0590678 17.5 0.177204 17.1429L5.93632 2.32143C6.29072 1.60714 6.67467 1.04167 7.08814 0.625003C7.50162 0.208334 8.09229 0 8.86017 0H13.4675C13.9991 0 14.4126 0.178571 14.7079 0.535713C15.0032 0.892858 15.1214 1.36905 15.0623 1.96429L12.6701 17.1429C12.5519 17.9762 12.2566 18.6607 11.784 19.1964C11.3115 19.7321 10.6617 20 9.83479 20H1.59483ZM18.5178 20C18.1043 20 17.7204 19.8512 17.3659 19.5536C17.0706 19.1964 16.9229 18.8095 16.9229 18.3929C16.9229 18.0952 17.0115 17.6786 17.1887 17.1429L22.9479 2.32143C23.5385 0.77381 24.5131 0 25.8717 0H30.479C30.9515 0 31.3355 0.178571 31.6308 0.535713C31.9262 0.892858 32.0443 1.36905 31.9852 1.96429L29.6816 17.1429C29.3272 19.0476 28.3526 20 26.7577 20H18.5178Z" />
                                </svg>
                                <p class="text-h3 mt-1 mb-2 mb-sm-3 mt-lg-3">Seamless and hassle-free! Registered my company in no time. Highly recommend!</p>
                                <cite class="text-h5 text-secondary">#user2</cite>
                            </div>
                        </div>
                    </blockquote>

                </div>
            </div>
        </section>
        <section class="container my-80 my-xxl-120">
            <article class="banner bg-blue-100 py-40 px-4 p-lg-5 p-xxl-80">
                <div class="row gy-32 justify-content-center justify-content-lg-between">
                    <div class="col-md-9 col-lg-6 col-xl-5 text-center text-lg-start">
                        <h2 class="display-6 fw-bold mb-3 mb-xl-4">Přehledný editor&nbsp;CV</h2>
                        <p class="text-lg mb-3 mb-xl-4">Přidejte k vašemu profilu životopis. Vytvořit ho můžete zdarma,
                            s neomezeným stahováním v PDF a&nbsp;dalšími vychytávkami.</p>
                        <div
                            class="d-flex justify-content-center justify-content-lg-start gap-3 text-center svg-scale scale-4 mb-32 mb-xxl-40">
                            <figure class="mb-0" style="width:3.75rem">
                                <span class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" fill="none" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M12 16L7 11L8.4 9.55L11 12.15V4H13V12.15L15.6 9.55L17 11L12 16ZM6 20C5.45 20 4.97917 19.8042 4.5875 19.4125C4.19583 19.0208 4 18.55 4 18V15H6V18H18V15H20V18C20 18.55 19.8042 19.0208 19.4125 19.4125C19.0208 19.8042 18.55 20 18 20H6Z" />
                                    </svg></span>
                                <figcaption class="text-h6 mt-2">Formát PDF</figcaption>
                            </figure>
                            <figure class="mb-0 d-none d-sm-block" style="width:3.75rem">
                                <span class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" fill="none" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M10.6 16.6L17.65 9.55L16.25 8.15L10.6 13.8L7.75 10.95L6.35 12.35L10.6 16.6ZM12 22C10.6167 22 9.31667 21.7375 8.1 21.2125C6.88333 20.6875 5.825 19.975 4.925 19.075C4.025 18.175 3.3125 17.1167 2.7875 15.9C2.2625 14.6833 2 13.3833 2 12C2 10.6167 2.2625 9.31667 2.7875 8.1C3.3125 6.88333 4.025 5.825 4.925 4.925C5.825 4.025 6.88333 3.3125 8.1 2.7875C9.31667 2.2625 10.6167 2 12 2C13.3833 2 14.6833 2.2625 15.9 2.7875C17.1167 3.3125 18.175 4.025 19.075 4.925C19.975 5.825 20.6875 6.88333 21.2125 8.1C21.7375 9.31667 22 10.6167 22 12C22 13.3833 21.7375 14.6833 21.2125 15.9C20.6875 17.1167 19.975 18.175 19.075 19.075C18.175 19.975 17.1167 20.6875 15.9 21.2125C14.6833 21.7375 13.3833 22 12 22ZM12 20C14.2333 20 16.125 19.225 17.675 17.675C19.225 16.125 20 14.2333 20 12C20 9.76667 19.225 7.875 17.675 6.325C16.125 4.775 14.2333 4 12 4C9.76667 4 7.875 4.775 6.325 6.325C4.775 7.875 4 9.76667 4 12C4 14.2333 4.775 16.125 6.325 17.675C7.875 19.225 9.76667 20 12 20Z" />
                                    </svg></span>
                                <figcaption class="text-h6 mt-2">Snadné úpravy</figcaption>
                            </figure>
                            <figure class="mb-0" style="width:3.75rem">
                                <span class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" fill="none" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M19 19H8C7.45 19 6.97917 18.8042 6.5875 18.4125C6.19583 18.0208 6 17.55 6 17V3C6 2.45 6.19583 1.97917 6.5875 1.5875C6.97917 1.19583 7.45 1 8 1H15L21 7V17C21 17.55 20.8042 18.0208 20.4125 18.4125C20.0208 18.8042 19.55 19 19 19ZM14 8V3H8V17H19V8H14ZM4 23C3.45 23 2.97917 22.8042 2.5875 22.4125C2.19583 22.0208 2 21.55 2 21V7H4V21H15V23H4Z" />
                                    </svg></span>
                                <figcaption class="text-h6 mt-2">Změňte šablonu</figcaption>
                            </figure>
                            <figure class="mb-0" style="width:3.75rem">
                                <span class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" fill="none" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M8.65 20.5L2.5 14.35C2.33333 14.1833 2.20833 14 2.125 13.8C2.04167 13.6 2 13.3917 2 13.175C2 12.9583 2.04167 12.75 2.125 12.55C2.20833 12.35 2.33333 12.1667 2.5 12L8.25 6.275L5.6 3.625L7.15 2L17.15 12C17.3167 12.1667 17.4375 12.35 17.5125 12.55C17.5875 12.75 17.625 12.9583 17.625 13.175C17.625 13.3917 17.5875 13.6 17.5125 13.8C17.4375 14 17.3167 14.1833 17.15 14.35L11 20.5C10.8333 20.6667 10.65 20.7917 10.45 20.875C10.25 20.9583 10.0417 21 9.825 21C9.60833 21 9.4 20.9583 9.2 20.875C9 20.7917 8.81667 20.6667 8.65 20.5ZM9.825 7.85L4.475 13.2H15.175L9.825 7.85ZM19.8 21C19.2 21 18.6917 20.7875 18.275 20.3625C17.8583 19.9375 17.65 19.4167 17.65 18.8C17.65 18.35 17.7625 17.925 17.9875 17.525C18.2125 17.125 18.4667 16.7333 18.75 16.35L19.8 15L20.9 16.35C21.1667 16.7333 21.4167 17.125 21.65 17.525C21.8833 17.925 22 18.35 22 18.8C22 19.4167 21.7833 19.9375 21.35 20.3625C20.9167 20.7875 20.4 21 19.8 21Z" />
                                    </svg></span>
                                <figcaption class="text-h6 mt-2">Vyberte barvu</figcaption>
                            </figure>
                            <figure class="mb-0" style="width:3.75rem">
                                <span class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                        height="24" fill="none" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M11 22V16H13V18H21V20H13V22H11ZM3 20V18H9V20H3ZM6.425 14H8.5L9.6 10.925H14.425L15.5 14H17.575L13.075 2H10.925L6.425 14ZM10.2 9.2L11.95 4.225H12.05L13.8 9.2H10.2Z" />
                                    </svg></span>
                                <figcaption class="text-h6 mt-2">Zvolte písmo</figcaption>
                            </figure>
                        </div>
                        <div>
                            <a href="registrace/adept.html"
                                class="btn btn-primary icon-hover-right d-flex d-lg-inline-flex">
                                Vytvořte si své CV
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M16.175 13L10.575 18.6L12 20L20 12L12 4L10.575 5.4L16.175 11L4 11L4 13L16.175 13Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8 col-lg-6 col-xl-7 order-first order-lg-last ps-xxl-0">
                        <figure class="ratio mb-0" style="--bs-aspect-ratio:60.2%">

                            <img alt="Ukázka CV editor na počítači a telefonu" src="{{ asset('images/img/home/hledat-kandidaty.png') }}"
                                width="1274" height="786">
                        </figure>
                    </div>
                </div>
            </article>
        </section>
        <section class="templateShowcase my-80 my-xxl-120">
            <div class="container">
                <h2 class="mb-20 mb-md-40 pb-md-1 pe-md-120">What do Customers huss about Us?</h2>
            </div>

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

                        <div class="splide__slide templateShowcase-slide">
                            <a href="registrace/adept.html">

                                <img alt="Šablona broukal" src="upload/template/01/broukal.10x14.fit.q10.jpg"
                                    width="580" height="820"
                                    data-src="/upload/template/01/broukal.580x820.fit.q85.jpg" class="lazyloaded">
                            </a>
                        </div>
                        <div class="splide__slide templateShowcase-slide">
                            <a href="registrace/adept.html">

                                <img alt="Šablona blahova" src="upload/template/01/blahova.10x14.fit.q10.jpg"
                                    width="580" height="820"
                                    data-src="/upload/template/01/blahova.580x820.fit.q85.jpg" class="lazyloaded">
                            </a>
                        </div>
                        <div class="splide__slide templateShowcase-slide">
                            <a href="registrace/adept.html">

                                <img alt="Šablona voboril" src="upload/template/01/voboril.10x14.fit.q10.jpg"
                                    width="580" height="820"
                                    data-src="/upload/template/01/voboril.580x820.fit.q85.jpg" class="lazyloaded">
                            </a>
                        </div>
                        <div class="splide__slide templateShowcase-slide">
                            <a href="registrace/adept.html">

                                <img alt="Šablona novakova" src="upload/template/01/novakova.10x14.fit.q10.jpg"
                                    width="580" height="820"
                                    data-src="/upload/template/01/novakova.580x820.fit.q85.jpg" class="lazyloaded">
                            </a>
                        </div>
                        <div class="splide__slide templateShowcase-slide">
                            <a href="registrace/adept.html">

                                <img alt="Šablona kostalova" src="upload/template/01/kostalova.10x14.fit.q10.jpg"
                                    width="580" height="820"
                                    data-src="/upload/template/01/kostalova.580x820.fit.q85.jpg" class="lazyloaded">
                            </a>
                        </div>
                        <div class="splide__slide templateShowcase-slide">
                            <a href="registrace/adept.html">

                                <img alt="Šablona zahajsky" src="upload/template/01/zahajsky.10x14.fit.q10.jpg"
                                    width="580" height="820"
                                    data-src="/upload/template/01/zahajsky.580x820.fit.q85.jpg" class="lazyloaded">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        {{-- <section class="container my-80 my-xxl-120">
            <header data-w-id="3b8fa174-b06f-0eec-efae-7eb74264f8e4" class="section_testimonial">
                <div class="padding-global">
                    <div class="container-large">
                        <div class="padding-section-medium">
                            <div class="w-layout-grid testimonial33_component">
                                <div class="testimonial33_card-content-left">
                                    <div class="testimonial33_card-content-top">
                                        <h2 class="heading-style-h1">Airvoir<br>Customers</h2>
                                        <div class="spacer-small"></div>
                                        <p class="text-size-medium">Read what our clients have to say about us.</p>
                                    </div>
                                    <div class="spacer-medium"></div>
                                    <div class="button-group"><a href="https://www.linkedin.com/company/airvoir/"
                                            target="_blank" class="button is-secondary is-small w-button">Follow us on
                                            Linkedin</a></div>
                                </div>
                                <div class="testimonial33_card-content-right">
                                    <div class="testimonial33_list-left"
                                        style="will-change: transform; transform: translate3d(0px, -4.5304rem, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                        <div id="w-node-_3b8fa174-b06f-0eec-efae-7eb74264f8fa-332bf8c0"
                                            class="testimonial33_list">
                                            <div id="w-node-_3b8fa174-b06f-0eec-efae-7eb74264f8fb-332bf8c0"
                                                class="testimonial33_content-wrapper">
                                                <div class="testimonial33_content">
                                                    <div class="testimonial33_rating-wrapper">
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                    </div>
                                                    <div class="text-size-medium">"Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit. Suspendisse varius enim in eros elementum
                                                        tristique. Duis cursus, mi quis viverra ornare."</div>
                                                    <div class="spacer-small"></div>
                                                    <div class="testimonial33_client">
                                                        <div class="testimonial33_client-image-wrapper"><img
                                                                src="https://cdn.prod.website-files.com/661fdce3e735db03332bf817/662232cf7089f26b3d7e061c_6191a88a1c0e39463c2bf022_placeholder-image.svg"
                                                                loading="lazy" alt="Image Placeholder
            "
                                                                class="testimonial33_customer-image"></div>
                                                        <div class="testimonial33_client-info">
                                                            <p class="text-weight-semibold">Name Surname</p>
                                                            <p>Position, Company name</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="w-node-_3b8fa174-b06f-0eec-efae-7eb74264f913-332bf8c0"
                                                class="testimonial33_content-wrapper">
                                                <div class="testimonial33_content">
                                                    <div class="testimonial33_rating-wrapper">
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                    </div>
                                                    <div class="text-size-medium">"Excellent services! The Airvoir team
                                                        were very kind, the flight advisor being flexible and prompt even if
                                                        my schedule is quite busy, which I have surprised The flight was
                                                        fast, comfortable, stress free and I appreciate the professionalism
                                                        and efficiency of all personnel. All in all, a wonderful, life
                                                        saving experience a lot of time and energy. I highly recommend them
                                                        and will definitely be back!"</div>
                                                    <div class="spacer-small"></div>
                                                    <div class="testimonial33_client">
                                                        <div class="testimonial33_client-image-wrapper"><img
                                                                src="https://cdn.prod.website-files.com/661fdce3e735db03332bf817/6643167987cd9b7f450ddb1a_Testimonial%204.webp"
                                                                loading="lazy" alt="Simona Mirea"
                                                                class="testimonial33_customer-image"></div>
                                                        <div class="testimonial33_client-info">
                                                            <p class="text-weight-semibold">Simona Mirea</p>
                                                            <p class="text-color-secondary">Founder Hearth Agency</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="w-node-_3b8fa174-b06f-0eec-efae-7eb74264f92b-332bf8c0"
                                                class="testimonial33_content-wrapper">
                                                <div class="testimonial33_content">
                                                    <div class="testimonial33_rating-wrapper">
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                    </div>
                                                    <div class="text-size-medium">“Airvoir turned my business trip into a
                                                        seamless and luxurious experience. Impeccable service, personalized
                                                        attention, and truly a world-class flight. Highly<br>recommend!”
                                                    </div>
                                                    <div class="spacer-small"></div>
                                                    <div class="testimonial33_client">
                                                        <div class="testimonial33_client-image-wrapper"><img
                                                                src="https://cdn.prod.website-files.com/661fdce3e735db03332bf817/6643167acde6be3c583c89e0_Testimonial%201.webp"
                                                                loading="lazy" alt="Paul Burca"
                                                                class="testimonial33_customer-image"></div>
                                                        <div class="testimonial33_client-info">
                                                            <p class="text-weight-semibold">Paul Burca</p>
                                                            <p class="text-color-secondary">Founder, Assista.us</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="w-node-_3b8fa174-b06f-0eec-efae-7eb74264f943-332bf8c0"
                                                class="testimonial33_content-wrapper">
                                                <div class="testimonial33_content">
                                                    <div class="testimonial33_rating-wrapper">
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                    </div>
                                                    <div class="text-size-medium">"Great experience with Airvoir! Excellent
                                                        service and luxurious travel experience. Thanks for making my trip
                                                        exceptionally pleasant and smooth exceptionally smooth."</div>
                                                    <div class="spacer-small"></div>
                                                    <div class="testimonial33_client">
                                                        <div class="testimonial33_client-info">
                                                            <p class="text-weight-semibold">Dr. Salim Azar</p>
                                                            <p class="text-color-secondary">Dr Azar Clinic</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="w-node-_3b8fa174-b06f-0eec-efae-7eb74264f95b-332bf8c0"
                                                class="testimonial33_content-wrapper">
                                                <div class="testimonial33_content">
                                                    <div class="testimonial33_rating-wrapper">
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                    </div>
                                                    <div class="text-size-medium">“My experience with Airvoir has been
                                                        exceptional. Despite having contacted them at the last minute, they
                                                        have fulfilled all my requests. Attention to detail what they have
                                                        is exactly what you would like to have, au revoir!”</div>
                                                    <div class="spacer-small"></div>
                                                    <div class="testimonial33_client">
                                                        <div class="testimonial33_client-image-wrapper"><img
                                                                src="https://cdn.prod.website-files.com/661fdce3e735db03332bf817/6643167b42dcd47f12c7704a_Testimonial%203.webp"
                                                                loading="lazy" alt="Xavier Werren"
                                                                class="testimonial33_customer-image"></div>
                                                        <div class="testimonial33_client-info">
                                                            <p class="text-weight-semibold">Xavier Werren</p>
                                                            <p class="text-color-secondary">Head Coordinator, Swiss
                                                                Academics</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial33_list-right"
                                        style="will-change: transform; transform: translate3d(0px, 4.5304rem, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;">
                                        <div id="w-node-_3b8fa174-b06f-0eec-efae-7eb74264f974-332bf8c0"
                                            class="testimonial33_list">
                                            <div id="w-node-_3b8fa174-b06f-0eec-efae-7eb74264f975-332bf8c0"
                                                class="testimonial33_content-wrapper">
                                                <div class="testimonial33_content">
                                                    <div class="testimonial33_rating-wrapper">
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                    </div>
                                                    <div class="text-size-medium">“My experience with Airvoir was
                                                        excellent. The charter advisor was very attentive and flexible to my
                                                        schedule. The trip went smoothly and without stress. I can use
                                                        Airvoir for private jet charter only recommend!"</div>
                                                    <div class="spacer-small"></div>
                                                    <div class="testimonial33_client">
                                                        <div class="testimonial33_client-image-wrapper"><img
                                                                src="https://cdn.prod.website-files.com/661fdce3e735db03332bf817/6643167968f40127d58ea339_Testimonial%205.webp"
                                                                loading="lazy" alt="Marius Copil"
                                                                class="testimonial33_customer-image"></div>
                                                        <div class="testimonial33_client-info">
                                                            <p class="text-weight-semibold">Marius Copil</p>
                                                            <p class="text-color-secondary">Professional Tennis Player</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="w-node-_3b8fa174-b06f-0eec-efae-7eb74264f98d-332bf8c0"
                                                class="testimonial33_content-wrapper">
                                                <div class="testimonial33_content">
                                                    <div class="testimonial33_rating-wrapper">
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                    </div>
                                                    <div class="text-size-medium">“The flight and service went very
                                                        smoothly, all the staff were very pleasant and professional. Thank
                                                        you for an amazing vacation!”</div>
                                                    <div class="spacer-small"></div>
                                                    <div class="testimonial33_client">
                                                        <div class="testimonial33_client-image-wrapper"><img
                                                                src="https://cdn.prod.website-files.com/661fdce3e735db03332bf817/6643167acde6be3c583c89a5_Testimonial%202.webp"
                                                                loading="lazy" alt="Leila Lina
            "
                                                                class="testimonial33_customer-image"></div>
                                                        <div class="testimonial33_client-info">
                                                            <p class="text-weight-semibold">Leila Lina</p>
                                                            <p class="text-color-secondary">Manager, Avallonis LLC</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="w-node-_3b8fa174-b06f-0eec-efae-7eb74264f9a5-332bf8c0"
                                                class="testimonial33_content-wrapper">
                                                <div class="testimonial33_content">
                                                    <div class="testimonial33_rating-wrapper">
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                    </div>
                                                    <div class="text-size-medium">“My experience with Airvoir has been
                                                        exceptional. Despite having contacted them at the last minute, they
                                                        have fulfilled all my requests. Attention to detail what they have
                                                        is exactly what you would like to have, au revoir!”</div>
                                                    <div class="spacer-small"></div>
                                                    <div class="testimonial33_client">
                                                        <div class="testimonial33_client-image-wrapper"><img
                                                                src="https://cdn.prod.website-files.com/661fdce3e735db03332bf817/6643167b42dcd47f12c7704a_Testimonial%203.webp"
                                                                loading="lazy" alt="Xavier Werren"
                                                                class="testimonial33_customer-image"></div>
                                                        <div class="testimonial33_client-info">
                                                            <p class="text-weight-semibold">Xavier Werren</p>
                                                            <p class="text-color-secondary">Head Coordinator, Swiss
                                                                Academics</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="w-node-_3b8fa174-b06f-0eec-efae-7eb74264f9bd-332bf8c0"
                                                class="testimonial33_content-wrapper">
                                                <div class="testimonial33_content">
                                                    <div class="testimonial33_rating-wrapper">
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                        <div class="testimonial33_rating-icon">
                                                            <div class="icon-embed-xsmall w-embed"><svg width="100%"
                                                                    viewBox="0 0 18 17" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M8.16379 0.551109C8.47316 -0.183704 9.52684 -0.183703 9.83621 0.551111L11.6621 4.88811C11.7926 5.19789 12.0875 5.40955 12.426 5.43636L17.1654 5.81173C17.9684 5.87533 18.294 6.86532 17.6822 7.38306L14.0713 10.4388C13.8134 10.6571 13.7007 10.9996 13.7795 11.3259L14.8827 15.8949C15.0696 16.669 14.2172 17.2809 13.5297 16.8661L9.47208 14.4176C9.18225 14.2427 8.81775 14.2427 8.52793 14.4176L4.47029 16.8661C3.7828 17.2809 2.93036 16.669 3.11727 15.8949L4.22048 11.3259C4.29928 10.9996 4.18664 10.6571 3.92873 10.4388L0.317756 7.38306C-0.294046 6.86532 0.0315611 5.87533 0.834562 5.81173L5.57402 5.43636C5.91255 5.40955 6.20744 5.19789 6.33786 4.88811L8.16379 0.551109Z"
                                                                        fill="currentColor"></path>
                                                                </svg></div>
                                                        </div>
                                                    </div>
                                                    <div class="text-size-medium">"Lorem ipsum dolor sit amet, consectetur
                                                        adipiscing elit. Suspendisse varius enim in eros elementum
                                                        tristique. Duis cursus, mi quis viverra ornare."</div>
                                                    <div class="spacer-small"></div>
                                                    <div class="testimonial33_client">
                                                        <div class="testimonial33_client-image-wrapper"><img
                                                                src="https://cdn.prod.website-files.com/661fdce3e735db03332bf817/662232cf7089f26b3d7e061c_6191a88a1c0e39463c2bf022_placeholder-image.svg"
                                                                loading="lazy" alt="Image Placeholder
            "
                                                                class="testimonial33_customer-image"></div>
                                                        <div class="testimonial33_client-info">
                                                            <p class="text-weight-semibold">Name Surname</p>
                                                            <p>Position, Company name</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="testimonial33_gradient"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </section> --}}

        <x-article-list page="home"></x-article-list>

        {{-- <section class="container my-80 my-xxl-120">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-9 col-xxl-8">

                    <h2 class="mb-3 mb-xl-32">Časté dotazy</h2>

                    <div class="accordion" id="faqList-home">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqList-home-item0" aria-expanded="false"
                                    aria-controls="faqList-home-item0">
                                    Jak dlouho bude můj profil a životopis viditelný pro personalisty?
                                    <span class="ms-auto caret"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="none" viewBox="0 0 24 24">
                                            <path fill="#001C35" fill-rule="evenodd"
                                                d="M21.7071 8.2929C22.0976 8.6834 22.0976 9.3166 21.7071 9.7071L12.7071 18.7071C12.3166 19.0976 11.6834 19.0976 11.2929 18.7071L2.29289 9.7071C1.90237 9.3166 1.90237 8.6834 2.29289 8.2929C2.68342 7.9024 3.31658 7.9024 3.70711 8.2929L12 16.5858L20.2929 8.2929C20.6834 7.9024 21.3166 7.9024 21.7071 8.2929Z"
                                                clip-rule="evenodd" />
                                        </svg></span>
                                </button>
                            </h2>
                            <div id="faqList-home-item0" class="accordion-collapse collapse"
                                data-bs-parent="#faqList-home">
                                <div class="accordion-body content">
                                    <p>Váš profil a životopis budou dostupné personalistům po dobu 3 měsíců.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqList-home-item1" aria-expanded="false"
                                    aria-controls="faqList-home-item1">
                                    Jak mohu chránit své soukromí?
                                    <span class="ms-auto caret"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="none" viewBox="0 0 24 24">
                                            <path fill="#001C35" fill-rule="evenodd"
                                                d="M21.7071 8.2929C22.0976 8.6834 22.0976 9.3166 21.7071 9.7071L12.7071 18.7071C12.3166 19.0976 11.6834 19.0976 11.2929 18.7071L2.29289 9.7071C1.90237 9.3166 1.90237 8.6834 2.29289 8.2929C2.68342 7.9024 3.31658 7.9024 3.70711 8.2929L12 16.5858L20.2929 8.2929C20.6834 7.9024 21.3166 7.9024 21.7071 8.2929Z"
                                                clip-rule="evenodd" />
                                        </svg></span>
                                </button>
                            </h2>
                            <div id="faqList-home-item1" class="accordion-collapse collapse"
                                data-bs-parent="#faqList-home">
                                <div class="accordion-body content">
                                    <p>Máte plnou kontrolu nad svým profilem. Kdykoliv můžete zrušit jeho sdílení s
                                        personalisty nebo nastavit, které konkrétní společnosti váš profil neuvidí. Díky
                                        tomu se můžete ujistit, že váš aktuální zaměstnavatel nezjistí, že hledáte lepší
                                        práci.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqList-home-item2" aria-expanded="false"
                                    aria-controls="faqList-home-item2">
                                    Je vytvoření životopisu opravdu zdarma?
                                    <span class="ms-auto caret"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="none" viewBox="0 0 24 24">
                                            <path fill="#001C35" fill-rule="evenodd"
                                                d="M21.7071 8.2929C22.0976 8.6834 22.0976 9.3166 21.7071 9.7071L12.7071 18.7071C12.3166 19.0976 11.6834 19.0976 11.2929 18.7071L2.29289 9.7071C1.90237 9.3166 1.90237 8.6834 2.29289 8.2929C2.68342 7.9024 3.31658 7.9024 3.70711 8.2929L12 16.5858L20.2929 8.2929C20.6834 7.9024 21.3166 7.9024 21.7071 8.2929Z"
                                                clip-rule="evenodd" />
                                        </svg></span>
                                </button>
                            </h2>
                            <div id="faqList-home-item2" class="accordion-collapse collapse"
                                data-bs-parent="#faqList-home">
                                <div class="accordion-body content">
                                    <p>Ano, vytvoření životopisu je zcela zdarma. Můžete ho kdykoliv upravit a stáhnout
                                        ve formátu PDF.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqList-home-item3" aria-expanded="false"
                                    aria-controls="faqList-home-item3">
                                    Mohu ke svému profilu nahrát vlastní životopis?
                                    <span class="ms-auto caret"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="none" viewBox="0 0 24 24">
                                            <path fill="#001C35" fill-rule="evenodd"
                                                d="M21.7071 8.2929C22.0976 8.6834 22.0976 9.3166 21.7071 9.7071L12.7071 18.7071C12.3166 19.0976 11.6834 19.0976 11.2929 18.7071L2.29289 9.7071C1.90237 9.3166 1.90237 8.6834 2.29289 8.2929C2.68342 7.9024 3.31658 7.9024 3.70711 8.2929L12 16.5858L20.2929 8.2929C20.6834 7.9024 21.3166 7.9024 21.7071 8.2929Z"
                                                clip-rule="evenodd" />
                                        </svg></span>
                                </button>
                            </h2>
                            <div id="faqList-home-item3" class="accordion-collapse collapse"
                                data-bs-parent="#faqList-home">
                                <div class="accordion-body content">
                                    <p>Ano, svůj vlastní životopis můžete nahrát ve formátu PDF.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqList-home-item4" aria-expanded="false"
                                    aria-controls="faqList-home-item4">
                                    Mohu si svůj profil kdykoliv upravit?
                                    <span class="ms-auto caret"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="none" viewBox="0 0 24 24">
                                            <path fill="#001C35" fill-rule="evenodd"
                                                d="M21.7071 8.2929C22.0976 8.6834 22.0976 9.3166 21.7071 9.7071L12.7071 18.7071C12.3166 19.0976 11.6834 19.0976 11.2929 18.7071L2.29289 9.7071C1.90237 9.3166 1.90237 8.6834 2.29289 8.2929C2.68342 7.9024 3.31658 7.9024 3.70711 8.2929L12 16.5858L20.2929 8.2929C20.6834 7.9024 21.3166 7.9024 21.7071 8.2929Z"
                                                clip-rule="evenodd" />
                                        </svg></span>
                                </button>
                            </h2>
                            <div id="faqList-home-item4" class="accordion-collapse collapse"
                                data-bs-parent="#faqList-home">
                                <div class="accordion-body content">
                                    <p>Ano, svůj profil i životopis můžete kdykoliv aktualizovat, aby vždy odpovídaly
                                        vašim aktuálním zkušenostem a dovednostem.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqList-home-item5" aria-expanded="false"
                                    aria-controls="faqList-home-item5">
                                    Platí personalisté za zobrazení mého profilu?
                                    <span class="ms-auto caret"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="none" viewBox="0 0 24 24">
                                            <path fill="#001C35" fill-rule="evenodd"
                                                d="M21.7071 8.2929C22.0976 8.6834 22.0976 9.3166 21.7071 9.7071L12.7071 18.7071C12.3166 19.0976 11.6834 19.0976 11.2929 18.7071L2.29289 9.7071C1.90237 9.3166 1.90237 8.6834 2.29289 8.2929C2.68342 7.9024 3.31658 7.9024 3.70711 8.2929L12 16.5858L20.2929 8.2929C20.6834 7.9024 21.3166 7.9024 21.7071 8.2929Z"
                                                clip-rule="evenodd" />
                                        </svg></span>
                                </button>
                            </h2>
                            <div id="faqList-home-item5" class="accordion-collapse collapse"
                                data-bs-parent="#faqList-home">
                                <div class="accordion-body content">
                                    <p>Ano, personalisté platí za přístup k detailům vašeho profilu. To znamená, že vás
                                        osloví jen tehdy, pokud opravdu hledají kandidáta s vašimi zkušenostmi.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section> --}}
    </main>
@endsection
