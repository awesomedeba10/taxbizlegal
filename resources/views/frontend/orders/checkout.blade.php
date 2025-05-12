@extends('frontend._layouts.master')

@section('content')
    <main class="flex-grow-1">
        <section class="row mod-w-full mod-mx-0">
            <div class="col-md-7 half--lg-bg py-32 py-lg-40 py-xxl-50 mod-px-8 sm:mod-order-2">
                <div class="row justify-content-center svg-scale scale-32 scale-lg-auto">
                    <h2 class="mod-font-bold mod-leading-semi-loose">✅ You're Almost There!</h2>
                    <div
                        class="col-12 col-md-12 mod-flex mod-flex-col mod-gap-4 mod-mb-8 svg-scale scale-32 scale-lg-auto sm:mod-mb-12">
                        <div
                            class="mod-flex mod-flex-wrap mod-w-full justify-content-center mod-mt-4 svg-scale scale-4 sm:mod-flex-col sm:mod-w-full">
                            <figure class="mod-w-1/3 mod-p-2 md:mod-w-1/4 sm:mod-w-full sm:mod-p-0">
                                <div class="mod-flex">
                                    <img class="text-primary svg" src="http://127.0.0.1:8000/images/svg/1-circle-icon.svg"
                                        alt="step 1">
                                    <figcaption class="mod-flex text-h6 mod-pl-3 mod-items-center">Instant Confirmation
                                    </figcaption>
                                </div>
                                <p class="mod-mt-2 mod-mb-0 text-gray-600">
                                    Get instant confirmation upon email as soon as payment is received.
                                </p>
                            </figure>
                            <figure class="mod-w-1/3 mod-p-2 md:mod-w-1/4 sm:mod-w-full sm:mod-p-0">
                                <div class="mod-flex">
                                    <img class="text-primary svg" src="http://127.0.0.1:8000/images/svg/2-circle-icon.svg"
                                        alt="step 2">
                                    <figcaption class="mod-flex text-h6 mod-pl-3 mod-items-center">Expert Assignment
                                    </figcaption>
                                </div>
                                <p class="mod-mt-2 mod-mb-0 text-gray-600">
                                    An expert is assigned within 24 hours to guide you on documents.
                                </p>
                            </figure>
                            <figure class="mod-w-1/3 mod-p-2 md:mod-w-1/4 sm:mod-w-full sm:mod-p-0">
                                <div class="mod-flex">
                                    <img class="text-primary svg" src="http://127.0.0.1:8000/images/svg/3-circle-icon.svg"
                                        alt="step 3">
                                    <figcaption class="mod-flex text-h6 mod-pl-3 mod-items-center">Document Collection
                                    </figcaption>
                                </div>
                                <p class="mod-mt-2 mod-mb-0 text-gray-600">
                                    Get 24x7* support and regular updates as your process begins.
                                </p>
                            </figure>
                        </div>

                        <div
                            class="mod-flex mod-flex-wrap mod-w-full justify-content-center mod-mt-4 svg-scale scale-4 sm:mod-flex-col sm:mod-w-full">
                            <div class="mod-flex mod-w-full mod-p-2 sm:mod-p-0 sm:mod-mb-4">
                                <a class="checkout-contact-item mod-px-4 mod-py-8 mod-w-full"
                                    href="{{ route('front.contact') }}" target="_blank">
                                    <div class="mod-flex mod-justify-between sm:mod-flex-col">
                                        <div class="footer-cta-text">
                                            <p class="mod-mb-2 mod-font-semibold">Still Have Doubts !!</p>
                                            <h1 class="mod-leading-semi-loose" style="opacity: 1;">
                                                <span class="mod-text-s-24">Our experts are just a message away</span><br>
                                                to guide you through every steps
                                            </h1>
                                        </div>
                                        <div class="footer-cta-link mod-pr-12">
                                            <img class="img-fluid" src="{{ asset('images/svg/circle-blue-arrow.svg') }}"
                                                width="100">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div
                            class="mod-flex mod-flex-wrap mod-w-full justify-content-center mod-mt-4 svg-scale scale-4 sm:mod-flex-col sm:mod-w-full">
                            <div class="mod-w-1/2 mod-p-2 md:mod-w-1/2 sm:mod-w-full sm:mod-p-0 sm:mod-mb-4">
                                <div class="checkout-strength-item mod-p-4">
                                    <div class="mod-flex mod-gap-2 mod-items-end mod-mb-3">
                                        <span class="mod-text-s-20 sm:mod-text-s-32">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">🔒</font>
                                            </font>
                                        </span>
                                        <h3 class="mod-text-s-20 mod-mb-0">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Advanced Data Protection</font>
                                            </font>
                                        </h3>
                                    </div>
                                    <p class="mod-mb-1 mod-leading-light-loose">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">Your data and money are secured using
                                            </font>
                                        </font>
                                        <strong>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">advanced encryption technologies
                                                </font>
                                            </font>
                                        </strong>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;"> and covered by strict privacy policies
                                                that ensure complete confidentiality and protection at every step.</font>
                                        </font>
                                    </p>
                                </div>
                            </div>
                            <div class="mod-w-1/2 mod-p-2 md:mod-w-1/2 sm:mod-w-full sm:mod-p-0">
                                <div class="checkout-strength-item mod-p-4">
                                    <div class="mod-flex mod-gap-2 mod-items-end mod-mb-3">
                                        <span class="mod-text-s-20 sm:mod-text-s-32">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">💳</font>
                                            </font>
                                        </span>
                                        <h3 class="mod-text-s-20 mod-mb-0">
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">Secure Payment Gateway</font>
                                            </font>
                                        </h3>
                                    </div>
                                    <p class="mod-mb-1 mod-leading-light-loose">
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;">We use Razorpay’s trusted gateway to
                                                offer </font>
                                        </font><strong>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;">secure UPI, Card, Net Banking, Wallet
                                                    & Pay Later options</font>
                                            </font>
                                        </strong>
                                        <font style="vertical-align: inherit;">
                                            <font style="vertical-align: inherit;"> for smooth and reliable payment
                                                experiences across all platforms, ensuring flexibility.</font>
                                        </font>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="mod-pb-4 mod-flex mod-flex-col mod-gap-4 mod-px-4">

                            <div class="mod-grid-2 sm:mod-grid-template-col-1" data-fade="up"
                                style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1; visibility: inherit;">
                                <div class="mod-flex mod-flex-col mod-gap-2">
                                    <span class="office-title">Email</span>
                                    <div class="office-info">
                                        <div class="office-emails">
                                            <a class="email" href="mailto:{{ config('app.site_info.support_email') }}"
                                                target="_blank">
                                                {{ config('app.site_info.support_email') }} </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mod-flex mod-flex-col mod-gap-2">
                                    <span class="office-title">Contact</span>
                                    <div class="office-info">
                                        <div class="office-emails">
                                            <a class="email" href="">
                                                +91 {{ config('app.site_info.support_phone') }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-5 py-32 py-lg-40 py-xxl-50 mod-px-8 sm:mod-order-1">
                <div class="row justify-content-center mod-px-6 sm:mod-px-2 mod-py-6 cart-container">
                    <div class="col-md-10 col-lg-12">
                        <img class="mod-mr-6 mod-mb-4 sm:mod-w-10/12 " width="150" height="50"
                            src="{{ asset('images/svg/tbl_logo.svg') }}" alt="taxbizlegal logo">
                        <h3 class="h3 mod-mb-3">
                            Service
                        </h3>
                        <div class="billing-item">
                            <span>{{ ucwords(str_replace('-', ' ', $order->service_name)) }}</span>
                            <span class="mod-text-right">{{ $order->service_plan_name }} Plan</span>
                        </div>
                        <div class="billing-item">
                            <span>Status</span>
                            <span class="mod-text-right">Payment Pending</span>
                        </div>
                        <hr>
                        <h3 class="h3 mod-mb-3">
                            Customer Details
                        </h3>
                        <div class="billing-item">
                            <span>Name</span>
                            <span class="mod-text-right">{{ $order->cus_name }}</span>
                        </div>
                        <div class="billing-item">
                            <span>Email</span>
                            <span class="mod-text-right">{{ $order->cus_email }}</span>
                        </div>
                        <div class="billing-item">
                            <span>Phone</span>
                            <span class="mod-text-right">(+91) {{ $order->cus_phone }}</span>
                        </div>
                        <hr>
                        <h3 class="h3 mod-mb-3">
                            Billing
                        </h3>
                        <div class="billing-item">
                            <span>Service Fee</span>
                            <span class="mod-text-right">₹ {{ $order->service_price }}</span>
                        </div>
                        <div class="billing-item">
                            <span>GST (18%)</span>
                            <span class="mod-text-right">₹ {{ $gst }}</span>
                        </div>
                        <div class="billing-item">
                            <span>Subtotal</span>
                            <span class="mod-text-right">₹ {{ $subtotal }}</span>
                        </div>
                        <a href="javascript:void(0)"
                            class="mod-flex mod-mt-4 btn btn-sm btn-primary icon-hover-right btn-pmt">
                            PAY ₹ {{ $subtotal }}
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M16.175 13L10.575 18.6L12 20L20 12L12 4L10.575 5.4L16.175 11L4 11L4 13L16.175 13Z">
                                </path>
                            </svg>
                        </a>
                        <p class="small-secure-txt mod-my-1">* Secure and encrypted</p>
                        <div class="checkout-method-wrapper mod-text-center mod-mt-3">
                            <p class="mod-mb-0 mod-pt-1">🔒 <span class="safe-text">Secure</span> Checkout Guaranteed</p>
                            <div
                                class="mb-0 mod-py-2 mod-px-1 mod-flex sm:mod-gap-2 mod-justify-center mod-flex-row align-items-center mod-w-full">
                                <img class="mod-flex mod-items-center mod-justify-center sm:mod-pr-1 mod-pr-4"
                                    src="{{ asset('images/svg/rupay.svg') }}" alt="RuPay">
                                <img class="mod-flex mod-items-center mod-justify-center sm:mod-pl-1 mod-pl-1"
                                    src="{{ asset('images/svg/razorpay.svg') }}" alt="Net Banking">
                                <img class="mod-flex mod-items-center mod-justify-center sm:mod-px-2 mod-px-4"
                                    src="{{ asset('images/svg/visa.svg') }}" alt="VISA">
                                <img class="mod-flex mod-items-center mod-justify-center sm:mod-px-2 mod-px-5"
                                    src="{{ asset('images/svg/mastercard.svg') }}" alt="MasterCard">
                                <img class="mod-flex mod-items-center mod-justify-center sm:mod-pl-1 mod-pl-4"
                                    src="{{ asset('images/svg/upi.svg') }}" alt="MasterCard">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="mod-w-full mod-flex mod-flex-wrap mod-justify-center fixed-bottom">
            <button
                class="mod-w-full mod-py-3 mod-text-s-20 mod-font-semibold mod-justify-center btn-footer-sticky-pay btn-pmt"
                type="button">
                PAY ₹ {{ $subtotal }}
            </button>
        </div>
    </main>
@endsection
