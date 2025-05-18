@extends('frontend._layouts.master')

@section('content')
    <main class="flex-grow-1">
        <section class="halfs offset-container offset-lg-40 offset-xxl-80">
            <aside
                class="half half--right half--lg-bg order-first order-lg-0 offset-container offset-lg-40 mod-pl-12 mod-pr-32 md:mod-pl-4 md:mod-pr-10 sm:mod-pl-6 sm:mod-pr-12">
                <blockquote class="row justify-content-center g-0 pt-32 py-lg-80 py-xxl-120 mb-0">


                    <div class="col-12 col-md-12 svg-scale scale-32 scale-lg-auto">
                        <h1 class="mod-font-medium mod-leading-semi-loose mod-mb-6">How Can We Help?</h1>
                        <h3 class="mod-mb-16 mod-leading-loose mod-space-semi">
                            If you’d like to speak with one of our experts, book a 15, 30 or 60 minute call. Tell us about
                            your engagement goals — we’re here to listen.
                        </h3>
                        <div class="mod-pb-24 mod-flex mod-flex-col mod-gap-8">
                            <div class="mod-grid-template-col-1" data-fade="up"
                                style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <button
                                    class="active mod-items-center mod-bg-none mod-border-none mod-flex mod-flex-row mod-gap-4"
                                    title="Head Office Kolkata" data-map-toggle="">
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
                </blockquote>
            </aside>
            <div
                class="half half--left py-40 py-lg-5 py-xxl-60 mod-px-32 md:mod-px-8 sm:mod-px-6 offset-container offset-lg-40 offset-xxl-120">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-12">
                        <h1 class="h2 mb-lg-3">
                            <font class="text-primary" style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Have a Question?</font>
                            </font>
                        </h1>
                        <p class="mb-4 mb-lg-3">
                            <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">
                                    We are always ready to help. Contact us via phone, email, or fill in the request form
                                    below to get an extensive consultation from our expert team.
                                </font>
                            </font>
                        </p>
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
                </div>
            </div>
        </section>
    </main>
@endsection
