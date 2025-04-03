<section class="services-intro nav-bg mod-items-center mod-w-full mod-my-12 mod-flex mod-justify-center mod-relative">
    <div
        class="mod-items-center mod-px-24 mod-grid-12 mod-w-full sm:mod-gap-10 sm:mod-flex sm:mod-flex-col
        sm:mod-px-10 md:mod-px-12 md:mod-items-start ">
        <div class="section-heading">
            <p class="h5 text-primary mb-2">Start Your Private Limited Company with Ease!</p>
            <h1 class="section-title mod-font-bold mod-leading-semi-loose mod-space-light-semi mod-mb-8" data-fade="up">
                Register Your Private Limited Company & Unlock Growth Opportunities!</h1>
            <div class="mod-flex mod-flex-col mod-gap-10">
                <div class="text mod-font-medium mod-leading-loose" data-fade="up">
                    <ul class="mod-ml-0 mod-mb-1 mod-pl-1 mod-list-none mod-flex mod-flex-col mod-gap-2 mod-text-base">
                        <li>👉 100% Online, Hassle-Free Registration Process</li>
                        <li>👉 Expert Guidance & Legal Compliance Assistance</li>
                        <li>👉 Quick Turnaround & Transparent Pricing</li>
                    </ul>
                </div>
                <p class="mb-0 mod-leading-light-loose">Experience seamless private limited company registration with
                    our expert consultants. We handle paperwork, legal formalities, and compliance, ensuring a smooth
                    process. Focus on growth while we simplify your journey. Get started today!</p>
            </div>
        </div>
        <div class="section-content mod-pr-12 md:mod-pr-0 sm:mod-pr-0">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <h1 class="h2 mb-lg-20">
                        <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Register Today, Secure Your Future</font>
                        </font>
                    </h1>
                    <form action="/registrace/adept" method="post" id="frm-adeptRegistrationForm-form"
                        class="loadable loadable-overlayed ajax" novalidate="">


                        <div class="form-floating required">
                            <input type="text" name="user[name]" maxlength="128" placeholder=" "
                                class="form-control text" id="frm-adeptRegistrationForm-form-user-name" required=""
                                data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;This field is required&quot;}]">

                            <label for="frm-adeptRegistrationForm-form-user-name" class="required">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Name</font>
                                </font>
                            </label>
                        </div>

                        <div class="form-floating required">
                            <input type="tel" name="user[phone]" pattern="^[+\(\) 0-9]+$" placeholder=" "
                                class="form-control" id="frm-adeptRegistrationForm-form-user-phone" required=""
                                data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;Pole 'Telefonní číslo' je povinné.&quot;},{&quot;op&quot;:&quot;:pattern&quot;,&quot;msg&quot;:&quot;Telefonní číslo může obsahovat pouze čísla, mezeru a znak +.&quot;,&quot;arg&quot;:&quot;^[+\\(\\) 0-9]+$&quot;}]">

                            <label for="frm-adeptRegistrationForm-form-user-phone" class="required">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Mobile number</font>
                                </font>
                            </label>
                        </div>

                        <div class="form-floating required">
                            <input type="email" name="user[mail]" placeholder=" " class="form-control text"
                                id="frm-adeptRegistrationForm-form-user-mail" required=""
                                data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;This field is required.&quot;},{&quot;op&quot;:&quot;:email&quot;,&quot;msg&quot;:&quot;E-mailová adresa v poli 'E-mail' není ve správném formátu.&quot;}]">

                            <label for="frm-adeptRegistrationForm-form-user-mail" class="required">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">E-mail</font>
                                </font>
                            </label>
                        </div>

                        <div class="form-check required mt-40">
                            <input type="checkbox" name="_comply" class="form-check-input"
                                id="frm-adeptRegistrationForm-form-_comply" required=""
                                data-nette-rules="[{&quot;op&quot;:&quot;:filled&quot;,&quot;msg&quot;:&quot;Pole 'Souhlasím s podmínkami užití portálu a zásadami ochrany osobních údajů' je povinné.&quot;}]">

                            <label class="form-check-label required" for="frm-adeptRegistrationForm-form-_comply">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">I agree to </font>
                                </font>
                                <a href="{{ route('front.terms') }}" target="_blank" rel="noopener norefererrer">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">the terms of use of the taxbizlegal.com
                                        </font>
                                    </font>
                                </a>
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;"> and </font>
                                </font><a href="{{ route('front.privacy') }}" target="_blank" rel="noopener noreferrer">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">the privacy policy</font>
                                    </font>
                                </a>
                            </label>
                        </div>

                        <div class="form-submit">

                            <button type="submit" name="_submit"
                                class="icon-hover-right btn btn-sm btn-primary loadable-disabled">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Enquire Now</font>
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
            </div>
        </div>
    </div>
</section>

<section
    class="services-shortcut mod-w-full mod-mt-24 mod-z-40 services-nav mod-bg-transparent mod-sticky md:mod-mt-16 sm:mod-mt-16 sm:mod-hidden">
    <nav
        class="mod-w-full mod-max-w-screen-xl mod-px-32 mod-mx-auto mod-overflow-hidden md:mod-px-5 lg:mod-px-6 sm:mod-px-0">
        <div
            class="mod-flex services-nav-container mod-items-center mod-justify-between mod-cursor-pointer mod-rounded-lg mod-border-sm mod-overflow-hidden mod-text-s-14 mod-font-medium">
            <div class="mod-whitespace-nowrap mod-py-4 mod-sticky mod-left-0">
                <span class="services-nav-title mod-pl-6 mod-pr-3 mod-border-r-sm">PVT LTD COMPANY</span>
            </div>
            <ul class="services-nav-ul mod-flex mod-items-center mod-my-0 mod-justify-center mod-list-none">
                <li data-target="overview"
                    class="services-nav-item mod-px-5 mod-py-4 mod-border-t-md mod-border-none mod-whitespace-nowrap mod-font-medium text-blue-350 border-blue-350">
                    Overview</li>
                <li data-target="advantages"
                    class="services-nav-item mod-px-5 mod-py-4 mod-border-t-md mod-border-none mod-whitespace-nowrap mod-font-medium text-blue-350 border-blue-350">
                    Advantages</li>
                <li class="services-nav-item mod-px-5 mod-py-4 mod-border-t-md mod-border-none mod-whitespace-nowrap mod-font-medium text-blue-350 border-blue-350"
                    data-target="resources">
                    Resources</li>
                <li data-target="pricing"
                    class="services-nav-item mod-px-5 mod-py-4 mod-border-t-md mod-border-none mod-whitespace-nowrap mod-font-medium text-blue-350 border-blue-350">
                    Pricing</li>
                <li class="services-nav-item mod-px-5 mod-py-4 mod-border-t-md mod-border-none mod-whitespace-nowrap mod-font-medium text-blue-350 border-blue-350"
                    data-target="faq">
                    FAQ</li>
            </ul>
            <a href="" rel="noreferrer"
                class="services-nav-link mod-whitespace-nowrap mod-px-6 mod-my-2 mod-leading-loose mod-flex mod-items-center mod-gap-2">File
                Now<svg width="16" height="14" viewBox="0 0 18 18" fill="none"
                    xmlns="http://www.w3.org/2000/svg" class="">
                    <g clip-path="url(#clip0_1884_14267)">
                        <path
                            d="M3.75 9.75H12.645L9.9225 13.02C9.85947 13.0958 9.81199 13.1834 9.78277 13.2775C9.75356 13.3717 9.74318 13.4707 9.75223 13.5689C9.77052 13.7673 9.86684 13.9502 10.02 14.0775C10.1732 14.2048 10.3706 14.2661 10.5689 14.2478C10.7673 14.2295 10.9502 14.1332 11.0775 13.98L14.8275 9.48C14.8527 9.44421 14.8753 9.40661 14.895 9.3675C14.895 9.33 14.9325 9.3075 14.9475 9.27C14.9815 9.18401 14.9993 9.09247 15 9C14.9993 8.90753 14.9815 8.816 14.9475 8.73C14.9475 8.6925 14.91 8.67 14.895 8.6325C14.8753 8.5934 14.8527 8.55579 14.8275 8.52L11.0775 4.02C11.007 3.93534 10.9187 3.86725 10.8189 3.82059C10.7191 3.77392 10.6102 3.74982 10.5 3.75C10.3248 3.74966 10.1549 3.81069 10.02 3.9225C9.94406 3.98546 9.88128 4.06279 9.83527 4.15005C9.78925 4.23731 9.7609 4.33279 9.75185 4.43102C9.74279 4.52926 9.7532 4.62831 9.78249 4.72251C9.81177 4.81672 9.85935 4.90422 9.9225 4.98L12.645 8.25H3.75C3.55109 8.25 3.36032 8.32902 3.21967 8.46967C3.07902 8.61032 3 8.80109 3 9C3 9.19891 3.07902 9.38968 3.21967 9.53033C3.36032 9.67098 3.55109 9.75 3.75 9.75Z"
                            fill="#1572ED"></path>
                    </g>
                    <defs>
                        <clipPath id="clip0_1884_14267">
                            <rect width="18" height="18" fill="white"></rect>
                        </clipPath>
                    </defs>
                </svg></a>
        </div>
    </nav>
</section>

<section class="container mod-my-20 lg:mod-my-24" id="overview">
    <div class="row justify-content-between">
        <div class="col-12 col-md-6 col-xxl-5 sm:mod-order-2">
            <div class="mod-py-8">

                <h1 class="mod-text-s-24">All you need to know about Private Limted Company Registration</h1>
                <p>A Private Limited Company (PLC) in India is one of the most popular and simplest forms of company
                    registration. It offers limited liability and legal protection to its shareholders, making it an
                    ideal choice for many entrepreneurs. Positioned as a hybrid entity between a partnership firm and a
                    public company, it allows businesses to enjoy the benefits of both forms.</p>
                <p>To register a PLC, at least two individuals are required, and one individual can serve both as the
                    director and shareholder. The liability of the company’s members is confined to the value of their
                    shares, providing protection for personal assets. Once the Certificate of Incorporation is received,
                    the company can commence its operations. The entire registration process typically takes around 15
                    working days to complete.</p>
                <p>Taxbizlegal.com is a trusted platform that provides end-to-end services for Private Limited Company
                    registration, including incorporation, compliance, advisory, and consultancy. The process is quick,
                    affordable, and simple. Additionally, we offer services for Partnership Registration, LLP
                    Incorporation, One Person Company registration, and more. Contact us for a free consultation at
                    info@taxbizlegal.com or call our compliance manager at 09*********.</p>

            </div>
        </div>
        <div class="col-12 col-md-6 sm:mod-order-1 mod-pl-16 md:mod-pl-0 sm:mod-pl-0">
            <img decoding="async" width="1024" height="681"
                src="{{ asset('images/svg/pvt-ltd-figure-01.svg') }}" class="mod-max-w-10/12" alt=""
                loading="lazy">
        </div>
    </div>
