<header class="app-header">
    <!-- Start::main-header-container -->
    <div class="main-header-container container-fluid">
        <!-- Start::header-content-left -->
        <div class="header-content-left">
            <!-- Start::header-element -->
            <div class="header-element">
                <div class="horizontal-logo"> <a href="index" class="header-logo"> <img
                    src="{{ asset('images/svg/tbl_logo.svg') }}" alt="logo" class="desktop-logo"> <img
                    src="{{ asset('images/svg/tbl_logo.svg') }}" alt="logo" class="toggle-logo">
                    <img src="{{ asset('images/svg/tbl_logo.svg') }}" alt="logo" class="desktop-dark">
                    <img src="{{ asset('images/svg/tbl_logo.svg') }}" alt="logo" class="toggle-dark">
                    <img src="{{ asset('images/svg/tbl_logo.svg') }}" alt="logo" class="desktop-white">
                    <img src="{{ asset('images/svg/tbl_logo.svg') }}" alt="logo" class="toggle-white">
                    </a>
                </div>
            </div>
            <!-- End::header-element --> <!-- Start::header-element -->
            <div class="header-element">
                <!-- Start::header-link --> <a aria-label="Hide Sidebar"
                    class="sidemenu-toggle header-link animated-arrow hor-toggle horizontal-navtoggle"
                    data-bs-toggle="sidebar" href="javascript:void(0);"><span></span></a>
                <!-- End::header-link -->
            </div>
            <!-- End::header-element -->
        </div>
        <!-- End::header-content-left --> <!-- Start::header-content-right -->
        <div class="header-content-right">
            <!-- Start::header-element -->
            <div class="header-element header-search">
                <!-- Start::header-link --> <a aria-label="anchor" href="javascript:void(0);" class="header-link"
                    data-bs-toggle="modal" data-bs-target="#searchModal"> <i
                    class="bx bx-search-alt-2 header-link-icon"></i> </a> <!-- End::header-link -->
            </div>

            <!-- End::header-element --> <!-- Start::header-element -->
            <div class="header-element header-theme-mode">
                <!-- Start::header-link|layout-setting -->
                <a aria-label="anchor" href="javascript:void(0);" class="header-link layout-setting">
                    <span class="light-layout">
                        <!-- Start::header-link-icon --> <i class="bx bx-moon header-link-icon"></i>
                        <!-- End::header-link-icon -->
                    </span>
                    <span class="dark-layout">
                        <!-- Start::header-link-icon --> <i class="bx bx-sun header-link-icon"></i>
                        <!-- End::header-link-icon -->
                    </span>
                </a>
                <!-- End::header-link|layout-setting -->
            </div>

            <div class="header-element header-shortcuts-dropdown">
                <!-- Start::header-link|dropdown-toggle --> <a aria-label="anchor" href="javascript:void(0);"
                    class="header-link dropdown-toggle" data-bs-toggle="dropdown" data-bs-auto-close="outside"
                    id="notificationDropdown" aria-expanded="false"> <i class="bx bx-grid-alt header-link-icon"></i>
                </a>
                <!-- End::header-link|dropdown-toggle --> <!-- Start::main-header-dropdown -->
                <div class="main-header-dropdown header-shortcuts-dropdown dropdown-menu pb-0 dropdown-menu-end"
                    aria-labelledby="notificationDropdown">
                    <div class="p-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="mb-0 fs-17 fw-semibold">Custom Views</p>
                        </div>
                    </div>
                    <div class="dropdown-divider mb-0"></div>
                    <div class="main-header-shortcuts p-2" id="header-shortcut-scroll" data-simplebar="init">
                        <div class="simplebar-wrapper" style="margin: -8px;">
                            <div class="simplebar-height-auto-observer-wrapper">
                                <div class="simplebar-height-auto-observer"></div>
                            </div>
                            <div class="simplebar-mask">
                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                    <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                        aria-label="scrollable content" style="height: auto; overflow: hidden;">
                                        <div class="simplebar-content" style="padding: 8px;">
                                            <div class="row g-2">
                                                <div class="col-4">
                                                    <a href="javascript:void(0);">
                                                        <div class="text-center p-3 related-app"> <span
                                                            class="avatar avatar-sm avatar-rounded"> <img
                                                            src="{{ asset('images/crm/apps/figma.png') }}"
                                                            alt=""> </span> <span
                                                            class="d-block fs-12">Figma</span> </div>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="javascript:void(0);">
                                                        <div class="text-center p-3 related-app"> <span
                                                            class="avatar avatar-sm avatar-rounded"> <img
                                                            src="{{ asset('images/crm/apps/microsoft-powerpoint.png') }}"
                                                            alt=""> </span> <span
                                                            class="d-block fs-12">Power Point</span> </div>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="javascript:void(0);">
                                                        <div class="text-center p-3 related-app"> <span
                                                            class="avatar avatar-sm avatar-rounded"> <img
                                                            src="{{ asset('images/crm/apps/microsoft-word.png') }}"
                                                            alt=""> </span> <span
                                                            class="d-block fs-12">MS Word</span> </div>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="javascript:void(0);">
                                                        <div class="text-center p-3 related-app"> <span
                                                            class="avatar avatar-sm avatar-rounded"> <img
                                                            src="{{ asset('images/crm/apps/calender.png') }}"
                                                            alt=""> </span> <span
                                                            class="d-block fs-12">Calendar</span> </div>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="javascript:void(0);">
                                                        <div class="text-center p-3 related-app"> <span
                                                            class="avatar avatar-sm avatar-rounded"> <img
                                                            src="{{ asset('images/crm/apps/sketch.png') }}"
                                                            alt=""> </span> <span
                                                            class="d-block fs-12">Sketch</span> </div>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="javascript:void(0);">
                                                        <div class="text-center p-3 related-app"> <span
                                                            class="avatar avatar-sm avatar-rounded"> <img
                                                            src="{{ asset('images/crm/apps/google-docs.png') }}"
                                                            alt=""> </span> <span
                                                            class="d-block fs-12">Docs</span> </div>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="javascript:void(0);">
                                                        <div class="text-center p-3 related-app"> <span
                                                            class="avatar avatar-sm avatar-rounded"> <img
                                                            src="{{ asset('images/crm/apps/google.png') }}"
                                                            alt=""> </span> <span
                                                            class="d-block fs-12">Google</span> </div>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="javascript:void(0);">
                                                        <div class="text-center p-3 related-app"> <span
                                                            class="avatar avatar-sm avatar-rounded"> <img
                                                            src="{{ asset('images/crm/apps/translate.png') }}"
                                                            alt=""> </span> <span
                                                            class="d-block fs-12">Translate</span> </div>
                                                    </a>
                                                </div>
                                                <div class="col-4">
                                                    <a href="javascript:void(0);">
                                                        <div class="text-center p-3 related-app"> <span
                                                            class="avatar avatar-sm avatar-rounded"> <img
                                                            src="{{ asset('images/crm/apps/google-sheets.png') }}"
                                                            alt=""> </span> <span
                                                            class="d-block fs-12">Sheets</span> </div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
                        </div>
                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                        </div>
                        <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                            <div class="simplebar-scrollbar" style="height: 0px; display: none;"></div>
                        </div>
                    </div>
                    <div class="p-3 border-top">
                        <div class="d-grid"> <a href="javascript:void(0);" class="btn btn-primary">View
                            All</a>
                        </div>
                    </div>
                </div>
                <!-- End::main-header-dropdown -->
            </div>
            <div class="header-element">
                <!-- Start::header-link|switcher-icon --> <a aria-label="anchor" href="javascript:void(0);"
                    class="header-link switcher-icon" data-bs-toggle="offcanvas" data-bs-target="#switcher-canvas">
                <i class="bx bx-cog header-link-icon"></i> </a>
                <!-- End::header-link|switcher-icon -->
            </div>
            <div class="header-element header-fullscreen">
                <!-- Start::header-link --> <a aria-label="anchor" href="javascript:void(0);" class="header-link"> <i
                    class="bx bx-fullscreen full-screen-open header-link-icon"></i> <i
                    class="bx bx-exit-fullscreen full-screen-close header-link-icon d-none"></i> </a>
                <!-- End::header-link -->
            </div>
            <div class="header-element">
                <!-- Start::header-link|dropdown-toggle -->
                <a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile"
                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                    <div class="d-flex align-items-center">
                        <div class="me-sm-2 me-0"> <img src="https://img.icons8.com/color/48/circled-user-male-skin-type-4--v1.png" alt="img"
                            width="32" height="32" class="rounded-circle"> </div>
                        <div class="d-sm-block d-none">
                            <p class="fw-semibold mb-0 lh-1">{{ auth()->user()->first_name }} {{ auth()->user()->last_name }}</p>
                            <span class="op-7 fw-normal d-block fs-11">{{ auth()->user()->designation }}</span>
                        </div>
                    </div>
                </a>
                <!-- End::header-link|dropdown-toggle -->
                <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end"
                    aria-labelledby="mainHeaderProfile">
                    <li><a class="dropdown-item d-flex" href="javascript:void(0);"><i
                        class="ti ti-user-circle fs-18 me-2 op-7"></i>Profile</a></li>
                    <li><a class="dropdown-item d-flex" href="javascript:void(0);"><i
                        class="ti ti-inbox fs-18 me-2 op-7"></i>Inbox <span
                        class="badge bg-success-transparent ms-auto">25</span></a></li>
                    <li><a class="dropdown-item d-flex" href="javascript:void(0);"><i
                        class="ti ti-adjustments-horizontal fs-18 me-2 op-7"></i>Settings</a></li>
                    <li><a class="dropdown-item d-flex border-block-end" href="javascript:void(0);"><i
                        class="ti ti-wallet fs-18 me-2 op-7"></i>Sales: ₹45,000</a></li>
                    <li>
                        <form method="post" action="{{ route('admin.logout') }}">
                            @csrf
                            <button class="dropdown-item d-flex" href="sign-in-cover">
                                <i class="ti ti-logout fs-18 me-2 op-7"></i>Log Out
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
        <!-- End::header-content-right -->
    </div>
    <!-- End::main-header-container -->
</header>