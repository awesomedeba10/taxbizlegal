<nav id="headerNavbar" class="mod-nav nav-bg navbar" data-navbar>
    <span id="pageCategory" style="display: none">homeV2</span>
    <div class="mod-container mod-h-full mod-w-full mod-flex sm:mod-px-4 mod-z-500" id="navbarContainer">
        <div class="sm:mod-hidden mod-flex mod-justify-between mod-items-center mod-h-full mod-w-1/5">
            <a data-label="Clear" class="mod-flex mod-items-center" href="{{ route('front.home') }}">

                <img class="mod-mr-6 sm:mod-m-0 sm:mod-w-10/12" width="150" height="50"
                    src="{{ asset('images/img/logo web.png') }}" alt="clear">


            </a>
        </div>
        <div class="header-right-cta sm:mod-hidden mod-flex mod-items-center mod-justify-end mod-h-full mod-w-4/5">
            <div class="mod-flex mod-items-center mod-h-full">
                <div class="mod-flex mod-items-center mod-h-full mod-pr-8">
                    @foreach (config('headers') as $headers)
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
                                                        <h6 class="mod-text-compact mod-text-font-200 mod-pb-4">
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
                                                                class="group mod-items-center mod-flex mod-items-start mod-py-2 mod-pl-4 mod-dropdown-menu-item ">
                                                                <div class="mod-w-2/12">
                                                                    <img src="{{ asset('images/img/navbar_icon.png') }}"
                                                                        height="42" width="42" alt="GST">
                                                                </div>
                                                                <div class="mod-w-10/12">
                                                                    <p
                                                                        class="mod-text-s-14 mod-font-medium mod-text-font-500 mod-my-2">
                                                                        {{ $service['name'] }}</p>
                                                                    <p
                                                                        class="mod-text-s-12 mod-text-medium mod-hidden childDisplayHover">
                                                                        {{ $service['description'] }}</p>
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
                            <div class="sm:mod-px-0 mod-px-2 mod-py-3 mod-font-medium mod-whitespace-no-wrap mod-dropdown-menu-item mod-text-compact "
                                style="margin-top: 0px; margin-bottom: 0px; align-items: flex-start;">

                                <div class="mod-w-full">
                                    <a target="_blank"
                                        class="mod-text-font-500 mod-flex mod-items-start mod-gap-2 mod-w-full mod-px-2"
                                        href="">

                                        <span>Careers</span>
                                    </a>
                                    <div class="mod-ml-6"></div>
                                </div>
                            </div>
                            <div class="sm:mod-px-0 mod-px-2 mod-py-3 mod-font-medium mod-whitespace-no-wrap mod-dropdown-menu-item mod-text-compact "
                                style="margin-top: 0px; margin-bottom: 0px; align-items: flex-start;">

                                <div class="mod-w-full">
                                    <a target="_blank"
                                        class="mod-text-font-500 mod-flex mod-items-start mod-gap-2 mod-w-full mod-px-2"
                                        href="">

                                        <span>Media &amp; Press</span>
                                    </a>
                                    <div class="mod-ml-6"></div>
                                </div>
                            </div>
                            <div class="sm:mod-px-0 mod-px-2 mod-py-3 mod-font-medium mod-whitespace-no-wrap mod-dropdown-menu-item mod-text-compact "
                                style="margin-top: 0px; margin-bottom: 0px; align-items: flex-start;">

                                <div class="mod-w-full">
                                    <a target="_blank"
                                        class="mod-text-font-500 mod-flex mod-items-start mod-gap-2 mod-w-full mod-px-2"
                                        href="https:/taxbizlegal.com/s/trust?utm_ref=%2Fs%2Fv2%2Fhomev2%2F_pages_navbar">

                                        <span>Trust &amp; Safety</span>
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
                        href="tel:910000110000" data-wpel-link="internal">
                        <span class="icon icon-24">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="m12.71 16.29-.15-.12a.762.762 0 0 0-.18-.09L12.2 16a1 1 0 0 0-.91.27 1.15 1.15 0 0 0-.21.33 1 1 0 0 0 1.3 1.31c.12-.058.23-.132.33-.22a.999.999 0 0 0 .21-1.09 1.001 1.001 0 0 0-.21-.31ZM16 2H8a3 3 0 0 0-3 3v14a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V5a3 3 0 0 0-3-3Zm1 17a1 1 0 0 1-1 1H8a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v14Z"
                                    fill="#0B1126"></path>
                            </svg>
                        </span>
                        <span class="text">+91 00001 10000</span>
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
                        <a class="btn-custom-medium" href="{{ route('front.contact') }}"
                            target="_self">
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
        <div class="mod-hidden sm:mod-flex mod-h-full mod-w-3/4">
            <a data-label="Clear" class="mod-flex mod-items-center" href="{{ route('front.home') }}">

                <img class="mod-mr-6 sm:mod-m-0 sm:mod-w-10/12" width="136"
                    src="{{ asset('images/img/logo web.png') }}" alt="clear">


            </a>

            <div
                class="mod-flex mod-text-s-14 mod-font-medium mod-py-3 mod-cursor-pointer mod-w-1/3  mobile-spcl-sidenav-toggle">
                Services
                <span class="mod-inline-block mod-caret mod-caret-down mod-ml-3 md:mod-ml-0"></span>
            </div>
            <div class="mod-sidenav mod-p-4 header-sidenav mobile-spcl-sidenav">
                <div class="mod-flex mod-flex-wrap mod-pb-8 mod-mb-8">
                    <div class="mod-w-full ">
                        <div class="mod-mb-4">
                            <div class="mod-flex mod-flex-wrap mod-justify-between mod-pt-4 mod-pb-2">
                                <div class="mod-w-1/2  mod-text-font-200 mod-text-s-14">BUSINESS</div>
                                <div class="mod-w-1/2 mod-text-s-14 mod-text-right mod-pr-4"></div>
                            </div>
                            <hr class="divider">
                            <div class="mod-block mod-py-4">
                                <a data-label="GST" target="_blank" referrerpolicy="no-referrer-when-downgrade">
                                    <div class="mod-flex mod-items-center mod-p-2">
                                        <div class="mod-w-1/12">
                                            <img src="https://assets1.cleartax-cdn.com/cleartax/images/1683875669_cleargst.png"
                                                height="30" width="30" alt="GST">
                                        </div>
                                        <div class="mod-w-11/12">
                                            <p class="mod-text-s-14 mod-font-medium mod-text-font-500">GST</p>
                                        </div>
                                    </div>
                                </a>
                                <a data-label="Accounts Payable"
                                    onclick="handleTrack({label: 'navbar_Products_Dropdown_button_INDIVIDUAL PRODUCTS', obj: this})"
                                    target="_blank" href="" referrerpolicy="no-referrer-when-downgrade">
                                    <div class="mod-flex mod-items-center mod-p-2">
                                        <div class="mod-w-1/12">
                                            <img src="https://assets.clear.in/cleartax/images/1702036465_group181447822.png"
                                                height="30" width="30" alt="Accounts Payable">
                                        </div>
                                        <div class="mod-w-11/12">
                                            <p class="mod-text-s-14 mod-font-medium mod-text-font-500">Accounts Payable
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <a data-label="Vendor Management"
                                    onclick="handleTrack({label: 'navbar_Products_Dropdown_button_INDIVIDUAL PRODUCTS', obj: this})"
                                    target="_blank"
                                    href="https:/taxbizlegal.com/vendor-management-software?utm_ref=%2Fs%2Fv2%2Fhomev2%2F_pages_navbar"
                                    referrerpolicy="no-referrer-when-downgrade">
                                    <div class="mod-flex mod-items-center mod-p-2">
                                        <div class="mod-w-1/12">
                                            <img src="https://cdn.prod.website-files.com/6093bce33d9b4bae841b04e3/667addb87d1a644b52ef6af2_Vendor%20management%20(1).png"
                                                height="30" width="30" alt="Vendor Management">
                                        </div>
                                        <div class="mod-w-11/12">
                                            <p class="mod-text-s-14 mod-font-medium mod-text-font-500">Vendor
                                                Management</p>
                                        </div>
                                    </div>
                                </a>
                                <a data-label="MaxITC"
                                    onclick="handleTrack({label: 'navbar_Products_Dropdown_button_INDIVIDUAL PRODUCTS', obj: this})"
                                    target="_blank" href="" referrerpolicy="no-referrer-when-downgrade">
                                    <div class="mod-flex mod-items-center mod-p-2">
                                        <div class="mod-w-1/12">
                                            <img src="https://assets1.cleartax-cdn.com/cleartax/images/1676974439_group1000004144.png"
                                                height="30" width="30" alt="MaxITC">
                                        </div>
                                        <div class="mod-w-11/12">
                                            <p class="mod-text-s-14 mod-font-medium mod-text-font-500">MaxITC</p>
                                        </div>
                                    </div>
                                </a>
                                <a data-label="E-Invoicing &amp; E-Way Bill"
                                    onclick="handleTrack({label: 'navbar_Products_Dropdown_button_INDIVIDUAL PRODUCTS', obj: this})"
                                    target="_blank"
                                    href="https:/taxbizlegal.com/s/e-invoicing-enterprise-software?utm_ref=%2Fs%2Fv2%2Fhomev2%2F_pages_navbar"
                                    referrerpolicy="no-referrer-when-downgrade">
                                    <div class="mod-flex mod-items-center mod-p-2">
                                        <div class="mod-w-1/12">
                                            <img src="https://assets1.cleartax-cdn.com/cleartax/images/1676974427_group1000004146.png"
                                                height="30" width="30" alt="E-Invoicing &amp; E-Way Bill">
                                        </div>
                                        <div class="mod-w-11/12">
                                            <p class="mod-text-s-14 mod-font-medium mod-text-font-500">E-Invoicing
                                                &amp; E-Way Bill</p>
                                        </div>
                                    </div>
                                </a>
                                <a data-label="TDS"
                                    onclick="handleTrack({label: 'navbar_Products_Dropdown_button_INDIVIDUAL PRODUCTS', obj: this})"
                                    target="_blank"
                                    href="https:/taxbizlegal.com/tds?utm_ref=%2Fs%2Fv2%2Fhomev2%2F_pages_navbar"
                                    referrerpolicy="no-referrer-when-downgrade">
                                    <div class="mod-flex mod-items-center mod-p-2">
                                        <div class="mod-w-1/12">
                                            <img src=" https://assets1.cleartax-cdn.com/cleartax/images/1683875525_id.png"
                                                height="30" width="30" alt="TDS">
                                        </div>
                                        <div class="mod-w-11/12">
                                            <p class="mod-text-s-14 mod-font-medium mod-text-font-500">TDS</p>
                                        </div>
                                    </div>
                                </a>
                                <a data-label="Invoice Discounting"
                                    onclick="handleTrack({label: 'navbar_Products_Dropdown_button_INDIVIDUAL PRODUCTS', obj: this})"
                                    target="_blank" href="" referrerpolicy="no-referrer-when-downgrade">
                                    <div class="mod-flex mod-items-center mod-p-2">
                                        <div class="mod-w-1/12">
                                            <img src="https://assets1.cleartax-cdn.com/cleartax/images/1683875611_cleartds.png"
                                                height="30" width="30" alt="Invoice Discounting">
                                        </div>
                                        <div class="mod-w-11/12">
                                            <p class="mod-text-s-14 mod-font-medium mod-text-font-500">Invoice
                                                Discounting</p>
                                        </div>
                                    </div>
                                </a>
                                <a data-label="Financing"
                                    onclick="handleTrack({label: 'navbar_Products_Dropdown_button_INDIVIDUAL PRODUCTS', obj: this})"
                                    target="_blank" href="" referrerpolicy="no-referrer-when-downgrade">
                                    <div class="mod-flex mod-items-center mod-p-2">
                                        <div class="mod-w-1/12">
                                            <img src="https://assets.clear.in/cleartax/images/1702036542_financing.png"
                                                height="30" width="30" alt="Financing">
                                        </div>
                                        <div class="mod-w-11/12">
                                            <p class="mod-text-s-14 mod-font-medium mod-text-font-500">Financing</p>
                                        </div>
                                    </div>
                                </a>
                                <a data-label="Cimplyfive"
                                    onclick="handleTrack({label: 'navbar_Products_Dropdown_button_INDIVIDUAL PRODUCTS', obj: this})"
                                    target="_blank" href="" referrerpolicy="no-referrer-when-downgrade">
                                    <div class="mod-flex mod-items-center mod-p-2">
                                        <div class="mod-w-1/12">
                                            <img src="https://assets1.cleartax-cdn.com/cleartax/images/1683876414_cimplyfive.png"
                                                height="30" width="30" alt="Cimplyfive">
                                        </div>
                                        <div class="mod-w-11/12">
                                            <p class="mod-text-s-14 mod-font-medium mod-text-font-500">Cimplyfive</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mod-mb-4">
                            <div class="mod-flex mod-flex-wrap mod-justify-between mod-pt-4 mod-pb-2">
                                <div class="mod-w-1/2 mod-text-font-200 mod-text-s-14">PRODUCT SUITES</div>
                                <div class="mod-w-1/2 mod-text-s-14 mod-text-right mod-pr-4"></div>
                            </div>
                            <hr class="divider">
                            <div class="mod-block mod-py-4">
                                <a data-label="Clear Finance Cloud"
                                    onclick="handleTrack({label: 'navbar_Products_Dropdown_button_PRODUCT SUITES', obj: this})"
                                    target="_blank" href="" referrerpolicy="no-referrer-when-downgrade">
                                    <div class="mod-flex mod-items-center mod-p-2">
                                        <div class="mod-w-1/12">
                                            <img src="https://assets1.cleartax-cdn.com/cleartax/images/1683876315_cfc.png"
                                                height="30" width="30" alt="Clear Finance Cloud">
                                        </div>
                                        <div class="mod-w-11/12">
                                            <p class="mod-text-s-14 mod-font-medium mod-text-font-500">Clear Finance
                                                Cloud</p>
                                        </div>
                                    </div>
                                </a>
                                <a data-label="Clear Compliance Cloud"
                                    onclick="handleTrack({label: 'navbar_Products_Dropdown_button_PRODUCT SUITES', obj: this})"
                                    target="_blank"
                                    href="https:/taxbizlegal.com/s/clear-compliance-cloud?utm_ref=%2Fs%2Fv2%2Fhomev2%2F_pages_navbar"
                                    referrerpolicy="no-referrer-when-downgrade">
                                    <div class="mod-flex mod-items-center mod-p-2">
                                        <div class="mod-w-1/12">
                                            <img src="https://assets1.cleartax-cdn.com/cleartax/images/1683876341_ccc.png"
                                                height="30" width="30" alt="Clear Compliance Cloud">
                                        </div>
                                        <div class="mod-w-11/12">
                                            <p class="mod-text-s-14 mod-font-medium mod-text-font-500">Clear Compliance
                                                Cloud</p>
                                        </div>
                                    </div>
                                </a>
                                <a data-label="Clear Supply Chain Cloud"
                                    onclick="handleTrack({label: 'navbar_Products_Dropdown_button_PRODUCT SUITES', obj: this})"
                                    target="_blank" href="" referrerpolicy="no-referrer-when-downgrade">
                                    <div class="mod-flex mod-items-center mod-p-2">
                                        <div class="mod-w-1/12">
                                            <img src="https://assets.clear.in/cleartax/images/1716990871_supplaychain_.svg"
                                                height="30" width="30" alt="Clear Supply Chain Cloud">
                                        </div>
                                        <div class="mod-w-11/12">
                                            <p class="mod-text-s-14 mod-font-medium mod-text-font-500">Clear Supply
                                                Chain Cloud</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mod-mb-4">
                            <div class="mod-flex mod-flex-wrap mod-justify-between mod-pt-4 mod-pb-2">
                                <div class="mod-w-1/2 mod-text-font-200 mod-text-s-14">CONSUMER PRODUCTS</div>
                                <div class="mod-w-1/2 mod-text-s-14 mod-text-right mod-pr-4"></div>
                            </div>
                            <hr class="divider">
                            <div class="mod-block mod-py-4">
                                <a data-label="ITR Filing"
                                    onclick="handleTrack({label: 'navbar_Products_Dropdown_button_CONSUMER PRODUCTS', obj: this})"
                                    target="_blank"
                                    href="https:/taxbizlegal.com/income-tax-efiling?utm_ref=%2Fs%2Fv2%2Fhomev2%2F_pages_navbar"
                                    referrerpolicy="no-referrer-when-downgrade">
                                    <div class="mod-flex mod-items-center mod-p-2">
                                        <div class="mod-w-1/12">
                                            <img src="https://assets1.cleartax-cdn.com/cleartax/images/1683875678_fileitr.png"
                                                height="30" width="30" alt="ITR Filing">
                                        </div>
                                        <div class="mod-w-11/12">
                                            <p class="mod-text-s-14 mod-font-medium mod-text-font-500">ITR Filing</p>
                                        </div>
                                    </div>
                                </a>
                                <a data-label="Tax Consultant Services"
                                    onclick="handleTrack({label: 'navbar_Products_Dropdown_button_CONSUMER PRODUCTS', obj: this})"
                                    target="_blank"
                                    href="https:/taxbizlegal.com/services/?utm_ref=%2Fs%2Fv2%2Fhomev2%2F_pages_navbar"
                                    referrerpolicy="no-referrer-when-downgrade">
                                    <div class="mod-flex mod-items-center mod-p-2">
                                        <div class="mod-w-1/12">
                                            <img src="https://assets1.cleartax-cdn.com/cleartax/images/1683876285_taxconsultant.png"
                                                height="30" width="30" alt="Tax Consultant Services">
                                        </div>
                                        <div class="mod-w-11/12">
                                            <p class="mod-text-s-14 mod-font-medium mod-text-font-500">Tax Consultant
                                                Services</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mod-w-1/5 mod-hidden mod-items-center sm:mod-flex sm:mod-justify-end mobile-sidenav">
            <div class="mod-toggle mobile-sidenav-bc">
                <div class="mod-toggle-bar"></div>
                <div class="mod-toggle-bar"></div>
                <div class="mod-toggle-bar mod-toggle-bar-half"></div>
            </div>
            <div class="mod-sidenav mobile-sidenav-content mod-p-4 header-sidenav">
                <div class="mod-flex mod-flex-wrap mod-pb-8 mod-mb-8">
                    <div class="mod-mb-4 mod-w-full ">
                        <details class="mod-w-full mod-accordian">
                            <summary class="mod-cursor-pointer">
                                <div class="mod-flex mod-items-center">
                                    <p
                                        class="mod-w-11/12 mod-text-compact mod-ml-4 mod-my-0 mod-text-font-500 mod-font-medium focus:mod-text-blue-350">
                                        Explore Us</p>
                                    <div class="mod-w-1/12 mod-accordian-caret mod-order-3 mod-ml-auto"></div>
                                </div>
                            </summary>
                            <div class="mod-block mod-px-6 mod-mt-4">
                                <div class="mod-p-2 mod-text-font-500 mod-text-s-14 mod-font-medium">
                                    <a onclick="handleTrack({label: 'navbar_Company_Dropdown_button', obj: this})"
                                        target="_blank" class="hover:mod-text-blue-350"
                                        href="https://www.clear.in/s/careers?utm_ref=%2Fs%2Fv2%2Fhomev2%2F_pages_navbar">Careers</a>
                                </div>
                                <div class="mod-p-2 mod-text-font-500 mod-text-s-14 mod-font-medium">
                                    <a onclick="handleTrack({label: 'navbar_Company_Dropdown_button', obj: this})"
                                        target="_blank" class="hover:mod-text-blue-350"
                                        href="https://www.clear.in/s/press?utm_ref=%2Fs%2Fv2%2Fhomev2%2F_pages_navbar">Media
                                        &amp; Press</a>
                                </div>
                                <div class="mod-p-2 mod-text-font-500 mod-text-s-14 mod-font-medium">
                                    <a onclick="handleTrack({label: 'navbar_Company_Dropdown_button', obj: this})"
                                        target="_blank" class="hover:mod-text-blue-350"
                                        href="https:/taxbizlegal.com/s/trust?utm_ref=%2Fs%2Fv2%2Fhomev2%2F_pages_navbar">Trust
                                        &amp; Safety</a>
                                </div>
                            </div>
                        </details>
                    </div>
                    <div
                        class="mod-flex mod-h-full mod-items-center sm:mod-w-1/2 sm:mod-mt-8 sm:mod-px-2 nav-logged-out-container ">
                        <a onclick="handleTrack({label: 'navbar_button', modal: 'get-started', obj: this});"
                            class="home-file-now mod-btn mod-btn-blue mod-cursor-pointer mod-whitespace-no-wrap  mod-ml-6 lg:mod-ml-2 md:mod-ml-1 sm:mod-ml-0  sm:mod-w-full sm:mod-hidden"
                            referrerpolicy="no-referrer-when-downgrade">Get started</a>
                    </div>
                    <div class="mod-mb-4 mod-w-full nav-logged-in-container mod-hidden">
                        <details class="mod-w-full mod-accordian">
                            <summary class="mod-cursor-pointer">
                                <div class="mod-flex mod-items-center">
                                    <p
                                        class="mod-w-11/12 mod-text-compact mod-ml-4 mod-text-font-500 mod-font-medium focus:mod-text-blue-350">
                                        My Account</p>
                                    <div class="mod-w-1/12 mod-accordian-caret mod-order-3 mod-ml-auto"></div>
                                </div>
                            </summary>
                            <div class="mod-block mod-px-6 mod-mt-4">
                                <div class="mod-p-2 mod-text-font-500 mod-text-s-14 mod-font-medium">
                                    <a onclick="handleTrack({label: 'navbar_My Account_Dropdown_button', obj: this})"
                                        target="_blank" class="hover:mod-text-blue-350"
                                        href="https:/taxbizlegal.com/services/my_orders?utm_ref=%2Fs%2Fv2%2Fhomev2%2F_pages_navbar">My
                                        orders</a>
                                </div>
                                <div class="mod-p-2 mod-text-font-500 mod-text-s-14 mod-font-medium">
                                    <a onclick="handleTrack({label: 'navbar_My Account_Dropdown_button', obj: this})"
                                        target="_blank" class="hover:mod-text-blue-350" href="">My
                                        GST</a>
                                </div>
                                <div class="mod-p-2 mod-text-font-500 mod-text-s-14 mod-font-medium">
                                    <a onclick="handleTrack({label: 'navbar_My Account_Dropdown_button', obj: this})"
                                        target="_blank" class="hover:mod-text-blue-350"
                                        href="https:/taxbizlegal.com/launchpad?source=home&amp;utm_ref=%2Fs%2Fv2%2Fhomev2%2F_pages_navbar">All
                                        Products</a>
                                </div>
                                <div class="mod-w-full mod-p-2 nav-logged-in-container mod-hidden">
                                    <a href="https:/taxbizlegal.com/?utm_ref=%2Fs%2Fv2%2Fhomev2%2F_pages_navbar#"
                                        onclick="logout()">
                                        <p class="mod-inline-block mod-text-font-500 mod-text-s-14 mod-font-medium">
                                            Logout</p>
                                    </a>
                                </div>
                            </div>
                        </details>
                    </div>
                </div>
            </div>
            <div class="mod-overlay"></div>
        </div>
    </div>
</nav>
