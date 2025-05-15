@extends('frontend._layouts.master')

@section('content')
<main class="flex-grow-1 bg-blue-100">
    <section class="container mod-my-16 lg:mod-my-24 reveal-me">
        <div class="mod-flex flex-grow-1 mod-flex-col mod-items-center mod-justify-center mod-text-center">
            <svg class="mod-h-20 mod-w-20 mod-text-green-350" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                stroke-linejoin="round">
                <circle cx="12" cy="12" r="10" />
                <path d="m9 12 2 2 4-4" />
            </svg>

            <h1 class="mod-my-4 mod-text-s-24 mod-font-semibold">Payment Successful</h1>
            <p class="mod-mb-4 mod-text-grey-500 mod-w-1/2 sm:mod-w-full sm:mod-px-2">We received your payment. You'll be receiving an email with the confirmation of the same. Our experts will reach out to you within 24hrs.</p>

            <div class="mod-mt-4 mod-mb-8 mod-box-shadow-32 mod-bg-white mod-rounded-lg mod-p-6 mod-w-1/3 sm:mod-w-full sm:mod-text-s-12">
                <div class="mod-flex mod-justify-between">
                    <span class="mod-text-left">Order Reference Number:</span>
                    <span class="mod-text-right copy-text mod-cursor-pointer" title="Copy Order Id">{{ Str::upper($order->order_id) }}</span>
                </div>
                <div class="mod-flex mod-justify-between">
                    <span class="mod-text-left">Payment Reference Id:</span>
                    <span class="mod-text-right copy-text mod-cursor-pointer" title="Copy Payment Id">{{ $order->rzp_payment_id }}</span>
                </div>
                <div class="mod-flex mod-justify-between mod-mt-1">
                    <span class="mod-text-left">Service Plan:</span>
                    <span class="mod-text-right">{{ $order->service_plan_name }}</span>
                </div>
                <div class="mod-flex mod-justify-between mod-mt-1">
                    <span class="mod-text-left">Total Amount Paid:</span>
                    <span class="mod-text-right">₹ {{ number_format($order->rzp_paid_amt, 2, '.', ',') }}</span>
                </div>
                <div class="mod-flex mod-justify-between mod-mt-1">
                    <span class="mod-text-left">Payment Date:</span>
                    <span class="mod-text-right">{{ date('F j, Y, g:i A', strtotime($order->rzp_payment_created_at)) }}</span>
                </div>
            </div>

            <a href="{{ route('front.home') }}" class="btn btn-primary icon-hover-right d-flex d-lg-inline-flex">
                Return to Homepage
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path fill="currentColor" d="M16.175 13L10.575 18.6L12 20L20 12L12 4L10.575 5.4L16.175 11L4 11L4 13L16.175 13Z">
                    </path>
                </svg>
            </a>
        </div>
    </section>
</main>
@endsection
