@extends('admin._layouts.master')

@section('content')
<div class="container-fluid">
    <!-- Start::page-header -->
    <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
        <div>
            <p class="fw-semibold fs-18 mb-0">Welcome back, {{ auth()->user()->first_name }} {{ auth()->user()->last_name }} !</p>
            <span class="fs-semibold text-muted">Track your sales, activity, leads here.</span>
        </div>
        <div class="btn-list mt-md-0 mt-2"> <button type="button"
                class="btn btn-primary btn-wave waves-effect waves-light"> <i
                    class="ri-filter-3-fill me-2 align-middle d-inline-block"></i>Filters </button>
            <button type="button" class="btn btn-outline-secondary btn-wave waves-effect waves-light">
                <i class="ri-upload-cloud-line me-2 align-middle d-inline-block"></i>Export </button>
        </div>
    </div>
    <!-- End::page-header --> <!-- Start::row-1 -->
    <div class="row">
        <div class="col-xxl-9 col-xl-12">
            <div class="row">
                <div class="col-xl-4">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card crm-highlight-card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <div class="fw-semibold fs-18 text-fixed-white mb-2">Your
                                                target is incomplete</div>
                                            <span class="d-block fs-12 text-fixed-white"><span
                                                    class="op-7">You have completed</span> <span
                                                    class="fw-semibold text-warning">48%</span> <span
                                                    class="op-7">of the given target, you can also check
                                                    your status</span>.</span> <span
                                                class="d-block fw-semibold mt-1"><a
                                                    class="text-fixed-white"
                                                    href="javascript:void(0);"><u>Click
                                                        here</u></a></span>
                                        </div>
                                        <div>
                                            <div id="crm-main" style="min-height: 105.7px;">
                                                <div id="apexchartsgukz1wxo"
                                                    class="apexcharts-canvas apexchartsgukz1wxo apexcharts-theme-light"
                                                    style="width: 100px; height: 105.7px;">
                                                    <svg id="SvgjsSvg6157" width="100"
                                                        height="105.7"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        version="1.1"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.dev"
                                                        class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                                        transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <foreignObject x="0" y="0" width="100"
                                                            height="105.7">
                                                            <div class="apexcharts-legend"
                                                                xmlns="http://www.w3.org/1999/xhtml">
                                                            </div>
                                                        </foreignObject>
                                                        <g id="SvgjsG6159"
                                                            class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(-0.5, 0)">
                                                            <defs id="SvgjsDefs6158">
                                                                <clipPath id="gridRectMaskgukz1wxo">
                                                                    <rect id="SvgjsRect6160"
                                                                        width="109" height="127"
                                                                        x="-3" y="-1" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0"
                                                                        fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="forecastMaskgukz1wxo">
                                                                </clipPath>
                                                                <clipPath id="nonForecastMaskgukz1wxo">
                                                                </clipPath>
                                                                <clipPath id="gridRectMarkerMaskgukz1wxo">
                                                                    <rect id="SvgjsRect6161"
                                                                        width="107" height="129"
                                                                        x="-2" y="-2" rx="0"
                                                                        ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0"
                                                                        fill="#fff"></rect>
                                                                </clipPath>
                                                            </defs>
                                                            <g id="SvgjsG6162"
                                                                class="apexcharts-radialbar">
                                                                <g id="SvgjsG6163">
                                                                    <g id="SvgjsG6164"
                                                                        class="apexcharts-tracks">
                                                                        <g id="SvgjsG6165"
                                                                            class="apexcharts-radialbar-track apexcharts-track"
                                                                            rel="1">
                                                                            <path
                                                                                id="apexcharts-radialbarTrack-0"
                                                                                d="M 51.5 19.68841463414634 A 31.81158536585366 31.81158536585366 0 1 1 51.49444783097905 19.68841511866449"
                                                                                fill="none"
                                                                                fill-opacity="1"
                                                                                stroke="rgba(242,242,242,0.85)"
                                                                                stroke-opacity="1"
                                                                                stroke-linecap="round"
                                                                                stroke-width="4.806231707317075"
                                                                                stroke-dasharray="0"
                                                                                class="apexcharts-radialbar-area"
                                                                                data:pathOrig="M 51.5 19.68841463414634 A 31.81158536585366 31.81158536585366 0 1 1 51.49444783097905 19.68841511866449">
                                                                            </path>
                                                                        </g>
                                                                    </g>
                                                                    <g id="SvgjsG6167">
                                                                        <g id="SvgjsG6171"
                                                                            class="apexcharts-series apexcharts-radial-series"
                                                                            seriesName="Status"
                                                                            rel="1"
                                                                            data:realIndex="0">
                                                                            <path id="SvgjsPath6172"
                                                                                d="M 51.5 19.68841463414634 A 31.81158536585366 31.81158536585366 0 0 1 55.37685702121338 83.07446663248744"
                                                                                fill="none"
                                                                                fill-opacity="0.85"
                                                                                stroke="rgba(255,255,255,0.9)"
                                                                                stroke-opacity="1"
                                                                                stroke-linecap="round"
                                                                                stroke-width="4.95487804878049"
                                                                                stroke-dasharray="0"
                                                                                class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                                data:angle="173"
                                                                                data:value="48"
                                                                                index="0" j="0"
                                                                                data:pathOrig="M 51.5 19.68841463414634 A 31.81158536585366 31.81158536585366 0 0 1 55.37685702121338 83.07446663248744">
                                                                            </path>
                                                                        </g>
                                                                        <circle id="SvgjsCircle6168"
                                                                            r="29.408469512195122"
                                                                            cx="51.5"
                                                                            cy="51.5"
                                                                            class="apexcharts-radialbar-hollow"
                                                                            fill="#ffffff"></circle>
                                                                        <g id="SvgjsG6169"
                                                                            class="apexcharts-datalabels-group"
                                                                            transform="translate(0, 0) scale(1)"
                                                                            style="opacity: 1;">
                                                                            <text id="SvgjsText6170"
                                                                                font-family="Helvetica, Arial, sans-serif"
                                                                                x="51.5" y="56.5"
                                                                                text-anchor="middle"
                                                                                dominant-baseline="auto"
                                                                                font-size=".875rem"
                                                                                font-weight="600"
                                                                                fill="#4b9bfa"
                                                                                class="apexcharts-text apexcharts-datalabel-value"
                                                                                style="font-family: Helvetica, Arial, sans-serif;">48%</text>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <line id="SvgjsLine6173" x1="0"
                                                                y1="0" x2="103"
                                                                y2="0" stroke="#b6b6b6"
                                                                stroke-dasharray="0" stroke-width="1"
                                                                stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine6174" x1="0"
                                                                y1="0" x2="103"
                                                                y2="0" stroke-dasharray="0"
                                                                stroke-width="0" stroke-linecap="butt"
                                                                class="apexcharts-ycrosshairs-hidden">
                                                            </line>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="card custom-card">
                            <div class="card-header  justify-content-between">
                                <div class="card-title"> Top Leads </div>
                                <div class="dropdown">
                                    <a aria-label="anchor" href="javascript:void(0);"
                                        class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown"
                                        aria-expanded="false"> <i class="fe fe-more-vertical"></i> </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="javascript:void(0);">Week</a>
                                        </li>
                                        <li><a class="dropdown-item"
                                                href="javascript:void(0);">Month</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Year</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <ul class="list-unstyled crm-top-deals mb-0">
    <li>
        <div class="d-flex align-items-top flex-wrap">
            <div class="me-2">
                <span class="avatar avatar-sm avatar-rounded">
                    <img src="{{ asset('images/crm/faces/10.jpg') }}" alt="">
                </span>
            </div>
            <div class="flex-fill">
                <p class="fw-semibold mb-0">Amit Sharma</p>
                <span class="text-muted fs-12">amit.sharma@example.in</span>
            </div>
            <div class="fw-semibold fs-15">₹2,893</div>
        </div>
    </li>
    <li>
        <div class="d-flex align-items-top flex-wrap">
            <div class="me-2">
                <span class="avatar avatar-sm avatar-rounded bg-warning-transparent fw-semibold">
                    PK
                </span>
            </div>
            <div class="flex-fill">
                <p class="fw-semibold mb-0">Priya Kapoor</p>
                <span class="text-muted fs-12">priya.kapoor@gmail.com</span>
            </div>
            <div class="fw-semibold fs-15">₹4,289</div>
        </div>
    </li>
    <li>
        <div class="d-flex align-items-top flex-wrap">
            <div class="me-2">
                <span class="avatar avatar-sm avatar-rounded bg-warning-transparent fw-semibold">
                    RD
                </span>
            </div>
            <div class="flex-fill">
                <p class="fw-semibold mb-0">Ravi Deshmukh</p>
                <span class="text-muted fs-12">ravi.deshmukh@gmail.com</span>
            </div>
            <div class="fw-semibold fs-15">₹6,347</div>
        </div>
    </li>
    <li>
        <div class="d-flex align-items-top flex-wrap">
            <div class="me-2">
                <span class="avatar avatar-sm avatar-rounded bg-success-transparent fw-semibold">
                    AS
                </span>
            </div>
            <div class="flex-fill">
                <p class="fw-semibold mb-0">Anjali Singh</p>
                <span class="text-muted fs-12">anjali.singh@yahoo.in</span>
            </div>
            <div class="fw-semibold fs-15">₹3,894</div>
        </div>
    </li>
    <li>
        <div class="d-flex align-items-top flex-wrap">
            <div class="me-2">
                <span class="avatar avatar-sm avatar-rounded bg-primary-transparent fw-semibold">
                    RD
                </span>
            </div>
            <div class="flex-fill">
                <p class="fw-semibold mb-0">Rohit Das</p>
                <span class="text-muted fs-12">rohitdas214@gmail.com</span>
            </div>
            <div class="fw-semibold fs-15">₹2,679</div>
        </div>
    </li>