</section>

<section class="bg-blue-100 py-80 py-xxl-120 benefits" data-theme="dark" id="advantages">
    <div class="section-wrapper mod-grid-12 sm:mod-flex sm:mod-flex-col mod-mx-8 sm:mod-mx-0 mod-px-24">
        <div class="section-heading">
            <h2 class="section-title mod-text-s-28 mod-font-bold mod-leading-semi-loose mod-space-light-semi"
                data-fade="up">
                Advantages of Private Limited Company
            </h2>
        </div>
        <div class="section-content mod-grid-4">
            <div class="mod-flex mod-flex-col mod-gap-4 xl:mod-pr-20 lg:mod-pr-8 sm:mod-pr-4 sm:mod-flex-row"
                data-fade="up">
                <div class="item-icon">
                    <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 122.88 107.19">
                        <defs>
                            <style>
                                .cls-1 {
                                    fill-rule: evenodd;
                                }
                            </style>
                        </defs>
                        <title>hand-money</title>
                        <path class="cls-1"
                            d="M25.11,93.69V54.91H42.56c7.43,1.31,14.79,5.31,22.19,10H78.3c6.14.37,9.35,6.59,3.39,10.67-4.75,3.49-11,3.29-17.46,2.72-4.43-.22-4.62,5.72,0,5.75,1.61.13,3.36-.25,4.88-.25,8,0,14.63-1.54,18.67-7.88l2-4.74,20.2-10c10.09-3.32,17.27,7.23,9.83,14.57A263.86,263.86,0,0,1,74.89,102.2c-11.13,6.77-22.26,6.54-33.36,0L25.11,93.69ZM50.61,0l65.12,19.66-9.79,34.18-4.58-.7,7-25,.1-.32a4.47,4.47,0,0,0-3.12-5.48l-2.2-.6,0-.07L92.78,18.93,49.13,5.15,50.61,0ZM39.84,6.9,105,26.55,95.17,60.73,30.05,41.08,39.84,6.9ZM62.53,28.66a8.09,8.09,0,1,1,.34,11.42,8.09,8.09,0,0,1-.34-11.42ZM49.34,15.24,92.43,28.6A5.26,5.26,0,0,0,96,35.09L92.18,48.61a5.25,5.25,0,0,0-6.49,3.61L42.59,38.86A5.26,5.26,0,0,0,39,32.37l3.86-13.52a5.25,5.25,0,0,0,6.5-3.61ZM0,51.22H19.86V97.59H0V51.22Z" />
                    </svg>
                </div>
                <div class="item-content">
                    <h3 class="item-title">No Minimum Capital Requirement</h3>
                    <p class="item-text">A Private Limited Company can be registered with a minimum authorized share
                        capital of just Rs. 10,000, making it highly accessible for startups and small businesses.</p>
                </div>
            </div>
            <div class="mod-flex mod-flex-col mod-gap-4 xl:mod-pr-20 lg:mod-pr-8 sm:mod-pr-4 sm:mod-flex-row"
                data-fade="up"
                style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                <div class="item-icon"><svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14 11h-1v-1a1 1 0 0 0-2 0v1h-1a1 1 0 0 0 0 2h1v1a1 1 0 0 0 2 0v-1h1a1 1 0 0 0 0-2Zm5.63-7.35a1.007 1.007 0 0 0-.835-.203 7.98 7.98 0 0 1-6.223-1.267.999.999 0 0 0-1.144 0 7.976 7.976 0 0 1-6.223 1.267A1 1 0 0 0 4 4.427v7.456a9.019 9.019 0 0 0 3.769 7.324l3.65 2.607a1 1 0 0 0 1.162 0l3.65-2.607A9.018 9.018 0 0 0 20 11.883V4.426a1 1 0 0 0-.37-.776ZM18 11.883a7.017 7.017 0 0 1-2.93 5.696L12 19.771 8.93 17.58A7.017 7.017 0 0 1 6 11.883v-6.3a9.955 9.955 0 0 0 6-1.391 9.955 9.955 0 0 0 6 1.391v6.3Z"
                            fill="#0B1126"></path>
                    </svg></div>
                <div class="item-content">
                    <h3 class="item-title">Limited Liability</h3>
                    <p class="item-text">It operates as an independent legal entity, ensuring that directors' personal
                        assets remain safeguarded against company debts or financial obligations.</p>
                </div>
            </div>
            <div class="mod-flex mod-flex-col mod-gap-4 xl:mod-pr-20 lg:mod-pr-8 sm:mod-pr-4 sm:mod-flex-row"
                data-fade="up"
                style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                <div class="item-icon">
                    <?xml version="1.0" encoding="utf-8"?><svg version="1.1" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 122.88 68.04" style="enable-background:new 0 0 122.88 68.04"
                        xml:space="preserve">
                        <g>
                            <path
                                d="M2.03,56.52c-2.66,2.58-2.72,6.83-0.13,9.49c2.58,2.66,6.83,2.72,9.49,0.13l27.65-26.98l23.12,22.31 c2.67,2.57,6.92,2.49,9.49-0.18l37.77-38.22v19.27c0,3.72,3.01,6.73,6.73,6.73s6.73-3.01,6.73-6.73V6.71h-0.02 c0-1.74-0.67-3.47-2-4.78c-1.41-1.39-3.29-2.03-5.13-1.91H82.4c-3.72,0-6.73,3.01-6.73,6.73c0,3.72,3.01,6.73,6.73,6.73h17.63 L66.7,47.2L43.67,24.97c-2.6-2.5-6.73-2.51-9.33,0.03L2.03,56.52L2.03,56.52z" />
                        </g>
                    </svg>
                </div>
                <div class="item-content">
                    <h3 class="item-title">Fundraising Opportunities</h3>
                    <p class="item-text">Its structured legal framework makes it easier to secure funding from venture
                        capitalists, angel investors, and financial institutions, enhancing growth opportunities.</p>
                </div>
            </div>
            <div class="mod-flex mod-flex-col mod-gap-4 xl:mod-pr-20 lg:mod-pr-8 sm:mod-pr-4 sm:mod-flex-row"
                data-fade="up"
                style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                <div class="item-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" shape-rendering="geometricPrecision"
                        text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd"
                        clip-rule="evenodd" viewBox="0 0 469 511.98">
                        <path
                            d="M60.21 401.42c5.6 0 10.14 4.54 10.14 10.14 0 5.6-4.54 10.14-10.14 10.14-5.6 0-10.15-4.54-10.15-10.14 0-5.6 4.55-10.14 10.15-10.14zM242.87 216.1h4.21c3.83 0 6.95-3.12 6.95-6.95v-11.3c0-3.82-3.12-6.94-6.95-6.94h-25.16c-3.83 0-6.95 3.12-6.95 6.94v11.3c0 3.83 3.12 6.95 6.95 6.95h4.28l-2.04 18.06c6.19-2.68 12.83-4.63 20.02-5.95l-1.31-12.11zM92.16 257.65c.76-25.52 3.33-43.67 29.18-53.36 17.66-6.63 40.25-15.03 56.5-25.13l20.25 73.33c-1.41 1.46-2.8 3-4.16 4.61-20.15.31-37.41 6.66-54.41 17.1h-13.35c-9.07-9.78-21.1-14.86-34.01-16.55zM198.88 154.9c.77-6.5-18.47-31.27-21.98-43.15-7.53-12-10.2-31.01-1.99-43.69 3.28-5.02 1.86-9.44 1.86-16.36 0-68.92 120.76-68.95 120.76 0 0 8.72-2 10.79 2.73 17.65 7.92 11.45 3.83 31.75-2.83 42.4-4.28 12.49-24.48 36.07-23.07 43.15 1.19 35.39-75.7 34.2-75.48 0zm93.69 20.62c14.84 9.49 35.88 17.29 52.71 22.91 25.45 8.5 31.24 29.75 32.45 60.56-6.19.53-12.22 1.82-18.02 4.19-30.92-20.1-50.25-34.48-81.19-36.82l14.05-50.84zm62.77 137.42c0-1.92.12-3.75.36-5.47l-19.94-13.31c-2.88-1.92-6.01-4.12-9.16-6.32-11.34-7.95-23.02-16.13-35.6-19.44a98.312 98.312 0 0 0-22.68-3.13c-7-.13-14.15.53-20.86 2.27-4.01 1.03-7.88 2.48-11.48 4.37-3.19 1.69-6.17 3.76-8.82 6.23l-13.39 15.93a5.87 5.87 0 0 1-1.67 1.99l-36.93 43.95c.55 2.8 1.65 5.15 3.17 7.04 1.76 2.17 4.1 3.79 6.81 4.81 2.85 1.07 6.15 1.48 9.64 1.19 5.57-.46 11.51-2.74 16.86-6.98l10.26-8.48c2.6-2.14 4.75-4.12 6.9-6.08 4.73-4.33 9.47-8.65 14.44-11.61 11.51-6.87 22.95-7.09 34.28 11.91l58.06 104.72h19.74l.01-123.59zm4.68-16.76c.89-1.25 1.92-2.39 3.07-3.43 5.08-4.56 12.33-6.79 21.63-6.8v-.02l50.48.02c10.55-.04 19.15 1.89 25.1 6.46 6.61 5.1 9.72 12.87 8.4 23.99l-11.16 115.32c-.81 10.29-3.54 18.36-8.38 23.93-5.16 5.93-12.34 8.85-21.75 8.46l-45.39.01c-6.35.33-11.74-1.4-16.25-5-3.31-2.63-6.04-6.24-8.23-10.74h-15.69c2.11 6.18 2 12.05.32 17.26-1.74 5.36-5.13 9.93-9.44 13.35-4.22 3.35-9.38 5.64-14.76 6.53-5.27.86-10.78.39-15.9-1.74-5.95 6.22-12.22 10.15-18.77 11.95-6.56 1.8-13.21 1.44-19.94-.92-6.39 7.08-13.46 11.52-21.24 13.21-7.92 1.71-16.34.53-25.27-3.68-2.77 2.18-5.69 3.9-8.72 5.15a32.666 32.666 0 0 1-13.56 2.47c-11.31-.33-18.93-3.68-25-9.1-5.78-5.17-9.67-11.81-14.05-19.45l-25.03-43.64h-19.4c-1.08 5.46-2.97 10.12-5.75 13.84l-.27.39c-4.95 6.36-12.22 9.74-22.26 9.53l-42.32.01c-8.39 1.36-15.58-.7-21.21-7.22-4.98-5.77-8.39-15.12-9.84-28.88l-.06-.5L.63 318.58c-1.73-11.7.18-19.96 4.89-25.61 4.74-5.7 11.89-8.28 20.7-8.69l.72-.04h53.59v.02c8.47-.09 15.74 1.3 21.25 4.86v.02c4.44 2.87 7.62 6.92 9.27 12.42h36.46c9.16-6.18 17.74-11.04 27.24-13.99 9.31-2.9 19.31-3.93 31.24-2.5l12.48-14.84.46-.5c3.48-3.3 7.38-6.02 11.57-8.23 4.39-2.32 9.12-4.08 14.01-5.35 7.79-2.01 16-2.77 23.99-2.63 9.06.17 17.86 1.51 25.47 3.5h.02c14.55 3.82 27.13 12.63 39.33 21.18 2.93 2.05 5.83 4.08 8.97 6.18l17.73 11.8zm-259.58 12.95a6.11 6.11 0 0 1-.24-1.66c0-.16.01-.32.02-.47-.65-3.81-2.32-6.39-4.78-7.99-3.46-2.21-8.58-3.07-14.84-3h-.07v.03l-53.81-.01c-5.54.26-9.79 1.59-12.17 4.45-2.55 3.06-3.47 8.35-2.23 16.54l.06.53 8.77 108.65c1.18 11.23 3.6 18.45 7.03 22.43 2.71 3.14 6.41 4.03 10.85 3.22.36-.06.71-.09 1.06-.09l42.39-.02.63.03c5.93.11 10.05-1.67 12.64-5.01l.21-.25c2.87-3.89 4.28-9.9 4.5-17.6l-.02-119.78zm11.8 118.84h21.67c2.29 0 4.27 1.31 5.25 3.21l26.59 46.37c3.89 6.8 7.33 12.68 11.66 16.55 4.05 3.62 9.35 5.87 17.49 6.11 3.05.09 5.97-.45 8.76-1.6 1.7-.7 3.38-1.65 5.02-2.84l-17.33-32.42c-1.52-2.86-.44-6.43 2.42-7.95a5.879 5.879 0 0 1 7.96 2.42l18.83 35.23c7.01 3.57 13.36 4.68 19.08 3.44 5.22-1.13 10.15-4.27 14.78-9.33l-27.14-42.6c-1.74-2.73-.93-6.37 1.8-8.11 2.74-1.74 6.38-.94 8.12 1.8l28.6 44.9c5.01 2.03 9.83 2.5 14.42 1.24 4.38-1.21 8.77-4.01 13.15-8.55l-25.92-48.78a5.91 5.91 0 0 1 2.45-7.98 5.9 5.9 0 0 1 7.97 2.45l26.81 50.45c3.48 2.03 7.52 2.55 11.4 1.92 3.39-.56 6.65-2.01 9.32-4.13 2.58-2.05 4.58-4.7 5.56-7.73 1.08-3.32.97-7.23-.88-11.48-.39-.89-.54-1.82-.48-2.72a5.906 5.906 0 0 1-3.35-3.89l-58.83-106.13c-6.54-10.94-12.44-11.22-18.13-7.83-4.05 2.41-8.3 6.3-12.55 10.19-2.58 2.35-5.17 4.72-7.32 6.49l-10.43 8.6c-7.28 5.78-15.47 8.89-23.23 9.53-5.17.43-10.2-.23-14.72-1.93-4.67-1.75-8.76-4.59-11.87-8.45-3.35-4.16-5.54-9.43-6.06-15.7-.15-1.8.52-3.47 1.71-4.65l31.79-37.83c-6.76-.1-12.74.82-18.36 2.57-8.56 2.67-16.55 7.32-25.3 13.29-1 .79-2.27 1.26-3.65 1.26h-37.06v114.61zm294.94-26.55c5.6 0 10.15 4.54 10.15 10.14 0 5.6-4.55 10.14-10.15 10.14-5.6 0-10.14-4.54-10.14-10.14 0-5.6 4.54-10.14 10.14-10.14z" />
                    </svg>
                </div>
                <div class="item-content">
                    <h3 class="item-title">Enhanced Credibility</h3>
                    <p class="item-text">
                        Since company information is publicly available, it builds trust and credibility among
                        customers, investors, and financial partners, improving business reputation.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container my-80 my-xxl-120" id="resources">

    <h1 class="display-6 mb-32 mod-font-semibold mod-text-s-24">
        Selecting the Ideal Business Structure for Your Company
    </h1>
    <div class="row gy-40 gx-lg-40">
        <div class="col-lg-4">
            <div class="d-flex flex-column gap-12 gap-lg-3 mx-auto">
                <h2 class="mb-0">Company Limited by
                    <span class="text-primary mod-font-bold">Shares</span>
                </h2>
                <p class="mb-0 text-lg">A company limited by shares is a distinct legal entity from its shareholders
                    and directors. It can enter into contracts, own assets, and operate independently under its business
                    name.</p>
                <p class="mb-0 text-lg">Shareholders’ liability is limited to their investment, ensuring their
                    personal assets remain protected from the company’s financial obligations. This structure is widely
                    chosen for its security and credibility.</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="d-flex flex-column gap-12 gap-lg-3 mx-auto">
                <h2 class="mb-0">Company Limited by
                    <span class="text-primary mod-font-bold">Guarantee</span>
                </h2>
                <p class="mb-0 text-lg">A company limited by guarantee does not have shareholders or share capital.
                    Instead, it is backed by guarantors who commit a fixed amount towards company debts if necessary.
                </p>
                <p class="mb-0 text-lg">Such companies usually operate as non-profits, with profits reinvested into
                    the business to support its objectives. Guarantors do not receive a share of the profits.</p>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="d-flex flex-column gap-12 gap-lg-3 mx-auto">
                <h2 class="mb-0">
                    <span class="text-primary mod-font-bold">Unlimited</span> Company
                </h2>
                <p class="mb-0 text-lg">An unlimited company, as per Section 2(92) of the Companies Act, 2013, does
                    not impose financial liability limits on its shareholders.</p>
                <p class="mb-0 text-lg">In case of dissolution, shareholders are fully responsible for covering all
                    company debts, even beyond their initial investment. This structure offers operational flexibility
                    but comes with higher financial risk.</p>
            </div>
        </div>
    </div>

