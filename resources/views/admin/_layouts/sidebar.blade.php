<aside class="app-sidebar sticky sticky-pin" id="sidebar">
    <!-- Start::main-sidebar-header -->
    <div class="main-sidebar-header"> <a href="{{ route('admin.dashboard') }}" class="header-logo"> <img
                src="{{ asset('images/svg/tbl_logo.svg') }}" alt="logo" class="desktop-logo">
            <img src="{{ asset('images/svg/tbl_logo.svg') }}" alt="logo" class="toggle-logo">
            <img src="{{ asset('images/svg/tbl_logo.svg') }}" alt="logo" class="desktop-dark">
            <img src="{{ asset('images/svg/tbl_logo.svg') }}" alt="logo" class="toggle-dark">
            <img src="{{ asset('images/svg/tbl_logo.svg') }}" alt="logo" class="desktop-white"> <img
                src="{{ asset('images/svg/tbl_logo.svg') }}" alt="logo" class="toggle-white"> </a> </div>
    <!-- End::main-sidebar-header -->
    <!-- Start::main-sidebar -->
    <div class="main-sidebar" id="sidebar-scroll" data-simplebar="init">
        <div class="simplebar-wrapper" style="margin: -8px 0px -80px;">
            <div class="simplebar-height-auto-observer-wrapper">
                <div class="simplebar-height-auto-observer"></div>
            </div>
            <div class="simplebar-mask">
                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                    <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content"
                        style="height: 100%; overflow: hidden scroll;">
                        <div class="simplebar-content" style="padding: 8px 0px 80px;">
                            <!-- Start::nav -->
                            <nav aria-label="Main Navigation"
                                class="main-menu-container nav nav-pills flex-column sub-open">
                                <div class="slide-left d-none" id="slide-left">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z">
                                        </path>
                                    </svg>
                                </div>
                                <ul class="main-menu" style="margin-left: 0px; margin-right: 0px;">

                                    <li class="slide">
                                        <a href="{{ route('admin.dashboard') }}" class="side-menu__item">
                                            <i class="bx bx-home side-menu__icon"></i>
                                            <span class="side-menu__label">Dashboard</span>
                                        </a>
                                    </li>

                                    <li class="slide__category"><span class="category-name">Leads</span>
                                    </li>
                                    <!-- End::slide__category -->
                                    <!-- Start::slide -->
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">
                                            <i class="bx bx-box side-menu__icon"></i>
                                            <span class="side-menu__label">Service Leads</span>
                                            <i class="fe fe-chevron-right side-menu__angle"></i> </a>
                                        <ul class="slide-menu child1" data-popper-placement="bottom">
                                            <li class="slide">
                                                <a href="{{ route('admin.service-leads.index') }}"
                                                    class="side-menu__item">View Incoming Leads</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{ route('admin.service-leads.paid.index') }}"
                                                    class="side-menu__item">View Paid Leads</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item"> <i
                                                class="bx bx-task side-menu__icon"></i> <span
                                                class="side-menu__label">Enquiries<span
                                                    class="badge bg-secondary-transparent ms-2">New</span></span>
                                            <i class="fe fe-chevron-right side-menu__angle"></i> </a>
                                        <ul class="slide-menu child1" data-popper-placement="bottom"
                                            data-popper-reference-hidden="" data-popper-escaped="">
                                            <li class="slide">
                                                <a href="{{ route('admin.enquiry-leads.index') }}"
                                                    class="side-menu__item">Incoming Contact Request</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <!-- End::slide -->
                                    <!-- Start::slide__category -->
                                    <li class="slide__category"><span class="category-name">Admin</span>
                                    </li>
                                    <!-- End::slide__category -->
                                    <!-- Start::slide -->
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">
                                            <i class="bx bx-box side-menu__icon"></i>
                                            <span class="side-menu__label">Manage Users</span>
                                            <i class="fe fe-chevron-right side-menu__angle"></i>
                                        </a>
                                        <ul class="slide-menu child1 mega-menu" data-popper-placement="bottom"
                                            data-popper-reference-hidden="" data-popper-escaped="">
                                            <li class="slide">
                                                <a href="{{ route('admin.users.index') }}"
                                                    class="side-menu__item">View All</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">
                                            <i class="bx bx-box side-menu__icon"></i>
                                            <span class="side-menu__label">Manage Access</span>
                                            <i class="fe fe-chevron-right side-menu__angle"></i>
                                        </a>
                                        <ul class="slide-menu child1 mega-menu" data-popper-placement="bottom"
                                            data-popper-reference-hidden="" data-popper-escaped="">
                                            <li class="slide">
                                                <a href="alerts" class="side-menu__item">Roles</a>
                                            </li>
                                            <li class="slide">
                                                <a href="alerts" class="side-menu__item">Permissions</a>
                                            </li>
                                        </ul>
                                    </li>

                                    <!-- End::slide -->
                                    <!-- Start::slide__category -->
                                    <li class="slide__category"><span class="category-name">Site Settings</span>
                                    </li>

                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">
                                            <i class="bx bx-box side-menu__icon"></i>
                                            <span class="side-menu__label">Manage Blogs</span>
                                            <i class="fe fe-chevron-right side-menu__angle"></i>
                                        </a>
                                        <ul class="slide-menu child1 mega-menu" data-popper-placement="bottom"
                                            data-popper-reference-hidden="" data-popper-escaped="">
                                            <li class="slide">
                                                <a href="{{ route('admin.blogs.index') }}" class="side-menu__item">View All</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{ route('admin.blogs.create') }}" class="side-menu__item">Create Blog</a>
                                            </li>
                                        </ul>
                                    </li>

                                    {{-- <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item"> <i class="bx bx-bar-chart-square side-menu__icon"></i> <span class="side-menu__label">Charts</span> <i class="fe fe-chevron-right side-menu__angle"></i> </a>
                                        <ul class="slide-menu child1" data-popper-placement="top" style="position: relative; left: 0px; top: 0px; margin: 0px; transform: translate3d(119.2px, 1772.8px, 0px);" data-popper-reference-hidden="" data-popper-escaped="">
                                            <li class="slide side-menu__label1"> <a href="javascript:void(0)">Charts</a> </li>
                                            <li class="slide has-sub">
                                                <a href="javascript:void(0);" class="side-menu__item">Demo
                                                    Page <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                                <ul class="slide-menu child2">
                                                    <li class="slide"> <a href="" class="side-menu__item">Demo Page 1</a> </li>
                                                    <li class="slide"> <a href="" class="side-menu__item">Demo Page 2</a> </li>
                                                </ul>
                                            </li>
                                            <li class="slide"> <a href="" class="side-menu__item">Demo Page v2</a> </li>
                                        </ul>
                                    </li> --}}
                                </ul>
                                <div class="slide-right d-none" id="slide-right">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                                        height="24" viewBox="0 0 24 24">
                                        <path
                                            d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z">
                                        </path>
                                    </svg>
                                </div>
                            </nav>
                            <!-- End::nav -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="simplebar-placeholder" style="width: auto; height: 1125px;"></div>
        </div>
        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
        </div>
        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
            <div class="simplebar-scrollbar"
                style="height: 65px; transform: translate3d(0px, 119px, 0px); display: block;"></div>
        </div>
    </div>
    <!-- End::main-sidebar -->
</aside>
