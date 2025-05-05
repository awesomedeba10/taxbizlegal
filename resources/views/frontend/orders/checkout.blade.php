@extends('frontend._layouts.master')

@section('content')
    <main class="flex-grow-1">
        <section class="row mod-w-full mod-mx-0">
            <div class="col-md-7 half--lg-bg py-32 py-lg-40 py-xxl-50 mod-px-8 sm:mod-order-2">
                <div class="row justify-content-center g-0 pt-32 py-lg-80 py-xxl-120 mb-0">
                    <div class="col-12 col-md-12 svg-scale scale-32 scale-lg-auto">
                        <h1 class="mod-font-medium mod-leading-semi-loose mod-mb-6">How Can We Help?</h1>
                        <h3 class="mod-mb-16 mod-leading-loose mod-space-semi">
                            If you’d like to speak with one of our experts, book a 15, 30 or 60 minute call. Tell us about
                            your engagement goals — we’re here to listen.
                        </h3>
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
                            <span>Private Limited Company Registration</span>
                            <span>Premium Plan</span>
                        </div>
                        <div class="billing-item">
                            <span>Status</span>
                            <span>Payment Pending</span>
                        </div>
                        <hr>
                        <h3 class="h3 mod-mb-3">
                            Customer Details
                        </h3>
                        <div class="billing-item">
                            <span>Name</span>
                            <span>Debanjan Ganguly</span>
                        </div>
                        <div class="billing-item">
                            <span>Email</span>
                            <span>officialdeba10@gmail.com</span>
                        </div>
                        <div class="billing-item">
                            <span>Phone</span>
                            <span>(+91) 7098908674</span>
                        </div>
                        <hr>
                        <h3 class="h3 mod-mb-3">
                            Billing
                        </h3>
                        <div class="billing-item">
                            <span>Service Fee</span>
                            <span>₹ 6999</span>
                        </div>
                        <div class="billing-item">
                            <span>GST (18%)</span>
                            <span>₹ 299</span>
                        </div>
                        <div class="billing-item">
                            <span>Subtotal</span>
                            <span>₹ 7599</span>
                        </div>
                        <a href="http://127.0.0.1:8000/contact-us"
                            class="mod-flex mod-mt-4 btn btn-sm btn-primary icon-hover-right">
                            PAY ₹ 7599
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M16.175 13L10.575 18.6L12 20L20 12L12 4L10.575 5.4L16.175 11L4 11L4 13L16.175 13Z">
                                </path>
                            </svg>
                        </a>
                        <img src="https://www.onlinelegalindia.com/payment/images/safe-checkout.webp" class="img-fluid" alt="Safe Checkout">
                    </div>
                </div>
            </div>
        </section>
        <div class="mod-w-full mod-flex mod-flex-wrap mod-justify-center fixed-bottom">
            <button class="mod-w-full mod-py-3 mod-text-s-20 mod-font-semibold mod-justify-center btn-footer-sticky-pay" type="submit">
                PAY ₹ 7599
            </button>
        </div>
    </main>
@endsection