</section>

<section class="bg-blue-100 py-40 py-xxl-40">
    <div class="doc-required container mod-flex mod-flex-col mod-gap-8">
        <h2 class="mod-font-semibold mod-text-s-28 mod-leading-semi-loose mod-space-light-semi">
            Documents Required for Registering <span class="text-blue">Your</span> Pvt Ltd. Company
        </h2>
        <div class="section-content mod-grid-12">
            <div class="img mod-flex mod-justify-center mod-overflow-hidden mod-items-center" data-fade="in">
                <img decoding="async" width="714" height="402"
                    src="{{ asset('images/svg/customer-doc-required-service-banner.svg') }}"
                    class="attachment-large size-large" alt=""
                    sizes="auto, (max-width: 714px) 100vw, 714px" loading="lazy">
            </div>
            <div class="items mod-grid-4">
                <div class="mod-flex mod-flex-col mod-gap-2" data-fade="up">
                    <div class="item-number">01.</div>
                    <p class="item-text">Passport Size Photograph</p>
                </div>
                <div class="mod-flex mod-flex-col mod-gap-2" data-fade="up">
                    <div class="item-number">02.</div>
                    <p class="item-text">Individual PAN Card</p>
                </div>
                <div class="mod-flex mod-flex-col mod-gap-2" data-fade="up"
                    style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                    <div class="item-number">03.</div>
                    <p class="item-text">Registered Office Proof</p>
                </div>
                <div class="mod-flex mod-flex-col mod-gap-2" data-fade="up">
                    <div class="item-number">04.</div>
                    <p class="item-text">Aadhar Card</p>
                </div>
                <div class="mod-flex mod-flex-col mod-gap-2" data-fade="up">
                    <div class="item-number">05.</div>
                    <p class="item-text">Address Proof</p>
                </div>
                <div class="mod-flex mod-flex-col mod-gap-2" data-fade="up">
                    <div class="item-number">06.</div>
                    <p class="item-text">No Objection Certificate / NOC</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container my-40">
    <h1 class="display-6 mb-32 mod-font-semibold mod-text-s-28">Compliance Required for Forming a Private Limited Company</h1>

    <div class="mod-grid mod-mt-4 mod-gap-4 mod-grid-template-col-2 sm:mod-grid-template-col-2">
        <div>
            <h3 class="text-2xl font-semibold">Why Compliance Matters</h3>
            <p class="text-gray-600 mt-2">
                Staying compliant not only builds credibility for your private limited company but also ensures smooth functioning, legal protection, and better funding opportunities. Here’s a quick guide to help you understand what’s needed right after registration.
            </p>
            <button class="mt-6 bg-yellow-400 hover:bg-yellow-500 text-black font-bold py-2 px-6 rounded-lg">Get Help with Compliance</button>
        </div>
        <div class="space-y-6">
            <div class="flex items-start border-b pb-4">
                <span class="text-xl font-semibold">Board Meetings</span>
                <span class="ml-auto text-gray-700">At least 2 board meetings each year with a minimum of 2 directors or 1/3rd of the total. Proper minutes must be recorded.</span>
                <i class="fas fa-check-circle text-yellow-400 ml-2"></i>
            </div>
            <div class="flex items-start border-b pb-4">
                <span class="text-xl font-semibold">Annual General Meeting (AGM)</span>
                <span class="ml-auto text-gray-700">Must be held once every year, with a gap of no more than 15 months between two AGMs.</span>
                <i class="fas fa-check-circle text-yellow-400 ml-2"></i>
            </div>
            <div class="flex items-start border-b pb-4">
                <span class="text-xl font-semibold">Auditor Appointment</span>
                <span class="ml-auto text-gray-700">An auditor must be appointed within 15 days of incorporation by filing Form ADT-1 with the RoC.</span>
                <i class="fas fa-check-circle text-yellow-400 ml-2"></i>
            </div>
            <div class="flex items-start border-b pb-4">
                <span class="text-xl font-semibold">Financial Reporting</span>
                <span class="ml-auto text-gray-700">File annual returns (Form MGT-7) and financial statements (Form AOC-4) every financial year.</span>
                <i class="fas fa-check-circle text-yellow-400 ml-2"></i>
            </div>
            <div class="flex items-start">
                <span class="text-xl font-semibold">Statutory Records</span>
                <span class="ml-auto text-gray-700">Maintain key registers and ensure accounts are audited by a certified statutory auditor.</span>
                <i class="fas fa-check-circle text-yellow-400 ml-2"></i>
            </div>
        </div>
    </div>
