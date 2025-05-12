@extends('frontend._layouts.master')

@section('title', '404! Page not found.')

@section('content')
    <main class="flex-grow-1">
        <div
            class="mod-pt-20 mod-pb-40 lg:py-24 md:py-20 md:px-44 px-4 py-24 mod-items-center mod-flex mod-justify-center mod-flex-col-reverse lg:mod-flex-row mod-gap-16">
            <div class="xl:pt-24 xl:mod-w-1/2 mod-relative pb-12">
                <div class="mod-relative">
                    <div class="mod-absolute">
                        <div class="">
                            <h1 class="mod-my-4 text-gray-800 font-bold text-2xl">
                                @if(request()->segment(1) === 'services')
                                We're working on it! The service you're looking for is coming soon.
                                @else
                                Oops! The page you're looking for isn't available.
                                @endif
                            </h1>
                            <p class="mod-my-8 text-gray-800">
                                @if(request()->segment(1) === 'services')
                                Our team is actively building this feature to offer you a seamless and hassle-free experience. In the meantime, feel free to <a href="{{ route('front.contact') }}">contact us</a> for assistance or explore our other services like Company Registration, GST Filing, and ITR.
                                @else
                                It seems you’ve taken a wrong turn. Head back to our homepage to explore services like
                                Company Registration, GST Filing, ITR, and more.
                                @endif
                            </p>
                            <div>
                                <a class="btn-custom-medium" href="{{ route('front.home') }}" target="_self">
                                    <span class="btn-text btn-text--back">Return to Home</span>
                                    <span class="btn-icon btn-icon--blue">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M3 4a1 1 0 0 1 0-2h11v11a1 1 0 1 1-2 0V5.414l-8.293 8.293a1 1 0 0 1-1.414-1.414L10.586 4H3Z"
                                                fill="white"></path>
                                        </svg>
                                        <span class="btn-text btn-text--front">Return to Homepage</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div>
                        <img src="{{ asset('images/img/404.png') }}" />
                    </div>
                </div>
            </div>
            <div>
                <img src="{{ asset('images/img/404-bg.png') }}" />
            </div>
        </div>
    </main>
@endsection
