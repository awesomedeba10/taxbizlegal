@extends('frontend._layouts.master')

@section('title', 'Company Registration')

@section('content')
    <main class="flex-grow-1">
        <section class="services-intro nav-bg mod-items-center mod-w-full mod-my-12 mod-flex mod-justify-center mod-relative">
            <div class="mod-items-center mod-px-24 mod-grid-12 mod-w-full sm:mod-gap-10 sm:mod-flex sm:mod-flex-col
                sm:mod-px-10 md:mod-px-12 md:mod-items-start ">
                <div class="section-heading">
                    <p class="h5 text-primary mb-2">File your ITR from Home in Just a Few Taps!</p>
                    <h1 class="section-title mod-font-bold mod-leading-semi-loose" data-fade="up">
                        Maximize Your Tax Savings Effortlessly!</h1>
                    <div class="mod-flex mod-flex-col mod-gap-10">
                        <div class="text mod-font-medium mod-leading-loose" data-fade="up">
                            <ul class="mod-ml-0 mod-mb-1 mod-pl-1 mod-list-none mod-flex mod-flex-col mod-gap-2">
                                <li>👉 Zero Hassle, 100% Accurate Filing</li>
                                <li>👉 Smart Tax Planning for Maximum Refunds</li>
                                <li>👉 Free Expert Assistance & Notice Management</li>
                            </ul>
                        </div>

                        <p class="mb-0">Stay Compliant & Save More on Taxes. Start Now on India’s Most Trusted Tax Filing
                            Platform.</p>
                    </div>
                </div>
                <div class="section-content mod-pr-12 md:mod-pr-0 sm:mod-pr-0">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <h1 class="h2 mb-lg-20">
                                <font style="vertical-align: inherit;">
                                    <font style="vertical-align: inherit;">Plan Now, Save More ...</font>
                                </font>
                            </h1>
                            <form action="/registrace/adept" method="post" id="frm-adeptRegistrationForm-form"
                                class="loadable loadable-overlayed ajax" novalidate="">


                                <div class="form-floating required">
                                    <input type="text" name="user[name]" maxlength="128" placeholder=" "
                                        class="form-control text" id="frm-adeptRegistrationForm-form-user-name"
                                        required=""
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
                                        <a href="{{ route('front.terms') }}" target="_blank"
                                            rel="noopener norefererrer">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">the terms of use of the taxbizlegal.com 
                                                </font>
                                            </font>
                                        </a>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;"> and </font>
                                        </font><a href="{{ route('front.privacy') }}" target="_blank"
                                            rel="noopener noreferrer">
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
                                            <font style="vertical-align: inherit;">File ITR Now</font>
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

        <div class="mod-w-full mod-mt-24 mod-z-40 services-nav mod-bg-transparent mod-sticky md:mod-mt-16 sm:mod-mt-16">
            <nav
                class="mod-w-full mod-max-w-screen-xl mod-px-32 mod-mx-auto mod-overflow-hidden md:mod-px-5 lg:mod-px-6 sm:mod-px-0">
                <div
                    class="mod-flex services-nav-container mod-items-center mod-justify-between mod-cursor-pointer mod-rounded-lg mod-border-sm mod-overflow-auto mod-text-s-14 mod-font-medium">
                    <div class="mod-whitespace-nowrap mod-py-4 mod-sticky mod-left-0">
                        <span class="services-nav-title mod-pl-6 mod-pr-3 mod-border-r-sm">ITR FILING</span>
                    </div>
                    <ul class="services-nav-ul mod-flex mod-items-center mod-my-0 mod-justify-center mod-list-none">
                        <li
                            class="services-nav-item mod-px-5 mod-py-4 mod-border-t-md mod-border-none mod-whitespace-nowrap mod-font-medium text-blue-350 border-blue-350">
                            What is ITR</li>
                        <li
                            class="services-nav-item mod-px-5 mod-py-4 mod-border-t-md mod-border-none mod-whitespace-nowrap mod-font-medium text-blue-350 border-blue-350">
                            Pricing</li>
                        <li
                            class="services-nav-item mod-px-5 mod-py-4 mod-border-t-md mod-border-none mod-whitespace-nowrap mod-font-medium text-blue-350 border-blue-350"
                            data-target="resources">
                            Resources</li>
                        <li class="services-nav-item mod-px-5 mod-py-4 mod-border-t-md mod-border-none mod-whitespace-nowrap mod-font-medium text-blue-350 border-blue-350"
                            data-target="faq">
                            FAQ</li>
                    </ul>
                    <a href=""
                        rel="noreferrer"
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
        </div>

        <section class="container mod-my-16 lg:mod-my-24">
            <article class="banner bg-blue-100 mod-overflow-hidden py-40 px-4 p-lg-5 lg:mod-px-12 pb-xxl-4">
                <div class="row gy-32 gx-xl-40 mod-relative justify-content-center align-items-center">
                    <div class="col-lg-12 d-flex flex-column mod-gap-8">
                        <h2 class="display-6 fw-bold mb-0">File Your Income Tax Return in 5 Easy Steps</h2>
                        <p class="text-lg mb-0 pe-xl-80 me-xxl-4 mod-w-5/6 sm:mod-w-full">Filing your Income Tax Return has never been this easy!
                            Just follow these 5 simple steps and get your ITR filed accurately and on time—without any
                            hassle. Maximize your tax savings and stay compliant effortlessly!</p>
                        <div
                            class="d-flex justify-content-center mod-mt-4 justify-content-lg-start gap-2 gap-sm-3 gap-xl-4 text-center svg-scale scale-4 mb-0 sm:mod-flex-col sm:mod-w-full">
                            <figure class="mb-0 mod-flex mod-flex-col mod-items-start mod-text-left mod-gap-4">
                                <div class="mod-flex ">
                                    <span class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="none" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M1 20V17.2C1 16.6333 1.14583 16.1125 1.4375 15.6375C1.72917 15.1625 2.11667 14.8 2.6 14.55C3.63333 14.0333 4.68333 13.6458 5.75 13.3875C6.81667 13.1292 7.9 13 9 13C10.1 13 11.1833 13.1292 12.25 13.3875C13.3167 13.6458 14.3667 14.0333 15.4 14.55C15.8833 14.8 16.2708 15.1625 16.5625 15.6375C16.8542 16.1125 17 16.6333 17 17.2V20H1ZM19 20V17C19 16.2667 18.7958 15.5625 18.3875 14.8875C17.9792 14.2125 17.4 13.6333 16.65 13.15C17.5 13.25 18.3 13.4208 19.05 13.6625C19.8 13.9042 20.5 14.2 21.15 14.55C21.75 14.8833 22.2083 15.2542 22.525 15.6625C22.8417 16.0708 23 16.5167 23 17V20H19ZM9 12C7.9 12 6.95833 11.6083 6.175 10.825C5.39167 10.0417 5 9.1 5 8C5 6.9 5.39167 5.95833 6.175 5.175C6.95833 4.39167 7.9 4 9 4C10.1 4 11.0417 4.39167 11.825 5.175C12.6083 5.95833 13 6.9 13 8C13 9.1 12.6083 10.0417 11.825 10.825C11.0417 11.6083 10.1 12 9 12ZM19 8C19 9.1 18.6083 10.0417 17.825 10.825C17.0417 11.6083 16.1 12 15 12C14.8167 12 14.5833 11.9792 14.3 11.9375C14.0167 11.8958 13.7833 11.85 13.6 11.8C14.05 11.2667 14.3958 10.675 14.6375 10.025C14.8792 9.375 15 8.7 15 8C15 7.3 14.8792 6.625 14.6375 5.975C14.3958 5.325 14.05 4.73333 13.6 4.2C13.8333 4.11667 14.0667 4.0625 14.3 4.0375C14.5333 4.0125 14.7667 4 15 4C16.1 4 17.0417 4.39167 17.825 5.175C18.6083 5.95833 19 6.9 19 8ZM3 18H15V17.2C15 17.0167 14.9542 16.85 14.8625 16.7C14.7708 16.55 14.65 16.4333 14.5 16.35C13.6 15.9 12.6917 15.5625 11.775 15.3375C10.8583 15.1125 9.93333 15 9 15C8.06667 15 7.14167 15.1125 6.225 15.3375C5.30833 15.5625 4.4 15.9 3.5 16.35C3.35 16.4333 3.22917 16.55 3.1375 16.7C3.04583 16.85 3 17.0167 3 17.2V18ZM9 10C9.55 10 10.0208 9.80417 10.4125 9.4125C10.8042 9.02083 11 8.55 11 8C11 7.45 10.8042 6.97917 10.4125 6.5875C10.0208 6.19583 9.55 6 9 6C8.45 6 7.97917 6.19583 7.5875 6.5875C7.19583 6.97917 7 7.45 7 8C7 8.55 7.19583 9.02083 7.5875 9.4125C7.97917 9.80417 8.45 10 9 10Z" />
                                        </svg></span>
                                    <figcaption class="text-h6 mod-pl-3">1. Submit Your Documents</figcaption>
                                </div>
                                <p class="mod-mt-1 text-gray-600">Simply upload your income details and documents in a few
                                    clicks</p>
                            </figure>
                            <figure class="mb-0 mod-flex mod-flex-col mod-items-start mod-text-left mod-gap-4">
                                <div class="mod-flex ">
                                    <span class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="none" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M1 20V17.2C1 16.6333 1.14583 16.1125 1.4375 15.6375C1.72917 15.1625 2.11667 14.8 2.6 14.55C3.63333 14.0333 4.68333 13.6458 5.75 13.3875C6.81667 13.1292 7.9 13 9 13C10.1 13 11.1833 13.1292 12.25 13.3875C13.3167 13.6458 14.3667 14.0333 15.4 14.55C15.8833 14.8 16.2708 15.1625 16.5625 15.6375C16.8542 16.1125 17 16.6333 17 17.2V20H1ZM19 20V17C19 16.2667 18.7958 15.5625 18.3875 14.8875C17.9792 14.2125 17.4 13.6333 16.65 13.15C17.5 13.25 18.3 13.4208 19.05 13.6625C19.8 13.9042 20.5 14.2 21.15 14.55C21.75 14.8833 22.2083 15.2542 22.525 15.6625C22.8417 16.0708 23 16.5167 23 17V20H19ZM9 12C7.9 12 6.95833 11.6083 6.175 10.825C5.39167 10.0417 5 9.1 5 8C5 6.9 5.39167 5.95833 6.175 5.175C6.95833 4.39167 7.9 4 9 4C10.1 4 11.0417 4.39167 11.825 5.175C12.6083 5.95833 13 6.9 13 8C13 9.1 12.6083 10.0417 11.825 10.825C11.0417 11.6083 10.1 12 9 12ZM19 8C19 9.1 18.6083 10.0417 17.825 10.825C17.0417 11.6083 16.1 12 15 12C14.8167 12 14.5833 11.9792 14.3 11.9375C14.0167 11.8958 13.7833 11.85 13.6 11.8C14.05 11.2667 14.3958 10.675 14.6375 10.025C14.8792 9.375 15 8.7 15 8C15 7.3 14.8792 6.625 14.6375 5.975C14.3958 5.325 14.05 4.73333 13.6 4.2C13.8333 4.11667 14.0667 4.0625 14.3 4.0375C14.5333 4.0125 14.7667 4 15 4C16.1 4 17.0417 4.39167 17.825 5.175C18.6083 5.95833 19 6.9 19 8ZM3 18H15V17.2C15 17.0167 14.9542 16.85 14.8625 16.7C14.7708 16.55 14.65 16.4333 14.5 16.35C13.6 15.9 12.6917 15.5625 11.775 15.3375C10.8583 15.1125 9.93333 15 9 15C8.06667 15 7.14167 15.1125 6.225 15.3375C5.30833 15.5625 4.4 15.9 3.5 16.35C3.35 16.4333 3.22917 16.55 3.1375 16.7C3.04583 16.85 3 17.0167 3 17.2V18ZM9 10C9.55 10 10.0208 9.80417 10.4125 9.4125C10.8042 9.02083 11 8.55 11 8C11 7.45 10.8042 6.97917 10.4125 6.5875C10.0208 6.19583 9.55 6 9 6C8.45 6 7.97917 6.19583 7.5875 6.5875C7.19583 6.97917 7 7.45 7 8C7 8.55 7.19583 9.02083 7.5875 9.4125C7.97917 9.80417 8.45 10 9 10Z" />
                                        </svg></span>
                                    <figcaption class="text-h6 mod-pl-3">2. Verification & Review</figcaption>
                                </div>
                                <p class="mod-mt-1 text-gray-600">We double-check everything — so you don’t have to!</p>
                            </figure>
                            <figure class="mb-0 mod-flex mod-flex-col mod-items-start mod-text-left mod-gap-4">
                                <div class="mod-flex ">
                                    <span class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="none" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M1 20V17.2C1 16.6333 1.14583 16.1125 1.4375 15.6375C1.72917 15.1625 2.11667 14.8 2.6 14.55C3.63333 14.0333 4.68333 13.6458 5.75 13.3875C6.81667 13.1292 7.9 13 9 13C10.1 13 11.1833 13.1292 12.25 13.3875C13.3167 13.6458 14.3667 14.0333 15.4 14.55C15.8833 14.8 16.2708 15.1625 16.5625 15.6375C16.8542 16.1125 17 16.6333 17 17.2V20H1ZM19 20V17C19 16.2667 18.7958 15.5625 18.3875 14.8875C17.9792 14.2125 17.4 13.6333 16.65 13.15C17.5 13.25 18.3 13.4208 19.05 13.6625C19.8 13.9042 20.5 14.2 21.15 14.55C21.75 14.8833 22.2083 15.2542 22.525 15.6625C22.8417 16.0708 23 16.5167 23 17V20H19ZM9 12C7.9 12 6.95833 11.6083 6.175 10.825C5.39167 10.0417 5 9.1 5 8C5 6.9 5.39167 5.95833 6.175 5.175C6.95833 4.39167 7.9 4 9 4C10.1 4 11.0417 4.39167 11.825 5.175C12.6083 5.95833 13 6.9 13 8C13 9.1 12.6083 10.0417 11.825 10.825C11.0417 11.6083 10.1 12 9 12ZM19 8C19 9.1 18.6083 10.0417 17.825 10.825C17.0417 11.6083 16.1 12 15 12C14.8167 12 14.5833 11.9792 14.3 11.9375C14.0167 11.8958 13.7833 11.85 13.6 11.8C14.05 11.2667 14.3958 10.675 14.6375 10.025C14.8792 9.375 15 8.7 15 8C15 7.3 14.8792 6.625 14.6375 5.975C14.3958 5.325 14.05 4.73333 13.6 4.2C13.8333 4.11667 14.0667 4.0625 14.3 4.0375C14.5333 4.0125 14.7667 4 15 4C16.1 4 17.0417 4.39167 17.825 5.175C18.6083 5.95833 19 6.9 19 8ZM3 18H15V17.2C15 17.0167 14.9542 16.85 14.8625 16.7C14.7708 16.55 14.65 16.4333 14.5 16.35C13.6 15.9 12.6917 15.5625 11.775 15.3375C10.8583 15.1125 9.93333 15 9 15C8.06667 15 7.14167 15.1125 6.225 15.3375C5.30833 15.5625 4.4 15.9 3.5 16.35C3.35 16.4333 3.22917 16.55 3.1375 16.7C3.04583 16.85 3 17.0167 3 17.2V18ZM9 10C9.55 10 10.0208 9.80417 10.4125 9.4125C10.8042 9.02083 11 8.55 11 8C11 7.45 10.8042 6.97917 10.4125 6.5875C10.0208 6.19583 9.55 6 9 6C8.45 6 7.97917 6.19583 7.5875 6.5875C7.19583 6.97917 7 7.45 7 8C7 8.55 7.19583 9.02083 7.5875 9.4125C7.97917 9.80417 8.45 10 9 10Z" />
                                        </svg></span>
                                    <figcaption class="text-h6 mod-pl-3">3. Smart Form Selection</figcaption>
                                </div>
                                <p class="mod-mt-1 text-gray-600">No more form confusion! We pick the right ITR for you.
                                </p>
                            </figure>
                            <figure class="mb-0 mod-flex mod-flex-col mod-items-start mod-text-left mod-gap-4">
                                <div class="mod-flex ">
                                    <span class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="none" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M1 20V17.2C1 16.6333 1.14583 16.1125 1.4375 15.6375C1.72917 15.1625 2.11667 14.8 2.6 14.55C3.63333 14.0333 4.68333 13.6458 5.75 13.3875C6.81667 13.1292 7.9 13 9 13C10.1 13 11.1833 13.1292 12.25 13.3875C13.3167 13.6458 14.3667 14.0333 15.4 14.55C15.8833 14.8 16.2708 15.1625 16.5625 15.6375C16.8542 16.1125 17 16.6333 17 17.2V20H1ZM19 20V17C19 16.2667 18.7958 15.5625 18.3875 14.8875C17.9792 14.2125 17.4 13.6333 16.65 13.15C17.5 13.25 18.3 13.4208 19.05 13.6625C19.8 13.9042 20.5 14.2 21.15 14.55C21.75 14.8833 22.2083 15.2542 22.525 15.6625C22.8417 16.0708 23 16.5167 23 17V20H19ZM9 12C7.9 12 6.95833 11.6083 6.175 10.825C5.39167 10.0417 5 9.1 5 8C5 6.9 5.39167 5.95833 6.175 5.175C6.95833 4.39167 7.9 4 9 4C10.1 4 11.0417 4.39167 11.825 5.175C12.6083 5.95833 13 6.9 13 8C13 9.1 12.6083 10.0417 11.825 10.825C11.0417 11.6083 10.1 12 9 12ZM19 8C19 9.1 18.6083 10.0417 17.825 10.825C17.0417 11.6083 16.1 12 15 12C14.8167 12 14.5833 11.9792 14.3 11.9375C14.0167 11.8958 13.7833 11.85 13.6 11.8C14.05 11.2667 14.3958 10.675 14.6375 10.025C14.8792 9.375 15 8.7 15 8C15 7.3 14.8792 6.625 14.6375 5.975C14.3958 5.325 14.05 4.73333 13.6 4.2C13.8333 4.11667 14.0667 4.0625 14.3 4.0375C14.5333 4.0125 14.7667 4 15 4C16.1 4 17.0417 4.39167 17.825 5.175C18.6083 5.95833 19 6.9 19 8ZM3 18H15V17.2C15 17.0167 14.9542 16.85 14.8625 16.7C14.7708 16.55 14.65 16.4333 14.5 16.35C13.6 15.9 12.6917 15.5625 11.775 15.3375C10.8583 15.1125 9.93333 15 9 15C8.06667 15 7.14167 15.1125 6.225 15.3375C5.30833 15.5625 4.4 15.9 3.5 16.35C3.35 16.4333 3.22917 16.55 3.1375 16.7C3.04583 16.85 3 17.0167 3 17.2V18ZM9 10C9.55 10 10.0208 9.80417 10.4125 9.4125C10.8042 9.02083 11 8.55 11 8C11 7.45 10.8042 6.97917 10.4125 6.5875C10.0208 6.19583 9.55 6 9 6C8.45 6 7.97917 6.19583 7.5875 6.5875C7.19583 6.97917 7 7.45 7 8C7 8.55 7.19583 9.02083 7.5875 9.4125C7.97917 9.80417 8.45 10 9 10Z" />
                                        </svg></span>
                                    <figcaption class="text-h6 mod-pl-3">4. Hassle-Free Return Preparation</figcaption>
                                </div>
                                <p class="mod-mt-1 text-gray-600">Sit back while we prep your return for max savings!</p>
                            </figure>
                            <figure class="mb-0 mod-flex mod-flex-col mod-items-start mod-text-left mod-gap-4">
                                <div class="mod-flex ">
                                    <span class="text-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                            height="24" fill="none" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M1 20V17.2C1 16.6333 1.14583 16.1125 1.4375 15.6375C1.72917 15.1625 2.11667 14.8 2.6 14.55C3.63333 14.0333 4.68333 13.6458 5.75 13.3875C6.81667 13.1292 7.9 13 9 13C10.1 13 11.1833 13.1292 12.25 13.3875C13.3167 13.6458 14.3667 14.0333 15.4 14.55C15.8833 14.8 16.2708 15.1625 16.5625 15.6375C16.8542 16.1125 17 16.6333 17 17.2V20H1ZM19 20V17C19 16.2667 18.7958 15.5625 18.3875 14.8875C17.9792 14.2125 17.4 13.6333 16.65 13.15C17.5 13.25 18.3 13.4208 19.05 13.6625C19.8 13.9042 20.5 14.2 21.15 14.55C21.75 14.8833 22.2083 15.2542 22.525 15.6625C22.8417 16.0708 23 16.5167 23 17V20H19ZM9 12C7.9 12 6.95833 11.6083 6.175 10.825C5.39167 10.0417 5 9.1 5 8C5 6.9 5.39167 5.95833 6.175 5.175C6.95833 4.39167 7.9 4 9 4C10.1 4 11.0417 4.39167 11.825 5.175C12.6083 5.95833 13 6.9 13 8C13 9.1 12.6083 10.0417 11.825 10.825C11.0417 11.6083 10.1 12 9 12ZM19 8C19 9.1 18.6083 10.0417 17.825 10.825C17.0417 11.6083 16.1 12 15 12C14.8167 12 14.5833 11.9792 14.3 11.9375C14.0167 11.8958 13.7833 11.85 13.6 11.8C14.05 11.2667 14.3958 10.675 14.6375 10.025C14.8792 9.375 15 8.7 15 8C15 7.3 14.8792 6.625 14.6375 5.975C14.3958 5.325 14.05 4.73333 13.6 4.2C13.8333 4.11667 14.0667 4.0625 14.3 4.0375C14.5333 4.0125 14.7667 4 15 4C16.1 4 17.0417 4.39167 17.825 5.175C18.6083 5.95833 19 6.9 19 8ZM3 18H15V17.2C15 17.0167 14.9542 16.85 14.8625 16.7C14.7708 16.55 14.65 16.4333 14.5 16.35C13.6 15.9 12.6917 15.5625 11.775 15.3375C10.8583 15.1125 9.93333 15 9 15C8.06667 15 7.14167 15.1125 6.225 15.3375C5.30833 15.5625 4.4 15.9 3.5 16.35C3.35 16.4333 3.22917 16.55 3.1375 16.7C3.04583 16.85 3 17.0167 3 17.2V18ZM9 10C9.55 10 10.0208 9.80417 10.4125 9.4125C10.8042 9.02083 11 8.55 11 8C11 7.45 10.8042 6.97917 10.4125 6.5875C10.0208 6.19583 9.55 6 9 6C8.45 6 7.97917 6.19583 7.5875 6.5875C7.19583 6.97917 7 7.45 7 8C7 8.55 7.19583 9.02083 7.5875 9.4125C7.97917 9.80417 8.45 10 9 10Z" />
                                        </svg></span>
                                    <figcaption class="text-h6 mod-pl-3">5. Instant Filing & Acknowledgment</figcaption>
                                </div>
                                <p class="mod-mt-1 text-gray-600">Click, file, and relax — your ITR is filed with instant
                                    confirmation!</p>
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
                                    <path d="M210.12,46.61c-55.04,34.92-94.8,60.16-178.96-3.6L0,84.15c48.63,36.85,88.64,49.94,123.14,49.94,45.45,0,81.31-22.76,114.64-43.9,53.97-34.25,100.57-63.82,194.12-4.78l27.54-43.65c-121.18-76.46-192.23-31.37-249.32,4.86Z"></path>
                                </g>
                            </svg>
                        </span>
                    </div>
                </div>
            </article>
        </section>
        <section class="container my-80 my-xxl-120" id="resources">
            <h2 class="display-6 fw-bold mb-32">Tax Filing Made Simple: Who Needs to File & How?
            </h2>

            <div class="row gy-40 gx-lg-40">
                <div class="col-lg-4">
                    <div class="d-flex flex-column gap-12 gap-lg-3 mx-auto">
                        <figure class="text-primary svg-scale scale-40 mb-0"><svg xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 49 48">
                                <path fill="currentColor"
                                    d="M24.083 40.9998C24.2497 40.9998 24.4413 40.9581 24.658 40.8748C24.8747 40.7915 25.0497 40.6831 25.183 40.5498L42.033 23.6498C42.4663 23.2165 42.7913 22.722 43.008 22.1665C43.2247 21.6109 43.333 21.0554 43.333 20.4998C43.333 19.9331 43.2247 19.3665 43.008 18.7998C42.7913 18.2331 42.4663 17.7331 42.033 17.2998L33.033 8.2998C32.5997 7.86647 32.0997 7.54147 31.533 7.3248C30.9663 7.10814 30.3997 6.9998 29.833 6.9998C29.2774 6.9998 28.7219 7.10814 28.1664 7.3248C27.6108 7.54147 27.1163 7.86647 26.683 8.2998L25.783 9.1998L29.833 13.2998C30.2663 13.7665 30.6497 14.3081 30.983 14.9248C31.3163 15.5415 31.483 16.2165 31.483 16.9498C31.483 18.2165 30.9913 19.3331 30.008 20.2998C29.0247 21.2665 27.8997 21.7498 26.633 21.7498C25.7997 21.7498 25.108 21.6248 24.558 21.3748C24.008 21.1248 23.5049 20.7691 23.0488 20.3078L19.383 16.6498L10.333 25.6998C10.1663 25.8665 10.0497 26.0419 9.98301 26.2261C9.91634 26.4103 9.88301 26.6077 9.88301 26.8182C9.88301 27.2393 10.0247 27.5915 10.308 27.8748C10.5913 28.1581 10.9441 28.2998 11.3664 28.2998C11.5775 28.2998 11.7747 28.2498 11.958 28.1498C12.1413 28.0498 12.2997 27.9331 12.433 27.7998L19.333 20.8998L21.433 22.9998L14.583 29.8498C14.4163 30.0165 14.2997 30.1998 14.233 30.3998C14.1663 30.5998 14.133 30.7998 14.133 30.9998C14.133 31.3998 14.283 31.7498 14.583 32.0498C14.883 32.3498 15.233 32.4998 15.633 32.4998C15.833 32.4998 16.0247 32.4581 16.208 32.3748C16.3913 32.2915 16.5497 32.1831 16.683 32.0498L23.583 25.1498L25.683 27.2498L18.833 34.0998C18.6997 34.2331 18.5913 34.4054 18.508 34.6165C18.4247 34.8276 18.383 35.0387 18.383 35.2498C18.383 35.6498 18.533 35.9998 18.833 36.2998C19.133 36.5998 19.483 36.7498 19.883 36.7498C20.083 36.7498 20.2663 36.7165 20.433 36.6498C20.5997 36.5831 20.7663 36.4665 20.933 36.2998L27.833 29.3998L29.933 31.4998L23.033 38.3998C22.8663 38.5665 22.7497 38.7498 22.683 38.9498C22.6163 39.1498 22.583 39.3331 22.583 39.4998C22.583 39.9665 22.7163 40.3331 22.983 40.5998C23.2497 40.8665 23.6163 40.9998 24.083 40.9998ZM24.0862 43.9998C22.9841 43.9998 21.9997 43.5915 21.133 42.7748C20.2663 41.9581 19.7497 40.9478 19.583 39.7439C18.4497 39.5812 17.4997 39.1165 16.733 38.3498C15.9663 37.5831 15.4997 36.6331 15.333 35.4998C14.1997 35.3331 13.258 34.8581 12.508 34.0748C11.758 33.2915 11.2997 32.3498 11.133 31.2498C9.89967 31.0831 8.88301 30.5831 8.08301 29.7498C7.28301 28.9165 6.88301 27.9165 6.88301 26.7498C6.88301 26.1831 6.99507 25.6157 7.21921 25.0474C7.44334 24.4791 7.76461 23.9799 8.18301 23.5498L19.383 12.3498L24.883 17.8498C25.1497 18.1165 25.4386 18.3248 25.7497 18.4748C26.0608 18.6248 26.3719 18.6998 26.683 18.6998C27.1163 18.6998 27.5247 18.5081 27.908 18.1248C28.2913 17.7415 28.483 17.3306 28.483 16.8921C28.483 16.6972 28.4247 16.4748 28.308 16.2248C28.1913 15.9748 27.9997 15.7165 27.733 15.4498L20.583 8.2998C20.1497 7.86647 19.6497 7.54147 19.083 7.3248C18.5163 7.10814 17.9497 6.9998 17.383 6.9998C16.8274 6.9998 16.2719 7.10814 15.7164 7.3248C15.1608 7.54147 14.6673 7.86409 14.236 8.29265L6.63301 15.8998C6.16634 16.3665 5.84134 16.8581 5.65801 17.3748C5.47467 17.8915 5.36634 18.4748 5.33301 19.1248C5.29967 19.7748 5.42467 20.4081 5.70801 21.0248C5.99134 21.6415 6.33301 22.1998 6.73301 22.6998L4.58301 24.8498C3.91634 24.1165 3.37467 23.2331 2.95801 22.1998C2.54134 21.1665 2.33301 20.1165 2.33301 19.0498C2.33301 18.0498 2.52467 17.0915 2.90801 16.1748C3.29134 15.2581 3.83301 14.4498 4.53301 13.7498L12.083 6.1998C12.8163 5.46647 13.6462 4.9248 14.5727 4.5748C15.4991 4.2248 16.4491 4.0498 17.4227 4.0498C18.3962 4.0498 19.3413 4.2248 20.258 4.5748C21.1747 4.9248 21.9997 5.46647 22.733 6.1998L23.633 7.0998L24.533 6.1998C25.2663 5.46647 26.0962 4.9248 27.0227 4.5748C27.9491 4.2248 28.8991 4.0498 29.8727 4.0498C30.8462 4.0498 31.7913 4.2248 32.708 4.5748C33.6247 4.9248 34.4497 5.46647 35.183 6.1998L44.133 15.1498C44.8663 15.8831 45.4163 16.717 45.783 17.6515C46.1497 18.5859 46.333 19.5359 46.333 20.5015C46.333 21.467 46.1497 22.4081 45.783 23.3248C45.4163 24.2415 44.8663 25.0665 44.133 25.7998L27.283 42.6498C26.8497 43.0831 26.3575 43.4165 25.8064 43.6498C25.2553 43.8831 24.6819 43.9998 24.0862 43.9998Z" />
                            </svg></figure>
                            <h3 class="mb-0">Who Should File <span class="text-primary mod-font-bold">ITR</span></h3>
                            <p class="mb-0 text-lg">If you’re a proprietor under 60 years, you must file an income tax return if your total income exceeds ₹2.5 lakh. For those aged between 60 and 80 years, ITR filing is required if income crosses ₹3 lakh. If you’re 80 years or older, filing is mandatory only if your income exceeds ₹5 lakh.</p>
                            <p class="mb-0 text-lg">All Partnership Firms, Companies, and LLPs must file an Income Tax Return (ITR) every year, no matter their income or loss. Even if there are zero transactions, a NIL ITR must be submitted before the due date.</p>
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
                        <h3 class="mb-0">Tax Audit</h3>
                        <p class="mb-0 text-lg">A tax audit is mandatory if a business has total sales above ₹1 crore or if a professional’s gross receipts exceed ₹50 lakh in a financial year. In some cases, a tax audit may still be required, even if these limits are not met.</p>
                            <ul>
                                <li>Businesses under tax audit must file both ITR and Tax Audit Report by September 30 each year.</li>
                                <li>For Companies: Audit is compulsory, regardless of turnover.</li>
                                <li>For LLPs: Audit is required if turnover exceeds ₹40 lakh or contributions exceed ₹25 lakh.</li>
                            </ul>
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
                        <h3 class="mb-0">Forms</h3>
                        <p class="mb-0 text-lg">Proprietorship Firms should file their ITR using Form ITR-3 or ITR-4 (Sugam), while Partnership Firms & LLPs must use Form ITR-5. Companies are required to file through Form ITR-6, and Charitable Trusts should submit Form ITR-7.</p>
                        <ul>
                            <li><span class="mod-font-bold">Mandatory Digital Signature:</span> Companies & LLPs must use a digital signature for filing.</li>
                            <li><span class="mod-font-bold">Other Verification Options:</span> Individuals and firms can e-verify using Aadhaar or net banking, or send a physically signed ITR-V to CPC for processing.</li>
                        </ul>
                        <div class="mx-n1">
                            <a href="registrace/adept.html" class="btn btn-link">To se mi líbí</a>
                        </div>
                    </div>
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

                            <img alt="Ukázka CV editor na počítači a telefonu" src="images/img/home/editor.png"
                                width="1274" height="786">
                        </figure>
                    </div>
                </div>
            </article>
        </section>
        <section class="templateShowcase my-80 my-xxl-120">
            <div class="container">
                <h2 class="mb-20 mb-md-40 pb-md-1 pe-md-120">Jak bude vypadat Vaše nové CV?</h2>
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

        <x-article-list page="itr"></x-article-list>
        
        <section class="container my-80 my-xxl-120" id="faq">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-xl-9 col-xxl-9">

                    <h2 class="mb-3 mb-xl-32">Income Tax Returns E-Filings FAQ</h2>

                    <div class="accordion" id="faqList-home">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqList-home-item1" aria-expanded="false"
                                    aria-controls="faqList-home-item1">
                                    What is Income Tax Return (ITR) filing?
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
                                    <p>An Income Tax Return (ITR) is a document submitted to the Income Tax Department of
                                        India that reports an individual's income and applicable taxes for a financial year
                                        (April 1 - March 31). Filing an ITR ensures compliance with tax regulations and
                                        helps determine tax liability.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqList-home-item2" aria-expanded="false"
                                    aria-controls="faqList-home-item2">
                                    Is filing an ITR mandatory?
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
                                    <p>Yes, filing an ITR is compulsory under certain conditions. According to Section
                                        139(1) of the Income Tax Act, resident individuals with foreign assets, overseas
                                        income, or financial interests abroad must file an ITR. Non-compliance can lead to
                                        penalties or legal consequences.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqList-home-item3" aria-expanded="false"
                                    aria-controls="faqList-home-item3">
                                    How can I file my Income Tax Return in India?
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
                                    <p>You can file your ITR online through the official Income Tax Department website or
                                        tax-filing platforms. For the assessment year 2023-2024, the deadline is July 31,
                                        2024. Filing before the due date helps avoid penalties.</p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#faqList-home-item4" aria-expanded="false"
                                    aria-controls="faqList-home-item4">
                                    What happens if I don’t file my ITR on time?
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
                                    <p>Filing your ITR after the due date can lead to penalties of up to ₹10,000. You may
                                        also lose the benefit of carrying forward losses and face higher scrutiny from tax
                                        authorities.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
@endsection