</section>


<section class="container mod-my-16 lg:mod-my-24">
    <article class="banner bg-blue-100 mod-overflow-hidden py-40 px-4 p-lg-5 lg:mod-px-12 pb-xxl-4">
        <div class="row gy-32 gx-xl-40 mod-relative justify-content-center align-items-center">
            <div class="col-lg-12 d-flex flex-column mod-gap-8">
                <h2 class="display-6 fw-bold mb-0">Register your Private Limited Company with <span
                        class="text-blue mod-font-semibold">Us</span> in 5 Simple Steps</h2>
                <p class="text-lg mb-0 pe-xl-80 me-xxl-4 mod-w-5/6 sm:mod-w-full">Starting your own private limited
                    company is now easier than ever! Just follow these 5 simple steps, and we will handle the process
                    with accuracy and efficiency. Let us guide you through every step!</p>
                <div
                    class="d-flex justify-content-center mod-mt-4 justify-content-lg-start gap-2 gap-sm-3 gap-xl-4 text-center svg-scale scale-4 sm:mod-flex-col sm:mod-w-full">
                    <figure class="mb-0 mod-flex mod-flex-col mod-items-start mod-text-left mod-gap-4">
                        <div class="mod-flex ">
                            <span class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="none" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M1 20V17.2C1 16.6333 1.14583 16.1125 1.4375 15.6375C1.72917 15.1625 2.11667 14.8 2.6 14.55C3.63333 14.0333 4.68333 13.6458 5.75 13.3875C6.81667 13.1292 7.9 13 9 13C10.1 13 11.1833 13.1292 12.25 13.3875C13.3167 13.6458 14.3667 14.0333 15.4 14.55C15.8833 14.8 16.2708 15.1625 16.5625 15.6375C16.8542 16.1125 17 16.6333 17 17.2V20H1ZM19 20V17C19 16.2667 18.7958 15.5625 18.3875 14.8875C17.9792 14.2125 17.4 13.6333 16.65 13.15C17.5 13.25 18.3 13.4208 19.05 13.6625C19.8 13.9042 20.5 14.2 21.15 14.55C21.75 14.8833 22.2083 15.2542 22.525 15.6625C22.8417 16.0708 23 16.5167 23 17V20H19ZM9 12C7.9 12 6.95833 11.6083 6.175 10.825C5.39167 10.0417 5 9.1 5 8C5 6.9 5.39167 5.95833 6.175 5.175C6.95833 4.39167 7.9 4 9 4C10.1 4 11.0417 4.39167 11.825 5.175C12.6083 5.95833 13 6.9 13 8C13 9.1 12.6083 10.0417 11.825 10.825C11.0417 11.6083 10.1 12 9 12ZM19 8C19 9.1 18.6083 10.0417 17.825 10.825C17.0417 11.6083 16.1 12 15 12C14.8167 12 14.5833 11.9792 14.3 11.9375C14.0167 11.8958 13.7833 11.85 13.6 11.8C14.05 11.2667 14.3958 10.675 14.6375 10.025C14.8792 9.375 15 8.7 15 8C15 7.3 14.8792 6.625 14.6375 5.975C14.3958 5.325 14.05 4.73333 13.6 4.2C13.8333 4.11667 14.0667 4.0625 14.3 4.0375C14.5333 4.0125 14.7667 4 15 4C16.1 4 17.0417 4.39167 17.825 5.175C18.6083 5.95833 19 6.9 19 8ZM3 18H15V17.2C15 17.0167 14.9542 16.85 14.8625 16.7C14.7708 16.55 14.65 16.4333 14.5 16.35C13.6 15.9 12.6917 15.5625 11.775 15.3375C10.8583 15.1125 9.93333 15 9 15C8.06667 15 7.14167 15.1125 6.225 15.3375C5.30833 15.5625 4.4 15.9 3.5 16.35C3.35 16.4333 3.22917 16.55 3.1375 16.7C3.04583 16.85 3 17.0167 3 17.2V18ZM9 10C9.55 10 10.0208 9.80417 10.4125 9.4125C10.8042 9.02083 11 8.55 11 8C11 7.45 10.8042 6.97917 10.4125 6.5875C10.0208 6.19583 9.55 6 9 6C8.45 6 7.97917 6.19583 7.5875 6.5875C7.19583 6.97917 7 7.45 7 8C7 8.55 7.19583 9.02083 7.5875 9.4125C7.97917 9.80417 8.45 10 9 10Z" />
                                </svg></span>
                            <figcaption class="text-h6 mod-pl-3">1. Submit Your Documents</figcaption>
                        </div>
                        <p class="mod-mt-1 text-gray-600">Share your documents with us, and we’ll verify them for the
                            next steps in the process.</p>
                    </figure>
                    <figure class="mb-0 mod-flex mod-flex-col mod-items-start mod-text-left mod-gap-4">
                        <div class="mod-flex ">
                            <span class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="none" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M1 20V17.2C1 16.6333 1.14583 16.1125 1.4375 15.6375C1.72917 15.1625 2.11667 14.8 2.6 14.55C3.63333 14.0333 4.68333 13.6458 5.75 13.3875C6.81667 13.1292 7.9 13 9 13C10.1 13 11.1833 13.1292 12.25 13.3875C13.3167 13.6458 14.3667 14.0333 15.4 14.55C15.8833 14.8 16.2708 15.1625 16.5625 15.6375C16.8542 16.1125 17 16.6333 17 17.2V20H1ZM19 20V17C19 16.2667 18.7958 15.5625 18.3875 14.8875C17.9792 14.2125 17.4 13.6333 16.65 13.15C17.5 13.25 18.3 13.4208 19.05 13.6625C19.8 13.9042 20.5 14.2 21.15 14.55C21.75 14.8833 22.2083 15.2542 22.525 15.6625C22.8417 16.0708 23 16.5167 23 17V20H19ZM9 12C7.9 12 6.95833 11.6083 6.175 10.825C5.39167 10.0417 5 9.1 5 8C5 6.9 5.39167 5.95833 6.175 5.175C6.95833 4.39167 7.9 4 9 4C10.1 4 11.0417 4.39167 11.825 5.175C12.6083 5.95833 13 6.9 13 8C13 9.1 12.6083 10.0417 11.825 10.825C11.0417 11.6083 10.1 12 9 12ZM19 8C19 9.1 18.6083 10.0417 17.825 10.825C17.0417 11.6083 16.1 12 15 12C14.8167 12 14.5833 11.9792 14.3 11.9375C14.0167 11.8958 13.7833 11.85 13.6 11.8C14.05 11.2667 14.3958 10.675 14.6375 10.025C14.8792 9.375 15 8.7 15 8C15 7.3 14.8792 6.625 14.6375 5.975C14.3958 5.325 14.05 4.73333 13.6 4.2C13.8333 4.11667 14.0667 4.0625 14.3 4.0375C14.5333 4.0125 14.7667 4 15 4C16.1 4 17.0417 4.39167 17.825 5.175C18.6083 5.95833 19 6.9 19 8ZM3 18H15V17.2C15 17.0167 14.9542 16.85 14.8625 16.7C14.7708 16.55 14.65 16.4333 14.5 16.35C13.6 15.9 12.6917 15.5625 11.775 15.3375C10.8583 15.1125 9.93333 15 9 15C8.06667 15 7.14167 15.1125 6.225 15.3375C5.30833 15.5625 4.4 15.9 3.5 16.35C3.35 16.4333 3.22917 16.55 3.1375 16.7C3.04583 16.85 3 17.0167 3 17.2V18ZM9 10C9.55 10 10.0208 9.80417 10.4125 9.4125C10.8042 9.02083 11 8.55 11 8C11 7.45 10.8042 6.97917 10.4125 6.5875C10.0208 6.19583 9.55 6 9 6C8.45 6 7.97917 6.19583 7.5875 6.5875C7.19583 6.97917 7 7.45 7 8C7 8.55 7.19583 9.02083 7.5875 9.4125C7.97917 9.80417 8.45 10 9 10Z" />
                                </svg></span>
                            <figcaption class="text-h6 mod-pl-3">2. Name Approval</figcaption>
                        </div>
                        <p class="mod-mt-1 text-gray-600">Suggest two names, and we’ll apply for name approval through
                            the SPICe Plus form.</p>
                    </figure>
                    <figure class="mb-0 mod-flex mod-flex-col mod-items-start mod-text-left mod-gap-4">
                        <div class="mod-flex ">
                            <span class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="none" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M1 20V17.2C1 16.6333 1.14583 16.1125 1.4375 15.6375C1.72917 15.1625 2.11667 14.8 2.6 14.55C3.63333 14.0333 4.68333 13.6458 5.75 13.3875C6.81667 13.1292 7.9 13 9 13C10.1 13 11.1833 13.1292 12.25 13.3875C13.3167 13.6458 14.3667 14.0333 15.4 14.55C15.8833 14.8 16.2708 15.1625 16.5625 15.6375C16.8542 16.1125 17 16.6333 17 17.2V20H1ZM19 20V17C19 16.2667 18.7958 15.5625 18.3875 14.8875C17.9792 14.2125 17.4 13.6333 16.65 13.15C17.5 13.25 18.3 13.4208 19.05 13.6625C19.8 13.9042 20.5 14.2 21.15 14.55C21.75 14.8833 22.2083 15.2542 22.525 15.6625C22.8417 16.0708 23 16.5167 23 17V20H19ZM9 12C7.9 12 6.95833 11.6083 6.175 10.825C5.39167 10.0417 5 9.1 5 8C5 6.9 5.39167 5.95833 6.175 5.175C6.95833 4.39167 7.9 4 9 4C10.1 4 11.0417 4.39167 11.825 5.175C12.6083 5.95833 13 6.9 13 8C13 9.1 12.6083 10.0417 11.825 10.825C11.0417 11.6083 10.1 12 9 12ZM19 8C19 9.1 18.6083 10.0417 17.825 10.825C17.0417 11.6083 16.1 12 15 12C14.8167 12 14.5833 11.9792 14.3 11.9375C14.0167 11.8958 13.7833 11.85 13.6 11.8C14.05 11.2667 14.3958 10.675 14.6375 10.025C14.8792 9.375 15 8.7 15 8C15 7.3 14.8792 6.625 14.6375 5.975C14.3958 5.325 14.05 4.73333 13.6 4.2C13.8333 4.11667 14.0667 4.0625 14.3 4.0375C14.5333 4.0125 14.7667 4 15 4C16.1 4 17.0417 4.39167 17.825 5.175C18.6083 5.95833 19 6.9 19 8ZM3 18H15V17.2C15 17.0167 14.9542 16.85 14.8625 16.7C14.7708 16.55 14.65 16.4333 14.5 16.35C13.6 15.9 12.6917 15.5625 11.775 15.3375C10.8583 15.1125 9.93333 15 9 15C8.06667 15 7.14167 15.1125 6.225 15.3375C5.30833 15.5625 4.4 15.9 3.5 16.35C3.35 16.4333 3.22917 16.55 3.1375 16.7C3.04583 16.85 3 17.0167 3 17.2V18ZM9 10C9.55 10 10.0208 9.80417 10.4125 9.4125C10.8042 9.02083 11 8.55 11 8C11 7.45 10.8042 6.97917 10.4125 6.5875C10.0208 6.19583 9.55 6 9 6C8.45 6 7.97917 6.19583 7.5875 6.5875C7.19583 6.97917 7 7.45 7 8C7 8.55 7.19583 9.02083 7.5875 9.4125C7.97917 9.80417 8.45 10 9 10Z" />
                                </svg></span>
                            <figcaption class="text-h6 mod-pl-3">3. Company Registration</figcaption>
                        </div>
                        <p class="mod-mt-1 text-gray-600">We’ll file MOA, AOA, and SPICe Plus form, and submit to MCA
                            for company registration.
                        </p>
                    </figure>
                    <figure class="mb-0 mod-flex mod-flex-col mod-items-start mod-text-left mod-gap-4">
                        <div class="mod-flex ">
                            <span class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="none" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M1 20V17.2C1 16.6333 1.14583 16.1125 1.4375 15.6375C1.72917 15.1625 2.11667 14.8 2.6 14.55C3.63333 14.0333 4.68333 13.6458 5.75 13.3875C6.81667 13.1292 7.9 13 9 13C10.1 13 11.1833 13.1292 12.25 13.3875C13.3167 13.6458 14.3667 14.0333 15.4 14.55C15.8833 14.8 16.2708 15.1625 16.5625 15.6375C16.8542 16.1125 17 16.6333 17 17.2V20H1ZM19 20V17C19 16.2667 18.7958 15.5625 18.3875 14.8875C17.9792 14.2125 17.4 13.6333 16.65 13.15C17.5 13.25 18.3 13.4208 19.05 13.6625C19.8 13.9042 20.5 14.2 21.15 14.55C21.75 14.8833 22.2083 15.2542 22.525 15.6625C22.8417 16.0708 23 16.5167 23 17V20H19ZM9 12C7.9 12 6.95833 11.6083 6.175 10.825C5.39167 10.0417 5 9.1 5 8C5 6.9 5.39167 5.95833 6.175 5.175C6.95833 4.39167 7.9 4 9 4C10.1 4 11.0417 4.39167 11.825 5.175C12.6083 5.95833 13 6.9 13 8C13 9.1 12.6083 10.0417 11.825 10.825C11.0417 11.6083 10.1 12 9 12ZM19 8C19 9.1 18.6083 10.0417 17.825 10.825C17.0417 11.6083 16.1 12 15 12C14.8167 12 14.5833 11.9792 14.3 11.9375C14.0167 11.8958 13.7833 11.85 13.6 11.8C14.05 11.2667 14.3958 10.675 14.6375 10.025C14.8792 9.375 15 8.7 15 8C15 7.3 14.8792 6.625 14.6375 5.975C14.3958 5.325 14.05 4.73333 13.6 4.2C13.8333 4.11667 14.0667 4.0625 14.3 4.0375C14.5333 4.0125 14.7667 4 15 4C16.1 4 17.0417 4.39167 17.825 5.175C18.6083 5.95833 19 6.9 19 8ZM3 18H15V17.2C15 17.0167 14.9542 16.85 14.8625 16.7C14.7708 16.55 14.65 16.4333 14.5 16.35C13.6 15.9 12.6917 15.5625 11.775 15.3375C10.8583 15.1125 9.93333 15 9 15C8.06667 15 7.14167 15.1125 6.225 15.3375C5.30833 15.5625 4.4 15.9 3.5 16.35C3.35 16.4333 3.22917 16.55 3.1375 16.7C3.04583 16.85 3 17.0167 3 17.2V18ZM9 10C9.55 10 10.0208 9.80417 10.4125 9.4125C10.8042 9.02083 11 8.55 11 8C11 7.45 10.8042 6.97917 10.4125 6.5875C10.0208 6.19583 9.55 6 9 6C8.45 6 7.97917 6.19583 7.5875 6.5875C7.19583 6.97917 7 7.45 7 8C7 8.55 7.19583 9.02083 7.5875 9.4125C7.97917 9.80417 8.45 10 9 10Z" />
                                </svg></span>
                            <figcaption class="text-h6 mod-pl-3">4. Incorporation Certificate</figcaption>
                        </div>
                        <p class="mod-mt-1 text-gray-600">MCA approves the registration, and you’ll receive your
                            Incorporation Certificate, CIN, PAN, and TAN.</p>
                    </figure>
                    <figure class="mb-0 mod-flex mod-flex-col mod-items-start mod-text-left mod-gap-4">
                        <div class="mod-flex ">
                            <span class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" fill="none" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M1 20V17.2C1 16.6333 1.14583 16.1125 1.4375 15.6375C1.72917 15.1625 2.11667 14.8 2.6 14.55C3.63333 14.0333 4.68333 13.6458 5.75 13.3875C6.81667 13.1292 7.9 13 9 13C10.1 13 11.1833 13.1292 12.25 13.3875C13.3167 13.6458 14.3667 14.0333 15.4 14.55C15.8833 14.8 16.2708 15.1625 16.5625 15.6375C16.8542 16.1125 17 16.6333 17 17.2V20H1ZM19 20V17C19 16.2667 18.7958 15.5625 18.3875 14.8875C17.9792 14.2125 17.4 13.6333 16.65 13.15C17.5 13.25 18.3 13.4208 19.05 13.6625C19.8 13.9042 20.5 14.2 21.15 14.55C21.75 14.8833 22.2083 15.2542 22.525 15.6625C22.8417 16.0708 23 16.5167 23 17V20H19ZM9 12C7.9 12 6.95833 11.6083 6.175 10.825C5.39167 10.0417 5 9.1 5 8C5 6.9 5.39167 5.95833 6.175 5.175C6.95833 4.39167 7.9 4 9 4C10.1 4 11.0417 4.39167 11.825 5.175C12.6083 5.95833 13 6.9 13 8C13 9.1 12.6083 10.0417 11.825 10.825C11.0417 11.6083 10.1 12 9 12ZM19 8C19 9.1 18.6083 10.0417 17.825 10.825C17.0417 11.6083 16.1 12 15 12C14.8167 12 14.5833 11.9792 14.3 11.9375C14.0167 11.8958 13.7833 11.85 13.6 11.8C14.05 11.2667 14.3958 10.675 14.6375 10.025C14.8792 9.375 15 8.7 15 8C15 7.3 14.8792 6.625 14.6375 5.975C14.3958 5.325 14.05 4.73333 13.6 4.2C13.8333 4.11667 14.0667 4.0625 14.3 4.0375C14.5333 4.0125 14.7667 4 15 4C16.1 4 17.0417 4.39167 17.825 5.175C18.6083 5.95833 19 6.9 19 8ZM3 18H15V17.2C15 17.0167 14.9542 16.85 14.8625 16.7C14.7708 16.55 14.65 16.4333 14.5 16.35C13.6 15.9 12.6917 15.5625 11.775 15.3375C10.8583 15.1125 9.93333 15 9 15C8.06667 15 7.14167 15.1125 6.225 15.3375C5.30833 15.5625 4.4 15.9 3.5 16.35C3.35 16.4333 3.22917 16.55 3.1375 16.7C3.04583 16.85 3 17.0167 3 17.2V18ZM9 10C9.55 10 10.0208 9.80417 10.4125 9.4125C10.8042 9.02083 11 8.55 11 8C11 7.45 10.8042 6.97917 10.4125 6.5875C10.0208 6.19583 9.55 6 9 6C8.45 6 7.97917 6.19583 7.5875 6.5875C7.19583 6.97917 7 7.45 7 8C7 8.55 7.19583 9.02083 7.5875 9.4125C7.97917 9.80417 8.45 10 9 10Z" />
                                </svg></span>
                            <figcaption class="text-h6 mod-pl-3">5. Open Your Bank Account</figcaption>
                        </div>
                        <p class="mod-mt-1 text-gray-600">Use your company’s documents to open a bank account and start
                            your business operations.</p>
                    </figure>
                </div>
                <div>
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
            <div class="sm:mod-hidden icon-bg">
                <div class="asterisk-1 mod-absolute mod-w-6/12">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 217.14 205.43">
                        <g>
                            <polygon
                                points="217.14 97.26 201.07 48.06 134.57 69.55 134.57 0 82.57 0 82.57 69.55 16.07 48.06 0 97.26 66.5 118.75 25.4 175.02 67.47 205.43 108.57 149.16 149.67 205.43 191.74 175.02 150.64 118.75 217.14 97.26">
                            </polygon>
                        </g>
                    </svg>
                </div>
                <span class="asterisk-2 mod-absolute mod-w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 459.44 134.09">
                        <g>
                            <path
                                d="M210.12,46.61c-55.04,34.92-94.8,60.16-178.96-3.6L0,84.15c48.63,36.85,88.64,49.94,123.14,49.94,45.45,0,81.31-22.76,114.64-43.9,53.97-34.25,100.57-63.82,194.12-4.78l27.54-43.65c-121.18-76.46-192.23-31.37-249.32,4.86Z">
                            </path>
                        </g>
                    </svg>
                </span>
            </div>
        </div>
    </article>
