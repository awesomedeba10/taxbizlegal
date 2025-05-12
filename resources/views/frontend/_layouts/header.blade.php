<nav id="headerNavbar" class="mod-nav nav-bg navbar" data-navbar>
    <span id="pageCategory" style="display: none">homeV2</span>
    <div class="mod-container mod-h-full mod-w-full mod-flex sm:mod-px-0 mod-z-500" id="navbarContainer">
        <div class="sm:mod-hidden mod-flex mod-justify-between mod-items-center mod-h-full mod-w-1/5">
            <a data-label="TBL" class="mod-flex mod-items-center" href="{{ route('front.home') }}">

                <img class="mod-mr-6 sm:mod-m-4 sm:mod-w-10/12" width="150" height="50"
                    src="{{ asset('images/svg/tbl_logo.svg') }}" alt="taxbizlegal logo">

            </a>
        </div>
        <div class="header-right-cta sm:mod-hidden mod-flex mod-items-center mod-justify-end mod-h-full mod-w-4/5">
            <div class="mod-flex mod-items-center mod-h-full">
                <div class="mod-flex mod-items-center mod-h-full mod-pr-4">
                    @foreach (config('services.headers') as $headers)
                        <div class="sm:mod-hidden fit-content  ">
                            <div
                                class="multi-dropdown-menu mod-flex mod-items-center mod-mx-2 sm:mod-mx-2 mod-py-8 mod-dropdown nav-dropdown md:mod-px-0">
                                <div
                                    class="mod-font-medium mod-nav-text mod-cursor-pointer mod-text-compact mod-whitespace-no-wrap">
                                    {{ $headers['title'] }}
                                    <span class="mod-inline-block mod-caret mod-caret-down mod-ml-1 md:mod-ml-0"></span>
                                </div>
                                <div class="mod-dropdown-menu mod-cursor-pointer mod-rounded-lg mod-mt-0 mod-mb-2 mod-dropdown-full-menu low-res-scroll dropdown-size-limit box-shadow-xl"
                                    style="">
                                    <div class="menu-wrapper">
                                        <div
                                            class="mod-flex mod-flex-wrap nav-menu-sticky nav-menu-container mod-uppercase">
                                            @foreach ($headers['sub_headers'] as $sub)
                                                <div class="{{ count($headers['sub_headers']) == 2 ? 'mod-w-1/2' : 'mod-w-1/3' }} mod-pl-8 mod-flex mod-pt-2 mod-items-center mod-pt-6"
                                                    style="background: {{ $sub['background'] }}">
                                                    <div class="mod-w-full">
                                                        <h6 class="mod-text-compact mod-text-blue-400 mod-pb-2">
                                                            {{ $sub['title'] }}</h6>
                                                        <hr class="divider">
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>

                                        <div class="mod-flex ">
                                            @foreach ($headers['sub_headers'] as $sub)
                                                <div class="{{ count($headers['sub_headers']) == 2 ? 'mod-w-1/2' : 'mod-w-1/3' }} mod-px-4 mod-dropdown-submenu"
                                                    style="background: {{ $sub['background'] }}">
                                                    @foreach ($sub['services'] as $service)
                                                        <a data-label="{{ $service['name'] }}" target="_blank"
                                                            href="{{ route('front.services', ['slug' => Str::slug($service['name'], '-')]) }}"
                                                            referrerpolicy="no-referrer-when-downgrade">
                                                            <div
                                                                class="group mod-items-center mod-flex mod-pl-2 mod-dropdown-menu-item ">
                                                                <div class="mod-w-2/12">
                                                                    <img src="{{ asset('images/img/navbar_icon.png') }}"
                                                                        height="42" width="42"
                                                                        alt="{{ $service['name'] }}">
                                                                </div>
                                                                <div class="mod-w-10/12">
                                                                    <p
                                                                        class="mod-text-s-14 mod-font-semibold mod-text-font-500 mod-my-2 mod-flex">
                                                                        {{ $service['name'] }}
                                                                        @if (view()->exists('frontend.services.' . Str::slug($service['name'])))
                                                                                @env('local')
                                                                                <span style="padding-left: 7px">✅</span>
                                                                                @endenv

                                                                                @env('staging')
                                                                                <span class="staging-new-tag">NEW</span>
                                                                                @endenv
                                                                        @endif
                                                                        <img class="childDisplayHover mod-invisible mod-ml-4" src="{{ asset('images/svg/right-arrow.svg') }}"
                                                                            height="24" width="24">
                                                                    </p>
                                                                    <p
                                                                        class="mod-text-s-12 mod-text-medium mod-pr-2 mod-mb-2">
                                                                        {{ $service['description'] }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    @endforeach
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div
                        class="multi-dropdown-menu mod-flex mod-items-center mod-h-full mod-dropdown nav-dropdown mod-mx-2 sm:mod-mx-2 mod-py-8 md:mod-mx-1">
                        <div
                            class="mod-font-medium mod-nav-text mod-nav-text mod-cursor-pointer mod-text-compact mod-whitespace-no-wrap">

                            <span class="mod-pl-2">Explore Us</span>
                            <span class="mod-inline-block mod-caret mod-caret-down mod-ml-1 md:mod-mx-0"></span>
                        </div>
                        <div id="" class="mod-dropdown-menu ">
                            <div class="sm:mod-px-0 mod-px-2 mod-py-3 mod-font-medium mod-whitespace-no-wrap mod-dropdown-menu-item mod-text-compact "
                                style="margin-top: 0px; margin-bottom: 0px; align-items: flex-start;">

                                <div class="mod-w-full">
                                    <a class="mod-text-font-500 mod-flex mod-items-start mod-gap-2 mod-w-full mod-px-2"
                                        href="{{ route('front.contact') }}">

                                        <span>Contact Us</span>
                                    </a>
                                    <div class="mod-ml-6"></div>
                                </div>
                            </div>
                            <div class="sm:mod-px-0 mod-px-2 mod-py-3 mod-font-medium mod-whitespace-no-wrap mod-dropdown-menu-item mod-text-compact "
                                style="margin-top: 0px; margin-bottom: 0px; align-items: flex-start;">

                                <div class="mod-w-full">
                                    <a target="_blank"
                                        class="mod-text-font-500 mod-flex mod-items-start mod-gap-2 mod-w-full mod-px-2"
                                        href="{{ route('front.about') }}">

                                        <span>About us</span>
                                    </a>
                                    <div class="mod-ml-6"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="mod-flex mod-h-full mod-items-center sm:mod-w-1/2 sm:mod-mt-8 sm:mod-px-2 nav-logged-out-container ">
                    <a class="header-nav-phone mod-inline-flex mod-items-center mod-justify-center mod-flex-none mod-font-semibold"
                        href="tel:91{{ config('app.site_info.support_phone') }}" data-wpel-link="internal">
                        <span class="icon icon-24">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m12.71 16.29-.15-.12a.762.762 0 0 0-.18-.09L12.2 16a1 1 0 0 0-.91.27 1.15 1.15 0 0 0-.21.33 1 1 0 0 0 1.3 1.31c.12-.058.23-.132.33-.22a.999.999 0 0 0 .21-1.09 1.001 1.001 0 0 0-.21-.31ZM16 2H8a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V5a3 3 0 0 0-3-3Zm1 17a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v14Z"
                                    fill="#0B1126"></path>
                            </svg>
                        </span>
                        <span class="text">+91 {{ substr(config('app.site_info.support_phone'), 0, 5) . ' ' . substr(config('app.site_info.support_phone'), 5) }}</span>
                    </a>
                    <button class="header-nav-wp mod-justify-center mod-flex mod-items-center" data-search-open=""
                        title="Search">
                        <span class="wp-icon mod-items-center mod-flex mod-flex-none mod-justify-center">
                            <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 240 241.19">
                                <defs>
                                    <style>
                                        .cls-1 {
                                            fill: #25d366;
                                            fill-rule: evenodd;
                                        }
                                    </style>
                                </defs>
                                <title>whatsapp-color</title>
                                <path class="cls-1"
                                    d="M205,35.05A118.61,118.61,0,0,0,120.46,0C54.6,0,1,53.61,1,119.51a119.5,119.5,0,0,0,16,59.74L0,241.19l63.36-16.63a119.43,119.43,0,0,0,57.08,14.57h0A119.54,119.54,0,0,0,205,35.07v0ZM120.5,219A99.18,99.18,0,0,1,69.91,205.1l-3.64-2.17-37.6,9.85,10-36.65-2.35-3.76A99.37,99.37,0,0,1,190.79,49.27,99.43,99.43,0,0,1,120.49,219ZM175,144.54c-3-1.51-17.67-8.71-20.39-9.71s-4.72-1.51-6.75,1.51-7.72,9.71-9.46,11.72-3.49,2.27-6.45.76-12.63-4.66-24-14.84A91.1,91.1,0,0,1,91.25,113.3c-1.75-3-.19-4.61,1.33-6.07s3-3.48,4.47-5.23a19.65,19.65,0,0,0,3-5,5.51,5.51,0,0,0-.24-5.23C99,90.27,93,75.57,90.6,69.58s-4.89-5-6.73-5.14-3.73-.09-5.7-.09a11,11,0,0,0-8,3.73C67.48,71.05,59.75,78.3,59.75,93s10.69,28.88,12.19,30.9S93,156.07,123,169c7.12,3.06,12.68,4.9,17,6.32a41.18,41.18,0,0,0,18.8,1.17c5.74-.84,17.66-7.21,20.17-14.18s2.5-13,1.75-14.19-2.69-2.06-5.7-3.59l0,0Z" />
                            </svg>
                        </span>
                    </button>
                    <div class="header-button mod-flex mod-justify-end">
                        <a class="btn-custom-medium" href="{{ route('front.contact') }}" target="_self">
                            <span class="btn-text btn-text--back">Get In Touch</span>
                            <span class="btn-icon btn-icon--blue">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M3 4a1 1 0 0 1 0-2h11v11a1 1 0 1 1-2 0V5.414l-8.293 8.293a1 1 0 0 1-1.414-1.414L10.586 4H3Z"
                                        fill="white"></path>
                                </svg>
                                <span class="btn-text btn-text--front">Request a Callback</span>
                            </span>
                        </a>
                    </div>
                </div>
                {{-- <div
                    class="mod-flex mod-items-center mod-h-full mod-dropdown nav-dropdown mod-mx-4 sm:mod-mx-3 mod-py-8 md:mod-mx-1 nav-logged-in-container mod-hidden ">
                    <div
                        class="mod-font-medium mod-nav-text mod-nav-text mod-cursor-pointer mod-text-base mod-whitespace-no-wrap">

                        <span class="mod-pl-2">My Account</span>
                        <span class="mod-inline-block mod-caret mod-caret-down mod-ml-1 md:mod-mx-0"></span>
                    </div>
                    <div id="" class="mod-dropdown-menu ">
                        <div class="sm:mod-px-0 mod-px-2 mod-py-3 mod-font-medium mod-whitespace-no-wrap mod-dropdown-menu-item mod-text-base "
                            style="margin-top: 0px; margin-bottom: 0px; align-items: flex-start;">

                            <div class="mod-w-full">
                                <a onclick="handleTrack({label: 'navbar_My Account_Dropdown_button', obj: this})"
                                    target="_blank"
                                    class="mod-text-font-500 mod-flex mod-items-start mod-gap-2 mod-w-full mod-px-2"
                                    href="https:/taxbizlegal.com/filing/itr-filings?utm_ref=%2Fs%2Fv2%2Fhomev2%2F_pages_navbar">

                                    <span>My tax returns</span>
                                </a>
                                <div class="mod-ml-6"></div>
                            </div>
                        </div>
                        <div class="sm:mod-px-0 mod-px-2 mod-py-3 mod-font-medium mod-whitespace-no-wrap mod-dropdown-menu-item mod-text-base "
                            style="margin-top: 0px; margin-bottom: 0px; align-items: flex-start;">

                            <div class="mod-w-full">
                                <a onclick="handleTrack({label: 'navbar_My Account_Dropdown_button', obj: this})"
                                    target="_blank"
                                    class="mod-text-font-500 mod-flex mod-items-start mod-gap-2 mod-w-full mod-px-2"
                                    href="https:/taxbizlegal.com/save/dashboard/portfolio?ref=static-login-dropdown&amp;utm_ref=%2Fs%2Fv2%2Fhomev2%2F_pages_navbar">

                                    <span>My investments</span>
                                </a>
                                <div class="mod-ml-6"></div>
                            </div>
                        </div>
                        <div class="sm:mod-px-0 mod-px-2 mod-py-3 mod-font-medium mod-whitespace-no-wrap mod-dropdown-menu-item mod-text-base "
                            style="margin-top: 0px; margin-bottom: 0px; align-items: flex-start;">

                            <div class="mod-w-full">
                                <a onclick="handleTrack({label: 'navbar_My Account_Dropdown_button', obj: this})"
                                    target="_blank"
                                    class="mod-text-font-500 mod-flex mod-items-start mod-gap-2 mod-w-full mod-px-2"
                                    href="https:/taxbizlegal.com/services/my_orders?utm_ref=%2Fs%2Fv2%2Fhomev2%2F_pages_navbar">

                                    <span>My orders</span>
                                </a>
                                <div class="mod-ml-6"></div>
                            </div>
                        </div>
                        <div class="sm:mod-px-0 mod-px-2 mod-py-3 mod-font-medium mod-whitespace-no-wrap mod-dropdown-menu-item mod-text-base "
                            style="margin-top: 0px; margin-bottom: 0px; align-items: flex-start;">

                            <div class="mod-w-full">
                                <a onclick="handleTrack({label: 'navbar_My Account_Dropdown_button', obj: this})"
                                    target="_blank"
                                    class="mod-text-font-500 mod-flex mod-items-start mod-gap-2 mod-w-full mod-px-2"
                                    href="">

                                    <span>My GST</span>
                                </a>
                                <div class="mod-ml-6"></div>
                            </div>
                        </div>
                        <div class="sm:mod-px-0 mod-px-2 mod-py-3 mod-font-medium mod-whitespace-no-wrap mod-dropdown-menu-item mod-text-base "
                            style="margin-top: 0px; margin-bottom: 0px; align-items: flex-start;">

                            <div class="mod-w-full">
                                <a onclick="handleTrack({label: 'navbar_My Account_Dropdown_button', obj: this})"
                                    target="_blank"
                                    class="mod-text-font-500 mod-flex mod-items-start mod-gap-2 mod-w-full mod-px-2"
                                    href="https:/taxbizlegal.com/launchpad?source=home&amp;utm_ref=%2Fs%2Fv2%2Fhomev2%2F_pages_navbar">

                                    <span>All Products</span>
                                </a>
                                <div class="mod-ml-6"></div>
                            </div>
                        </div>
                        <div class="sm:mod-px-0 mod-px-2 mod-py-3 mod-font-medium mod-whitespace-no-wrap mod-dropdown-menu-item mod-text-base "
                            style="margin-top: 0px; margin-bottom: 0px; align-items: flex-start;">

                            <div class="mod-w-full">
                                <a onclick="handleTrack({label: 'navbar_My Account_Dropdown_button', obj: this})"
                                    target="_blank"
                                    class="mod-text-font-500 mod-flex mod-items-start mod-gap-2 mod-w-full mod-px-2"
                                    href="https:/taxbizlegal.com/filing/profile?utm_ref=%2Fs%2Fv2%2Fhomev2%2F_pages_navbar">

                                    <span>Profile</span>
                                </a>
                                <div class="mod-ml-6"></div>
                            </div>
                        </div>
                        <div class="mod-p-4 mod-text-font-500 mod-text-base">
                            <a class="hover:mod-text-blue-350"
                                href="https:/taxbizlegal.com/?utm_ref=%2Fs%2Fv2%2Fhomev2%2F_pages_navbar#"
                                onclick="logout()">Logout</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>

        {{-- Mobile Header Starts here --}}
        <div class="mod-hidden sm:mod-flex mod-h-full mod-w-3/5">
            <a data-label="Clear" class="mod-flex mod-items-center" href="{{ route('front.home') }}">
                <img class="mod-mr-6 sm:mod-m-4 sm:mod-w-10/12" width="136"
                    src="{{ asset('images/svg/tbl_logo.svg') }}" alt="TaxBizLegal">
            </a>
        </div>
        <div class="mod-w-1/5 mod-hidden mod-items-center mod-ml-12 sm:mod-flex sm:mod-justify-end mobile-sidenav">
            <div class="mod-toggle mobile-sidenav-bc">
                <div class="mod-toggle-bar"></div>
                <div class="mod-toggle-bar"></div>
                <div class="mod-toggle-bar mod-toggle-bar-half"></div>
            </div>
            <div class="mod-sidenav mobile-sidenav-content mod-p-4 header-sidenav">
                <div class="mod-flex mod-flex-wrap mod-pb-8 mod-mb-8 mod-gap-3">
                    @foreach (config('services.headers') as $headers)
                    <div class="mod-mb-4 mod-w-full ">
                        <details class="mod-w-full mod-accordian">
                            <summary class="mod-cursor-pointer">
                                <div class="mod-flex mod-items-center">
                                    <p class="mod-w-11/12 mod-text-compact mod-ml-1 mod-my-0 mod-text-font-500 mod-font-medium focus:mod-text-blue-350">
                                        {{ $headers['title'] }}
                                    </p>
                                    <div class="mod-w-1/12 mod-accordian-caret mod-order-3 mod-ml-auto"></div>
                                </div>
                            </summary>
                            <div class="mod-flex mod-flex-wrap mod-pb-2 mod-mb-2">
                                <div class="mod-w-full ">
                                    @foreach ($headers['sub_headers'] as $sub)
                                    <div class="mod-ml-5">
                                        <div class="mod-flex mod-flex-wrap mod-justify-between mod-pt-4 mod-pb-2">
                                            <div class="mod-w-1/2  mod-text-font-200 mod-text-s-14">{{ $sub['title'] }}</div>
                                            <div class="mod-w-1/2 mod-text-s-14 mod-text-right mod-pr-4"></div>
                                        </div>
                                        <hr class="divider mod-my-3">
                                        <div class="mod-block">
                                            @foreach ($sub['services'] as $service)
                                            <a data-label="{{ $service['name'] }}" target="_blank"
                                                href="{{ route('front.services', ['slug' => Str::slug($service['name'], '-')]) }}"
                                                referrerpolicy="no-referrer-when-downgrade">
                                                <div class="mod-flex mod-items-center mod-pl-4 mod-py-2">
                                                    <div class="mod-w-1/12">
                                                        <img src="{{ asset('images/img/navbar_icon.png') }}"
                                                            height="30" width="30" alt="{{ $service['name'] }}">
                                                    </div>
                                                    <div class="mod-w-11/12">
                                                        <p class="mod-text-s-14 mod-font-medium mod-text-font-500 mod-mb-0">{{ $service['name'] }}</p>
                                                    </div>
                                                </div>
                                            </a>
                                            @endforeach
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </details>
                    </div>
                    @endforeach
                    <div class="mod-mb-4 mod-w-full ">
                        <details class="mod-w-full mod-accordian">
                            <summary class="mod-cursor-pointer">
                                <div class="mod-flex mod-items-center">
                                    <p
                                        class="mod-w-11/12 mod-text-compact mod-ml-1 mod-my-0 mod-text-font-500 mod-font-medium focus:mod-text-blue-350">
                                        Explore Us</p>
                                    <div class="mod-w-1/12 mod-accordian-caret mod-order-3 mod-ml-auto"></div>
                                </div>
                            </summary>
                            <div class="mod-block mod-px-6 mod-mt-4">
                                <div class="mod-p-2 mod-text-font-500 mod-text-s-14 mod-font-medium">
                                    <a {{-- onclick="handleTrack({label: 'navbar_Company_Dropdown_button', obj: this})" --}} target="_blank" class="hover:mod-text-blue-350"
                                        href="{{ route('front.contact') }}">Contact Us</a>
                                </div>
                                <div class="mod-p-2 mod-text-font-500 mod-text-s-14 mod-font-medium">
                                    <a target="_blank" class="hover:mod-text-blue-350"
                                        href="{{ route('front.about') }}">About Us</a>
                                </div>
                            </div>
                        </details>
                    </div>
                    <div
                        class="mod-flex mod-h-full mod-items-center sm:mod-w-1/2 sm:mod-mt-4 nav-logged-out-container ">
                        <a class="home-file-now mod-btn mod-btn-blue mod-cursor-pointer mod-whitespace-no-wrap mod-ml-6 lg:mod-ml-2 md:mod-ml-1 sm:mod-ml-0 sm:mod-w-full"
                            referrerpolicy="no-referrer-when-downgrade">Get started</a>
                    </div>
                </div>
            </div>
            <div class="mod-overlay"></div>
        </div>
    </div>
</nav>