</ul>

                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card custom-card">
                            <div class="card-header justify-content-between">
                                <div class="card-title">Profit Earned</div>
                                <div class="dropdown">
                                    <a href="javascript:void(0);" class="p-2 fs-12 text-muted"
                                        data-bs-toggle="dropdown" aria-expanded="false"> View All<i
                                            class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a class="dropdown-item"
                                                href="javascript:void(0);">Today</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">This
                                                Week</a></li>
                                        <li><a class="dropdown-item" href="javascript:void(0);">Last
                                                Week</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body py-0 ps-0">
                                <div id="crm-profits-earned" style="min-height: 195px;">
                                    <div id="apexchartszmdw4yzx"
                                        class="apexcharts-canvas apexchartszmdw4yzx apexcharts-theme-light"
                                        style="width: 270px; height: 180px;">
                                        <svg id="SvgjsSvg6524" width="270" height="180"
                                            xmlns="http://www.w3.org/2000/svg" version="1.1"
                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                            xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg"
                                            xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                            style="background: transparent;">
                                            <foreignObject x="0" y="0" width="270" height="180">
                                                <div class="apexcharts-legend"
                                                    xmlns="http://www.w3.org/1999/xhtml"
                                                    style="max-height: 90px;"></div>
                                            </foreignObject>
                                            <g id="SvgjsG6619" class="apexcharts-yaxis" rel="0"
                                                transform="translate(15.635351181030273, 0)">
                                                <g id="SvgjsG6620" class="apexcharts-yaxis-texts-g">
                                                    <text id="SvgjsText6622"
                                                        font-family="Helvetica, Arial, sans-serif" x="20"
                                                        y="31.5" text-anchor="end"
                                                        dominant-baseline="auto" font-size="11px"
                                                        font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan6623">100</tspan>
                                                        <title>100</title>
                                                    </text>
                                                    <text id="SvgjsText6625"
                                                        font-family="Helvetica, Arial, sans-serif" x="20"
                                                        y="54.0990398765564" text-anchor="end"
                                                        dominant-baseline="auto" font-size="11px"
                                                        font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan6626">80</tspan>
                                                        <title>80</title>
                                                    </text>
                                                    <text id="SvgjsText6628"
                                                        font-family="Helvetica, Arial, sans-serif" x="20"
                                                        y="76.6980797531128" text-anchor="end"
                                                        dominant-baseline="auto" font-size="11px"
                                                        font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan6629">60</tspan>
                                                        <title>60</title>
                                                    </text>
                                                    <text id="SvgjsText6631"
                                                        font-family="Helvetica, Arial, sans-serif" x="20"
                                                        y="99.2971196296692" text-anchor="end"
                                                        dominant-baseline="auto" font-size="11px"
                                                        font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan6632">40</tspan>
                                                        <title>40</title>
                                                    </text>
                                                    <text id="SvgjsText6634"
                                                        font-family="Helvetica, Arial, sans-serif" x="20"
                                                        y="121.89615950622559" text-anchor="end"
                                                        dominant-baseline="auto" font-size="11px"
                                                        font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan6635">20</tspan>
                                                        <title>20</title>
                                                    </text>
                                                    <text id="SvgjsText6637"
                                                        font-family="Helvetica, Arial, sans-serif" x="20"
                                                        y="144.49519938278198" text-anchor="end"
                                                        dominant-baseline="auto" font-size="11px"
                                                        font-weight="400" fill="#373d3f"
                                                        class="apexcharts-text apexcharts-yaxis-label "
                                                        style="font-family: Helvetica, Arial, sans-serif;">
                                                        <tspan id="SvgjsTspan6638">0</tspan>
                                                        <title>0</title>
                                                    </text>
                                                </g>
                                            </g>
                                            <g id="SvgjsG6526"
                                                class="apexcharts-inner apexcharts-graphical"
                                                transform="translate(45.63535118103027, 30)">
                                                <defs id="SvgjsDefs6525">
                                                    <linearGradient id="SvgjsLinearGradient6529"
                                                        x1="0" y1="0" x2="0"
                                                        y2="1">
                                                        <stop id="SvgjsStop6530" stop-opacity="0.4"
                                                            stop-color="rgba(216,227,240,0.4)"
                                                            offset="0"></stop>
                                                        <stop id="SvgjsStop6531" stop-opacity="0.5"
                                                            stop-color="rgba(190,209,230,0.5)"
                                                            offset="1"></stop>
                                                        <stop id="SvgjsStop6532" stop-opacity="0.5"
                                                            stop-color="rgba(190,209,230,0.5)"
                                                            offset="1"></stop>
                                                    </linearGradient>
                                                    <clipPath id="gridRectMaskzmdw4yzx">
                                                        <rect id="SvgjsRect6534"
                                                            width="220.36464881896973"
                                                            height="114.99519938278198" x="-3" y="-1"
                                                            rx="0" ry="0"
                                                            opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                    <clipPath id="forecastMaskzmdw4yzx"></clipPath>
                                                    <clipPath id="nonForecastMaskzmdw4yzx"></clipPath>
                                                    <clipPath id="gridRectMarkerMaskzmdw4yzx">
                                                        <rect id="SvgjsRect6535"
                                                            width="218.36464881896973"
                                                            height="116.99519938278198" x="-2" y="-2"
                                                            rx="0" ry="0"
                                                            opacity="1" stroke-width="0"
                                                            stroke="none" stroke-dasharray="0"
                                                            fill="#fff"></rect>
                                                    </clipPath>
                                                </defs>
                                                <rect id="SvgjsRect6533" width="9.187056377955846"
                                                    height="112.99519938278198" x="0" y="0"
                                                    rx="0" ry="0" opacity="1"
                                                    stroke-width="0" stroke-dasharray="3"
                                                    fill="url(#SvgjsLinearGradient6529)"
                                                    class="apexcharts-xcrosshairs"
                                                    y2="112.99519938278198" filter="none"
                                                    fill-opacity="0.9"></rect>
                                                <line id="SvgjsLine6577" x1="0"
                                                    y1="113.99519938278198" x2="0"
                                                    y2="119.99519938278198"
                                                    stroke="rgba(119, 119, 142, 0.05)"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine6578" x1="30.62352125985282"
                                                    y1="113.99519938278198" x2="30.62352125985282"
                                                    y2="119.99519938278198"
                                                    stroke="rgba(119, 119, 142, 0.05)"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine6579" x1="61.24704251970564"
                                                    y1="113.99519938278198" x2="61.24704251970564"
                                                    y2="119.99519938278198"
                                                    stroke="rgba(119, 119, 142, 0.05)"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine6580" x1="91.87056377955845"
                                                    y1="113.99519938278198" x2="91.87056377955845"
                                                    y2="119.99519938278198"
                                                    stroke="rgba(119, 119, 142, 0.05)"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine6581" x1="122.49408503941127"
                                                    y1="113.99519938278198" x2="122.49408503941127"
                                                    y2="119.99519938278198"
                                                    stroke="rgba(119, 119, 142, 0.05)"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine6582" x1="153.11760629926408"
                                                    y1="113.99519938278198" x2="153.11760629926408"
                                                    y2="119.99519938278198"
                                                    stroke="rgba(119, 119, 142, 0.05)"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine6583" x1="183.7411275591169"
                                                    y1="113.99519938278198" x2="183.7411275591169"
                                                    y2="119.99519938278198"
                                                    stroke="rgba(119, 119, 142, 0.05)"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-xaxis-tick"></line>
                                                <line id="SvgjsLine6584" x1="214.36464881896973"
                                                    y1="113.99519938278198" x2="214.36464881896973"
                                                    y2="119.99519938278198"
                                                    stroke="rgba(119, 119, 142, 0.05)"
                                                    stroke-dasharray="0" stroke-linecap="butt"
                                                    class="apexcharts-xaxis-tick"></line>
                                                <g id="SvgjsG6573" class="apexcharts-grid">
                                                    <g id="SvgjsG6574"
                                                        class="apexcharts-gridlines-horizontal">
                                                        <line id="SvgjsLine6586" x1="0"
                                                            y1="22.599039876556397"
                                                            x2="214.36464881896973"
                                                            y2="22.599039876556397" stroke="#f1f1f1"
                                                            stroke-dasharray="3" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine6587" x1="0"
                                                            y1="45.19807975311279"
                                                            x2="214.36464881896973"
                                                            y2="45.19807975311279" stroke="#f1f1f1"
                                                            stroke-dasharray="3" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine6588" x1="0"
                                                            y1="67.7971196296692"
                                                            x2="214.36464881896973"
                                                            y2="67.7971196296692" stroke="#f1f1f1"
                                                            stroke-dasharray="3" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                        <line id="SvgjsLine6589" x1="0"
                                                            y1="90.39615950622559"
                                                            x2="214.36464881896973"
                                                            y2="90.39615950622559" stroke="#f1f1f1"
                                                            stroke-dasharray="3" stroke-linecap="butt"
                                                            class="apexcharts-gridline"></line>
                                                    </g>
                                                    <g id="SvgjsG6575"
                                                        class="apexcharts-gridlines-vertical"></g>
                                                    <line id="SvgjsLine6592" x1="0"
                                                        y1="112.99519938278198" x2="214.36464881896973"
                                                        y2="112.99519938278198" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                    <line id="SvgjsLine6591" x1="0"
                                                        y1="1" x2="0"
                                                        y2="112.99519938278198" stroke="transparent"
                                                        stroke-dasharray="0" stroke-linecap="butt">
                                                    </line>
                                                </g>
                                                <g id="SvgjsG6576" class="apexcharts-grid-borders">
                                                    <line id="SvgjsLine6585" x1="0"
                                                        y1="0" x2="214.36464881896973"
                                                        y2="0" stroke="#f1f1f1"
                                                        stroke-dasharray="3" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine6590" x1="0"
                                                        y1="112.99519938278198" x2="214.36464881896973"
                                                        y2="112.99519938278198" stroke="#f1f1f1"
                                                        stroke-dasharray="3" stroke-linecap="butt"
                                                        class="apexcharts-gridline"></line>
                                                    <line id="SvgjsLine6618" x1="0"
                                                        y1="113.99519938278198" x2="214.36464881896973"
                                                        y2="113.99519938278198"
                                                        stroke="rgba(119, 119, 142, 0.05)"
                                                        stroke-dasharray="0" stroke-width="1"
                                                        stroke-linecap="butt"></line>
                                                </g>
                                                <g id="SvgjsG6536"
                                                    class="apexcharts-bar-series apexcharts-plot-series">
                                                    <g id="SvgjsG6537" class="apexcharts-series"
                                                        rel="1" seriesName="ProfitxEarned"
                                                        data:realIndex="0">
                                                        <path id="SvgjsPath6542"
                                                            d="M 6.124704251970563 107.99619938278198 L 6.124704251970563 68.2783116543579 C 6.124704251970563 65.7783116543579 8.624704251970563 63.2783116543579 11.124704251970563 63.2783116543579 L 11.124704251970563 63.2783116543579 C 12.218232440948487 63.2783116543579 13.31176062992641 65.7783116543579 13.31176062992641 68.2783116543579 L 13.31176062992641 107.99619938278198 C 13.31176062992641 110.49619938278198 10.81176062992641 112.99619938278198 8.31176062992641 112.99619938278198 L 8.31176062992641 112.99619938278198 C 7.218232440948486 112.99619938278198 6.124704251970563 110.49619938278198 6.124704251970563 107.99619938278198 Z "
                                                            fill="rgba(132, 90, 223, 1)"
                                                            fill-opacity="1"
                                                            stroke="rgba(132, 90, 223, 1)"
                                                            stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskzmdw4yzx)"
                                                            pathTo="M 6.124704251970563 107.99619938278198 L 6.124704251970563 68.2783116543579 C 6.124704251970563 65.7783116543579 8.624704251970563 63.2783116543579 11.124704251970563 63.2783116543579 L 11.124704251970563 63.2783116543579 C 12.218232440948487 63.2783116543579 13.31176062992641 65.7783116543579 13.31176062992641 68.2783116543579 L 13.31176062992641 107.99619938278198 C 13.31176062992641 110.49619938278198 10.81176062992641 112.99619938278198 8.31176062992641 112.99619938278198 L 8.31176062992641 112.99619938278198 C 7.218232440948486 112.99619938278198 6.124704251970563 110.49619938278198 6.124704251970563 107.99619938278198 Z "
                                                            pathFrom="M 6.124704251970563 107.99619938278198 L 6.124704251970563 68.2783116543579 C 6.124704251970563 65.7783116543579 8.624704251970563 63.2783116543579 11.124704251970563 63.2783116543579 L 11.124704251970563 63.2783116543579 C 12.218232440948487 63.2783116543579 13.31176062992641 65.7783116543579 13.31176062992641 68.2783116543579 L 13.31176062992641 107.99619938278198 C 13.31176062992641 110.49619938278198 10.81176062992641 112.99619938278198 8.31176062992641 112.99619938278198 L 8.31176062992641 112.99619938278198 C 7.218232440948486 112.99619938278198 6.124704251970563 110.49619938278198 6.124704251970563 107.99619938278198 Z  L 6.124704251970563 112.99619938278198 L 13.31176062992641 112.99619938278198 L 13.31176062992641 112.99619938278198 L 13.31176062992641 112.99619938278198 L 13.31176062992641 112.99619938278198 L 13.31176062992641 112.99619938278198 L 6.124704251970563 112.99619938278198 Z"
                                                            cy="63.2773116543579" cx="35.74822551182338"
                                                            j="0" val="44"
                                                            barHeight="49.717887728424074"
                                                            barWidth="9.187056377955846"></path>
                                                        <path id="SvgjsPath6544"
                                                            d="M 36.74822551182338 107.99619938278198 L 36.74822551182338 70.53821564201354 C 36.74822551182338 68.03821564201354 39.24822551182338 65.53821564201354 41.74822551182338 65.53821564201354 L 41.74822551182338 65.53821564201354 C 42.841753700801306 65.53821564201354 43.935281889779226 68.03821564201354 43.935281889779226 70.53821564201354 L 43.935281889779226 107.99619938278198 C 43.935281889779226 110.49619938278198 41.435281889779226 112.99619938278198 38.935281889779226 112.99619938278198 L 38.935281889779226 112.99619938278198 C 37.841753700801306 112.99619938278198 36.74822551182338 110.49619938278198 36.74822551182338 107.99619938278198 Z "
                                                            fill="rgba(132, 90, 223, 1)"
                                                            fill-opacity="1"
                                                            stroke="rgba(132, 90, 223, 1)"
                                                            stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskzmdw4yzx)"
                                                            pathTo="M 36.74822551182338 107.99619938278198 L 36.74822551182338 70.53821564201354 C 36.74822551182338 68.03821564201354 39.24822551182338 65.53821564201354 41.74822551182338 65.53821564201354 L 41.74822551182338 65.53821564201354 C 42.841753700801306 65.53821564201354 43.935281889779226 68.03821564201354 43.935281889779226 70.53821564201354 L 43.935281889779226 107.99619938278198 C 43.935281889779226 110.49619938278198 41.435281889779226 112.99619938278198 38.935281889779226 112.99619938278198 L 38.935281889779226 112.99619938278198 C 37.841753700801306 112.99619938278198 36.74822551182338 110.49619938278198 36.74822551182338 107.99619938278198 Z "
                                                            pathFrom="M 36.74822551182338 107.99619938278198 L 36.74822551182338 70.53821564201354 C 36.74822551182338 68.03821564201354 39.24822551182338 65.53821564201354 41.74822551182338 65.53821564201354 L 41.74822551182338 65.53821564201354 C 42.841753700801306 65.53821564201354 43.935281889779226 68.03821564201354 43.935281889779226 70.53821564201354 L 43.935281889779226 107.99619938278198 C 43.935281889779226 110.49619938278198 41.435281889779226 112.99619938278198 38.935281889779226 112.99619938278198 L 38.935281889779226 112.99619938278198 C 37.841753700801306 112.99619938278198 36.74822551182338 110.49619938278198 36.74822551182338 107.99619938278198 Z  L 36.74822551182338 112.99619938278198 L 43.935281889779226 112.99619938278198 L 43.935281889779226 112.99619938278198 L 43.935281889779226 112.99619938278198 L 43.935281889779226 112.99619938278198 L 43.935281889779226 112.99619938278198 L 36.74822551182338 112.99619938278198 Z"
                                                            cy="65.53721564201354" cx="66.3717467716762"
                                                            j="1" val="42"
                                                            barHeight="47.457983740768434"
                                                            barWidth="9.187056377955846"></path>
                                                        <path id="SvgjsPath6546"
                                                            d="M 67.3717467716762 107.99619938278198 L 67.3717467716762 53.58893573459624 C 67.3717467716762 51.08893573459624 69.8717467716762 48.58893573459624 72.3717467716762 48.58893573459624 L 72.3717467716762 48.58893573459624 C 73.46527496065411 48.58893573459624 74.55880314963204 51.08893573459624 74.55880314963204 53.58893573459624 L 74.55880314963204 107.99619938278198 C 74.55880314963204 110.49619938278198 72.05880314963204 112.99619938278198 69.55880314963204 112.99619938278198 L 69.55880314963204 112.99619938278198 C 68.46527496065411 112.99619938278198 67.3717467716762 110.49619938278198 67.3717467716762 107.99619938278198 Z "
                                                            fill="rgba(132, 90, 223, 1)"
                                                            fill-opacity="1"
                                                            stroke="rgba(132, 90, 223, 1)"
                                                            stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskzmdw4yzx)"
                                                            pathTo="M 67.3717467716762 107.99619938278198 L 67.3717467716762 53.58893573459624 C 67.3717467716762 51.08893573459624 69.8717467716762 48.58893573459624 72.3717467716762 48.58893573459624 L 72.3717467716762 48.58893573459624 C 73.46527496065411 48.58893573459624 74.55880314963204 51.08893573459624 74.55880314963204 53.58893573459624 L 74.55880314963204 107.99619938278198 C 74.55880314963204 110.49619938278198 72.05880314963204 112.99619938278198 69.55880314963204 112.99619938278198 L 69.55880314963204 112.99619938278198 C 68.46527496065411 112.99619938278198 67.3717467716762 110.49619938278198 67.3717467716762 107.99619938278198 Z "
                                                            pathFrom="M 67.3717467716762 107.99619938278198 L 67.3717467716762 53.58893573459624 C 67.3717467716762 51.08893573459624 69.8717467716762 48.58893573459624 72.3717467716762 48.58893573459624 L 72.3717467716762 48.58893573459624 C 73.46527496065411 48.58893573459624 74.55880314963204 51.08893573459624 74.55880314963204 53.58893573459624 L 74.55880314963204 107.99619938278198 C 74.55880314963204 110.49619938278198 72.05880314963204 112.99619938278198 69.55880314963204 112.99619938278198 L 69.55880314963204 112.99619938278198 C 68.46527496065411 112.99619938278198 67.3717467716762 110.49619938278198 67.3717467716762 107.99619938278198 Z  L 67.3717467716762 112.99619938278198 L 74.55880314963204 112.99619938278198 L 74.55880314963204 112.99619938278198 L 74.55880314963204 112.99619938278198 L 74.55880314963204 112.99619938278198 L 74.55880314963204 112.99619938278198 L 67.3717467716762 112.99619938278198 Z"
                                                            cy="48.58793573459624"
                                                            cx="96.99526803152902" j="2" val="57"
                                                            barHeight="64.40726364818573"
                                                            barWidth="9.187056377955846"></path>
                                                        <path id="SvgjsPath6548"
                                                            d="M 97.99526803152902 107.99619938278198 L 97.99526803152902 20.820327913589473 C 97.99526803152902 18.320327913589473 100.49526803152902 15.820327913589475 102.99526803152902 15.820327913589475 L 102.99526803152902 15.820327913589475 C 104.08879622050694 15.820327913589475 105.18232440948486 18.320327913589473 105.18232440948486 20.820327913589473 L 105.18232440948486 107.99619938278198 C 105.18232440948486 110.49619938278198 102.68232440948486 112.99619938278198 100.18232440948486 112.99619938278198 L 100.18232440948486 112.99619938278198 C 99.08879622050694 112.99619938278198 97.99526803152902 110.49619938278198 97.99526803152902 107.99619938278198 Z "
                                                            fill="rgba(132, 90, 223, 1)"
                                                            fill-opacity="1"
                                                            stroke="rgba(132, 90, 223, 1)"
                                                            stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskzmdw4yzx)"
                                                            pathTo="M 97.99526803152902 107.99619938278198 L 97.99526803152902 20.820327913589473 C 97.99526803152902 18.320327913589473 100.49526803152902 15.820327913589475 102.99526803152902 15.820327913589475 L 102.99526803152902 15.820327913589475 C 104.08879622050694 15.820327913589475 105.18232440948486 18.320327913589473 105.18232440948486 20.820327913589473 L 105.18232440948486 107.99619938278198 C 105.18232440948486 110.49619938278198 102.68232440948486 112.99619938278198 100.18232440948486 112.99619938278198 L 100.18232440948486 112.99619938278198 C 99.08879622050694 112.99619938278198 97.99526803152902 110.49619938278198 97.99526803152902 107.99619938278198 Z "
                                                            pathFrom="M 97.99526803152902 107.99619938278198 L 97.99526803152902 20.820327913589473 C 97.99526803152902 18.320327913589473 100.49526803152902 15.820327913589475 102.99526803152902 15.820327913589475 L 102.99526803152902 15.820327913589475 C 104.08879622050694 15.820327913589475 105.18232440948486 18.320327913589473 105.18232440948486 20.820327913589473 L 105.18232440948486 107.99619938278198 C 105.18232440948486 110.49619938278198 102.68232440948486 112.99619938278198 100.18232440948486 112.99619938278198 L 100.18232440948486 112.99619938278198 C 99.08879622050694 112.99619938278198 97.99526803152902 110.49619938278198 97.99526803152902 107.99619938278198 Z  L 97.99526803152902 112.99619938278198 L 105.18232440948486 112.99619938278198 L 105.18232440948486 112.99619938278198 L 105.18232440948486 112.99619938278198 L 105.18232440948486 112.99619938278198 L 105.18232440948486 112.99619938278198 L 97.99526803152902 112.99619938278198 Z"
                                                            cy="15.819327913589476"
                                                            cx="127.61878929138183" j="3" val="86"
                                                            barHeight="97.1758714691925"
                                                            barWidth="9.187056377955846"></path>
                                                        <path id="SvgjsPath6550"
                                                            d="M 128.61878929138183 107.99619938278198 L 128.61878929138183 52.458983740768424 C 128.61878929138183 49.958983740768424 131.11878929138183 47.458983740768424 133.61878929138183 47.458983740768424 L 133.61878929138183 47.458983740768424 C 134.71231748035976 47.458983740768424 135.80584566933769 49.958983740768424 135.80584566933769 52.458983740768424 L 135.80584566933769 107.99619938278198 C 135.80584566933769 110.49619938278198 133.30584566933769 112.99619938278198 130.80584566933769 112.99619938278198 L 130.80584566933769 112.99619938278198 C 129.71231748035976 112.99619938278198 128.61878929138183 110.49619938278198 128.61878929138183 107.99619938278198 Z "
                                                            fill="rgba(132, 90, 223, 1)"
                                                            fill-opacity="1"
                                                            stroke="rgba(132, 90, 223, 1)"
                                                            stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskzmdw4yzx)"
                                                            pathTo="M 128.61878929138183 107.99619938278198 L 128.61878929138183 52.458983740768424 C 128.61878929138183 49.958983740768424 131.11878929138183 47.458983740768424 133.61878929138183 47.458983740768424 L 133.61878929138183 47.458983740768424 C 134.71231748035976 47.458983740768424 135.80584566933769 49.958983740768424 135.80584566933769 52.458983740768424 L 135.80584566933769 107.99619938278198 C 135.80584566933769 110.49619938278198 133.30584566933769 112.99619938278198 130.80584566933769 112.99619938278198 L 130.80584566933769 112.99619938278198 C 129.71231748035976 112.99619938278198 128.61878929138183 110.49619938278198 128.61878929138183 107.99619938278198 Z "
                                                            pathFrom="M 128.61878929138183 107.99619938278198 L 128.61878929138183 52.458983740768424 C 128.61878929138183 49.958983740768424 131.11878929138183 47.458983740768424 133.61878929138183 47.458983740768424 L 133.61878929138183 47.458983740768424 C 134.71231748035976 47.458983740768424 135.80584566933769 49.958983740768424 135.80584566933769 52.458983740768424 L 135.80584566933769 107.99619938278198 C 135.80584566933769 110.49619938278198 133.30584566933769 112.99619938278198 130.80584566933769 112.99619938278198 L 130.80584566933769 112.99619938278198 C 129.71231748035976 112.99619938278198 128.61878929138183 110.49619938278198 128.61878929138183 107.99619938278198 Z  L 128.61878929138183 112.99619938278198 L 135.80584566933769 112.99619938278198 L 135.80584566933769 112.99619938278198 L 135.80584566933769 112.99619938278198 L 135.80584566933769 112.99619938278198 L 135.80584566933769 112.99619938278198 L 128.61878929138183 112.99619938278198 Z"
                                                            cy="47.45798374076843"
                                                            cx="158.24231055123465" j="4" val="58"
                                                            barHeight="65.53721564201355"
                                                            barWidth="9.187056377955846"></path>
                                                        <path id="SvgjsPath6552"
                                                            d="M 159.24231055123465 107.99619938278198 L 159.24231055123465 55.84883972225188 C 159.24231055123465 53.34883972225188 161.74231055123465 50.84883972225188 164.24231055123465 50.84883972225188 L 164.24231055123465 50.84883972225188 C 165.33583874021258 50.84883972225188 166.4293669291905 53.34883972225188 166.4293669291905 55.84883972225188 L 166.4293669291905 107.99619938278198 C 166.4293669291905 110.49619938278198 163.9293669291905 112.99619938278198 161.4293669291905 112.99619938278198 L 161.4293669291905 112.99619938278198 C 160.33583874021258 112.99619938278198 159.24231055123465 110.49619938278198 159.24231055123465 107.99619938278198 Z "
                                                            fill="rgba(132, 90, 223, 1)"
                                                            fill-opacity="1"
                                                            stroke="rgba(132, 90, 223, 1)"
                                                            stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskzmdw4yzx)"
                                                            pathTo="M 159.24231055123465 107.99619938278198 L 159.24231055123465 55.84883972225188 C 159.24231055123465 53.34883972225188 161.74231055123465 50.84883972225188 164.24231055123465 50.84883972225188 L 164.24231055123465 50.84883972225188 C 165.33583874021258 50.84883972225188 166.4293669291905 53.34883972225188 166.4293669291905 55.84883972225188 L 166.4293669291905 107.99619938278198 C 166.4293669291905 110.49619938278198 163.9293669291905 112.99619938278198 161.4293669291905 112.99619938278198 L 161.4293669291905 112.99619938278198 C 160.33583874021258 112.99619938278198 159.24231055123465 110.49619938278198 159.24231055123465 107.99619938278198 Z "
                                                            pathFrom="M 159.24231055123465 107.99619938278198 L 159.24231055123465 55.84883972225188 C 159.24231055123465 53.34883972225188 161.74231055123465 50.84883972225188 164.24231055123465 50.84883972225188 L 164.24231055123465 50.84883972225188 C 165.33583874021258 50.84883972225188 166.4293669291905 53.34883972225188 166.4293669291905 55.84883972225188 L 166.4293669291905 107.99619938278198 C 166.4293669291905 110.49619938278198 163.9293669291905 112.99619938278198 161.4293669291905 112.99619938278198 L 161.4293669291905 112.99619938278198 C 160.33583874021258 112.99619938278198 159.24231055123465 110.49619938278198 159.24231055123465 107.99619938278198 Z  L 159.24231055123465 112.99619938278198 L 166.4293669291905 112.99619938278198 L 166.4293669291905 112.99619938278198 L 166.4293669291905 112.99619938278198 L 166.4293669291905 112.99619938278198 L 166.4293669291905 112.99619938278198 L 159.24231055123465 112.99619938278198 Z"
                                                            cy="50.847839722251884"
                                                            cx="188.86583181108747" j="5" val="55"
                                                            barHeight="62.14735966053009"
                                                            barWidth="9.187056377955846"></path>
                                                        <path id="SvgjsPath6554"
                                                            d="M 189.86583181108747 107.99619938278198 L 189.86583181108747 38.89955981483458 C 189.86583181108747 36.39955981483458 192.36583181108747 33.89955981483458 194.86583181108747 33.89955981483458 L 194.86583181108747 33.89955981483458 C 195.9593600000654 33.89955981483458 197.05288818904333 36.39955981483458 197.05288818904333 38.89955981483458 L 197.05288818904333 107.99619938278198 C 197.05288818904333 110.49619938278198 194.55288818904333 112.99619938278198 192.05288818904333 112.99619938278198 L 192.05288818904333 112.99619938278198 C 190.9593600000654 112.99619938278198 189.86583181108747 110.49619938278198 189.86583181108747 107.99619938278198 Z "
                                                            fill="rgba(132, 90, 223, 1)"
                                                            fill-opacity="1"
                                                            stroke="rgba(132, 90, 223, 1)"
                                                            stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="0"
                                                            clip-path="url(#gridRectMaskzmdw4yzx)"
                                                            pathTo="M 189.86583181108747 107.99619938278198 L 189.86583181108747 38.89955981483458 C 189.86583181108747 36.39955981483458 192.36583181108747 33.89955981483458 194.86583181108747 33.89955981483458 L 194.86583181108747 33.89955981483458 C 195.9593600000654 33.89955981483458 197.05288818904333 36.39955981483458 197.05288818904333 38.89955981483458 L 197.05288818904333 107.99619938278198 C 197.05288818904333 110.49619938278198 194.55288818904333 112.99619938278198 192.05288818904333 112.99619938278198 L 192.05288818904333 112.99619938278198 C 190.9593600000654 112.99619938278198 189.86583181108747 110.49619938278198 189.86583181108747 107.99619938278198 Z "
                                                            pathFrom="M 189.86583181108747 107.99619938278198 L 189.86583181108747 38.89955981483458 C 189.86583181108747 36.39955981483458 192.36583181108747 33.89955981483458 194.86583181108747 33.89955981483458 L 194.86583181108747 33.89955981483458 C 195.9593600000654 33.89955981483458 197.05288818904333 36.39955981483458 197.05288818904333 38.89955981483458 L 197.05288818904333 107.99619938278198 C 197.05288818904333 110.49619938278198 194.55288818904333 112.99619938278198 192.05288818904333 112.99619938278198 L 192.05288818904333 112.99619938278198 C 190.9593600000654 112.99619938278198 189.86583181108747 110.49619938278198 189.86583181108747 107.99619938278198 Z  L 189.86583181108747 112.99619938278198 L 197.05288818904333 112.99619938278198 L 197.05288818904333 112.99619938278198 L 197.05288818904333 112.99619938278198 L 197.05288818904333 112.99619938278198 L 197.05288818904333 112.99619938278198 L 189.86583181108747 112.99619938278198 Z"
                                                            cy="33.898559814834584"
                                                            cx="219.4893530709403" j="6" val="70"
                                                            barHeight="79.09663956794739"
                                                            barWidth="9.187056377955846"></path>
                                                        <g id="SvgjsG6539"
                                                            class="apexcharts-bar-goals-markers">
                                                            <g id="SvgjsG6541"
                                                                className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskzmdw4yzx)">
                                                            </g>
                                                            <g id="SvgjsG6543"
                                                                className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskzmdw4yzx)">
                                                            </g>
                                                            <g id="SvgjsG6545"
                                                                className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskzmdw4yzx)">
                                                            </g>
                                                            <g id="SvgjsG6547"
                                                                className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskzmdw4yzx)">
                                                            </g>
                                                            <g id="SvgjsG6549"
                                                                className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskzmdw4yzx)">
                                                            </g>
                                                            <g id="SvgjsG6551"
                                                                className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskzmdw4yzx)">
                                                            </g>
                                                            <g id="SvgjsG6553"
                                                                className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskzmdw4yzx)">
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG6540"
                                                            class="apexcharts-bar-shadows apexcharts-hidden-element-shown">
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG6555" class="apexcharts-series"
                                                        rel="2" seriesName="TotalxSales"
                                                        data:realIndex="1">
                                                        <path id="SvgjsPath6560"
                                                            d="M 15.31176062992641 107.99619938278198 L 15.31176062992641 79.5778315926361 C 15.31176062992641 77.0778315926361 17.81176062992641 74.5778315926361 20.31176062992641 74.5778315926361 L 20.31176062992641 74.5778315926361 C 21.40528881890433 74.5778315926361 22.498817007882256 77.0778315926361 22.498817007882256 79.5778315926361 L 22.498817007882256 107.99619938278198 C 22.498817007882256 110.49619938278198 19.998817007882256 112.99619938278198 17.498817007882256 112.99619938278198 L 17.498817007882256 112.99619938278198 C 16.40528881890433 112.99619938278198 15.31176062992641 110.49619938278198 15.31176062992641 107.99619938278198 Z "
                                                            fill="rgba(237,237,237,0.85)"
                                                            fill-opacity="1" stroke="#ededed"
                                                            stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="1"
                                                            clip-path="url(#gridRectMaskzmdw4yzx)"
                                                            pathTo="M 15.31176062992641 107.99619938278198 L 15.31176062992641 79.5778315926361 C 15.31176062992641 77.0778315926361 17.81176062992641 74.5778315926361 20.31176062992641 74.5778315926361 L 20.31176062992641 74.5778315926361 C 21.40528881890433 74.5778315926361 22.498817007882256 77.0778315926361 22.498817007882256 79.5778315926361 L 22.498817007882256 107.99619938278198 C 22.498817007882256 110.49619938278198 19.998817007882256 112.99619938278198 17.498817007882256 112.99619938278198 L 17.498817007882256 112.99619938278198 C 16.40528881890433 112.99619938278198 15.31176062992641 110.49619938278198 15.31176062992641 107.99619938278198 Z "
                                                            pathFrom="M 15.31176062992641 107.99619938278198 L 15.31176062992641 79.5778315926361 C 15.31176062992641 77.0778315926361 17.81176062992641 74.5778315926361 20.31176062992641 74.5778315926361 L 20.31176062992641 74.5778315926361 C 21.40528881890433 74.5778315926361 22.498817007882256 77.0778315926361 22.498817007882256 79.5778315926361 L 22.498817007882256 107.99619938278198 C 22.498817007882256 110.49619938278198 19.998817007882256 112.99619938278198 17.498817007882256 112.99619938278198 L 17.498817007882256 112.99619938278198 C 16.40528881890433 112.99619938278198 15.31176062992641 110.49619938278198 15.31176062992641 107.99619938278198 Z  L 15.31176062992641 112.99619938278198 L 22.498817007882256 112.99619938278198 L 22.498817007882256 112.99619938278198 L 22.498817007882256 112.99619938278198 L 22.498817007882256 112.99619938278198 L 22.498817007882256 112.99619938278198 L 15.31176062992641 112.99619938278198 Z"
                                                            cy="74.5768315926361"
                                                            cx="44.935281889779226" j="0" val="34"
                                                            barHeight="38.41836779014587"
                                                            barWidth="9.187056377955846"></path>
                                                        <path id="SvgjsPath6562"
                                                            d="M 45.935281889779226 107.99619938278198 L 45.935281889779226 93.13725551856994 C 45.935281889779226 90.63725551856994 48.435281889779226 88.13725551856994 50.935281889779226 88.13725551856994 L 50.935281889779226 88.13725551856994 C 52.02881007875715 88.13725551856994 53.122338267735074 90.63725551856994 53.122338267735074 93.13725551856994 L 53.122338267735074 107.99619938278198 C 53.122338267735074 110.49619938278198 50.622338267735074 112.99619938278198 48.122338267735074 112.99619938278198 L 48.122338267735074 112.99619938278198 C 47.02881007875715 112.99619938278198 45.935281889779226 110.49619938278198 45.935281889779226 107.99619938278198 Z "
                                                            fill="rgba(237,237,237,0.85)"
                                                            fill-opacity="1" stroke="#ededed"
                                                            stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="1"
                                                            clip-path="url(#gridRectMaskzmdw4yzx)"
                                                            pathTo="M 45.935281889779226 107.99619938278198 L 45.935281889779226 93.13725551856994 C 45.935281889779226 90.63725551856994 48.435281889779226 88.13725551856994 50.935281889779226 88.13725551856994 L 50.935281889779226 88.13725551856994 C 52.02881007875715 88.13725551856994 53.122338267735074 90.63725551856994 53.122338267735074 93.13725551856994 L 53.122338267735074 107.99619938278198 C 53.122338267735074 110.49619938278198 50.622338267735074 112.99619938278198 48.122338267735074 112.99619938278198 L 48.122338267735074 112.99619938278198 C 47.02881007875715 112.99619938278198 45.935281889779226 110.49619938278198 45.935281889779226 107.99619938278198 Z "
                                                            pathFrom="M 45.935281889779226 107.99619938278198 L 45.935281889779226 93.13725551856994 C 45.935281889779226 90.63725551856994 48.435281889779226 88.13725551856994 50.935281889779226 88.13725551856994 L 50.935281889779226 88.13725551856994 C 52.02881007875715 88.13725551856994 53.122338267735074 90.63725551856994 53.122338267735074 93.13725551856994 L 53.122338267735074 107.99619938278198 C 53.122338267735074 110.49619938278198 50.622338267735074 112.99619938278198 48.122338267735074 112.99619938278198 L 48.122338267735074 112.99619938278198 C 47.02881007875715 112.99619938278198 45.935281889779226 110.49619938278198 45.935281889779226 107.99619938278198 Z  L 45.935281889779226 112.99619938278198 L 53.122338267735074 112.99619938278198 L 53.122338267735074 112.99619938278198 L 53.122338267735074 112.99619938278198 L 53.122338267735074 112.99619938278198 L 53.122338267735074 112.99619938278198 L 45.935281889779226 112.99619938278198 Z"
                                                            cy="88.13625551856994"
                                                            cx="75.55880314963204" j="1" val="22"
                                                            barHeight="24.858943864212037"
                                                            barWidth="9.187056377955846"></path>
                                                        <path id="SvgjsPath6564"
                                                            d="M 76.55880314963204 107.99619938278198 L 76.55880314963204 76.18797561115264 C 76.55880314963204 73.68797561115264 79.05880314963204 71.18797561115264 81.55880314963204 71.18797561115264 L 81.55880314963204 71.18797561115264 C 82.65233133860997 71.18797561115264 83.74585952758788 73.68797561115264 83.74585952758788 76.18797561115264 L 83.74585952758788 107.99619938278198 C 83.74585952758788 110.49619938278198 81.24585952758788 112.99619938278198 78.74585952758788 112.99619938278198 L 78.74585952758788 112.99619938278198 C 77.65233133860997 112.99619938278198 76.55880314963204 110.49619938278198 76.55880314963204 107.99619938278198 Z "
                                                            fill="rgba(237,237,237,0.85)"
                                                            fill-opacity="1" stroke="#ededed"
                                                            stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="1"
                                                            clip-path="url(#gridRectMaskzmdw4yzx)"
                                                            pathTo="M 76.55880314963204 107.99619938278198 L 76.55880314963204 76.18797561115264 C 76.55880314963204 73.68797561115264 79.05880314963204 71.18797561115264 81.55880314963204 71.18797561115264 L 81.55880314963204 71.18797561115264 C 82.65233133860997 71.18797561115264 83.74585952758788 73.68797561115264 83.74585952758788 76.18797561115264 L 83.74585952758788 107.99619938278198 C 83.74585952758788 110.49619938278198 81.24585952758788 112.99619938278198 78.74585952758788 112.99619938278198 L 78.74585952758788 112.99619938278198 C 77.65233133860997 112.99619938278198 76.55880314963204 110.49619938278198 76.55880314963204 107.99619938278198 Z "
                                                            pathFrom="M 76.55880314963204 107.99619938278198 L 76.55880314963204 76.18797561115264 C 76.55880314963204 73.68797561115264 79.05880314963204 71.18797561115264 81.55880314963204 71.18797561115264 L 81.55880314963204 71.18797561115264 C 82.65233133860997 71.18797561115264 83.74585952758788 73.68797561115264 83.74585952758788 76.18797561115264 L 83.74585952758788 107.99619938278198 C 83.74585952758788 110.49619938278198 81.24585952758788 112.99619938278198 78.74585952758788 112.99619938278198 L 78.74585952758788 112.99619938278198 C 77.65233133860997 112.99619938278198 76.55880314963204 110.49619938278198 76.55880314963204 107.99619938278198 Z  L 76.55880314963204 112.99619938278198 L 83.74585952758788 112.99619938278198 L 83.74585952758788 112.99619938278198 L 83.74585952758788 112.99619938278198 L 83.74585952758788 112.99619938278198 L 83.74585952758788 112.99619938278198 L 76.55880314963204 112.99619938278198 Z"
                                                            cy="71.18697561115263"
                                                            cx="106.18232440948486" j="2" val="37"
                                                            barHeight="41.808223771629336"
                                                            barWidth="9.187056377955846"></path>
                                                        <path id="SvgjsPath6566"
                                                            d="M 107.18232440948486 107.99619938278198 L 107.18232440948486 54.718887728424065 C 107.18232440948486 52.218887728424065 109.68232440948486 49.718887728424065 112.18232440948486 49.718887728424065 L 112.18232440948486 49.718887728424065 C 113.27585259846279 49.718887728424065 114.3693807874407 52.218887728424065 114.3693807874407 54.718887728424065 L 114.3693807874407 107.99619938278198 C 114.3693807874407 110.49619938278198 111.8693807874407 112.99619938278198 109.3693807874407 112.99619938278198 L 109.3693807874407 112.99619938278198 C 108.27585259846279 112.99619938278198 107.18232440948486 110.49619938278198 107.18232440948486 107.99619938278198 Z "
                                                            fill="rgba(237,237,237,0.85)"
                                                            fill-opacity="1" stroke="#ededed"
                                                            stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="1"
                                                            clip-path="url(#gridRectMaskzmdw4yzx)"
                                                            pathTo="M 107.18232440948486 107.99619938278198 L 107.18232440948486 54.718887728424065 C 107.18232440948486 52.218887728424065 109.68232440948486 49.718887728424065 112.18232440948486 49.718887728424065 L 112.18232440948486 49.718887728424065 C 113.27585259846279 49.718887728424065 114.3693807874407 52.218887728424065 114.3693807874407 54.718887728424065 L 114.3693807874407 107.99619938278198 C 114.3693807874407 110.49619938278198 111.8693807874407 112.99619938278198 109.3693807874407 112.99619938278198 L 109.3693807874407 112.99619938278198 C 108.27585259846279 112.99619938278198 107.18232440948486 110.49619938278198 107.18232440948486 107.99619938278198 Z "
                                                            pathFrom="M 107.18232440948486 107.99619938278198 L 107.18232440948486 54.718887728424065 C 107.18232440948486 52.218887728424065 109.68232440948486 49.718887728424065 112.18232440948486 49.718887728424065 L 112.18232440948486 49.718887728424065 C 113.27585259846279 49.718887728424065 114.3693807874407 52.218887728424065 114.3693807874407 54.718887728424065 L 114.3693807874407 107.99619938278198 C 114.3693807874407 110.49619938278198 111.8693807874407 112.99619938278198 109.3693807874407 112.99619938278198 L 109.3693807874407 112.99619938278198 C 108.27585259846279 112.99619938278198 107.18232440948486 110.49619938278198 107.18232440948486 107.99619938278198 Z  L 107.18232440948486 112.99619938278198 L 114.3693807874407 112.99619938278198 L 114.3693807874407 112.99619938278198 L 114.3693807874407 112.99619938278198 L 114.3693807874407 112.99619938278198 L 114.3693807874407 112.99619938278198 L 107.18232440948486 112.99619938278198 Z"
                                                            cy="49.71788772842407"
                                                            cx="136.80584566933769" j="3" val="56"
                                                            barHeight="63.27731165435791"
                                                            barWidth="9.187056377955846"></path>
                                                        <path id="SvgjsPath6568"
                                                            d="M 137.80584566933769 107.99619938278198 L 137.80584566933769 94.26720751239776 C 137.80584566933769 91.76720751239776 140.30584566933769 89.26720751239776 142.80584566933769 89.26720751239776 L 142.80584566933769 89.26720751239776 C 143.8993738583156 89.26720751239776 144.99290204729354 91.76720751239776 144.99290204729354 94.26720751239776 L 144.99290204729354 107.99619938278198 C 144.99290204729354 110.49619938278198 142.49290204729354 112.99619938278198 139.99290204729354 112.99619938278198 L 139.99290204729354 112.99619938278198 C 138.8993738583156 112.99619938278198 137.80584566933769 110.49619938278198 137.80584566933769 107.99619938278198 Z "
                                                            fill="rgba(237,237,237,0.85)"
                                                            fill-opacity="1" stroke="#ededed"
                                                            stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="1"
                                                            clip-path="url(#gridRectMaskzmdw4yzx)"
                                                            pathTo="M 137.80584566933769 107.99619938278198 L 137.80584566933769 94.26720751239776 C 137.80584566933769 91.76720751239776 140.30584566933769 89.26720751239776 142.80584566933769 89.26720751239776 L 142.80584566933769 89.26720751239776 C 143.8993738583156 89.26720751239776 144.99290204729354 91.76720751239776 144.99290204729354 94.26720751239776 L 144.99290204729354 107.99619938278198 C 144.99290204729354 110.49619938278198 142.49290204729354 112.99619938278198 139.99290204729354 112.99619938278198 L 139.99290204729354 112.99619938278198 C 138.8993738583156 112.99619938278198 137.80584566933769 110.49619938278198 137.80584566933769 107.99619938278198 Z "
                                                            pathFrom="M 137.80584566933769 107.99619938278198 L 137.80584566933769 94.26720751239776 C 137.80584566933769 91.76720751239776 140.30584566933769 89.26720751239776 142.80584566933769 89.26720751239776 L 142.80584566933769 89.26720751239776 C 143.8993738583156 89.26720751239776 144.99290204729354 91.76720751239776 144.99290204729354 94.26720751239776 L 144.99290204729354 107.99619938278198 C 144.99290204729354 110.49619938278198 142.49290204729354 112.99619938278198 139.99290204729354 112.99619938278198 L 139.99290204729354 112.99619938278198 C 138.8993738583156 112.99619938278198 137.80584566933769 110.49619938278198 137.80584566933769 107.99619938278198 Z  L 137.80584566933769 112.99619938278198 L 144.99290204729354 112.99619938278198 L 144.99290204729354 112.99619938278198 L 144.99290204729354 112.99619938278198 L 144.99290204729354 112.99619938278198 L 144.99290204729354 112.99619938278198 L 137.80584566933769 112.99619938278198 Z"
                                                            cy="89.26620751239776"
                                                            cx="167.4293669291905" j="4" val="21"
                                                            barHeight="23.728991870384217"
                                                            barWidth="9.187056377955846"></path>
                                                        <path id="SvgjsPath6570"
                                                            d="M 168.4293669291905 107.99619938278198 L 168.4293669291905 78.44787959880829 C 168.4293669291905 75.94787959880829 170.9293669291905 73.44787959880829 173.4293669291905 73.44787959880829 L 173.4293669291905 73.44787959880829 C 174.52289511816844 73.44787959880829 175.61642330714636 75.94787959880829 175.61642330714636 78.44787959880829 L 175.61642330714636 107.99619938278198 C 175.61642330714636 110.49619938278198 173.11642330714636 112.99619938278198 170.61642330714636 112.99619938278198 L 170.61642330714636 112.99619938278198 C 169.52289511816844 112.99619938278198 168.4293669291905 110.49619938278198 168.4293669291905 107.99619938278198 Z "
                                                            fill="rgba(237,237,237,0.85)"
                                                            fill-opacity="1" stroke="#ededed"
                                                            stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="1"
                                                            clip-path="url(#gridRectMaskzmdw4yzx)"
                                                            pathTo="M 168.4293669291905 107.99619938278198 L 168.4293669291905 78.44787959880829 C 168.4293669291905 75.94787959880829 170.9293669291905 73.44787959880829 173.4293669291905 73.44787959880829 L 173.4293669291905 73.44787959880829 C 174.52289511816844 73.44787959880829 175.61642330714636 75.94787959880829 175.61642330714636 78.44787959880829 L 175.61642330714636 107.99619938278198 C 175.61642330714636 110.49619938278198 173.11642330714636 112.99619938278198 170.61642330714636 112.99619938278198 L 170.61642330714636 112.99619938278198 C 169.52289511816844 112.99619938278198 168.4293669291905 110.49619938278198 168.4293669291905 107.99619938278198 Z "
                                                            pathFrom="M 168.4293669291905 107.99619938278198 L 168.4293669291905 78.44787959880829 C 168.4293669291905 75.94787959880829 170.9293669291905 73.44787959880829 173.4293669291905 73.44787959880829 L 173.4293669291905 73.44787959880829 C 174.52289511816844 73.44787959880829 175.61642330714636 75.94787959880829 175.61642330714636 78.44787959880829 L 175.61642330714636 107.99619938278198 C 175.61642330714636 110.49619938278198 173.11642330714636 112.99619938278198 170.61642330714636 112.99619938278198 L 170.61642330714636 112.99619938278198 C 169.52289511816844 112.99619938278198 168.4293669291905 110.49619938278198 168.4293669291905 107.99619938278198 Z  L 168.4293669291905 112.99619938278198 L 175.61642330714636 112.99619938278198 L 175.61642330714636 112.99619938278198 L 175.61642330714636 112.99619938278198 L 175.61642330714636 112.99619938278198 L 175.61642330714636 112.99619938278198 L 168.4293669291905 112.99619938278198 Z"
                                                            cy="73.44687959880828"
                                                            cx="198.05288818904333" j="5" val="35"
                                                            barHeight="39.548319783973696"
                                                            barWidth="9.187056377955846"></path>
                                                        <path id="SvgjsPath6572"
                                                            d="M 199.05288818904333 107.99619938278198 L 199.05288818904333 50.19907975311279 C 199.05288818904333 47.69907975311279 201.55288818904333 45.19907975311279 204.05288818904333 45.19907975311279 L 204.05288818904333 45.19907975311279 C 205.14641637802126 45.19907975311279 206.23994456699918 47.69907975311279 206.23994456699918 50.19907975311279 L 206.23994456699918 107.99619938278198 C 206.23994456699918 110.49619938278198 203.73994456699918 112.99619938278198 201.23994456699918 112.99619938278198 L 201.23994456699918 112.99619938278198 C 200.14641637802126 112.99619938278198 199.05288818904333 110.49619938278198 199.05288818904333 107.99619938278198 Z "
                                                            fill="rgba(237,237,237,0.85)"
                                                            fill-opacity="1" stroke="#ededed"
                                                            stroke-opacity="1" stroke-linecap="round"
                                                            stroke-width="2" stroke-dasharray="0"
                                                            class="apexcharts-bar-area" index="1"
                                                            clip-path="url(#gridRectMaskzmdw4yzx)"
                                                            pathTo="M 199.05288818904333 107.99619938278198 L 199.05288818904333 50.19907975311279 C 199.05288818904333 47.69907975311279 201.55288818904333 45.19907975311279 204.05288818904333 45.19907975311279 L 204.05288818904333 45.19907975311279 C 205.14641637802126 45.19907975311279 206.23994456699918 47.69907975311279 206.23994456699918 50.19907975311279 L 206.23994456699918 107.99619938278198 C 206.23994456699918 110.49619938278198 203.73994456699918 112.99619938278198 201.23994456699918 112.99619938278198 L 201.23994456699918 112.99619938278198 C 200.14641637802126 112.99619938278198 199.05288818904333 110.49619938278198 199.05288818904333 107.99619938278198 Z "
                                                            pathFrom="M 199.05288818904333 107.99619938278198 L 199.05288818904333 50.19907975311279 C 199.05288818904333 47.69907975311279 201.55288818904333 45.19907975311279 204.05288818904333 45.19907975311279 L 204.05288818904333 45.19907975311279 C 205.14641637802126 45.19907975311279 206.23994456699918 47.69907975311279 206.23994456699918 50.19907975311279 L 206.23994456699918 107.99619938278198 C 206.23994456699918 110.49619938278198 203.73994456699918 112.99619938278198 201.23994456699918 112.99619938278198 L 201.23994456699918 112.99619938278198 C 200.14641637802126 112.99619938278198 199.05288818904333 110.49619938278198 199.05288818904333 107.99619938278198 Z  L 199.05288818904333 112.99619938278198 L 206.23994456699918 112.99619938278198 L 206.23994456699918 112.99619938278198 L 206.23994456699918 112.99619938278198 L 206.23994456699918 112.99619938278198 L 206.23994456699918 112.99619938278198 L 199.05288818904333 112.99619938278198 Z"
                                                            cy="45.19807975311279"
                                                            cx="228.67640944889615" j="6" val="60"
                                                            barHeight="67.79711962966918"
                                                            barWidth="9.187056377955846"></path>
                                                        <g id="SvgjsG6557"
                                                            class="apexcharts-bar-goals-markers">
                                                            <g id="SvgjsG6559"
                                                                className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskzmdw4yzx)">
                                                            </g>
                                                            <g id="SvgjsG6561"
                                                                className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskzmdw4yzx)">
                                                            </g>
                                                            <g id="SvgjsG6563"
                                                                className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskzmdw4yzx)">
                                                            </g>
                                                            <g id="SvgjsG6565"
                                                                className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskzmdw4yzx)">
                                                            </g>
                                                            <g id="SvgjsG6567"
                                                                className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskzmdw4yzx)">
                                                            </g>
                                                            <g id="SvgjsG6569"
                                                                className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskzmdw4yzx)">
                                                            </g>
                                                            <g id="SvgjsG6571"
                                                                className="apexcharts-bar-goals-groups"
                                                                class="apexcharts-hidden-element-shown"
                                                                clip-path="url(#gridRectMarkerMaskzmdw4yzx)">
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG6558"
                                                            class="apexcharts-bar-shadows apexcharts-hidden-element-shown">
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG6538"
                                                        class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                                        data:realIndex="0"></g>
                                                    <g id="SvgjsG6556"
                                                        class="apexcharts-datalabels apexcharts-hidden-element-shown"
                                                        data:realIndex="1"></g>
                                                </g>
                                                <line id="SvgjsLine6593" x1="0" y1="0"
                                                    x2="214.36464881896973" y2="0"
                                                    stroke="#b6b6b6" stroke-dasharray="0"
                                                    stroke-width="1" stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs"></line>
                                                <line id="SvgjsLine6594" x1="0" y1="0"
                                                    x2="214.36464881896973" y2="0"
                                                    stroke-dasharray="0" stroke-width="0"
                                                    stroke-linecap="butt"
                                                    class="apexcharts-ycrosshairs-hidden"></line>
                                                <g id="SvgjsG6595" class="apexcharts-xaxis"
                                                    transform="translate(0, 0)">
                                                    <g id="SvgjsG6596" class="apexcharts-xaxis-texts-g"
                                                        transform="translate(0, -4)">
                                                        <text id="SvgjsText6598"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="15.31176062992641" y="141.99519938278198"
                                                            text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px"
                                                            font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan6599">S</tspan>
                                                            <title>S</title>
                                                        </text>
                                                        <text id="SvgjsText6601"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="45.935281889779226" y="141.99519938278198"
                                                            text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px"
                                                            font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan6602">M</tspan>
                                                            <title>M</title>
                                                        </text>
                                                        <text id="SvgjsText6604"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="76.55880314963204" y="141.99519938278198"
                                                            text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px"
                                                            font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan6605">T</tspan>
                                                            <title>T</title>
                                                        </text>
                                                        <text id="SvgjsText6607"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="107.18232440948486" y="141.99519938278198"
                                                            text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px"
                                                            font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan6608">W</tspan>
                                                            <title>W</title>
                                                        </text>
                                                        <text id="SvgjsText6610"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="137.80584566933769" y="141.99519938278198"
                                                            text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px"
                                                            font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan6611">T</tspan>
                                                            <title>T</title>
                                                        </text>
                                                        <text id="SvgjsText6613"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="168.4293669291905" y="141.99519938278198"
                                                            text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px"
                                                            font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan6614">F</tspan>
                                                            <title>F</title>
                                                        </text>
                                                        <text id="SvgjsText6616"
                                                            font-family="Helvetica, Arial, sans-serif"
                                                            x="199.05288818904333" y="141.99519938278198"
                                                            text-anchor="middle"
                                                            dominant-baseline="auto" font-size="12px"
                                                            font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-xaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan6617">S</tspan>
                                                            <title>S</title>
                                                        </text>
                                                    </g>
                                                </g>
                                                <g id="SvgjsG6639" class="apexcharts-yaxis-annotations">
                                                </g>
                                                <g id="SvgjsG6640" class="apexcharts-xaxis-annotations">
                                                </g>
                                                <g id="SvgjsG6641" class="apexcharts-point-annotations">
                                                </g>
                                            </g>
                                        </svg>
                                        <div class="apexcharts-tooltip apexcharts-theme-light">
                                            <div class="apexcharts-tooltip-title"
                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                            </div>
                                            <div class="apexcharts-tooltip-series-group"
                                                style="order: 1;">
                                                <span class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(132, 90, 223);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span>
                                                    </div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span>
                                                    </div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="apexcharts-tooltip-series-group"
                                                style="order: 2;">
                                                <span class="apexcharts-tooltip-marker"
                                                    style="background-color: rgb(237, 237, 237);"></span>
                                                <div class="apexcharts-tooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                    <div class="apexcharts-tooltip-y-group"><span
                                                            class="apexcharts-tooltip-text-y-label"></span><span
                                                            class="apexcharts-tooltip-text-y-value"></span>
                                                    </div>
                                                    <div class="apexcharts-tooltip-goals-group"><span
                                                            class="apexcharts-tooltip-text-goals-label"></span><span
                                                            class="apexcharts-tooltip-text-goals-value"></span>
                                                    </div>
                                                    <div class="apexcharts-tooltip-z-group"><span
                                                            class="apexcharts-tooltip-text-z-label"></span><span
                                                            class="apexcharts-tooltip-text-z-value"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                            <div class="apexcharts-yaxistooltip-text"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8">
                    <div class="row">
                        <div class="col-xxl-6 col-lg-6 col-md-6">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex align-items-top justify-content-between">
                                        <div>
                                            <span class="avatar avatar-md avatar-rounded bg-primary">
                                                <i class="ti ti-wallet fs-16"></i>
                                            </span> </div>
                                        <div class="flex-fill ms-3">
                                            <div
                                                class="d-flex align-items-center justify-content-between flex-wrap">
                                                <div>
                                                    <p class="text-muted mb-0">Total Revenue</p>
                                                    <h4 class="fw-semibold mt-1" id="total-revenue-amount">₹0</h4>
                                                </div>
                                                <div id="crm-total-revenue">
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex align-items-center justify-content-between mt-1">
                                                <div>
                                                    <a class="text-primary"
                                                        href="javascript:void(0);">View Leads<i
                                                            class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-0 text-success fw-semibold" id="total-revenue-percentage">+0%</p>
                                                    <span class="text-muted op-7 fs-11">Today</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-lg-6 col-md-6">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex align-items-top justify-content-between">
                                        <div>
                                            <span class="avatar avatar-md avatar-rounded bg-secondary">
                                                <i class="ti ti-wallet fs-16"></i>
                                            </span> </div>
                                        <div class="flex-fill ms-3">
                                            <div
                                                class="d-flex align-items-center justify-content-between flex-wrap">
                                                <div>
                                                    <p class="text-muted mb-0">Total Clients</p>
                                                    <h4 class="fw-semibold mt-1">0</h4>
                                                </div>
                                                <div id="crm-total-customers">
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex align-items-center justify-content-between mt-1">
                                                <div>
                                                    <a class="text-secondary"
                                                        href="javascript:void(0);">View Leads<i
                                                            class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-0 text-success fw-semibold">0%</p>
                                                    <span class="text-muted op-7 fs-11">Today</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-lg-6 col-md-6">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex align-items-top justify-content-between">
                                        <div> <span class="avatar avatar-md avatar-rounded bg-success"> <i
                                                    class="ti ti-wave-square fs-16"></i> </span> </div>
                                        <div class="flex-fill ms-3">
                                            <div
                                                class="d-flex align-items-center justify-content-between flex-wrap">
                                                <div>
                                                    <p class="text-muted mb-0">Conversion %</p>
                                                    <h4 class="fw-semibold mt-1">0%</h4>
                                                </div>
                                                <div id="crm-conversion-ratio">
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex align-items-center justify-content-between mt-1">
                                                <div> <a class="text-success"
                                                        href="javascript:void(0);">View All<i
                                                            class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-0 text-danger fw-semibold">0%</p>
                                                    <span class="text-muted op-7 fs-11">Today</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-lg-6 col-md-6">
                            <div class="card custom-card overflow-hidden">
                                <div class="card-body">
                                    <div class="d-flex align-items-top justify-content-between">
                                        <div> <span class="avatar avatar-md avatar-rounded bg-warning"> <i
                                                    class="ti ti-briefcase fs-16"></i> </span> </div>
                                        <div class="flex-fill ms-3">
                                            <div
                                                class="d-flex align-items-center justify-content-between flex-wrap">
                                                <div>
                                                    <p class="text-muted mb-0">Total Leads</p>
                                                    <h4 class="fw-semibold mt-1">0</h4>
                                                </div>
                                                <div id="crm-total-deals">
                                                </div>
                                            </div>
                                            <div
                                                class="d-flex align-items-center justify-content-between mt-1">
                                                <div> <a class="text-warning"
                                                        href="javascript:void(0);">View All<i
                                                            class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                                </div>
                                                <div class="text-end">
                                                    <p class="mb-0 text-danger fw-semibold">0%</p>
                                                    <span class="text-muted op-7 fs-11">Today</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title"> Revenue Analytics </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="p-2 fs-12 text-muted"
                                            data-bs-toggle="dropdown" aria-expanded="false"> View All<i
                                                class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a class="dropdown-item"
                                                    href="javascript:void(0);">Today</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">This
                                                    Week</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Last
                                                    Week</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="content-wrapper">
                                        <div id="crm-revenue-analytics" style="min-height: 365px;">
                                            <div id="apexchartstoanhfav"
                                                class="apexcharts-canvas apexchartstoanhfav apexcharts-theme-light"
                                                style="width: 564px; height: 350px;">
                                                <svg id="SvgjsSvg6382" width="564" height="350"
                                                    xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                    xmlns:svgjs="http://svgjs.dev"
                                                    class="apexcharts-svg apexcharts-zoomable hovering-zoom"
                                                    xmlns:data="ApexChartsNS"
                                                    transform="translate(0, 0)"
                                                    style="background: transparent;">
                                                    <foreignObject x="0" y="0" width="564"
                                                        height="350">
                                                        <div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom"
                                                            xmlns="http://www.w3.org/1999/xhtml"
                                                            style="inset: auto 0px 1px; position: absolute; max-height: 175px;">
                                                            <div class="apexcharts-legend-series"
                                                                rel="3" seriesname="Sales"
                                                                data:collapsed="false"
                                                                style="margin: 2px 5px;"><span
                                                                    class="apexcharts-legend-marker"
                                                                    rel="3"
                                                                    data:collapsed="false"
                                                                    style="background: rgba(119, 119, 142, 0.05) !important; color: rgba(119, 119, 142, 0.05); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                                    class="apexcharts-legend-text"
                                                                    rel="3" i="2"
                                                                    data:default-text="Sales"
                                                                    data:collapsed="false"
                                                                    style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Sales</span>
                                                            </div>
                                                            <div class="apexcharts-legend-series"
                                                                rel="2" seriesname="Revenue"
                                                                data:collapsed="false"
                                                                style="margin: 2px 5px;"><span
                                                                    class="apexcharts-legend-marker"
                                                                    rel="2"
                                                                    data:collapsed="false"
                                                                    style="background: rgba(35, 183, 229, 0.85) !important; color: rgba(35, 183, 229, 0.85); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                                    class="apexcharts-legend-text"
                                                                    rel="2" i="1"
                                                                    data:default-text="Revenue"
                                                                    data:collapsed="false"
                                                                    style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Revenue</span>
                                                            </div>
                                                            <div class="apexcharts-legend-series"
                                                                rel="1" seriesname="Profit"
                                                                data:collapsed="false"
                                                                style="margin: 2px 5px;"><span
                                                                    class="apexcharts-legend-marker"
                                                                    rel="1"
                                                                    data:collapsed="false"
                                                                    style="background: rgb(132, 90, 223) !important; color: rgb(132, 90, 223); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                                    class="apexcharts-legend-text"
                                                                    rel="1" i="0"
                                                                    data:default-text="Profit"
                                                                    data:collapsed="false"
                                                                    style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Profit</span>
                                                            </div>
                                                        </div>
                                                        <style type="text/css">
                                                            .apexcharts-legend {
                                                                display: flex;
                                                                overflow: auto;
                                                                padding: 0 10px;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom,
                                                            .apexcharts-legend.apx-legend-position-top {
                                                                flex-wrap: wrap
                                                            }

                                                            .apexcharts-legend.apx-legend-position-right,
                                                            .apexcharts-legend.apx-legend-position-left {
                                                                flex-direction: column;
                                                                bottom: 0;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                                            .apexcharts-legend.apx-legend-position-right,
                                                            .apexcharts-legend.apx-legend-position-left {
                                                                justify-content: flex-start;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                                                justify-content: center;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                                            .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                                                justify-content: flex-end;
                                                            }

                                                            .apexcharts-legend-series {
                                                                cursor: pointer;
                                                                line-height: normal;
                                                            }

                                                            .apexcharts-legend.apx-legend-position-bottom .apexcharts-legend-series,
                                                            .apexcharts-legend.apx-legend-position-top .apexcharts-legend-series {
                                                                display: flex;
                                                                align-items: center;
                                                            }

                                                            .apexcharts-legend-text {
                                                                position: relative;
                                                                font-size: 14px;
                                                            }

                                                            .apexcharts-legend-text *,
                                                            .apexcharts-legend-marker * {
                                                                pointer-events: none;
                                                            }

                                                            .apexcharts-legend-marker {
                                                                position: relative;
                                                                display: inline-block;
                                                                cursor: pointer;
                                                                margin-right: 3px;
                                                                border-style: solid;
                                                            }

                                                            .apexcharts-legend.apexcharts-align-right .apexcharts-legend-series,
                                                            .apexcharts-legend.apexcharts-align-left .apexcharts-legend-series {
                                                                display: inline-block;
                                                            }

                                                            .apexcharts-legend-series.apexcharts-no-click {
                                                                cursor: auto;
                                                            }

                                                            .apexcharts-legend .apexcharts-hidden-zero-series,
                                                            .apexcharts-legend .apexcharts-hidden-null-series {
                                                                display: none !important;
                                                            }

                                                            .apexcharts-inactive-legend {
                                                                opacity: 0.45;
                                                            }
                                                        </style>
                                                    </foreignObject>
                                                    <text id="SvgjsText6385"
                                                        font-family="Helvetica, Arial, sans-serif" x="10"
                                                        y="0" text-anchor="start"
                                                        dominant-baseline="auto" font-size=".8125rem"
                                                        font-weight="semibold" fill="#8c9097"
                                                        class="apexcharts-title-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; opacity: 1;">Revenue
                                                        Analytics with sales &amp; profit</text>
                                                    <rect id="SvgjsRect6388" width="0"
                                                        height="0" x="0" y="0" rx="0"
                                                        ry="0" opacity="1" stroke-width="0"
                                                        stroke="none" stroke-dasharray="0"
                                                        fill="#fefefe"></rect>
                                                    <g id="SvgjsG6496" class="apexcharts-yaxis"
                                                        rel="0"
                                                        transform="translate(27.870702743530273, 0)">
                                                        <g id="SvgjsG6497"
                                                            class="apexcharts-yaxis-texts-g">
                                                            <text id="SvgjsText6499"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="20" y="50.90000057220459"
                                                                text-anchor="end"
                                                                dominant-baseline="auto"
                                                                font-size="11px" font-weight="400"
                                                                fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan6500">₹1000</tspan>
                                                                <title>₹1000</title>
                                                            </text>
                                                            <text id="SvgjsText6502"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="20" y="100.01904033432007"
                                                                text-anchor="end"
                                                                dominant-baseline="auto"
                                                                font-size="11px" font-weight="400"
                                                                fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan6503">₹800</tspan>
                                                                <title>₹800</title>
                                                            </text>
                                                            <text id="SvgjsText6505"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="20" y="149.13808009643554"
                                                                text-anchor="end"
                                                                dominant-baseline="auto"
                                                                font-size="11px" font-weight="400"
                                                                fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan6506">₹600</tspan>
                                                                <title>₹600</title>
                                                            </text>
                                                            <text id="SvgjsText6508"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="20" y="198.25711985855102"
                                                                text-anchor="end"
                                                                dominant-baseline="auto"
                                                                font-size="11px" font-weight="400"
                                                                fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan6509">₹400</tspan>
                                                                <title>₹400</title>
                                                            </text>
                                                            <text id="SvgjsText6511"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="20" y="247.3761596206665"
                                                                text-anchor="end"
                                                                dominant-baseline="auto"
                                                                font-size="11px" font-weight="400"
                                                                fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan6512">₹200</tspan>
                                                                <title>₹200</title>
                                                            </text>
                                                            <text id="SvgjsText6514"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="20" y="296.49519938278195"
                                                                text-anchor="end"
                                                                dominant-baseline="auto"
                                                                font-size="11px" font-weight="400"
                                                                fill="#373d3f"
                                                                class="apexcharts-text apexcharts-yaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;">
                                                                <tspan id="SvgjsTspan6515">₹0</tspan>
                                                                <title>₹0</title>
                                                            </text>
                                                        </g>
                                                    </g>
                                                    <g id="SvgjsG6384"
                                                        class="apexcharts-inner apexcharts-graphical"
                                                        transform="translate(57.87070274353027, 49.40000057220459)">
                                                        <defs id="SvgjsDefs6383">
                                                            <clipPath id="gridRectMasktoanhfav">
                                                                <rect id="SvgjsRect6390"
                                                                    width="490.2593755722046"
                                                                    height="247.59519881057736" x="-3"
                                                                    y="-1" rx="0" ry="0"
                                                                    opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0"
                                                                    fill="#fff"></rect>
                                                            </clipPath>
                                                            <clipPath id="forecastMasktoanhfav">
                                                            </clipPath>
                                                            <clipPath id="nonForecastMasktoanhfav">
                                                            </clipPath>
                                                            <clipPath id="gridRectMarkerMasktoanhfav">
                                                                <rect id="SvgjsRect6391"
                                                                    width="488.2593755722046"
                                                                    height="249.59519881057736" x="-2"
                                                                    y="-2" rx="0" ry="0"
                                                                    opacity="1" stroke-width="0"
                                                                    stroke="none" stroke-dasharray="0"
                                                                    fill="#fff"></rect>
                                                            </clipPath>
                                                            <filter id="SvgjsFilter6397"
                                                                filterUnits="userSpaceOnUse"
                                                                width="200%" height="200%" x="-50%"
                                                                y="-50%">
                                                                <feFlood id="SvgjsFeFlood6398"
                                                                    flood-color="#000000"
                                                                    flood-opacity="0.1"
                                                                    result="SvgjsFeFlood6398Out"
                                                                    in="SourceGraphic"></feFlood>
                                                                <feComposite id="SvgjsFeComposite6399"
                                                                    in="SvgjsFeFlood6398Out"
                                                                    in2="SourceAlpha" operator="in"
                                                                    result="SvgjsFeComposite6399Out">
                                                                </feComposite>
                                                                <feOffset id="SvgjsFeOffset6400"
                                                                    dx="0" dy="8"
                                                                    result="SvgjsFeOffset6400Out"
                                                                    in="SvgjsFeComposite6399Out">
                                                                </feOffset>
                                                                <feGaussianBlur
                                                                    id="SvgjsFeGaussianBlur6401"
                                                                    stdDeviation="3 "
                                                                    result="SvgjsFeGaussianBlur6401Out"
                                                                    in="SvgjsFeOffset6400Out">
                                                                </feGaussianBlur>
                                                                <feMerge id="SvgjsFeMerge6402"
                                                                    result="SvgjsFeMerge6402Out"
                                                                    in="SourceGraphic">
                                                                    <feMergeNode id="SvgjsFeMergeNode6403"
                                                                        in="SvgjsFeGaussianBlur6401Out">
                                                                    </feMergeNode>
                                                                    <feMergeNode id="SvgjsFeMergeNode6404"
                                                                        in="[object Arguments]">
                                                                    </feMergeNode>
                                                                </feMerge>
                                                                <feBlend id="SvgjsFeBlend6405"
                                                                    in="SourceGraphic"
                                                                    in2="SvgjsFeMerge6402Out"
                                                                    mode="normal"
                                                                    result="SvgjsFeBlend6405Out">
                                                                </feBlend>
                                                            </filter>
                                                            <filter id="SvgjsFilter6407"
                                                                filterUnits="userSpaceOnUse"
                                                                width="200%" height="200%" x="-50%"
                                                                y="-50%">
                                                                <feFlood id="SvgjsFeFlood6408"
                                                                    flood-color="#000000"
                                                                    flood-opacity="0.1"
                                                                    result="SvgjsFeFlood6408Out"
                                                                    in="SourceGraphic"></feFlood>
                                                                <feComposite id="SvgjsFeComposite6409"
                                                                    in="SvgjsFeFlood6408Out"
                                                                    in2="SourceAlpha" operator="in"
                                                                    result="SvgjsFeComposite6409Out">
                                                                </feComposite>
                                                                <feOffset id="SvgjsFeOffset6410"
                                                                    dx="0" dy="8"
                                                                    result="SvgjsFeOffset6410Out"
                                                                    in="SvgjsFeComposite6409Out">
                                                                </feOffset>
                                                                <feGaussianBlur
                                                                    id="SvgjsFeGaussianBlur6411"
                                                                    stdDeviation="3 "
                                                                    result="SvgjsFeGaussianBlur6411Out"
                                                                    in="SvgjsFeOffset6410Out">
                                                                </feGaussianBlur>
                                                                <feMerge id="SvgjsFeMerge6412"
                                                                    result="SvgjsFeMerge6412Out"
                                                                    in="SourceGraphic">
                                                                    <feMergeNode id="SvgjsFeMergeNode6413"
                                                                        in="SvgjsFeGaussianBlur6411Out">
                                                                    </feMergeNode>
                                                                    <feMergeNode id="SvgjsFeMergeNode6414"
                                                                        in="[object Arguments]">
                                                                    </feMergeNode>
                                                                </feMerge>
                                                                <feBlend id="SvgjsFeBlend6415"
                                                                    in="SourceGraphic"
                                                                    in2="SvgjsFeMerge6412Out"
                                                                    mode="normal"
                                                                    result="SvgjsFeBlend6415Out">
                                                                </feBlend>
                                                            </filter>
                                                            <filter id="SvgjsFilter6421"
                                                                filterUnits="userSpaceOnUse"
                                                                width="200%" height="200%" x="-50%"
                                                                y="-50%">
                                                                <feFlood id="SvgjsFeFlood6422"
                                                                    flood-color="#000000"
                                                                    flood-opacity="0.1"
                                                                    result="SvgjsFeFlood6422Out"
                                                                    in="SourceGraphic"></feFlood>
                                                                <feComposite id="SvgjsFeComposite6423"
                                                                    in="SvgjsFeFlood6422Out"
                                                                    in2="SourceAlpha" operator="in"
                                                                    result="SvgjsFeComposite6423Out">
                                                                </feComposite>
                                                                <feOffset id="SvgjsFeOffset6424"
                                                                    dx="0" dy="8"
                                                                    result="SvgjsFeOffset6424Out"
                                                                    in="SvgjsFeComposite6423Out">
                                                                </feOffset>
                                                                <feGaussianBlur
                                                                    id="SvgjsFeGaussianBlur6425"
                                                                    stdDeviation="3 "
                                                                    result="SvgjsFeGaussianBlur6425Out"
                                                                    in="SvgjsFeOffset6424Out">
                                                                </feGaussianBlur>
                                                                <feMerge id="SvgjsFeMerge6426"
                                                                    result="SvgjsFeMerge6426Out"
                                                                    in="SourceGraphic">
                                                                    <feMergeNode id="SvgjsFeMergeNode6427"
                                                                        in="SvgjsFeGaussianBlur6425Out">
                                                                    </feMergeNode>
                                                                    <feMergeNode id="SvgjsFeMergeNode6428"
                                                                        in="[object Arguments]">
                                                                    </feMergeNode>
                                                                </feMerge>
                                                                <feBlend id="SvgjsFeBlend6429"
                                                                    in="SourceGraphic"
                                                                    in2="SvgjsFeMerge6426Out"
                                                                    mode="normal"
                                                                    result="SvgjsFeBlend6429Out">
                                                                </feBlend>
                                                            </filter>
                                                            <filter id="SvgjsFilter6434"
                                                                filterUnits="userSpaceOnUse"
                                                                width="200%" height="200%" x="-50%"
                                                                y="-50%">
                                                                <feFlood id="SvgjsFeFlood6435"
                                                                    flood-color="#000000"
                                                                    flood-opacity="0.1"
                                                                    result="SvgjsFeFlood6435Out"
                                                                    in="SourceGraphic"></feFlood>
                                                                <feComposite id="SvgjsFeComposite6436"
                                                                    in="SvgjsFeFlood6435Out"
                                                                    in2="SourceAlpha" operator="in"
                                                                    result="SvgjsFeComposite6436Out">
                                                                </feComposite>
                                                                <feOffset id="SvgjsFeOffset6437"
                                                                    dx="0" dy="8"
                                                                    result="SvgjsFeOffset6437Out"
                                                                    in="SvgjsFeComposite6436Out">
                                                                </feOffset>
                                                                <feGaussianBlur
                                                                    id="SvgjsFeGaussianBlur6438"
                                                                    stdDeviation="3 "
                                                                    result="SvgjsFeGaussianBlur6438Out"
                                                                    in="SvgjsFeOffset6437Out">
                                                                </feGaussianBlur>
                                                                <feMerge id="SvgjsFeMerge6439"
                                                                    result="SvgjsFeMerge6439Out"
                                                                    in="SourceGraphic">
                                                                    <feMergeNode id="SvgjsFeMergeNode6440"
                                                                        in="SvgjsFeGaussianBlur6438Out">
                                                                    </feMergeNode>
                                                                    <feMergeNode id="SvgjsFeMergeNode6441"
                                                                        in="[object Arguments]">
                                                                    </feMergeNode>
                                                                </feMerge>
                                                                <feBlend id="SvgjsFeBlend6442"
                                                                    in="SourceGraphic"
                                                                    in2="SvgjsFeMerge6439Out"
                                                                    mode="normal"
                                                                    result="SvgjsFeBlend6442Out">
                                                                </feBlend>
                                                            </filter>
                                                        </defs>
                                                        <line id="SvgjsLine6389" x1="87.54715919494629"
                                                            y1="0" x2="87.54715919494629"
                                                            y2="245.59519881057736" stroke="#b6b6b6"
                                                            stroke-dasharray="3" stroke-linecap="butt"
                                                            class="apexcharts-xcrosshairs"
                                                            x="87.54715919494629" y="0" width="1"
                                                            height="245.59519881057736" fill="#b1b9c4"
                                                            filter="none" fill-opacity="0.9"
                                                            stroke-width="1"></line>
                                                        <g id="SvgjsG6443" class="apexcharts-grid">
                                                            <g id="SvgjsG6444"
                                                                class="apexcharts-gridlines-horizontal">
                                                                <line id="SvgjsLine6448" x1="0"
                                                                    y1="49.11903976211547"
                                                                    x2="484.2593755722046"
                                                                    y2="49.11903976211547"
                                                                    stroke="#f1f1f1"
                                                                    stroke-dasharray="3"
                                                                    stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine6449" x1="0"
                                                                    y1="98.23807952423094"
                                                                    x2="484.2593755722046"
                                                                    y2="98.23807952423094"
                                                                    stroke="#f1f1f1"
                                                                    stroke-dasharray="3"
                                                                    stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine6450" x1="0"
                                                                    y1="147.3571192863464"
                                                                    x2="484.2593755722046"
                                                                    y2="147.3571192863464"
                                                                    stroke="#f1f1f1"
                                                                    stroke-dasharray="3"
                                                                    stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                                <line id="SvgjsLine6451" x1="0"
                                                                    y1="196.47615904846188"
                                                                    x2="484.2593755722046"
                                                                    y2="196.47615904846188"
                                                                    stroke="#f1f1f1"
                                                                    stroke-dasharray="3"
                                                                    stroke-linecap="butt"
                                                                    class="apexcharts-gridline"></line>
                                                            </g>
                                                            <g id="SvgjsG6445"
                                                                class="apexcharts-gridlines-vertical"></g>
                                                            <line id="SvgjsLine6454" x1="0"
                                                                y1="245.59519881057736"
                                                                x2="484.2593755722046"
                                                                y2="245.59519881057736"
                                                                stroke="transparent"
                                                                stroke-dasharray="0"
                                                                stroke-linecap="butt"></line>
                                                            <line id="SvgjsLine6453" x1="0"
                                                                y1="1" x2="0"
                                                                y2="245.59519881057736"
                                                                stroke="transparent"
                                                                stroke-dasharray="0"
                                                                stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG6446"
                                                            class="apexcharts-grid-borders">
                                                            <line id="SvgjsLine6447" x1="0"
                                                                y1="0" x2="484.2593755722046"
                                                                y2="0" stroke="#f1f1f1"
                                                                stroke-dasharray="3"
                                                                stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine6452" x1="0"
                                                                y1="245.59519881057736"
                                                                x2="484.2593755722046"
                                                                y2="245.59519881057736" stroke="#f1f1f1"
                                                                stroke-dasharray="3"
                                                                stroke-linecap="butt"
                                                                class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine6495" x1="0"
                                                                y1="246.59519881057736"
                                                                x2="484.2593755722046"
                                                                y2="246.59519881057736" stroke="#e0e0e0"
                                                                stroke-dasharray="0" stroke-width="1"
                                                                stroke-linecap="butt"></line>
                                                        </g>
                                                        <g id="SvgjsG6392"
                                                            class="apexcharts-area-series apexcharts-plot-series">
                                                            <g id="SvgjsG6393" class="apexcharts-series"
                                                                seriesName="Sales"
                                                                data:longestSeries="true" rel="1"
                                                                data:realIndex="2">
                                                                <path id="SvgjsPath6396"
                                                                    d="M 0 245.59519881057736 L 0 196.47615904846188C 15.4082528591156 196.47615904846188 28.615326738357545 115.42974344097138 44.023579597473145 115.42974344097138C 59.431832456588744 115.42974344097138 72.63890633583068 218.57972694141384 88.04715919494629 218.57972694141384C 103.4554120540619 218.57972694141384 116.66248593330383 213.6678229652023 132.07073879241943 213.6678229652023C 147.47899165153504 213.6678229652023 160.68606553077697 127.70950338150024 176.09431838989258 127.70950338150024C 191.50257124900816 127.70950338150024 204.70964512825012 117.88569542907715 220.1178979873657 117.88569542907715C 235.5261508464813 117.88569542907715 248.73322472572326 54.03094373832704 264.14147758483887 54.03094373832704C 279.54973044395445 54.03094373832704 292.75680432319643 138.76128732797622 308.165057182312 138.76128732797622C 323.5733100414276 138.76128732797622 336.7803839206696 128.93747937555312 352.18863677978516 128.93747937555312C 367.59688963890073 128.93747937555312 380.8039635181427 64.34594208837129 396.2122163772583 64.34594208837129C 411.6204692363739 64.34594208837129 424.8275431156158 134.09497855057526 440.2357959747314 134.09497855057526C 455.64404883384697 134.09497855057526 468.85112271308896 127.70950338150024 484.25937557220453 127.70950338150024C 484.25937557220453 127.70950338150024 484.25937557220453 127.70950338150024 484.25937557220453 245.59519881057736M 484.25937557220453 127.70950338150024z"
                                                                    fill="rgba(119, 119, 142, 0.05)"
                                                                    fill-opacity="1" stroke-opacity="1"
                                                                    stroke-linecap="butt"
                                                                    stroke-width="0"
                                                                    stroke-dasharray="0"
                                                                    class="apexcharts-area"
                                                                    index="2"
                                                                    clip-path="url(#gridRectMasktoanhfav)"
                                                                    filter="url(#SvgjsFilter6397)"
                                                                    pathTo="M 0 245.59519881057736 L 0 196.47615904846188C 15.4082528591156 196.47615904846188 28.615326738357545 115.42974344097138 44.023579597473145 115.42974344097138C 59.431832456588744 115.42974344097138 72.63890633583068 218.57972694141384 88.04715919494629 218.57972694141384C 103.4554120540619 218.57972694141384 116.66248593330383 213.6678229652023 132.07073879241943 213.6678229652023C 147.47899165153504 213.6678229652023 160.68606553077697 127.70950338150024 176.09431838989258 127.70950338150024C 191.50257124900816 127.70950338150024 204.70964512825012 117.88569542907715 220.1178979873657 117.88569542907715C 235.5261508464813 117.88569542907715 248.73322472572326 54.03094373832704 264.14147758483887 54.03094373832704C 279.54973044395445 54.03094373832704 292.75680432319643 138.76128732797622 308.165057182312 138.76128732797622C 323.5733100414276 138.76128732797622 336.7803839206696 128.93747937555312 352.18863677978516 128.93747937555312C 367.59688963890073 128.93747937555312 380.8039635181427 64.34594208837129 396.2122163772583 64.34594208837129C 411.6204692363739 64.34594208837129 424.8275431156158 134.09497855057526 440.2357959747314 134.09497855057526C 455.64404883384697 134.09497855057526 468.85112271308896 127.70950338150024 484.25937557220453 127.70950338150024C 484.25937557220453 127.70950338150024 484.25937557220453 127.70950338150024 484.25937557220453 245.59519881057736M 484.25937557220453 127.70950338150024z"
                                                                    pathFrom="M 0 245.59519881057736 L 0 196.47615904846188C 15.4082528591156 196.47615904846188 28.615326738357545 115.42974344097138 44.023579597473145 115.42974344097138C 59.431832456588744 115.42974344097138 72.63890633583068 218.57972694141384 88.04715919494629 218.57972694141384C 103.4554120540619 218.57972694141384 116.66248593330383 213.6678229652023 132.07073879241943 213.6678229652023C 147.47899165153504 213.6678229652023 160.68606553077697 127.70950338150024 176.09431838989258 127.70950338150024C 191.50257124900816 127.70950338150024 204.70964512825012 117.88569542907715 220.1178979873657 117.88569542907715C 235.5261508464813 117.88569542907715 248.73322472572326 54.03094373832704 264.14147758483887 54.03094373832704C 279.54973044395445 54.03094373832704 292.75680432319643 138.76128732797622 308.165057182312 138.76128732797622C 323.5733100414276 138.76128732797622 336.7803839206696 128.93747937555312 352.18863677978516 128.93747937555312C 367.59688963890073 128.93747937555312 380.8039635181427 64.34594208837129 396.2122163772583 64.34594208837129C 411.6204692363739 64.34594208837129 424.8275431156158 134.09497855057526 440.2357959747314 134.09497855057526C 455.64404883384697 134.09497855057526 468.85112271308896 127.70950338150024 484.25937557220453 127.70950338150024C 484.25937557220453 127.70950338150024 484.25937557220453 127.70950338150024 484.25937557220453 245.59519881057736M 484.25937557220453 127.70950338150024z">
                                                                </path>
                                                                <path id="SvgjsPath6406"
                                                                    d="M 0 196.47615904846188C 15.4082528591156 196.47615904846188 28.615326738357545 115.42974344097138 44.023579597473145 115.42974344097138C 59.431832456588744 115.42974344097138 72.63890633583068 218.57972694141384 88.04715919494629 218.57972694141384C 103.4554120540619 218.57972694141384 116.66248593330383 213.6678229652023 132.07073879241943 213.6678229652023C 147.47899165153504 213.6678229652023 160.68606553077697 127.70950338150024 176.09431838989258 127.70950338150024C 191.50257124900816 127.70950338150024 204.70964512825012 117.88569542907715 220.1178979873657 117.88569542907715C 235.5261508464813 117.88569542907715 248.73322472572326 54.03094373832704 264.14147758483887 54.03094373832704C 279.54973044395445 54.03094373832704 292.75680432319643 138.76128732797622 308.165057182312 138.76128732797622C 323.5733100414276 138.76128732797622 336.7803839206696 128.93747937555312 352.18863677978516 128.93747937555312C 367.59688963890073 128.93747937555312 380.8039635181427 64.34594208837129 396.2122163772583 64.34594208837129C 411.6204692363739 64.34594208837129 424.8275431156158 134.09497855057526 440.2357959747314 134.09497855057526C 455.64404883384697 134.09497855057526 468.85112271308896 127.70950338150024 484.25937557220453 127.70950338150024"
                                                                    fill="none" fill-opacity="1"
                                                                    stroke-opacity="1"
                                                                    stroke-linecap="butt"
                                                                    stroke-width="0"
                                                                    stroke-dasharray="0"
                                                                    class="apexcharts-area"
                                                                    index="2"
                                                                    clip-path="url(#gridRectMasktoanhfav)"
                                                                    filter="url(#SvgjsFilter6407)"
                                                                    pathTo="M 0 196.47615904846188C 15.4082528591156 196.47615904846188 28.615326738357545 115.42974344097138 44.023579597473145 115.42974344097138C 59.431832456588744 115.42974344097138 72.63890633583068 218.57972694141384 88.04715919494629 218.57972694141384C 103.4554120540619 218.57972694141384 116.66248593330383 213.6678229652023 132.07073879241943 213.6678229652023C 147.47899165153504 213.6678229652023 160.68606553077697 127.70950338150024 176.09431838989258 127.70950338150024C 191.50257124900816 127.70950338150024 204.70964512825012 117.88569542907715 220.1178979873657 117.88569542907715C 235.5261508464813 117.88569542907715 248.73322472572326 54.03094373832704 264.14147758483887 54.03094373832704C 279.54973044395445 54.03094373832704 292.75680432319643 138.76128732797622 308.165057182312 138.76128732797622C 323.5733100414276 138.76128732797622 336.7803839206696 128.93747937555312 352.18863677978516 128.93747937555312C 367.59688963890073 128.93747937555312 380.8039635181427 64.34594208837129 396.2122163772583 64.34594208837129C 411.6204692363739 64.34594208837129 424.8275431156158 134.09497855057526 440.2357959747314 134.09497855057526C 455.64404883384697 134.09497855057526 468.85112271308896 127.70950338150024 484.25937557220453 127.70950338150024"
                                                                    pathFrom="M 0 196.47615904846188C 15.4082528591156 196.47615904846188 28.615326738357545 115.42974344097138 44.023579597473145 115.42974344097138C 59.431832456588744 115.42974344097138 72.63890633583068 218.57972694141384 88.04715919494629 218.57972694141384C 103.4554120540619 218.57972694141384 116.66248593330383 213.6678229652023 132.07073879241943 213.6678229652023C 147.47899165153504 213.6678229652023 160.68606553077697 127.70950338150024 176.09431838989258 127.70950338150024C 191.50257124900816 127.70950338150024 204.70964512825012 117.88569542907715 220.1178979873657 117.88569542907715C 235.5261508464813 117.88569542907715 248.73322472572326 54.03094373832704 264.14147758483887 54.03094373832704C 279.54973044395445 54.03094373832704 292.75680432319643 138.76128732797622 308.165057182312 138.76128732797622C 323.5733100414276 138.76128732797622 336.7803839206696 128.93747937555312 352.18863677978516 128.93747937555312C 367.59688963890073 128.93747937555312 380.8039635181427 64.34594208837129 396.2122163772583 64.34594208837129C 411.6204692363739 64.34594208837129 424.8275431156158 134.09497855057526 440.2357959747314 134.09497855057526C 455.64404883384697 134.09497855057526 468.85112271308896 127.70950338150024 484.25937557220453 127.70950338150024"
                                                                    fill-rule="evenodd"></path>
                                                                <g id="SvgjsG6394"
                                                                    class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                    data:realIndex="2">
                                                                    <g class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle6519" r="0"
                                                                            cx="88.04715919494629"
                                                                            cy="218.57972694141384"
                                                                            class="apexcharts-marker w01e5ddi9"
                                                                            stroke="#ffffff"
                                                                            fill="rgba(119, 119, 142, 0.05)"
                                                                            fill-opacity="1"
                                                                            stroke-width="2"
                                                                            stroke-opacity="0.9"
                                                                            default-marker-size="0">
                                                                        </circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG6416"
                                                            class="apexcharts-line-series apexcharts-plot-series">
                                                            <g id="SvgjsG6417" class="apexcharts-series"
                                                                seriesName="Profit"
                                                                data:longestSeries="true" rel="1"
                                                                data:realIndex="0">
                                                                <path id="SvgjsPath6420"
                                                                    d="M 0 221.03567892951963C 15.4082528591156 221.03567892951963 28.615326738357545 194.0202070603561 44.023579597473145 194.0202070603561C 59.431832456588744 194.0202070603561 72.63890633583068 201.38806302467344 88.04715919494629 201.38806302467344C 103.4554120540619 201.38806302467344 116.66248593330383 134.09497855057526 132.07073879241943 134.09497855057526C 147.47899165153504 134.09497855057526 160.68606553077697 189.10830308414458 176.09431838989258 189.10830308414458C 191.50257124900816 189.10830308414458 204.70964512825012 167.0047351911926 220.1178979873657 167.0047351911926C 235.5261508464813 167.0047351911926 248.73322472572326 84.48474839083863 264.14147758483887 84.48474839083863C 279.54973044395445 84.48474839083863 292.75680432319643 41.75118379779818 308.165057182312 41.75118379779818C 323.5733100414276 41.75118379779818 336.7803839206696 159.6368792268753 352.18863677978516 159.6368792268753C 367.59688963890073 159.6368792268753 380.8039635181427 159.6368792268753 396.2122163772583 159.6368792268753C 411.6204692363739 159.6368792268753 424.8275431156158 194.0202070603561 440.2357959747314 194.0202070603561C 455.64404883384697 194.0202070603561 468.85112271308896 144.90116729824064 484.25937557220453 144.90116729824064"
                                                                    fill="none" fill-opacity="1"
                                                                    stroke="rgba(132, 90, 223, 1)"
                                                                    stroke-opacity="1"
                                                                    stroke-linecap="butt"
                                                                    stroke-width="2"
                                                                    stroke-dasharray="0"
                                                                    class="apexcharts-line"
                                                                    index="0"
                                                                    clip-path="url(#gridRectMasktoanhfav)"
                                                                    filter="url(#SvgjsFilter6421)"
                                                                    pathTo="M 0 221.03567892951963C 15.4082528591156 221.03567892951963 28.615326738357545 194.0202070603561 44.023579597473145 194.0202070603561C 59.431832456588744 194.0202070603561 72.63890633583068 201.38806302467344 88.04715919494629 201.38806302467344C 103.4554120540619 201.38806302467344 116.66248593330383 134.09497855057526 132.07073879241943 134.09497855057526C 147.47899165153504 134.09497855057526 160.68606553077697 189.10830308414458 176.09431838989258 189.10830308414458C 191.50257124900816 189.10830308414458 204.70964512825012 167.0047351911926 220.1178979873657 167.0047351911926C 235.5261508464813 167.0047351911926 248.73322472572326 84.48474839083863 264.14147758483887 84.48474839083863C 279.54973044395445 84.48474839083863 292.75680432319643 41.75118379779818 308.165057182312 41.75118379779818C 323.5733100414276 41.75118379779818 336.7803839206696 159.6368792268753 352.18863677978516 159.6368792268753C 367.59688963890073 159.6368792268753 380.8039635181427 159.6368792268753 396.2122163772583 159.6368792268753C 411.6204692363739 159.6368792268753 424.8275431156158 194.0202070603561 440.2357959747314 194.0202070603561C 455.64404883384697 194.0202070603561 468.85112271308896 144.90116729824064 484.25937557220453 144.90116729824064"
                                                                    pathFrom="M 0 221.03567892951963C 15.4082528591156 221.03567892951963 28.615326738357545 194.0202070603561 44.023579597473145 194.0202070603561C 59.431832456588744 194.0202070603561 72.63890633583068 201.38806302467344 88.04715919494629 201.38806302467344C 103.4554120540619 201.38806302467344 116.66248593330383 134.09497855057526 132.07073879241943 134.09497855057526C 147.47899165153504 134.09497855057526 160.68606553077697 189.10830308414458 176.09431838989258 189.10830308414458C 191.50257124900816 189.10830308414458 204.70964512825012 167.0047351911926 220.1178979873657 167.0047351911926C 235.5261508464813 167.0047351911926 248.73322472572326 84.48474839083863 264.14147758483887 84.48474839083863C 279.54973044395445 84.48474839083863 292.75680432319643 41.75118379779818 308.165057182312 41.75118379779818C 323.5733100414276 41.75118379779818 336.7803839206696 159.6368792268753 352.18863677978516 159.6368792268753C 367.59688963890073 159.6368792268753 380.8039635181427 159.6368792268753 396.2122163772583 159.6368792268753C 411.6204692363739 159.6368792268753 424.8275431156158 194.0202070603561 440.2357959747314 194.0202070603561C 455.64404883384697 194.0202070603561 468.85112271308896 144.90116729824064 484.25937557220453 144.90116729824064"
                                                                    fill-rule="evenodd"></path>
                                                                <g id="SvgjsG6418"
                                                                    class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                    data:realIndex="0">
                                                                    <g class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle6520" r="0"
                                                                            cx="88.04715919494629"
                                                                            cy="201.38806302467344"
                                                                            class="apexcharts-marker waumina3n"
                                                                            stroke="#ffffff"
                                                                            fill="rgba(132, 90, 223, 1)"
                                                                            fill-opacity="1"
                                                                            stroke-width="2"
                                                                            stroke-opacity="0.9"
                                                                            default-marker-size="0">
                                                                        </circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG6430" class="apexcharts-series"
                                                                seriesName="Revenue"
                                                                data:longestSeries="true" rel="2"
                                                                data:realIndex="1">
                                                                <path id="SvgjsPath6433"
                                                                    d="M 0 201.38806302467344C 15.4082528591156 201.38806302467344 28.615326738357545 93.32617554801942 44.023579597473145 93.32617554801942C 59.431832456588744 93.32617554801942 72.63890633583068 128.69188417674255 88.04715919494629 128.69188417674255C 103.4554120540619 128.69188417674255 116.66248593330383 191.56425507225035 132.07073879241943 191.56425507225035C 147.47899165153504 191.56425507225035 160.68606553077697 117.88569542907715 176.09431838989258 117.88569542907715C 191.50257124900816 117.88569542907715 204.70964512825012 54.03094373832704 220.1178979873657 54.03094373832704C 235.5261508464813 54.03094373832704 248.73322472572326 138.76128732797622 264.14147758483887 138.76128732797622C 279.54973044395445 138.76128732797622 292.75680432319643 119.11367142313003 308.165057182312 119.11367142313003C 323.5733100414276 119.11367142313003 336.7803839206696 64.34594208837129 352.18863677978516 64.34594208837129C 367.59688963890073 64.34594208837129 380.8039635181427 134.09497855057526 396.2122163772583 134.09497855057526C 411.6204692363739 134.09497855057526 424.8275431156158 116.65771943502426 440.2357959747314 116.65771943502426C 455.64404883384697 116.65771943502426 468.85112271308896 189.10830308414458 484.25937557220453 189.10830308414458"
                                                                    fill="none" fill-opacity="1"
                                                                    stroke="rgba(35, 183, 229, 0.85)"
                                                                    stroke-opacity="1"
                                                                    stroke-linecap="butt"
                                                                    stroke-width="2"
                                                                    stroke-dasharray="5"
                                                                    class="apexcharts-line"
                                                                    index="1"
                                                                    clip-path="url(#gridRectMasktoanhfav)"
                                                                    filter="url(#SvgjsFilter6434)"
                                                                    pathTo="M 0 201.38806302467344C 15.4082528591156 201.38806302467344 28.615326738357545 93.32617554801942 44.023579597473145 93.32617554801942C 59.431832456588744 93.32617554801942 72.63890633583068 128.69188417674255 88.04715919494629 128.69188417674255C 103.4554120540619 128.69188417674255 116.66248593330383 191.56425507225035 132.07073879241943 191.56425507225035C 147.47899165153504 191.56425507225035 160.68606553077697 117.88569542907715 176.09431838989258 117.88569542907715C 191.50257124900816 117.88569542907715 204.70964512825012 54.03094373832704 220.1178979873657 54.03094373832704C 235.5261508464813 54.03094373832704 248.73322472572326 138.76128732797622 264.14147758483887 138.76128732797622C 279.54973044395445 138.76128732797622 292.75680432319643 119.11367142313003 308.165057182312 119.11367142313003C 323.5733100414276 119.11367142313003 336.7803839206696 64.34594208837129 352.18863677978516 64.34594208837129C 367.59688963890073 64.34594208837129 380.8039635181427 134.09497855057526 396.2122163772583 134.09497855057526C 411.6204692363739 134.09497855057526 424.8275431156158 116.65771943502426 440.2357959747314 116.65771943502426C 455.64404883384697 116.65771943502426 468.85112271308896 189.10830308414458 484.25937557220453 189.10830308414458"
                                                                    pathFrom="M 0 201.38806302467344C 15.4082528591156 201.38806302467344 28.615326738357545 93.32617554801942 44.023579597473145 93.32617554801942C 59.431832456588744 93.32617554801942 72.63890633583068 128.69188417674255 88.04715919494629 128.69188417674255C 103.4554120540619 128.69188417674255 116.66248593330383 191.56425507225035 132.07073879241943 191.56425507225035C 147.47899165153504 191.56425507225035 160.68606553077697 117.88569542907715 176.09431838989258 117.88569542907715C 191.50257124900816 117.88569542907715 204.70964512825012 54.03094373832704 220.1178979873657 54.03094373832704C 235.5261508464813 54.03094373832704 248.73322472572326 138.76128732797622 264.14147758483887 138.76128732797622C 279.54973044395445 138.76128732797622 292.75680432319643 119.11367142313003 308.165057182312 119.11367142313003C 323.5733100414276 119.11367142313003 336.7803839206696 64.34594208837129 352.18863677978516 64.34594208837129C 367.59688963890073 64.34594208837129 380.8039635181427 134.09497855057526 396.2122163772583 134.09497855057526C 411.6204692363739 134.09497855057526 424.8275431156158 116.65771943502426 440.2357959747314 116.65771943502426C 455.64404883384697 116.65771943502426 468.85112271308896 189.10830308414458 484.25937557220453 189.10830308414458"
                                                                    fill-rule="evenodd"></path>
                                                                <g id="SvgjsG6431"
                                                                    class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                    data:realIndex="1">
                                                                    <g class="apexcharts-series-markers">
                                                                        <circle id="SvgjsCircle6521" r="0"
                                                                            cx="88.04715919494629"
                                                                            cy="128.69188417674255"
                                                                            class="apexcharts-marker wgqlcyz2s"
                                                                            stroke="#ffffff"
                                                                            fill="rgba(35, 183, 229, 0.85)"
                                                                            fill-opacity="1"
                                                                            stroke-width="2"
                                                                            stroke-opacity="0.9"
                                                                            default-marker-size="0">
                                                                        </circle>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG6395"
                                                                class="apexcharts-datalabels"
                                                                data:realIndex="2"></g>
                                                            <g id="SvgjsG6419"
                                                                class="apexcharts-datalabels"
                                                                data:realIndex="0"></g>
                                                            <g id="SvgjsG6432"
                                                                class="apexcharts-datalabels"
                                                                data:realIndex="1"></g>
                                                        </g>
                                                        <line id="SvgjsLine6455" x1="0"
                                                            y1="0" x2="484.2593755722046"
                                                            y2="0" stroke="#b6b6b6"
                                                            stroke-dasharray="0" stroke-width="1"
                                                            stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs"></line>
                                                        <line id="SvgjsLine6456" x1="0"
                                                            y1="0" x2="484.2593755722046"
                                                            y2="0" stroke-dasharray="0"
                                                            stroke-width="0" stroke-linecap="butt"
                                                            class="apexcharts-ycrosshairs-hidden"></line>
                                                        <g id="SvgjsG6457" class="apexcharts-xaxis"
                                                            transform="translate(0, 0)">
                                                            <g id="SvgjsG6458"
                                                                class="apexcharts-xaxis-texts-g"
                                                                transform="translate(0, -4)">
                                                                <text id="SvgjsText6460"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="0" y="274.59519881057736"
                                                                    text-anchor="middle"
                                                                    dominant-baseline="auto"
                                                                    font-size="12px" font-weight="400"
                                                                    fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan6461">Jan</tspan>
                                                                    <title>Jan</title>
                                                                </text>
                                                                <text id="SvgjsText6463"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="44.023579597473145"
                                                                    y="274.59519881057736"
                                                                    text-anchor="middle"
                                                                    dominant-baseline="auto"
                                                                    font-size="12px" font-weight="400"
                                                                    fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan6464">Feb</tspan>
                                                                    <title>Feb</title>
                                                                </text>
                                                                <text id="SvgjsText6466"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="88.04715919494629"
                                                                    y="274.59519881057736"
                                                                    text-anchor="middle"
                                                                    dominant-baseline="auto"
                                                                    font-size="12px" font-weight="400"
                                                                    fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan6467">Mar</tspan>
                                                                    <title>Mar</title>
                                                                </text>
                                                                <text id="SvgjsText6469"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="132.07073879241943"
                                                                    y="274.59519881057736"
                                                                    text-anchor="middle"
                                                                    dominant-baseline="auto"
                                                                    font-size="12px" font-weight="400"
                                                                    fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan6470">Apr</tspan>
                                                                    <title>Apr</title>
                                                                </text>
                                                                <text id="SvgjsText6472"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="176.09431838989258"
                                                                    y="274.59519881057736"
                                                                    text-anchor="middle"
                                                                    dominant-baseline="auto"
                                                                    font-size="12px" font-weight="400"
                                                                    fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan6473">May</tspan>
                                                                    <title>May</title>
                                                                </text>
                                                                <text id="SvgjsText6475"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="220.11789798736572"
                                                                    y="274.59519881057736"
                                                                    text-anchor="middle"
                                                                    dominant-baseline="auto"
                                                                    font-size="12px" font-weight="400"
                                                                    fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan6476">Jun</tspan>
                                                                    <title>Jun</title>
                                                                </text>
                                                                <text id="SvgjsText6478"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="264.14147758483887"
                                                                    y="274.59519881057736"
                                                                    text-anchor="middle"
                                                                    dominant-baseline="auto"
                                                                    font-size="12px" font-weight="400"
                                                                    fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan6479">Jul</tspan>
                                                                    <title>Jul</title>
                                                                </text>
                                                                <text id="SvgjsText6481"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="308.165057182312"
                                                                    y="274.59519881057736"
                                                                    text-anchor="middle"
                                                                    dominant-baseline="auto"
                                                                    font-size="12px" font-weight="400"
                                                                    fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan6482">Aug</tspan>
                                                                    <title>Aug</title>
                                                                </text>
                                                                <text id="SvgjsText6484"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="352.18863677978516"
                                                                    y="274.59519881057736"
                                                                    text-anchor="middle"
                                                                    dominant-baseline="auto"
                                                                    font-size="12px" font-weight="400"
                                                                    fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan6485">Sep</tspan>
                                                                    <title>Sep</title>
                                                                </text>
                                                                <text id="SvgjsText6487"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="396.2122163772583"
                                                                    y="274.59519881057736"
                                                                    text-anchor="middle"
                                                                    dominant-baseline="auto"
                                                                    font-size="12px" font-weight="400"
                                                                    fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan6488">Oct</tspan>
                                                                    <title>Oct</title>
                                                                </text>
                                                                <text id="SvgjsText6490"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="440.23579597473145"
                                                                    y="274.59519881057736"
                                                                    text-anchor="middle"
                                                                    dominant-baseline="auto"
                                                                    font-size="12px" font-weight="400"
                                                                    fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan6491">Nov</tspan>
                                                                    <title>Nov</title>
                                                                </text>
                                                                <text id="SvgjsText6493"
                                                                    font-family="Helvetica, Arial, sans-serif"
                                                                    x="484.2593755722046"
                                                                    y="274.59519881057736"
                                                                    text-anchor="middle"
                                                                    dominant-baseline="auto"
                                                                    font-size="12px" font-weight="400"
                                                                    fill="#373d3f"
                                                                    class="apexcharts-text apexcharts-xaxis-label "
                                                                    style="font-family: Helvetica, Arial, sans-serif;">
                                                                    <tspan id="SvgjsTspan6494">Dec</tspan>
                                                                    <title>Dec</title>
                                                                </text>
                                                            </g>
                                                        </g>
                                                        <g id="SvgjsG6516"
                                                            class="apexcharts-yaxis-annotations"></g>
                                                        <g id="SvgjsG6517"
                                                            class="apexcharts-xaxis-annotations"></g>
                                                        <g id="SvgjsG6518"
                                                            class="apexcharts-point-annotations"></g>
                                                        <rect id="SvgjsRect6522" width="0"
                                                            height="0" x="0" y="0" rx="0"
                                                            ry="0" opacity="1"
                                                            stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fefefe"
                                                            class="apexcharts-zoom-rect"></rect>
                                                        <rect id="SvgjsRect6523" width="0"
                                                            height="0" x="0" y="0" rx="0"
                                                            ry="0" opacity="1"
                                                            stroke-width="0" stroke="none"
                                                            stroke-dasharray="0" fill="#fefefe"
                                                            class="apexcharts-selection-rect"></rect>
                                                    </g>
                                                </svg>
                                                <div class="apexcharts-tooltip apexcharts-theme-light"
                                                    style="left: 155.918px; top: 159.595px;">
                                                    <div class="apexcharts-tooltip-title"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        Mar</div>
                                                    <div class="apexcharts-tooltip-series-group apexcharts-active"
                                                        style="order: 1; display: flex;">
                                                        <span class="apexcharts-tooltip-marker"
                                                            style="background-color: rgb(132, 90, 223);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-y-label">Profit</span><span
                                                                    class="apexcharts-tooltip-text-y-value">₹180</span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-goals-group">
                                                                <span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group apexcharts-active"
                                                        style="order: 2; display: flex;">
                                                        <span class="apexcharts-tooltip-marker"
                                                            style="background-color: rgba(35, 183, 229, 0.85);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-y-label">Revenue</span><span
                                                                    class="apexcharts-tooltip-text-y-value">₹476</span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-goals-group">
                                                                <span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="apexcharts-tooltip-series-group apexcharts-active"
                                                        style="order: 3; display: flex;">
                                                        <span class="apexcharts-tooltip-marker"
                                                            style="background-color: rgba(119, 119, 142, 0.05);"></span>
                                                        <div class="apexcharts-tooltip-text"
                                                            style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                            <div class="apexcharts-tooltip-y-group"><span
                                                                    class="apexcharts-tooltip-text-y-label">Sales</span><span
                                                                    class="apexcharts-tooltip-text-y-value">110</span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-goals-group">
                                                                <span
                                                                    class="apexcharts-tooltip-text-goals-label"></span><span
                                                                    class="apexcharts-tooltip-text-goals-value"></span>
                                                            </div>
                                                            <div class="apexcharts-tooltip-z-group"><span
                                                                    class="apexcharts-tooltip-text-z-label"></span><span
                                                                    class="apexcharts-tooltip-text-z-value"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"
                                                    style="left: 124.28px; top: 296.995px;">
                                                    <div class="apexcharts-xaxistooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px; min-width: 20.0808px;">
                                                        Mar</div>
                                                </div>
                                                <div
                                                    class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                    <div class="apexcharts-yaxistooltip-text"></div>
                                                </div>
                                                <div class="apexcharts-toolbar"
                                                    style="top: 0px; right: 3px;">
                                                    <div class="apexcharts-zoomin-icon" title="Zoom In">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24"
                                                            viewBox="0 0 24 24">
                                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                                            <path
                                                                d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <div class="apexcharts-zoomout-icon"
                                                        title="Zoom Out">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24"
                                                            viewBox="0 0 24 24">
                                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                                            <path
                                                                d="M7 11v2h10v-2H7zm5-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <div class="apexcharts-zoom-icon apexcharts-selected"
                                                        title="Selection Zoom">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            fill="#000000" height="24"
                                                            viewBox="0 0 24 24" width="24">
                                                            <path
                                                                d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                                            </path>
                                                            <path d="M0 0h24v24H0V0z" fill="none">
                                                            </path>
                                                            <path d="M12 10h-2v2H9v-2H7V9h2V7h1v2h2v1z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <div class="apexcharts-pan-icon" title="Panning">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                            fill="#000000" height="24"
                                                            viewBox="0 0 24 24" width="24">
                                                            <defs>
                                                                <path d="M0 0h24v24H0z" id="a">
                                                                </path>
                                                            </defs>
                                                            <clipPath id="b">
                                                                <use overflow="visible" xlink:href="#a">
                                                                </use>
                                                            </clipPath>
                                                            <path clip-path="url(#b)"
                                                                d="M23 5.5V20c0 2.2-1.8 4-4 4h-7.3c-1.08 0-2.1-.43-2.85-1.19L1 14.83s1.26-1.23 1.3-1.25c.22-.19.49-.29.79-.29.22 0 .42.06.6.16.04.01 4.31 2.46 4.31 2.46V4c0-.83.67-1.5 1.5-1.5S11 3.17 11 4v7h1V1.5c0-.83.67-1.5 1.5-1.5S15 .67 15 1.5V11h1V2.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5V11h1V5.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <div class="apexcharts-reset-icon"
                                                        title="Reset Zoom">
                                                        <svg fill="#000000" height="24"
                                                            viewBox="0 0 24 24" width="24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z">
                                                            </path>
                                                            <path d="M0 0h24v24H0z" fill="none"></path>
                                                        </svg>
                                                    </div>
                                                    <div class="apexcharts-menu-icon" title="Menu">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24"
                                                            viewBox="0 0 24 24">
                                                            <path fill="none" d="M0 0h24v24H0V0z">
                                                            </path>
                                                            <path
                                                                d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <div class="apexcharts-menu">
                                                        <div class="apexcharts-menu-item exportSVG"
                                                            title="Download SVG">Download SVG</div>
                                                        <div class="apexcharts-menu-item exportPNG"
                                                            title="Download PNG">Download PNG</div>
                                                        <div class="apexcharts-menu-item exportCSV"
                                                            title="Download CSV">Download CSV</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xxl-3 col-xl-12">
            <div class="row">
                <div class="col-xxl-12 col-xl-12">
                    <div class="row">
                        <div class="col-xl-12 col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title"> Leads By Service </div>
                                    <div class="dropdown">
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="btn btn-icon btn-sm btn-light"
                                            data-bs-toggle="dropdown"> <i
                                                class="fe fe-more-vertical"></i> </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="javascript:void(0);">Week</a></li>
                                            <li><a class="dropdown-item"
                                                    href="javascript:void(0);">Month</a></li>
                                            <li><a class="dropdown-item"
                                                    href="javascript:void(0);">Year</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body p-0 overflow-hidden">
                                    <div
                                        class="leads-source-chart d-flex align-items-center justify-content-center">
                                        <canvas id="leads-source" class="chartjs-chart w-100 p-4"
                                            width="362" height="362"
                                            style="display: block; box-sizing: border-box; height: 289.6px; width: 289.6px;"></canvas>
                                        <div class="lead-source-value"> <span
                                                class="d-block fs-14">Total</span> <span
                                                class="d-block fs-25 fw-bold">4,145</span> </div>
                                    </div>
                                    <div class="row row-cols-12 border-top border-block-start-dashed">
                                        <div class="col p-0">
                                            <div
                                                class="ps-4 py-3 pe-3 text-center border-end border-inline-end-dashed">
                                                <span
                                                    class="text-muted fs-12 mb-1 crm-lead-legend mobile d-inline-block">GST
                                                </span>
                                                <div><span class="fs-16 fw-semibold">1,624</span> </div>
                                            </div>
                                        </div>
                                        <div class="col p-0">
                                            <div
                                                class="p-3 text-center border-end border-inline-end-dashed">
                                                <span
                                                    class="text-muted fs-12 mb-1 crm-lead-legend desktop d-inline-block">FSSAI
                                                </span>
                                                <div><span class="fs-16 fw-semibold">1,267</span></div>
                                            </div>
                                        </div>
                                        <div class="col p-0">
                                            <div
                                                class="p-3 text-center border-end border-inline-end-dashed">
                                                <span
                                                    class="text-muted fs-12 mb-1 crm-lead-legend laptop d-inline-block">Company
                                                </span>
                                                <div><span class="fs-16 fw-semibold">1,153</span> </div>
                                            </div>
                                        </div>
                                        <div class="col p-0">
                                            <div class="p-3 text-center">
                                                <span
                                                    class="text-muted fs-12 mb-1 crm-lead-legend tablet d-inline-block">ITR
                                                </span>
                                                <div><span class="fs-16 fw-semibold">679</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-12 col-xl-6">
                            <div class="card custom-card">
                                <div class="card-header justify-content-between">
                                    <div class="card-title"> Leads Status </div>
                                    <div class="dropdown">
                                        <a href="javascript:void(0);" class="p-2 fs-12 text-muted"
                                            data-bs-toggle="dropdown" aria-expanded="false"> View All<i
                                                class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                        </a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a class="dropdown-item"
                                                    href="javascript:void(0);">Today</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">This
                                                    Week</a></li>
                                            <li><a class="dropdown-item" href="javascript:void(0);">Last
                                                    Week</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-3">
                                        <h4 class="fw-bold mb-0">4,289</h4>
                                        <div class="ms-2"> <span
                                                class="badge bg-success-transparent">1.02<i
                                                    class="ri-arrow-up-s-fill align-mmiddle ms-1"></i></span>
                                            <span class="text-muted ms-1">compared to last week</span>
                                        </div>
                                    </div>
                                    <div class="progress-stacked progress-animate progress-xs mb-4">
                                        <div class="progress-bar" role="progressbar"
                                            style="width: 21%" aria-valuenow="21" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                        <div class="progress-bar bg-info" role="progressbar"
                                            style="width: 26%" aria-valuenow="26" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                        <div class="progress-bar bg-warning" role="progressbar"
                                            style="width: 35%" aria-valuenow="35" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                        <div class="progress-bar bg-success" role="progressbar"
                                            style="width: 18%" aria-valuenow="18" aria-valuemin="0"
                                            aria-valuemax="100"></div>
                                    </div>
                                    <ul class="list-unstyled mb-0 pt-2 crm-deals-status">
                                        <li class="primary">
                                            <div
                                                class="d-flex align-items-center justify-content-between">
                                                <div>Successful Leads</div>
                                                <div class="fs-12 text-muted">987 Leads</div>
                                            </div>
                                        </li>
                                        <li class="info">
                                            <div
                                                class="d-flex align-items-center justify-content-between">
                                                <div>Pending Leads</div>
                                                <div class="fs-12 text-muted">1,073 Leads</div>
                                            </div>
                                        </li>
                                        <li class="warning">
                                            <div
                                                class="d-flex align-items-center justify-content-between">
                                                <div>Invalid Leads</div>
                                                <div class="fs-12 text-muted">1,674 Leads</div>
                                            </div>
                                        </li>
                                        <li class="success">
                                            <div
                                                class="d-flex align-items-center justify-content-between">
                                                <div>Upcoming Leads</div>
                                                <div class="fs-12 text-muted">921 Leads</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End::row-1 -->
</div>
@endsection