</section>

<section class="container mod-my-16 lg:mod-my-24" id="pricing">
    <div class="mod-flex mod-flex-col mod-items-center mod-justify-start mod-gap-3">
        <h4 class="mod-text-s-14 text-blue mod-leading-semi-loose mod-space-semi mod-uppercase mod-m-0">Transparent
            Pricing, No Hidden Charges</h4>
        <div>
            <h1
                class="mod-text-s-32 mod-nav-text mod-font-semibold mod-word-break-normal mod-text-center mod-leading-loose">
                <span>Choose the Right Plan</span>
                <div class="mod-text-s-44">
                    For your <span class="text-blue">Private Limited Company</span>
                </div>
            </h1>
            <p class="mod-nav-text mod-mt-2 mod-leading-loose mod-text-center">
                Get your Private Limited Company registered effortlessly with our tailored pricing plans. Start your
                journey today!
            </p>
        </div>
    </div>
    <div class="pricing-wrapper mod-relative">
        <div class="mod-w-full">
            <div class="mod-pt-8 sm:mod-flex mod-grid-3 mod-flex-col">
                <div class="card-plan">
                    <div class="card-plan-title">
                        <img alt="Basic" class="mod-inline" src="{{ asset('images/svg/pricing-icon-basic.svg') }}"
                            width="64" height="64" decoding="async" data-nimg="future" loading="lazy">
                        <h3 class="plan-title">Basic</h3>
                        <p class="plan-desc">Essential features <br>to kickstart your business effortlessly.</p>
                        <p class="plan-price">₹3999
                            <span class="plan-gst">+ 18% GST</span>
                        </p>
                        {{-- <p type="body_s" color="500" class="sc-db2ccae4-0 bRuJUa">Billed <!-- -->annually</p> --}}
                        <a href="http://127.0.0.1:8000/contact-us"
                            class="mod-flex btn btn-sm btn-primary icon-hover-right">
                            Get Basic
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M16.175 13L10.575 18.6L12 20L20 12L12 4L10.575 5.4L16.175 11L4 11L4 13L16.175 13Z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <div class="card-plan-features">
                        <div class="features-list">
                            <span class="flashinglight" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M12.6946 10.6113H17.5557L11.3057 19.639V13.389H6.44458L12.6946 4.36127V10.6113Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">Company Registration</p>
                        </div>
                        <div class="features-list">
                            <span class="checkline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.1693 15.3332L17.0609 9.44066L15.8826 8.26233L11.1693 12.9765L8.81176 10.619L7.63342 11.7973L11.1693 15.3332Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">Drafting & Filing by CA/CS</p>
                        </div>
                        <div class="features-list">
                            <span class="checkline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.1693 15.3332L17.0609 9.44066L15.8826 8.26233L11.1693 12.9765L8.81176 10.619L7.63342 11.7973L11.1693 15.3332Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">MCA Processing & CIN</p>
                        </div>
                        <div class="features-list">
                            <span class="checkline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.1693 15.3332L17.0609 9.44066L15.8826 8.26233L11.1693 12.9765L8.81176 10.619L7.63342 11.7973L11.1693 15.3332Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">Company PAN & TAN</p>
                        </div>
                        <div class="features-list">
                            <span class="checkline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.1693 15.3332L17.0609 9.44066L15.8826 8.26233L11.1693 12.9765L8.81176 10.619L7.63342 11.7973L11.1693 15.3332Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">MOA & AOA</p>
                        </div>
                        <div class="features-list">
                            <span class="checkline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.1693 15.3332L17.0609 9.44066L15.8826 8.26233L11.1693 12.9765L8.81176 10.619L7.63342 11.7973L11.1693 15.3332Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">Allotment of 2 DINs</p>
                        </div>
                        <div class="features-list">
                            <span class="checkline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.1693 15.3332L17.0609 9.44066L15.8826 8.26233L11.1693 12.9765L8.81176 10.619L7.63342 11.7973L11.1693 15.3332Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">Share Certificate</p>
                        </div>
                        <div class="features-list">
                            <span class="checkline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.1693 15.3332L17.0609 9.44066L15.8826 8.26233L11.1693 12.9765L8.81176 10.619L7.63342 11.7973L11.1693 15.3332Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">ESI & PF Registration</p>
                        </div>
                        <div class="features-list is-disabled">
                            <span class="closeline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.9997 10.8223L9.64303 8.46484L8.46387 9.64401L10.8214 12.0007L8.46387 14.3573L9.64303 15.5365L11.9997 13.179L14.3564 15.5365L15.5355 14.3573L13.178 12.0007L15.5355 9.64401L14.3564 8.46484L11.9997 10.8223Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">GST Registration</p>
                        </div>
                        <div class="features-list is-disabled">
                            <span class="closeline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.9997 10.8223L9.64303 8.46484L8.46387 9.64401L10.8214 12.0007L8.46387 14.3573L9.64303 15.5365L11.9997 13.179L14.3564 15.5365L15.5355 14.3573L13.178 12.0007L15.5355 9.64401L14.3564 8.46484L11.9997 10.8223Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">ADT-1</p>
                        </div>
                        <div class="features-list is-disabled">
                            <span class="closeline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.9997 10.8223L9.64303 8.46484L8.46387 9.64401L10.8214 12.0007L8.46387 14.3573L9.64303 15.5365L11.9997 13.179L14.3564 15.5365L15.5355 14.3573L13.178 12.0007L15.5355 9.64401L14.3564 8.46484L11.9997 10.8223Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">INC-20A (Commencement of Business)</p>
                        </div>
                        <div class="features-list is-disabled">
                            <span class="closeline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.9997 10.8223L9.64303 8.46484L8.46387 9.64401L10.8214 12.0007L8.46387 14.3573L9.64303 15.5365L11.9997 13.179L14.3564 15.5365L15.5355 14.3573L13.178 12.0007L15.5355 9.64401L14.3564 8.46484L11.9997 10.8223Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">MGT-7</p>
                        </div>
                        <div class="features-list is-disabled">
                            <span class="closeline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.9997 10.8223L9.64303 8.46484L8.46387 9.64401L10.8214 12.0007L8.46387 14.3573L9.64303 15.5365L11.9997 13.179L14.3564 15.5365L15.5355 14.3573L13.178 12.0007L15.5355 9.64401L14.3564 8.46484L11.9997 10.8223Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">AOC-4</p>
                        </div>
                        <div class="features-list is-disabled">
                            <span class="closeline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.9997 10.8223L9.64303 8.46484L8.46387 9.64401L10.8214 12.0007L8.46387 14.3573L9.64303 15.5365L11.9997 13.179L14.3564 15.5365L15.5355 14.3573L13.178 12.0007L15.5355 9.64401L14.3564 8.46484L11.9997 10.8223Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">DIR 3 KYC</p>
                        </div>
                        <div class="features-list is-disabled">
                            <span class="closeline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.9997 10.8223L9.64303 8.46484L8.46387 9.64401L10.8214 12.0007L8.46387 14.3573L9.64303 15.5365L11.9997 13.179L14.3564 15.5365L15.5355 14.3573L13.178 12.0007L15.5355 9.64401L14.3564 8.46484L11.9997 10.8223Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">First Board Resolution</p>
                        </div>
                        <div class="features-list is-disabled">
                            <span class="closeline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.9997 10.8223L9.64303 8.46484L8.46387 9.64401L10.8214 12.0007L8.46387 14.3573L9.64303 15.5365L11.9997 13.179L14.3564 15.5365L15.5355 14.3573L13.178 12.0007L15.5355 9.64401L14.3564 8.46484L11.9997 10.8223Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">Trademark Registration</p>
                        </div>
                        <div class="features-list is-disabled">
                            <span class="closeline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.9997 10.8223L9.64303 8.46484L8.46387 9.64401L10.8214 12.0007L8.46387 14.3573L9.64303 15.5365L11.9997 13.179L14.3564 15.5365L15.5355 14.3573L13.178 12.0007L15.5355 9.64401L14.3564 8.46484L11.9997 10.8223Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">GST Return Filing 3 Months</p>
                        </div>
                        <div class="features-list is-disabled">
                            <span class="closeline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.9997 10.8223L9.64303 8.46484L8.46387 9.64401L10.8214 12.0007L8.46387 14.3573L9.64303 15.5365L11.9997 13.179L14.3564 15.5365L15.5355 14.3573L13.178 12.0007L15.5355 9.64401L14.3564 8.46484L11.9997 10.8223Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">Income Tax Filings</p>
                        </div>
                    </div>
                    <a href="http://127.0.0.1:8000/contact-us"
                        class="mod-flex btn btn-sm btn-primary mod-mt-4 icon-hover-right">
                        Get Basic
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M16.175 13L10.575 18.6L12 20L20 12L12 4L10.575 5.4L16.175 11L4 11L4 13L16.175 13Z">
                            </path>
                        </svg>
                    </a>
                </div>
                <div class="card-plan card-plan-popular">
                    <div class="tag-popular">POPULAR</div>
                    <div class="card-plan-title">
                        <img alt="Standard" class="mod-inline"
                            src="{{ asset('images/svg/pricing-icon-standard.svg') }}" width="64" height="64"
                            decoding="async" data-nimg="future" loading="lazy">
                        <h3 class="plan-title">Standard</h3>
                        <p class="plan-desc">
                            Enhanced services <br>for smooth business operations.
                        </p>
                        <p class="plan-price">₹6999
                            <span class="plan-gst">+ 18% GST</span>
                        </p>
                        <a href="http://127.0.0.1:8000/contact-us"
                            class="mod-flex btn btn-sm btn-primary icon-hover-right">
                            Get Standard
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M16.175 13L10.575 18.6L12 20L20 12L12 4L10.575 5.4L16.175 11L4 11L4 13L16.175 13Z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <div class="card-plan-features">
                        <div class="features-list">
                            <span class="flashinglight" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M12.6946 10.6113H17.5557L11.3057 19.639V13.389H6.44458L12.6946 4.36127V10.6113Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">Company Registration</p>
                        </div>
                        <div class="features-list">
                            <span class="checkline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.1693 15.3332L17.0609 9.44066L15.8826 8.26233L11.1693 12.9765L8.81176 10.619L7.63342 11.7973L11.1693 15.3332Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">Drafting & Filing by CA/CS</p>
                        </div>
                        <div class="features-list">
                            <span class="checkline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.1693 15.3332L17.0609 9.44066L15.8826 8.26233L11.1693 12.9765L8.81176 10.619L7.63342 11.7973L11.1693 15.3332Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">MCA Processing & CIN</p>
                        </div>
                        <div class="features-list">
                            <span class="checkline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.1693 15.3332L17.0609 9.44066L15.8826 8.26233L11.1693 12.9765L8.81176 10.619L7.63342 11.7973L11.1693 15.3332Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">Company PAN & TAN</p>
                        </div>
                        <div class="features-list">
                            <span class="checkline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.1693 15.3332L17.0609 9.44066L15.8826 8.26233L11.1693 12.9765L8.81176 10.619L7.63342 11.7973L11.1693 15.3332Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">MOA & AOA</p>
                        </div>
                        <div class="features-list">
                            <span class="checkline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.1693 15.3332L17.0609 9.44066L15.8826 8.26233L11.1693 12.9765L8.81176 10.619L7.63342 11.7973L11.1693 15.3332Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">Allotment of 2 DINs</p>
                        </div>
                        <div class="features-list">
                            <span class="checkline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.1693 15.3332L17.0609 9.44066L15.8826 8.26233L11.1693 12.9765L8.81176 10.619L7.63342 11.7973L11.1693 15.3332Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">Share Certificate</p>
                        </div>
                        <div class="features-list">
                            <span class="checkline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.1693 15.3332L17.0609 9.44066L15.8826 8.26233L11.1693 12.9765L8.81176 10.619L7.63342 11.7973L11.1693 15.3332Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">ESI & PF Registration</p>
                        </div>
                        <div class="features-list">
                            <span class="checkline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.1693 15.3332L17.0609 9.44066L15.8826 8.26233L11.1693 12.9765L8.81176 10.619L7.63342 11.7973L11.1693 15.3332Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">GST Registration</p>
                        </div>
                        <div class="features-list">
                            <span class="checkline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.1693 15.3332L17.0609 9.44066L15.8826 8.26233L11.1693 12.9765L8.81176 10.619L7.63342 11.7973L11.1693 15.3332Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">ADT-1</p>
                        </div>
                        <div class="features-list">
                            <span class="checkline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.1693 15.3332L17.0609 9.44066L15.8826 8.26233L11.1693 12.9765L8.81176 10.619L7.63342 11.7973L11.1693 15.3332Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">INC-20A (Commencement of Business)</p>
                        </div>
                        <div class="features-list is-disabled">
                            <span class="closeline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.9997 10.8223L9.64303 8.46484L8.46387 9.64401L10.8214 12.0007L8.46387 14.3573L9.64303 15.5365L11.9997 13.179L14.3564 15.5365L15.5355 14.3573L13.178 12.0007L15.5355 9.64401L14.3564 8.46484L11.9997 10.8223Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">MGT-7</p>
                        </div>
                        <div class="features-list is-disabled">
                            <span class="closeline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.9997 10.8223L9.64303 8.46484L8.46387 9.64401L10.8214 12.0007L8.46387 14.3573L9.64303 15.5365L11.9997 13.179L14.3564 15.5365L15.5355 14.3573L13.178 12.0007L15.5355 9.64401L14.3564 8.46484L11.9997 10.8223Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">AOC-4</p>
                        </div>
                        <div class="features-list is-disabled">
                            <span class="closeline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.9997 10.8223L9.64303 8.46484L8.46387 9.64401L10.8214 12.0007L8.46387 14.3573L9.64303 15.5365L11.9997 13.179L14.3564 15.5365L15.5355 14.3573L13.178 12.0007L15.5355 9.64401L14.3564 8.46484L11.9997 10.8223Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">DIR 3 KYC</p>
                        </div>
                        <div class="features-list is-disabled">
                            <span class="closeline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.9997 10.8223L9.64303 8.46484L8.46387 9.64401L10.8214 12.0007L8.46387 14.3573L9.64303 15.5365L11.9997 13.179L14.3564 15.5365L15.5355 14.3573L13.178 12.0007L15.5355 9.64401L14.3564 8.46484L11.9997 10.8223Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">First Board Resolution</p>
                        </div>
                        <div class="features-list is-disabled">
                            <span class="closeline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.9997 10.8223L9.64303 8.46484L8.46387 9.64401L10.8214 12.0007L8.46387 14.3573L9.64303 15.5365L11.9997 13.179L14.3564 15.5365L15.5355 14.3573L13.178 12.0007L15.5355 9.64401L14.3564 8.46484L11.9997 10.8223Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">Trademark Registration</p>
                        </div>
                        <div class="features-list is-disabled">
                            <span class="closeline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.9997 10.8223L9.64303 8.46484L8.46387 9.64401L10.8214 12.0007L8.46387 14.3573L9.64303 15.5365L11.9997 13.179L14.3564 15.5365L15.5355 14.3573L13.178 12.0007L15.5355 9.64401L14.3564 8.46484L11.9997 10.8223Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">GST Return Filing 3 Months</p>
                        </div>
                        <div class="features-list is-disabled">
                            <span class="closeline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.9997 10.8223L9.64303 8.46484L8.46387 9.64401L10.8214 12.0007L8.46387 14.3573L9.64303 15.5365L11.9997 13.179L14.3564 15.5365L15.5355 14.3573L13.178 12.0007L15.5355 9.64401L14.3564 8.46484L11.9997 10.8223Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">Income Tax Filings</p>
                        </div>
                    </div>
                    <a href="http://127.0.0.1:8000/contact-us"
                        class="mod-flex btn btn-sm btn-primary mod-mt-4 icon-hover-right">
                        Get Standard
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M16.175 13L10.575 18.6L12 20L20 12L12 4L10.575 5.4L16.175 11L4 11L4 13L16.175 13Z">
                            </path>
                        </svg>
                    </a>
                </div>
                <div class="card-plan">
                    <div class="card-plan-title">
                        <img alt="Premium" class="mod-inline"
                            src="{{ asset('images/svg/pricing-icon-premium.svg') }}" width="64" height="64"
                            decoding="async" data-nimg="future" loading="lazy">
                        <h3 class="plan-title">PREMIUM</h3>
                        <p class="plan-desc">Comprehensive solutions <br>for business growth and success</p>
                        <p class="plan-price">₹19999
                            <span class="plan-gst">+ 18% GST</span>
                        </p>
                        <a href="http://127.0.0.1:8000/contact-us"
                            class="mod-flex btn btn-sm btn-primary icon-hover-right">
                            Get Premium
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M16.175 13L10.575 18.6L12 20L20 12L12 4L10.575 5.4L16.175 11L4 11L4 13L16.175 13Z">
                                </path>
                            </svg>
                        </a>
                    </div>
                    <div class="card-plan-features">
                        <div class="features-list">
                            <span class="flashinglight" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M12.6946 10.6113H17.5557L11.3057 19.639V13.389H6.44458L12.6946 4.36127V10.6113Z"
                                        fill="currentColor"></path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">Company Registration</p>
                        </div>
                        <div class="features-list">
                            <span class="checkline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.1693 15.3332L17.0609 9.44066L15.8826 8.26233L11.1693 12.9765L8.81176 10.619L7.63342 11.7973L11.1693 15.3332Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">Drafting & Filing by CA/CS</p>
                        </div>
                        <div class="features-list">
                            <span class="checkline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.1693 15.3332L17.0609 9.44066L15.8826 8.26233L11.1693 12.9765L8.81176 10.619L7.63342 11.7973L11.1693 15.3332Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">MCA Processing & CIN</p>
                        </div>
                        <div class="features-list">
                            <span class="checkline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.1693 15.3332L17.0609 9.44066L15.8826 8.26233L11.1693 12.9765L8.81176 10.619L7.63342 11.7973L11.1693 15.3332Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">Company PAN & TAN</p>
                        </div>
                        <div class="features-list">
                            <span class="checkline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.1693 15.3332L17.0609 9.44066L15.8826 8.26233L11.1693 12.9765L8.81176 10.619L7.63342 11.7973L11.1693 15.3332Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">MOA & AOA</p>
                        </div>
                        <div class="features-list">
                            <span class="checkline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.1693 15.3332L17.0609 9.44066L15.8826 8.26233L11.1693 12.9765L8.81176 10.619L7.63342 11.7973L11.1693 15.3332Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">Allotment of 2 DINs</p>
                        </div>
                        <div class="features-list">
                            <span class="checkline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.1693 15.3332L17.0609 9.44066L15.8826 8.26233L11.1693 12.9765L8.81176 10.619L7.63342 11.7973L11.1693 15.3332Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">Share Certificate</p>
                        </div>
                        <div class="features-list">
                            <span class="checkline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.1693 15.3332L17.0609 9.44066L15.8826 8.26233L11.1693 12.9765L8.81176 10.619L7.63342 11.7973L11.1693 15.3332Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">ESI & PF Registration</p>
                        </div>
                        <div class="features-list">
                            <span class="checkline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.1693 15.3332L17.0609 9.44066L15.8826 8.26233L11.1693 12.9765L8.81176 10.619L7.63342 11.7973L11.1693 15.3332Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">GST Registration</p>
                        </div>
                        <div class="features-list">
                            <span class="checkline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.1693 15.3332L17.0609 9.44066L15.8826 8.26233L11.1693 12.9765L8.81176 10.619L7.63342 11.7973L11.1693 15.3332Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">ADT-1</p>
                        </div>
                        <div class="features-list">
                            <span class="checkline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.1693 15.3332L17.0609 9.44066L15.8826 8.26233L11.1693 12.9765L8.81176 10.619L7.63342 11.7973L11.1693 15.3332Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">INC-20A (Commencement of Business)</p>
                        </div>
                        <div class="features-list">
                            <span class="checkline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.1693 15.3332L17.0609 9.44066L15.8826 8.26233L11.1693 12.9765L8.81176 10.619L7.63342 11.7973L11.1693 15.3332Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">MGT-7</p>
                        </div>
                        <div class="features-list">
                            <span class="checkline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.1693 15.3332L17.0609 9.44066L15.8826 8.26233L11.1693 12.9765L8.81176 10.619L7.63342 11.7973L11.1693 15.3332Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">AOC-4</p>
                        </div>
                        <div class="features-list">
                            <span class="checkline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.1693 15.3332L17.0609 9.44066L15.8826 8.26233L11.1693 12.9765L8.81176 10.619L7.63342 11.7973L11.1693 15.3332Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">DIR 3 KYC</p>
                        </div>
                        <div class="features-list">
                            <span class="checkline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.1693 15.3332L17.0609 9.44066L15.8826 8.26233L11.1693 12.9765L8.81176 10.619L7.63342 11.7973L11.1693 15.3332Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">First Board Resolution</p>
                        </div>
                        <div class="features-list">
                            <span class="checkline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.1693 15.3332L17.0609 9.44066L15.8826 8.26233L11.1693 12.9765L8.81176 10.619L7.63342 11.7973L11.1693 15.3332Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">Trademark Registration</p>
                        </div>
                        <div class="features-list">
                            <span class="checkline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.1693 15.3332L17.0609 9.44066L15.8826 8.26233L11.1693 12.9765L8.81176 10.619L7.63342 11.7973L11.1693 15.3332Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">GST Return Filing 3 Months</p>
                        </div>
                        <div class="features-list">
                            <span class="checkline" size="24" role="img">
                                <svg viewBox="0 0 24 24" fill="none" width="24">
                                    <path
                                        d="M11.1693 15.3332L17.0609 9.44066L15.8826 8.26233L11.1693 12.9765L8.81176 10.619L7.63342 11.7973L11.1693 15.3332Z"
                                        fill="currentColor">
                                    </path>
                                </svg>
                            </span>
                            <p class="mod-mb-0">Income Tax Filings</p>
                        </div>
                    </div>
                    <a href="http://127.0.0.1:8000/contact-us"
                        class="mod-flex btn btn-sm btn-primary mod-mt-4 icon-hover-right">
                        Get Premium
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
        <div class="card-more-plan bg-blue-100 mod-flex mod-w-full mod-justify-center mod-items-center mod-overflow-hidden mod-relative mod-mt-12 mod-py-12" data-theme="dark">
            <div class="mod-flex mod-flex-col mod-items-center">
                <h4 class="mod-text-s-32 mod-font-semibold mod-word-break-normal mod-text-center mod-leading-semi-loose">
                    Still not sure yet? <br> 
                    <span class="mod-text-s-24">Let our Experts help you find the right Plan</span>
                </h4>
                <div class="mod-flex sm:mod-flex-col mod-flex-row mod-gap-8 mod-my-4">
                    <div class="mod-flex mod-items-center mod-justify-center mod-gap-2">
                        <img src="https://carrier.formcarry.com/website-assets/sla-icon.svg" width="24">
                        <p class="mod-mb-0">Hassle-Free Experience</p>
                    </div>
                    <div class="mod-flex mod-items-center mod-justify-center mod-gap-2">
                        <img src="https://carrier.formcarry.com/website-assets/unlimited-form-submission-icon.svg"
                            width="24">
                        <p class="mod-mb-0">Clear & Transparent Process</p>
                    </div>
                    <div class="mod-flex mod-items-center mod-justify-center mod-gap-2">
                        <img
                            src="https://carrier.formcarry.com/website-assets/unlimited-uploads-icon.svg"
                            width="24">
                        <p class="mod-mb-0">Real-Time Updates</p>
                    </div>
                </div>
                <div class="mod-flex sm:mod-flex-col mod-flex-row mod-gap-8 mod-mb-8">
                    <div class="mod-flex mod-items-center mod-justify-center mod-gap-2">
                        <img
                            src="https://carrier.formcarry.com/website-assets/migration-support-icon.svg"
                            width="24">
                        <p class="mod-mb-0">100% Moneyback Gurantee*</p>
                    </div>
                    <div class="mod-flex mod-items-center mod-justify-center mod-gap-2">
                        <img src="https://carrier.formcarry.com/website-assets/customer-support-icon.svg"
                        width="24">
                        <p class="mod-mb-0">Lightning-Fast Customer Support</p>
                    </div>
                </div>
                <a class="btn-custom-medium" href="http://127.0.0.1:8000/contact-us" target="_self">
                    <span class="btn-text btn-text--back">Get In Touch</span>
                    <span class="btn-icon btn-icon--red">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3 4a1 1 0 0 1 0-2h11v11a1 1 0 1 1-2 0V5.414l-8.293 8.293a1 1 0 0 1-1.414-1.414L10.586 4H3Z" fill="white"></path>
                        </svg>
                        <span class="btn-text btn-text--front">Request a Callback</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</section>

