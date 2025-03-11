<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Template 14 | SoonLaunch</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="author" content="SoonLaunch">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('extras/img/favicon.png') }}">
        <!-- Place favicon.ico in the root directory -->

		<!-- ========================= CSS here ========================= -->
		<link rel="stylesheet" href="{{ asset('extras/css/bootstrap-4.5.0.min.css') }}">
        <link rel="stylesheet" href="{{ asset('extras/css/lineicons.css') }}">
		<link rel="stylesheet" href="{{ asset('extras/css/animate.css') }}">
		<link rel="stylesheet" href="{{ asset('extras/css/style.css') }}">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- ========================= main-wrapper start ========================= -->
        <main class="main-14">
            <div class="main-wrapper demo-14">
                <!-- shapes start  -->
                <img src="{{ asset('extras/img/shape-1.svg') }}" alt="" class="shape shape-1">
                <img src="{{ asset('extras/img/shape-2.svg') }}" alt="" class="shape shape-2">
                <img src="{{ asset('extras/img/shape-3.svg') }}" alt="" class="shape shape-3">
                <img src="{{ asset('extras/img/shape-4.svg') }}" alt="" class="shape shape-4">
                <img src="{{ asset('extras/img/shape-5.svg') }}" alt="" class="shape shape-5">
                <img src="{{ asset('extras/img/shape-6.svg') }}" alt="" class="shape shape-6">
                <!-- shapes end  -->
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-5 col-lg-6 col-md-6">
                            <!-- img-wrapper start  -->
                            <div class="img-wrapper wow fadeInLeft" data-wow-delay=".2s">
                                <img src="{{ asset('extras/img/img-1.svg') }}" alt="">
                            </div>
                            <!-- img-wrapper end  -->
                        </div>
                        <div class="col-xl-7 col-lg-6 col-md-6 odd-col">
                            <!-- content-wrapper start  -->
                            <div class="content-wrapper">
                                <h1 class="wow fadeInDown" data-wow-delay=".2s" style="font-size: 5.5rem">Coming Soon...</h1>
                                <p class="wow fadeInUp" data-wow-delay=".4s">We're working tirelessly to bring you hassle-free and affordable services for Company Registration, ITR filing, Legal Compliance, and more...</p>
                                
                                <p class="wow fadeInUp" data-wow-delay=".4s">Get ready for a seamless experience with expert assistance coming your way soon!</p>

                                <p class="wow fadeInUp" data-wow-delay=".7s">If you're the Admin, pleae <a href="#" class="hidden-form">Click Here</a></p>
        
                                <div class="wow fadeInLeft" data-wow-delay=".2s" data-countdown="2025/03/15"></div>
                                <!-- countdown ed  -->

                            </div>
                            <!-- content-wrapper end  -->
                        </div>
                    </div>
                </div> <!-- end container -->
            </div>

            <div class="hid-form" style="display: none;">
                <form id="access-code" action="{{ route('maintenance.access') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="mb-3">
                        <label for="accessCodeInput" class="form-label">Access Code</label>
                        <input type="text" class="form-control" id="accessCodeInput" name="accessCode" required>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </main>
        <!-- ========================= main-wrapper end ========================= -->
        
		<!-- ========================= JS here ========================= -->
		<script src="{{ asset('extras/js/vendor/modernizr-3.5.0.min.js') }}"></script>
		<script src="{{ asset('extras/js/vendor/jquery-3.5.1.min.js') }}"></script>
		<script src="{{ asset('extras/js/popper.min.js') }}"></script>
		<script src="{{ asset('extras/js/bootstrap-4.5.0.min.js') }}"></script>
        <script src="{{ asset('extras/js/countdown.js') }}"></script>
        <script src="{{ asset('extras/js/wow.min.js') }}"></script>
		<script src="{{ asset('extras/js/main.js') }}"></script>
    </body>
</html>
