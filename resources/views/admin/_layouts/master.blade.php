<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light"
    data-menu-styles="dark" data-toggled="close">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TaxBizLegal CRM</title>
    <meta name="Description" content="Bootstrap Blazor Server Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="officialdeba10 again!">
    <meta name="keywords" content="who,cares">
    <meta name="robots" content="noindex, nofollow">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('images/favicon/favicon-32x32.png') }}" type="image/x-icon">

    @vite(['resources/js/admin/admin.js'])

    <meta http-equiv="imagetoolbar" content="no">

    @stack('styles')

</head>

<body style="" class="{{ Route::currentRouteName() }}">
    @include('admin._layouts.theme-switcher')

    <div class="page">
        <!-- app-header -->
        @include('admin._layouts.header')
        <!-- /app-header -->

        <!-- Start::app-sidebar -->
        @include('admin._layouts.sidebar')
        <!-- End::app-sidebar --> <!-- Start::app-content -->
        <div class="main-content app-content">
            @yield('content')
        </div>
        <!-- End::app-content -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="input-group">
                            <a aria-label="anchor" href="javascript:void(0);" class="input-group-text"
                                id="Search-Grid"><i class="fe fe-search header-link-icon fs-18"></i></a> <input
                                type="search" class="form-control border-0 px-2" placeholder="Search"
                                aria-label="Username"> <a aria-label="anchor" href="javascript:void(0);"
                                class="input-group-text" id="voice-search"><i
                                    class="fe fe-mic header-link-icon"></i></a> <a aria-label="anchor"
                                href="javascript:void(0);" class="btn btn-light btn-icon" data-bs-toggle="dropdown"
                                aria-expanded="false"> <i class="fe fe-more-vertical"></i> </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Another action</a></li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Something else here</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="javascript:void(0);">Separated link</a></li>
                            </ul>
                        </div>
                        <div class="mt-4">
                            <p class="font-weight-semibold text-muted mb-2">Are You Looking For...</p>
                            <span class="search-tags alert"><i class="fe fe-user me-2"></i>People<a aria-label="anchor"
                                    href="javascript:void(0)" class="tag-addon" data-bs-dismiss="alert"><i
                                        class="fe fe-x"></i></a></span> <span class="search-tags alert"><i
                                    class="fe fe-file-text me-2"></i>Pages<a aria-label="anchor"
                                    href="javascript:void(0)" class="tag-addon" data-bs-dismiss="alert"><i
                                        class="fe fe-x"></i></a></span> <span class="search-tags alert"><i
                                    class="fe fe-align-left me-2"></i>Articles<a aria-label="anchor"
                                    href="javascript:void(0)" class="tag-addon" data-bs-dismiss="alert"><i
                                        class="fe fe-x"></i></a></span> <span class="search-tags alert"><i
                                    class="fe fe-server me-2"></i>Tags<a aria-label="anchor" href="javascript:void(0)"
                                    class="tag-addon" data-bs-dismiss="alert"><i class="fe fe-x"></i></a></span>
                        </div>
                        <div class="my-4">
                            <p class="font-weight-semibold text-muted mb-2">Recent Search :</p>
                            <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert"> <a
                                    href="notifications"><span>Notifications</span></a> <a class="ms-auto lh-1"
                                    href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i
                                        class="fe fe-x text-muted"></i></a> </div>
                            <div class="p-2 border br-5 d-flex align-items-center text-muted mb-2 alert"> <a
                                    href="alerts"><span>Alerts</span></a> <a class="ms-auto lh-1"
                                    href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i
                                        class="fe fe-x text-muted"></i></a> </div>
                            <div class="p-2 border br-5 d-flex align-items-center text-muted mb-0 alert"> <a
                                    href="mail"><span>Mail</span></a> <a class="ms-auto lh-1"
                                    href="javascript:void(0);" data-bs-dismiss="alert" aria-label="Close"><i
                                        class="fe fe-x text-muted"></i></a> </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="btn-group ms-auto"> <button type="button"
                                class="btn btn-sm btn-primary-light">Search</button> <button type="button"
                                class="btn btn-sm btn-primary">Clear Recents</button> </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Start -->
        <footer aria-label="Main Footer" class="footer mt-auto py-3 bg-white text-center">
            <div class="container">
                <span class="text-muted"> Copyright © <span id="year">{{ now()->year }}</span>
                    <a href="javascript:void(0);">
                        <span
                            class="fw-semibold text-primary text-decoration-underline">{{ config('app.site_info.company_name') }}</span>
                    </a>.
                    All rights reserved.
                </span>
            </div>
        </footer>
        <!-- Footer End -->
    </div>

    @stack('html')

    <!-- Scroll To Top -->
    <div class="scrollToTop" style="display: flex;">
        <span class="arrow">
            <i class="ri-arrow-up-s-fill fs-20"></i>
        </span>
    </div>
    <div id="responsive-overlay"></div>

    @php
        $types = ['success', 'danger', 'error', 'warning', 'info'];
        $toastType = null;
        $toastMessage = null;

        foreach ($types as $type):
            if (session($type)):
                $toastType = $type === 'error' ? 'danger' : $type; // treat 'error' as 'danger'
                $toastMessage = session($type);
                break;
            endif;
        endforeach;
    @endphp

    @if ($toastType && $toastMessage)
        <div class="toast-container position-fixed top-0 end-0 p-3">
            <div id="sessionMsgToast" class="toast colored-toast bg-{{ $toastType }}-transparent fade hide"
                role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header bg-{{ $toastType }} text-fixed-white">
                    <i class="bi bi-bell"></i>
                    <strong class="me-auto ms-1">1 New Notification</strong> <small>Just Now</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{ $toastMessage }}
                </div>
            </div>
        </div>
    @endif

    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div id="customMsgToast" class="toast colored-toast fade hide" role="alert" aria-live="assertive"
            aria-atomic="true">
            <div id="customToastHeader" class="toast-header">
                <i class="bi bi-bell"></i>
                <strong class="me-auto ms-1">1 New Notification</strong> <small>Just Now</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div id="customToastBody" class="toast-body"></div>
        </div>
    </div>

    @stack('script')
</body>

</html>