<x-article-list page="itr"></x-article-list>

<section class="container my-80 my-xxl-120" id="faq">
    <div class="row justify-content-center">
        <div class="col-lg-11 col-xl-9 col-xxl-9">

            <h2 class="mb-3 mb-xl-32">Frequently Asked Questions</h2>

            <div class="accordion" id="faqList-home">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faqList-home-item1" aria-expanded="false"
                            aria-controls="faqList-home-item1">
                            What is a Private Limited Company?
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
                            <p>A Private Limited Company is a legally recognized business structure in India that limits
                                the liability of its shareholders. It requires a minimum of two members and can have up
                                to 200 shareholders. This type of company provides credibility, limited liability
                                protection, and ease of fundraising from investors.</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faqList-home-item2" aria-expanded="false"
                            aria-controls="faqList-home-item2">
                            What are the key benefits of registering a Private Limited Company?
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
                            <p>Registering a Private Limited Company offers several advantages, including:</p>
                            <ul>
                                <li>Limited liability protection for shareholders</li>
                                <li>Better credibility and legal recognition</li>
                                <li>Easy access to funding from investors</li>
                                <li>Perpetual succession, ensuring business continuity</li>
                                <li>Separate legal entity status for the company</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faqList-home-item3" aria-expanded="false"
                            aria-controls="faqList-home-item3">
                            What are the minimum requirements for registering a Private Limited Company?
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
                            <p>To register a Private Limited Company in India, the following minimum requirements must
                                be met:</p>
                            <ul>
                                <li>At least two directors and two shareholders</li>
                                <li>One director must be an Indian resident</li>
                                <li>A registered office address in India</li>
                                <li>Director Identification Number (DIN) and Digital Signature Certificate (DSC)</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faqList-home-item4" aria-expanded="false"
                            aria-controls="faqList-home-item4">
                            How long does it take to register a Private Limited Company in India?
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
                            <p>The registration process for a Private Limited Company in India typically takes 7 to 14
                                business days, depending on document submission and government processing times.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faqList-home-item1" aria-expanded="false"
                            aria-controls="faqList-home-item1">
                            Are the Company Incorporation Certificate and Registration Certificate the same?
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
                            <p>Yes, both the Company Incorporation Certificate and Registration Certificate refer to the
                                same document. Issued by the Ministry of Corporate Affairs (MCA), this certificate
                                confirms the legal registration of the company.</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faqList-home-item2" aria-expanded="false"
                            aria-controls="faqList-home-item2">
                            Is a Private Limited Company required to comply with annual regulations?
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
                            <p>Yes, a Private Limited Company must fulfill annual compliance obligations, including
                                filing annual returns, conducting financial audits, and holding Annual General Meetings
                                (AGMs) as per regulatory requirements.</p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faqList-home-item3" aria-expanded="false"
                            aria-controls="faqList-home-item3">
                            How can I check if a company is registered in India?
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
                            <p>To verify a company's registration status in India, visit the MCA portal and search using
                                the company’s name or Corporate Identification Number (CIN) in the official database.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#faqList-home-item4" aria-expanded="false"
                            aria-controls="faqList-home-item4">
                            What are the next steps after company incorporation?
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
                            <p>Once a company is incorporated, the Registrar of Companies (ROC) issues a Certificate of
                                Incorporation. The company must then complete post-incorporation formalities, including:
                            </p>
                            <ul>
                                <li>Obtaining PAN and TAN for tax compliance</li>
                                <li>Appointing the first auditor</li>
                                <li>Conducting the first Board Meeting</li>
                                <li>Providing the registered office address within 30 days</li>
                                <li>Filing the Declaration of Business Commencement (INC-20A)</li>
                                <li>Issuing Share Certificates within 60 days</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
