@extends('frontend._layouts.master')

@section('content')
    <main class="flex-grow-1">
        <section class="d-flex sm:mod-flex-col">
            <div
                class="half half--right half--lg-bg mod-flex-2 order-first order-lg-0 offset-container offset-lg-40 mod-pl-12 mod-pr-24 md:mod-pl-8 md:mod-pr-10 md:mod-pt-8 sm:mod-pl-6 sm:mod-pr-12">
                <div class="row justify-content-center g-0 pt-32 py-lg-80 mb-0">

                    <div class="col-12 col-md-12 svg-scale scale-32 scale-lg-auto">
                        <h1 class="mod-font-medium mod-leading-semi-loose mod-mb-6">We're Here to Help – With <span
                                class="text-primary mod-font-semibold">100% Transparency</span></h1>
                        <h3 class="mod-mb-4 mod-leading-loose mod-space-semi">
                            At TaxBizLegal, we believe in clear communication—no hidden fees, no confusion. From explaining
                            government rules to guiding you on pricing and timelines, we keep everything simple and
                            transparent. So you can focus on your business, while we handle the legal details.
                        </h3>
                        <h3 class="mod-mb-10 mod-leading-loose mod-space-semi">
                            Have questions or need guidance? We’re here to help — you’re just a call away. Reach out to us
                            and let’s talk about how we can support your goals.
                        </h3>
                        <div class="mod-pb-12 mod-flex mod-flex-col mod-gap-6">
                            <div class="mod-grid-template-col-1" data-fade="up"
                                style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <button
                                    class="active mod-items-center mod-bg-none mod-border-none mod-flex mod-flex-row mod-gap-4"
                                    title="{{ config('app.site_info.company_address') }}" data-map-toggle="">
                                    <span class="icon svg-icon">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill="#2d74d3"
                                                d="M18 4.48a8.485 8.485 0 1 0-12 12l5.27 5.28a.998.998 0 0 0 1.42 0L18 16.43a8.45 8.45 0 0 0 0-11.95ZM16.57 15 12 19.59 7.43 15a6.46 6.46 0 1 1 9.14 0ZM9 7.41a4.32 4.32 0 0 0 0 6.1 4.31 4.31 0 0 0 7.36-3 4.239 4.239 0 0 0-1.26-3.05A4.3 4.3 0 0 0 9 7.41Zm4.69 4.68a2.33 2.33 0 1 1 .67-1.63 2.33 2.33 0 0 1-.72 1.63h.05Z"
                                                fill="#0B1126"></path>
                                        </svg>
                                    </span>
                                    <span class="text">{{ config('app.site_info.company_address') }}</span>
                                </button>
                            </div>

                            <div class="mod-grid-2 sm:mod-grid-template-col-1" data-fade="up"
                                style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <div class="mod-flex mod-flex-col mod-gap-2">
                                    <span class="office-title">Sales</span>
                                    <div class="office-info">
                                        <div class="office-emails">
                                            <a class="email" href="mailto:{{ config('app.site_info.sales_email') }}">
                                                {{ config('app.site_info.sales_email') }} </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mod-flex mod-flex-col mod-gap-2">
                                    <span class="office-title">Customer Support</span>
                                    <div class="office-info">
                                        <div class="office-emails">
                                            <a class="email" href="mailto:{{ config('app.site_info.support_email') }}">
                                                {{ config('app.site_info.support_email') }} </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mod-flex mod-flex-col mod-gap-2">
                                    <span class="office-title">Call Support</span>
                                    <div class="office-info">
                                        <div class="office-emails">
                                            <a class="email" href="tel:91{{ config('app.site_info.support_phone') }}">
                                                +91 {{ config('app.site_info.support_phone') }}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mod-flex mod-flex-col mod-gap-2">
                                    <span class="office-title">WhatsApp Support</span>
                                    <div class="office-info">
                                        <div class="office-emails">
                                            <a class="email"
                                                href="https://wa.me/{{ config('app.site_info.support_wp_phone') }}?text=Hello,%20I%20need%20some%20assistance!"
                                                target="_blank">
                                                +91 {{ config('app.site_info.support_wp_phone') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mod-my-8">
                        <div class="mod-grid md:mod-grid-cols-2 mod-gap-6 sm:mod-gap-12">
                            <div>
                                <h3 class="mod-text-s-24 mod-mb-10">Our Advisory Services</h3>
                                <div class="space-y-4 sm:space-y-6">
                                    <div class="mod-flex mod-items-start mod-mb-4">
                                        <div
                                            class="contact-advisory-icon mod-w-8 mod-h-8 sm:mod-w-10 sm:mod-h-10 mod-rounded-full mod-flex mod-items-center mod-justify-center mod-font-bold mod-mr-3 sm:mod-mr-4 flex-shrink-0">
                                            <?xml version="1.0" encoding="utf-8"?>
                                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 122.88 113.05" style="enable-background:new 0 0 122.88 113.05"
                                                xml:space="preserve">
                                                <style type="text/css">
                                                    .st0 {
                                                        fill-rule: evenodd;
                                                        clip-rule: evenodd;
                                                    }
                                                </style>
                                                <g>
                                                    <path class="st0"
                                                        d="M0,100.07h14.72V1.57c0-0.86,0.71-1.57,1.57-1.57h49.86c0.86,0,1.57,0.71,1.57,1.57V38.5h44.12 c0.86,0,1.57,0.71,1.57,1.57v59.99h9.47v12.99H0V100.07L0,100.07z M27.32,14.82h10.2c0.31,0,0.57,0.26,0.57,0.57v12.36 c0,0.31-0.26,0.57-0.57,0.57h-10.2c-0.31,0-0.57-0.26-0.57-0.57V15.39C26.75,15.08,27.01,14.82,27.32,14.82L27.32,14.82z M44.6,76.3h10.2c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57H44.6c-0.31,0-0.57-0.26-0.57-0.57V76.87 C44.03,76.55,44.29,76.3,44.6,76.3L44.6,76.3z M27.32,76.3h10.2c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57 h-10.2c-0.31,0-0.57-0.26-0.57-0.57V76.87C26.75,76.55,27.01,76.3,27.32,76.3L27.32,76.3z M44.6,55.8h10.2 c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57H44.6c-0.31,0-0.57-0.26-0.57-0.57V56.38 C44.03,56.06,44.29,55.8,44.6,55.8L44.6,55.8z M27.32,55.8h10.2c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57 h-10.2c-0.31,0-0.57-0.26-0.57-0.57V56.38C26.75,56.06,27.01,55.8,27.32,55.8L27.32,55.8z M44.6,35.31h10.2 c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57H44.6c-0.31,0-0.57-0.26-0.57-0.57V35.88 C44.03,35.57,44.29,35.31,44.6,35.31L44.6,35.31z M27.32,35.31h10.2c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57 h-10.2c-0.31,0-0.57-0.26-0.57-0.57V35.88C26.75,35.57,27.01,35.31,27.32,35.31L27.32,35.31z M44.6,14.82h10.2 c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57H44.6c-0.31,0-0.57-0.26-0.57-0.57V15.39 C44.03,15.08,44.29,14.82,44.6,14.82L44.6,14.82z M23.17,7.32h35.92c0.62,0,1.13,0.61,1.13,1.35v85.87c0,0.74-0.51,1.35-1.13,1.35 H23.17c-0.62,0-1.13-0.61-1.13-1.35V8.67C22.04,7.93,22.55,7.32,23.17,7.32L23.17,7.32z M72.61,53.43h10.2 c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57h-10.2c-0.31,0-0.57-0.26-0.57-0.57V54 C72.04,53.69,72.3,53.43,72.61,53.43L72.61,53.43z M89.89,76.3h10.2c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57 h-10.2c-0.31,0-0.57-0.26-0.57-0.57V76.87C89.32,76.55,89.58,76.3,89.89,76.3L89.89,76.3z M72.61,76.3h10.2 c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57h-10.2c-0.31,0-0.57-0.26-0.57-0.57V76.87 C72.04,76.55,72.3,76.3,72.61,76.3L72.61,76.3z M89.89,53.43h10.2c0.31,0,0.57,0.26,0.57,0.57v12.36c0,0.31-0.26,0.57-0.57,0.57 h-10.2c-0.31,0-0.57-0.26-0.57-0.57V54C89.32,53.69,89.58,53.43,89.89,53.43L89.89,53.43z M68.86,45.82h35.92 c0.62,0,1.13,0.61,1.13,1.35v47.37c0,0.74-0.51,1.35-1.13,1.35H68.86c-0.62,0-1.13-0.61-1.13-1.35V47.17 C67.73,46.43,68.24,45.82,68.86,45.82L68.86,45.82z" />
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="mod-pl-4">
                                            <h4 class="mod-mb-2">Choose the Right Business Type</h4>
                                            <p class="text-sm sm:text-base">
                                                <strong class="text-white">Find your ideal structure</strong> with tailored
                                                guidance for Pvt Ltd, OPC, LLP, and more.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mod-flex mod-items-start mod-mb-4">
                                        <div
                                            class="contact-advisory-icon mod-w-8 mod-h-8 sm:mod-w-10 sm:mod-h-10 mod-rounded-full mod-flex mod-items-center mod-justify-center mod-font-bold mod-mr-3 sm:mod-mr-4 flex-shrink-0">
                                            <?xml version="1.0" encoding="utf-8"?><svg version="1.1" id="Layer_1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="122.88px"
                                                height="92.126px" viewBox="0 0 122.88 92.126"
                                                enable-background="new 0 0 122.88 92.126" xml:space="preserve">
                                                <g>
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M6.022,0h52.021c3.878,0,7.048,3.17,7.048,7.048v5.254h52.149 c3.102,0,5.64,2.535,5.64,5.637v68.549c0,3.101-2.538,5.638-5.64,5.638h-12.219V81.464H89.949v10.662H34.681V81.464H19.608v10.662 H6.662c-3.1,0-6.662-2.537-6.662-5.638C0,58.626,0,33.214,0,6.023C0,2.71,2.709,0,6.022,0L6.022,0z M70.785,27.972h43.325v6.39 H70.785V27.972L70.785,27.972z M70.785,44.648h43.325v6.39H70.785V44.648L70.785,44.648z M70.785,61.324h43.325v6.388H70.785 V61.324L70.785,61.324z M9.086,67.712v-8.194c4.385-1.95,17.81-5.57,18.443-10.938c0.145-1.211-2.715-5.923-3.37-8.139 c-0.823-1.313-1.268-1.782-1.245-3.401c0.011-0.912,0.025-1.81,0.156-2.687c0.166-1.121,0.134-1.154,0.719-2.057 c0.61-0.938,0.349-4.358,0.349-5.65c0-12.851,22.518-12.855,22.518,0c0,1.625-0.374,4.61,0.508,5.889 c0.431,0.621,0.354,0.694,0.496,1.456c0.191,0.993,0.204,2.011,0.22,3.05c0.021,1.619-0.422,2.089-1.245,3.401 c-0.799,2.327-3.835,6.726-3.576,8.046c0.966,4.902,13.42,8.195,17.341,9.939v9.285H9.086L9.086,67.712z M99.875,92.126h-4.656 v-5.025h4.656V92.126L99.875,92.126z M29.534,92.126h-4.658v-5.025h4.658V92.126L29.534,92.126z" />
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="mod-pl-4">
                                            <h4 class="mod-mb-2">Accurate Document Preparation</h4>
                                            <p class="text-sm sm:text-base">
                                                <strong class="text-white">Speed up approval</strong> with well-prepared,
                                                correctly formatted paperwork reviewed by professionals.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mod-flex mod-items-start mod-mb-4">
                                        <div
                                            class="contact-advisory-icon mod-w-8 mod-h-8 sm:mod-w-10 sm:mod-h-10 mod-rounded-full mod-flex mod-items-center mod-justify-center mod-font-bold mod-mr-3 sm:mod-mr-4 flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 103.19 122.88">
                                                <path
                                                    d="M17.16 0h82.72a3.32 3.32 0 013.31 3.31v92.32c-.15 2.58-3.48 2.64-7.08 2.48H15.94c-4.98 0-9.05 4.07-9.05 9.05s4.07 9.05 9.05 9.05h80.17v-9.63h7.08v12.24c0 2.23-1.82 4.05-4.05 4.05H16.29C7.33 122.88 0 115.55 0 106.59V17.16C0 7.72 7.72 0 17.16 0zm3.19 13.4h2.86c1.46 0 2.66.97 2.66 2.15v67.47c0 1.18-1.2 2.15-2.66 2.15h-2.86c-1.46 0-2.66-.97-2.66-2.15V15.55c.01-1.19 1.2-2.15 2.66-2.15z"
                                                    fill-rule="evenodd" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div class="mod-pl-4">
                                            <h4 class="mod-mb-2">Step-by-Step Process Guidance</h4>
                                            <p class="text-sm sm:text-base">
                                                <strong class="text-white">Understand every stage</strong> with simplified
                                                walkthroughs of MCA procedures and timelines.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mod-flex mod-items-start mod-mb-4">
                                        <div
                                            class="contact-advisory-icon mod-w-8 mod-h-8 sm:mod-w-10 sm:mod-h-10 mod-rounded-full mod-flex mod-items-center mod-justify-center mod-font-bold mod-mr-3 sm:mod-mr-4 flex-shrink-0">
                                            <?xml version="1.0" encoding="utf-8"?><svg version="1.1" id="Layer_1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 93.49 122.88" style="enable-background:new 0 0 93.49 122.88"
                                                xml:space="preserve">
                                                <g>
                                                    <path
                                                        d="M2.34,62.52l-0.26,0.27l-2.08-0.83V31.27c0-1.42,0.42-2.76,1.14-3.89l0,0c0.14-0.22,0.29-0.44,0.46-0.64 c0.17-0.22,0.35-0.42,0.53-0.6l0.02-0.02c0.54-0.54,1.18-1.01,1.89-1.36l0.03-0.01l0.35-0.17l0.04-0.02 c0.86-0.37,1.82-0.58,2.81-0.58l0,0h0.04v0c2.01,0,3.84,0.82,5.16,2.14c0.54,0.54,1.01,1.18,1.36,1.88l0.02,0.04l0.16,0.35 l0.01,0.03c0.37,0.86,0.58,1.82,0.58,2.81l0,0.01v0.04v24.96v1.13l-1.13,0.07c-3.08,0.19-5.92,1.18-8.32,2.77 c-0.48,0.32-0.94,0.66-1.38,1.02c-0.41,0.34-0.84,0.72-1.26,1.15L2.34,62.52L2.34,62.52L2.34,62.52z M65.62,83.35l1.23,0.46 l0.53,0.39c0.09,0.12,0.2,0.22,0.33,0.31l0,0l0.16,0.09l0,0.01c0.17,0.08,0.35,0.12,0.54,0.12v0h0.03c0.18,0,0.34-0.03,0.49-0.09 l0.12-0.06l0.12-0.07l0.04-0.02l0.04-0.02c0.54-0.31,1.26-0.85,2.05-1.5c0.8-0.67,1.71-1.49,2.61-2.33 c1.76-1.66,3.76-3.66,4.56-4.45l0.04-0.04c2.53-2.53,5.11-3.7,7.38-3.85c0.46-0.03,0.92-0.02,1.35,0.03 c0.44,0.05,0.87,0.14,1.28,0.27h0.01l0.05,0.02l0.01,0c0.81,0.26,1.56,0.67,2.22,1.2l0.03,0.03l0.31,0.27l0.06,0.05l0.29,0.29 l0.05,0.06l0.01,0.01l0,0l0.01,0.02l0,0c0.56,0.62,1.01,1.35,1.34,2.16l0.02,0.03l0.15,0.42l0.02,0.09l0.12,0.43l0.01,0.05 l0.01,0.06h0c0.57,2.38,0.1,5.27-1.88,8.17c-0.37,0.55-0.81,1.11-1.29,1.65c-0.48,0.54-1.02,1.09-1.62,1.62l0,0l-0.08,0.07 l-0.1,0.09l-0.07,0.07l-0.04,0.04L63.64,114.3l-0.85,0.93l-0.06-0.06c-1.35,1.23-2.67,2.29-4.01,3.2c-1.6,1.08-3.22,1.95-4.9,2.61 c-1.69,0.67-3.46,1.15-5.33,1.46c-1.87,0.3-3.84,0.45-5.94,0.45h-15.9c-5.3,0-10.23-1.56-14.36-4.23l0,0 c-0.79-0.51-1.57-1.08-2.32-1.69c-0.76-0.62-1.47-1.26-2.12-1.92l-0.02-0.02l0,0c-2.01-2.04-3.71-4.42-5-7.03 c-0.25-0.52-0.49-1.04-0.71-1.56C0.76,103.2,0.01,99.65,0,95.93h0V95.9V74.93c0-1.93,0.36-3.79,1-5.49l0-0.01 c0.12-0.31,0.26-0.64,0.41-0.97h0c0.15-0.32,0.31-0.64,0.48-0.95l0.01-0.02l0.03-0.05l0.02-0.04c0.62-0.97,1.36-1.88,2.19-2.69 l0.02-0.02l0.46-0.43l0.04-0.03l0.48-0.41l0.04-0.04l0.02-0.02l0,0c1.06-0.85,2.24-1.57,3.51-2.11h0c0.29-0.12,0.57-0.24,0.76-0.3 v0c1.56-0.57,3.25-0.88,5.01-0.88v0h0.04h0.64l0.29,0.04l0.27,0.07l0.21,0.02v0h17.27v0l0.11,0h0.08l0.11,0v0h17.27v0l0.05,0h0.07 l0.05,0v0h1.28c2.54,0,4.94,0.65,7.05,1.79l0,0c0.42,0.23,0.82,0.47,1.19,0.72v0l0.01,0c0.36,0.24,0.74,0.52,1.11,0.82l0.01,0.01 l0.02,0.02l0,0c1.82,1.49,3.3,3.41,4.25,5.6c0.2,0.45,0.37,0.89,0.5,1.31v0c0.15,0.45,0.27,0.91,0.38,1.37v0.01l0.01,0.07 l0.02,0.11c0.01,0.08,0.02,0.16,0.04,0.22h0l0.01,0.03h0l0.04,0.11h0l0.02,0.06L67,73.21l0.06,0.65l0,0.04l0.02,0.26v0.04 l0.02,0.46v0.03l0,0.25l0,0.01v4.43v1.66l-1.58-0.52c-2.46-0.81-4.81-1.36-7.03-1.66h0c-0.5-0.07-0.98-0.12-1.42-0.17 c-0.45-0.04-0.92-0.08-1.39-0.1l-1.02-0.03c-2.85-0.04-5.48,0.37-7.81,1.17c-0.51,0.18-0.99,0.36-1.42,0.55 c-0.45,0.2-0.9,0.41-1.32,0.64l-0.71,0.41c-2.23,1.34-4.08,3.14-5.49,5.34c-0.29,0.46-0.56,0.9-0.78,1.33 c-0.24,0.45-0.46,0.94-0.68,1.44v0l-0.01,0.03h0c-0.68,1.62-1.17,3.4-1.45,5.33c-0.06,0.44-0.12,0.87-0.15,1.28 c-0.03,0.34-0.07,0.7-0.08,1.06l2.66,0.03c0.08-1.35,0.28-2.64,0.57-3.84h0c0.09-0.37,0.18-0.72,0.27-1.03h0 c0.09-0.3,0.2-0.64,0.33-0.98v0l0.32-0.82l0,0c0.89-2.13,2.18-3.94,3.8-5.38c0.32-0.28,0.66-0.55,0.99-0.8 c0.37-0.27,0.72-0.51,1.06-0.71l0.02-0.01l0.03-0.02v0c1.7-1.02,3.68-1.73,5.9-2.09c0.45-0.07,0.94-0.14,1.44-0.18 c0.49-0.05,1-0.07,1.49-0.09h0.03l0.98,0h0.02c2.3,0.03,4.79,0.39,7.44,1.07v0c0.61,0.15,1.18,0.32,1.72,0.49 c0.62,0.19,1.21,0.39,1.77,0.58L65.62,83.35L65.62,83.35z M15.74,60.59L15.74,60.59L15.74,60.59L15.74,60.59L15.74,60.59z M48.24,57.4H36.05h-1.2v-1.2V7.3h0c0-2.01,0.82-3.84,2.14-5.16c0.54-0.54,1.18-1.01,1.88-1.36l0.03-0.01l0.35-0.17l0.04-0.02 c0.86-0.37,1.81-0.58,2.81-0.58l0-0.01h0.04v0.01c2.01,0,3.84,0.82,5.16,2.14c0.54,0.54,1,1.18,1.36,1.88l0.02,0.03l0.16,0.35 l0.02,0.04c0.37,0.86,0.58,1.81,0.58,2.81l0,0.01V7.3v48.89v1.2H48.24L48.24,57.4z M53.63,57.45l-0.22-0.02l-1.12-0.09v-1.11V19.01 h0c0-2.01,0.82-3.84,2.14-5.16c0.54-0.54,1.18-1,1.89-1.36l0.04-0.02l0.35-0.16l0.03-0.02c0.86-0.37,1.81-0.58,2.81-0.58l0,0h0.04 c1.42,0,2.76,0.42,3.89,1.14l0,0l0.01,0.01c0.22,0.13,0.43,0.29,0.63,0.45l0,0l0.01,0.01c0.21,0.16,0.41,0.34,0.59,0.52l0.02,0.02 c0.54,0.54,1.01,1.18,1.36,1.88l0.01,0.03l0.17,0.35l0.02,0.04c0.37,0.86,0.58,1.82,0.58,2.81l0,0v0.04v42.9l-2.07,0.84l-0.2-0.2 c-2.06-2.06-4.63-3.62-7.49-4.45c-0.57-0.17-1.16-0.31-1.73-0.41C54.84,57.58,54.24,57.5,53.63,57.45L53.63,57.45z M30.68,57.4 H18.49h-1.21v-1.2V31.27h0V18.89h0c0-1.42,0.42-2.77,1.14-3.9h0c0.14-0.23,0.3-0.45,0.46-0.65c0.17-0.22,0.35-0.42,0.52-0.59 l0.02-0.02c0.54-0.54,1.18-1,1.89-1.36l0.03-0.01l0.35-0.16l0.04-0.02c0.86-0.37,1.81-0.58,2.81-0.58l0,0h0.04v0 c2.01,0,3.84,0.82,5.16,2.14c0.54,0.54,1,1.18,1.36,1.88l0.01,0.03L31.28,16l0.02,0.04c0.37,0.86,0.58,1.82,0.58,2.81l0,0v0.04 v37.3v1.2H30.68L30.68,57.4z" />
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="mod-pl-4">
                                            <h4 class="mod-mb-2">Avoid Common Filing Errors</h4>
                                            <p class="text-sm sm:text-base">
                                                <strong class="text-white">Prevent unnecessary delays</strong> by spotting
                                                and fixing common documentation and filing mistakes.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="mod-flex mod-items-start mod-mb-4">
                                        <div
                                            class="contact-advisory-icon mod-w-8 mod-h-8 sm:mod-w-10 sm:mod-h-10 mod-rounded-full mod-flex mod-items-center mod-justify-center mod-font-bold mod-mr-3 sm:mod-mr-4 flex-shrink-0">
                                            <?xml version="1.0" encoding="utf-8"?><svg version="1.1" id="Layer_1"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                viewBox="0 0 107.7 122.88" style="enable-background:new 0 0 107.7 122.88"
                                                xml:space="preserve">
                                                <style type="text/css">
                                                    .st0 {
                                                        fill-rule: evenodd;
                                                        clip-rule: evenodd;
                                                    }
                                                </style>
                                                <g>
                                                    <path class="st0"
                                                        d="M10.45,93.26c-0.35-3.69-0.3-7.28-0.38-10.96l-6.18-0.23c-3.49-0.07-5.36-3.84-2.48-8.25l4.78-9.78 c3.49-7.14,2.11-5.8,2.36-13.32c0.16-4.86,1.07-9.26,3.26-12.9c-3.49-1.53-6.99-3.05-10.48-4.57 c64.78-89.8,152.85,26.68,77.22,64.05l3.47,25.58h-46.8c1.13-12.16,6.87-9.45-7.36-6.89c-12.69,2.28-22.63-0.69-16.21-13.45 C11.01,99.63,10.57,96.3,10.45,93.26L10.45,93.26z M52.36,36.08c0.39-0.39,0.87-0.59,1.4-0.59c0.53,0,1.01,0.2,1.4,0.59l2.12,2.12 c0.57-0.37,1.18-0.7,1.81-0.98c0.63-0.3,1.27-0.53,1.92-0.76v-3.26c0-0.55,0.18-1.01,0.57-1.4c0.39-0.39,0.85-0.57,1.4-0.57h4.09 c0.52,0,0.98,0.18,1.38,0.57c0.39,0.39,0.59,0.85,0.59,1.4v2.99c0.68,0.17,1.35,0.37,1.99,0.61c0.65,0.24,1.25,0.53,1.83,0.85 l2.36-2.32c0.37-0.39,0.81-0.59,1.36-0.59c0.53,0,1,0.2,1.4,0.59l2.86,2.88c0.39,0.39,0.59,0.87,0.59,1.4c0,0.53-0.2,1.01-0.59,1.4 l-2.12,2.12c0.37,0.57,0.68,1.18,0.98,1.81c0.3,0.63,0.53,1.27,0.76,1.94h3.26c0.55,0,1.01,0.18,1.4,0.57 c0.39,0.39,0.57,0.85,0.57,1.4v4.09c0,0.52-0.18,0.98-0.57,1.38c-0.39,0.39-0.85,0.59-1.4,0.59h-2.99 c-0.17,0.68-0.37,1.35-0.61,1.99c-0.24,0.65-0.53,1.27-0.85,1.88l2.32,2.32c0.39,0.37,0.59,0.81,0.59,1.36c0,0.53-0.2,1-0.59,1.4 l-2.88,2.91c-0.39,0.37-0.87,0.55-1.4,0.55c-0.53,0-1.01-0.18-1.4-0.55l-2.12-2.16c-0.57,0.37-1.18,0.68-1.81,0.98 c-0.63,0.3-1.27,0.53-1.92,0.76v3.26c0,0.55-0.18,1.01-0.57,1.4c-0.39,0.39-0.85,0.57-1.4,0.57l-4.09,0 c-0.52,0-0.98-0.18-1.38-0.57c-0.39-0.39-0.59-0.85-0.59-1.4v-2.99c-0.68-0.17-1.35-0.37-1.99-0.61c-0.65-0.24-1.27-0.53-1.88-0.85 l-2.32,2.32c-0.37,0.39-0.83,0.59-1.38,0.59c-0.55,0-1.01-0.2-1.38-0.59l-2.91-2.88c-0.37-0.41-0.55-0.87-0.55-1.4 c0-0.53,0.18-1.01,0.55-1.4l2.16-2.12c-0.37-0.57-0.68-1.18-0.98-1.81c-0.3-0.63-0.53-1.27-0.76-1.92h-3.26 c-0.55,0-1.01-0.18-1.4-0.57c-0.39-0.39-0.57-0.85-0.57-1.4v-4.09c0-0.52,0.18-0.98,0.57-1.38c0.39-0.39,0.85-0.59,1.4-0.59h2.99 c0.17-0.66,0.37-1.31,0.61-1.97c0.24-0.66,0.53-1.27,0.85-1.86l-2.32-2.36c-0.39-0.37-0.59-0.81-0.59-1.36c0-0.53,0.2-1,0.59-1.4 l2.88-2.86L52.36,36.08L52.36,36.08z M29.7,58.08c0.26-0.18,0.52-0.24,0.81-0.18c0.3,0.06,0.53,0.2,0.7,0.46l0.96,1.35 c0.35-0.15,0.7-0.26,1.07-0.37c0.37-0.09,0.74-0.17,1.12-0.22l0.31-1.77c0.06-0.3,0.2-0.53,0.44-0.7c0.24-0.17,0.52-0.22,0.81-0.18 l2.21,0.39c0.28,0.06,0.52,0.2,0.7,0.44c0.17,0.24,0.24,0.52,0.18,0.81l-0.28,1.62c0.35,0.15,0.7,0.33,1.01,0.52 c0.33,0.2,0.63,0.41,0.92,0.63l1.49-1.03c0.24-0.18,0.5-0.24,0.79-0.18c0.3,0.06,0.52,0.2,0.7,0.46l1.29,1.83 c0.18,0.26,0.24,0.52,0.18,0.81c-0.06,0.3-0.2,0.53-0.46,0.7l-1.35,0.96c0.15,0.35,0.26,0.7,0.37,1.07 c0.09,0.37,0.17,0.74,0.22,1.12l1.77,0.31c0.3,0.06,0.53,0.2,0.7,0.44c0.17,0.24,0.22,0.52,0.18,0.81l-0.39,2.21 c-0.06,0.28-0.2,0.52-0.44,0.7c-0.24,0.17-0.52,0.24-0.81,0.18l-1.62-0.28c-0.15,0.35-0.33,0.7-0.52,1.01 c-0.2,0.33-0.41,0.65-0.63,0.94l1.03,1.47c0.18,0.24,0.24,0.5,0.18,0.79c-0.06,0.3-0.2,0.52-0.46,0.7l-1.83,1.31 c-0.26,0.17-0.52,0.22-0.81,0.17c-0.3-0.06-0.53-0.2-0.7-0.42l-0.96-1.36c-0.35,0.15-0.7,0.26-1.07,0.37 c-0.37,0.09-0.74,0.17-1.12,0.22l-0.31,1.77c-0.06,0.3-0.2,0.53-0.44,0.7c-0.24,0.17-0.52,0.22-0.81,0.18l-2.21-0.39 c-0.28-0.06-0.52-0.2-0.7-0.44c-0.17-0.24-0.24-0.52-0.18-0.81l0.28-1.62c-0.35-0.15-0.7-0.33-1.01-0.52 c-0.33-0.2-0.65-0.41-0.94-0.63l-1.48,1.03c-0.24,0.18-0.5,0.24-0.81,0.18c-0.29-0.06-0.53-0.2-0.7-0.44l-1.31-1.83 c-0.17-0.26-0.22-0.52-0.17-0.81c0.06-0.29,0.18-0.53,0.42-0.7l1.38-0.96c-0.15-0.35-0.26-0.7-0.37-1.07 c-0.09-0.37-0.17-0.74-0.22-1.12l-1.77-0.31c-0.29-0.06-0.53-0.2-0.7-0.44c-0.17-0.24-0.22-0.52-0.18-0.81l0.39-2.21 c0.06-0.28,0.2-0.52,0.44-0.7c0.24-0.18,0.52-0.24,0.81-0.18l1.62,0.28c0.15-0.35,0.31-0.68,0.52-1.01 c0.2-0.33,0.41-0.65,0.63-0.92l-1.03-1.49c-0.18-0.24-0.24-0.5-0.18-0.79c0.06-0.3,0.2-0.52,0.46-0.7l1.83-1.29L29.7,58.08 L29.7,58.08z M36.08,63.72c-0.53-0.09-1.05-0.07-1.57,0.04c-0.52,0.13-0.98,0.33-1.38,0.61c-0.41,0.3-0.76,0.66-1.05,1.11 c-0.3,0.44-0.48,0.94-0.57,1.48c-0.09,0.53-0.07,1.05,0.04,1.57c0.13,0.52,0.33,0.98,0.61,1.38c0.3,0.41,0.66,0.76,1.11,1.05 c0.44,0.3,0.94,0.48,1.47,0.57c0.53,0.09,1.05,0.07,1.57-0.04c0.52-0.13,0.98-0.33,1.38-0.61c0.41-0.3,0.76-0.66,1.05-1.11 c0.3-0.44,0.48-0.94,0.57-1.48c0.09-0.53,0.07-1.05-0.04-1.57c-0.13-0.52-0.33-0.98-0.61-1.38c-0.3-0.41-0.66-0.76-1.11-1.05 C37.11,64,36.61,63.82,36.08,63.72L36.08,63.72z M65.54,43.37c-1.11,0-2.14,0.2-3.13,0.63c-0.98,0.42-1.83,1-2.56,1.71 c-0.72,0.72-1.29,1.59-1.71,2.56c-0.42,1-0.63,2.03-0.63,3.13c0,1.11,0.2,2.14,0.63,3.13c0.42,0.98,1,1.83,1.71,2.56 c0.72,0.72,1.59,1.29,2.56,1.71c0.98,0.42,2.03,0.63,3.13,0.63c1.11,0,2.14-0.2,3.13-0.63c0.98-0.42,1.83-1,2.56-1.71 c0.72-0.72,1.29-1.59,1.71-2.56c0.42-0.98,0.63-2.03,0.63-3.13c0-1.11-0.2-2.14-0.63-3.13c-0.42-0.98-1-1.83-1.71-2.56 c-0.72-0.72-1.59-1.29-2.56-1.71C67.68,43.57,66.65,43.37,65.54,43.37L65.54,43.37z" />
                                                </g>
                                            </svg>
                                        </div>
                                        <div class="mod-pl-4">
                                            <h4 class="mod-mb-2">Self-Filing Made Simple</h4>
                                            <p class="text-sm sm:text-base">
                                                <strong class="text-white">Confidently file on your own</strong> with
                                                expert-backed support and clear, actionable instructions.
                                            </p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="xl:mod-pl-16">
                                <h3 class="mod-text-s-24 mod-mb-10">Our Transparency Notice</h3>
                                <div class="mod-grid mod-gap-4 contact-transparency-div">
                                    <ul class="mod-grid mod-gap-4 mod-pl-0">
                                        <li class="mod-grid mod-gap-4">
                                            <p class="mod-relative mod-font-semibold mod-leading-loose mod-mb-0">
                                                TaxBizLegal is a private consultancy</p>
                                            <p>We are not affiliated with the Ministry of Corporate Affairs (MCA) or any
                                                government department or authority.</p>
                                            <p>We do not represent the government & we're not a substitute for official
                                                government portals like MCA or GST websites.</p>
                                            <p>We are unable to submit applications, pay fees, or expedite approvals on your
                                                behalf via government portals.</p>
                                        </li>
                                        <li class="mod-grid mod-gap-4">
                                            <p class="mod-relative mod-font-semibold mod-leading-loose mod-mb-0">Client
                                                Account Responsibility</p>
                                            <p>All final applications and payments must be completed directly by the user on
                                                the respective government portal.</p>
                                            <p>We offer expert guidance, error checks, and document assistance to help you
                                                file confidently and correctly.</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div data-v-9f7e10a6="" data-v-58c52e26="" class="section-values">
                        <h1 data-v-9f7e10a6="" class="section-title">
                            <font dir="auto" style="vertical-align: inherit;">
                                <font dir="auto" style="vertical-align: inherit;">Our values</font>
                            </font>
                        </h1>
                        <div data-v-9f7e10a6="" class="flex">
                            <div data-v-9f7e10a6="" class="card card-values-0">
                                <div data-v-9f7e10a6="" class="inner-card">
                                    <p data-v-9f7e10a6="">
                                        <font dir="auto" style="vertical-align: inherit;">
                                            <font dir="auto" style="vertical-align: inherit;">01</font>
                                        </font>
                                    </p>
                                    <h3 data-v-9f7e10a6="">
                                        <font dir="auto" style="vertical-align: inherit;">
                                            <font dir="auto" style="vertical-align: inherit;">Quality</font>
                                        </font>
                                    </h3>
                                </div>
                            </div>
                            <div data-v-9f7e10a6="" class="card card-values-1"
                                style="translate: none; rotate: none; scale: none; transform: translate3d(2.6168px, -49.9315px, 0px) rotate(5.0548deg);">
                                <div data-v-9f7e10a6="" class="inner-card">
                                    <p data-v-9f7e10a6="">
                                        <font dir="auto" style="vertical-align: inherit;">
                                            <font dir="auto" style="vertical-align: inherit;">02</font>
                                        </font>
                                    </p>
                                    <h3 data-v-9f7e10a6="">
                                        <font dir="auto" style="vertical-align: inherit;">
                                            <font dir="auto" style="vertical-align: inherit;">competence</font>
                                        </font>
                                    </h3>
                                </div>
                            </div>
                            <div data-v-9f7e10a6="" class="card card-values-2">
                                <div data-v-9f7e10a6="" class="inner-card">
                                    <p data-v-9f7e10a6="">
                                        <font dir="auto" style="vertical-align: inherit;">
                                            <font dir="auto" style="vertical-align: inherit;">03</font>
                                        </font>
                                    </p>
                                    <h3 data-v-9f7e10a6="">
                                        <font dir="auto" style="vertical-align: inherit;">
                                            <font dir="auto" style="vertical-align: inherit;">Trust</font>
                                        </font>
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <p data-v-9f7e10a6="" class="content">
                            <font dir="auto" style="vertical-align: inherit;">
                                <font dir="auto" style="vertical-align: inherit;">These principles guide our daily
                                    actions and are reflected in our work</font>
                            </font>
                        </p>
                    </div>

                    <div data-v-cfbfe8a9="" class="cta-section">
                        <h4 data-v-cfbfe8a9="" class="section-title">
                            <font dir="auto" style="vertical-align: inherit;">
                                <font dir="auto" style="vertical-align: inherit;">We won't let you go under!</font>
                            </font>
                        </h4>
                        <div data-v-cfbfe8a9="" class="btn-container">
                            <div data-v-7f9e08de="" data-v-cfbfe8a9="" class="buttonWrapper"><a data-v-7f9e08de=""
                                    href="/kontakt" class="">
                                    <div data-v-7f9e08de="" class="btn-link size-undefined"
                                        style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); will-change: auto;">
                                        <span data-v-7f9e08de="" class="btn-fill"><span data-v-7f9e08de=""
                                                class="btn-ripple v1"
                                                style="translate: none; rotate: none; scale: none; display: block; transform: translate(100%, 0%); will-change: auto;"></span><span
                                                data-v-7f9e08de="" class="btn-ripple v2"
                                                style="translate: none; rotate: none; scale: none; display: block; transform: translate(100%, 0%); will-change: auto;"></span></span><span
                                            data-v-7f9e08de="" class="btn-title"><span data-v-7f9e08de=""
                                                class="btn-content">
                                                <font dir="auto" style="vertical-align: inherit;">
                                                    <font dir="auto" style="vertical-align: inherit;">Get advice now
                                                    </font>
                                                </font>
                                            </span></span></div>
                                </a></div>
                        </div>
                    </div>

                    https://cardaqsingapore.com/about
                    https://www.zwembad-management.be/ueber-uns --}}

                </div>
            </div>
            <div
                class="contact-sticky-form half half--left mod-flex-1 py-40 py-lg-5 py-xxl-60 mod-px-24 md:mod-px-8 sm:mod-px-6 offset-container offset-lg-40 offset-xxl-120">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-12">
                        <h1 class="h2 mb-lg-3">
                            <font class="text-primary" style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Have a Question?</font>
                            </font>
                        </h1>
                        <form action="{{ route('front.contact.leads') }}" method="post"
                            id="frm-adeptRegistrationForm-form" class="loadable loadable-overlayed ajax" novalidate="">


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

                                <label class="form-check-label required" for="frm-enquiryForm-form-_comply">
                                    <font style="vertical-align: inherit;">
                                        <font style="vertical-align: inherit;">By submitting the form, you agree to allow
                                            Tax Biz Legal representative to contact you for service related assistance and
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
                </div>
            </div>
        </section>
    </main>
@endsection

@push('schema')
    <script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type'    => 'ProfessionalService',
    'name'     => 'Tax Biz Legal',
    'image'    => 'https://taxbizlegal.com/images/svg/tbl_logo.svg',
    '@id'      => 'https://taxbizlegal.com',
    'url'      => 'https://taxbizlegal.com',
    'telephone'=> '6290788499',
    'priceRange' => '1499',
    'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => 'Sai Shivalik Complex, 22/1, SH 13, Bangihati Village, Bangihati',
        'addressLocality' => 'Hooghly',
        'postalCode' => '712250',
        'addressCountry' => 'IN',
    ],
    'geo' => [
        '@type' => 'GeoCoordinates',
        'latitude' => 22.729208,
        'longitude' => 88.309555,
    ],
    'openingHoursSpecification' => [
        '@type' => 'OpeningHoursSpecification',
        'dayOfWeek' => [
            'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'
        ],
        'opens' => '10:00',
        'closes' => '19:00',
    ],
    'sameAs' => [
        'https://www.facebook.com/people/Tax-Biz-Legal/61572967894678/',
        'https://www.instagram.com/tax_biz_legal/',
        'https://www.linkedin.com/company/tax-biz-legal/'
    ]
], JSON_UNESCAPED_SLASHES|JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT) !!}
</script>
@endpush
