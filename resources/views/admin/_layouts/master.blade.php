<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light"
    data-menu-styles="dark" data-toggled="close">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TaxBizLegal CRM</title>
    <meta name="Description" content="Bootstrap Blazor Server Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="iamawesome! again">
    <meta name="keywords" content="who,cares">
    <meta name="robots" content="noindex, nofollow">
    <!-- Favicon -->
    <link rel="icon" href="https://spruko.com/demo/ynex/blazor/dist/assets/images/brand-logos/favicon.ico"
        type="image/x-icon">

    @vite(['resources/js/admin/admin.js'])

    <meta http-equiv="imagetoolbar" content="no">
    <style type="text/css">
        <!-- input,textarea{-webkit-touch-callout:default;-webkit-user-select:auto;-khtml-user-select:auto;-moz-user-select:text;-ms-user-select:text;user-select:text} *{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:-moz-none;-ms-user-select:none;user-select:none}
        -->
    </style>
    <style type="text/css" media="print">
        <!-- body{display:none}
        -->
    </style>
    <!--[if gte IE 5]>
    <frame>
    </frame><![endif]-->
    <style id="apexcharts-css">
        @keyframes opaque {
            0% {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        @keyframes resizeanim {

            0%,
            to {
                opacity: 0
            }
        }

        .apexcharts-canvas {
            position: relative;
            user-select: none
        }

        .apexcharts-canvas ::-webkit-scrollbar {
            -webkit-appearance: none;
            width: 6px
        }

        .apexcharts-canvas ::-webkit-scrollbar-thumb {
            border-radius: 4px;
            background-color: rgba(0, 0, 0, .5);
            box-shadow: 0 0 1px rgba(255, 255, 255, .5);
            -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5)
        }

        .apexcharts-inner {
            position: relative
        }

        .apexcharts-text tspan {
            font-family: inherit
        }

        .legend-mouseover-inactive {
            transition: .15s ease all;
            opacity: .2
        }

        .apexcharts-legend-text {
            padding-left: 15px;
            margin-left: -15px;
        }

        .apexcharts-series-collapsed {
            opacity: 0
        }

        .apexcharts-tooltip {
            border-radius: 5px;
            box-shadow: 2px 2px 6px -4px #999;
            cursor: default;
            font-size: 14px;
            left: 62px;
            opacity: 0;
            pointer-events: none;
            position: absolute;
            top: 20px;
            display: flex;
            flex-direction: column;
            overflow: hidden;
            white-space: nowrap;
            z-index: 12;
            transition: .15s ease all
        }

        .apexcharts-tooltip.apexcharts-active {
            opacity: 1;
            transition: .15s ease all
        }

        .apexcharts-tooltip.apexcharts-theme-light {
            border: 1px solid #e3e3e3;
            background: rgba(255, 255, 255, .96)
        }

        .apexcharts-tooltip.apexcharts-theme-dark {
            color: #fff;
            background: rgba(30, 30, 30, .8)
        }

        .apexcharts-tooltip * {
            font-family: inherit
        }

        .apexcharts-tooltip-title {
            padding: 6px;
            font-size: 15px;
            margin-bottom: 4px
        }

        .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
            background: #eceff1;
            border-bottom: 1px solid #ddd
        }

        .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
            background: rgba(0, 0, 0, .7);
            border-bottom: 1px solid #333
        }

        .apexcharts-tooltip-text-goals-value,
        .apexcharts-tooltip-text-y-value,
        .apexcharts-tooltip-text-z-value {
            display: inline-block;
            margin-left: 5px;
            font-weight: 600
        }

        .apexcharts-tooltip-text-goals-label:empty,
        .apexcharts-tooltip-text-goals-value:empty,
        .apexcharts-tooltip-text-y-label:empty,
        .apexcharts-tooltip-text-y-value:empty,
        .apexcharts-tooltip-text-z-value:empty,
        .apexcharts-tooltip-title:empty {
            display: none
        }

        .apexcharts-tooltip-text-goals-label,
        .apexcharts-tooltip-text-goals-value {
            padding: 6px 0 5px
        }

        .apexcharts-tooltip-goals-group,
        .apexcharts-tooltip-text-goals-label,
        .apexcharts-tooltip-text-goals-value {
            display: flex
        }

        .apexcharts-tooltip-text-goals-label:not(:empty),
        .apexcharts-tooltip-text-goals-value:not(:empty) {
            margin-top: -6px
        }

        .apexcharts-tooltip-marker {
            width: 12px;
            height: 12px;
            position: relative;
            top: 0;
            margin-right: 10px;
            border-radius: 50%
        }

        .apexcharts-tooltip-series-group {
            padding: 0 10px;
            display: none;
            text-align: left;
            justify-content: left;
            align-items: center
        }

        .apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
            opacity: 1
        }

        .apexcharts-tooltip-series-group.apexcharts-active,
        .apexcharts-tooltip-series-group:last-child {
            padding-bottom: 4px
        }

        .apexcharts-tooltip-series-group-hidden {
            opacity: 0;
            height: 0;
            line-height: 0;
            padding: 0 !important
        }

        .apexcharts-tooltip-y-group {
            padding: 6px 0 5px
        }

        .apexcharts-custom-tooltip,
        .apexcharts-tooltip-box {
            padding: 4px 8px
        }

        .apexcharts-tooltip-boxPlot {
            display: flex;
            flex-direction: column-reverse
        }

        .apexcharts-tooltip-box>div {
            margin: 4px 0
        }

        .apexcharts-tooltip-box span.value {
            font-weight: 700
        }

        .apexcharts-tooltip-rangebar {
            padding: 5px 8px
        }

        .apexcharts-tooltip-rangebar .category {
            font-weight: 600;
            color: #777
        }

        .apexcharts-tooltip-rangebar .series-name {
            font-weight: 700;
            display: block;
            margin-bottom: 5px
        }

        .apexcharts-xaxistooltip,
        .apexcharts-yaxistooltip {
            opacity: 0;
            pointer-events: none;
            color: #373d3f;
            font-size: 13px;
            text-align: center;
            border-radius: 2px;
            position: absolute;
            z-index: 10;
            background: #eceff1;
            border: 1px solid #90a4ae
        }

        .apexcharts-xaxistooltip {
            padding: 9px 10px;
            transition: .15s ease all
        }

        .apexcharts-xaxistooltip.apexcharts-theme-dark {
            background: rgba(0, 0, 0, .7);
            border: 1px solid rgba(0, 0, 0, .5);
            color: #fff
        }

        .apexcharts-xaxistooltip:after,
        .apexcharts-xaxistooltip:before {
            left: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none
        }

        .apexcharts-xaxistooltip:after {
            border-color: transparent;
            border-width: 6px;
            margin-left: -6px
        }

        .apexcharts-xaxistooltip:before {
            border-color: transparent;
            border-width: 7px;
            margin-left: -7px
        }

        .apexcharts-xaxistooltip-bottom:after,
        .apexcharts-xaxistooltip-bottom:before {
            bottom: 100%
        }

        .apexcharts-xaxistooltip-top:after,
        .apexcharts-xaxistooltip-top:before {
            top: 100%
        }

        .apexcharts-xaxistooltip-bottom:after {
            border-bottom-color: #eceff1
        }

        .apexcharts-xaxistooltip-bottom:before {
            border-bottom-color: #90a4ae
        }

        .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after,
        .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
            border-bottom-color: rgba(0, 0, 0, .5)
        }

        .apexcharts-xaxistooltip-top:after {
            border-top-color: #eceff1
        }

        .apexcharts-xaxistooltip-top:before {
            border-top-color: #90a4ae
        }

        .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after,
        .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
            border-top-color: rgba(0, 0, 0, .5)
        }

        .apexcharts-xaxistooltip.apexcharts-active {
            opacity: 1;
            transition: .15s ease all
        }

        .apexcharts-yaxistooltip {
            padding: 4px 10px
        }

        .apexcharts-yaxistooltip.apexcharts-theme-dark {
            background: rgba(0, 0, 0, .7);
            border: 1px solid rgba(0, 0, 0, .5);
            color: #fff
        }

        .apexcharts-yaxistooltip:after,
        .apexcharts-yaxistooltip:before {
            top: 50%;
            border: solid transparent;
            content: " ";
            height: 0;
            width: 0;
            position: absolute;
            pointer-events: none
        }

        .apexcharts-yaxistooltip:after {
            border-color: transparent;
            border-width: 6px;
            margin-top: -6px
        }

        .apexcharts-yaxistooltip:before {
            border-color: transparent;
            border-width: 7px;
            margin-top: -7px
        }

        .apexcharts-yaxistooltip-left:after,
        .apexcharts-yaxistooltip-left:before {
            left: 100%
        }

        .apexcharts-yaxistooltip-right:after,
        .apexcharts-yaxistooltip-right:before {
            right: 100%
        }

        .apexcharts-yaxistooltip-left:after {
            border-left-color: #eceff1
        }

        .apexcharts-yaxistooltip-left:before {
            border-left-color: #90a4ae
        }

        .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after,
        .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
            border-left-color: rgba(0, 0, 0, .5)
        }

        .apexcharts-yaxistooltip-right:after {
            border-right-color: #eceff1
        }

        .apexcharts-yaxistooltip-right:before {
            border-right-color: #90a4ae
        }

        .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after,
        .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
            border-right-color: rgba(0, 0, 0, .5)
        }

        .apexcharts-yaxistooltip.apexcharts-active {
            opacity: 1
        }

        .apexcharts-yaxistooltip-hidden {
            display: none
        }

        .apexcharts-xcrosshairs,
        .apexcharts-ycrosshairs {
            pointer-events: none;
            opacity: 0;
            transition: .15s ease all
        }

        .apexcharts-xcrosshairs.apexcharts-active,
        .apexcharts-ycrosshairs.apexcharts-active {
            opacity: 1;
            transition: .15s ease all
        }

        .apexcharts-ycrosshairs-hidden {
            opacity: 0
        }

        .apexcharts-selection-rect {
            cursor: move
        }

        .svg_select_boundingRect,
        .svg_select_points_rot {
            pointer-events: none;
            opacity: 0;
            visibility: hidden
        }

        .apexcharts-selection-rect+g .svg_select_boundingRect,
        .apexcharts-selection-rect+g .svg_select_points_rot {
            opacity: 0;
            visibility: hidden
        }

        .apexcharts-selection-rect+g .svg_select_points_l,
        .apexcharts-selection-rect+g .svg_select_points_r {
            cursor: ew-resize;
            opacity: 1;
            visibility: visible
        }

        .svg_select_points {
            fill: #efefef;
            stroke: #333;
            rx: 2
        }

        .apexcharts-svg.apexcharts-zoomable.hovering-zoom {
            cursor: crosshair
        }

        .apexcharts-svg.apexcharts-zoomable.hovering-pan {
            cursor: move
        }

        .apexcharts-menu-icon,
        .apexcharts-pan-icon,
        .apexcharts-reset-icon,
        .apexcharts-selection-icon,
        .apexcharts-toolbar-custom-icon,
        .apexcharts-zoom-icon,
        .apexcharts-zoomin-icon,
        .apexcharts-zoomout-icon {
            cursor: pointer;
            width: 20px;
            height: 20px;
            line-height: 24px;
            color: #6e8192;
            text-align: center
        }

        .apexcharts-menu-icon svg,
        .apexcharts-reset-icon svg,
        .apexcharts-zoom-icon svg,
        .apexcharts-zoomin-icon svg,
        .apexcharts-zoomout-icon svg {
            fill: #6e8192
        }

        .apexcharts-selection-icon svg {
            fill: #444;
            transform: scale(.76)
        }

        .apexcharts-theme-dark .apexcharts-menu-icon svg,
        .apexcharts-theme-dark .apexcharts-pan-icon svg,
        .apexcharts-theme-dark .apexcharts-reset-icon svg,
        .apexcharts-theme-dark .apexcharts-selection-icon svg,
        .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg,
        .apexcharts-theme-dark .apexcharts-zoom-icon svg,
        .apexcharts-theme-dark .apexcharts-zoomin-icon svg,
        .apexcharts-theme-dark .apexcharts-zoomout-icon svg {
            fill: #f3f4f5
        }

        .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg,
        .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
        .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg {
            fill: #008ffb
        }

        .apexcharts-theme-light .apexcharts-menu-icon:hover svg,
        .apexcharts-theme-light .apexcharts-reset-icon:hover svg,
        .apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
        .apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
        .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
        .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg {
            fill: #333
        }

        .apexcharts-menu-icon,
        .apexcharts-selection-icon {
            position: relative
        }

        .apexcharts-reset-icon {
            margin-left: 5px
        }

        .apexcharts-menu-icon,
        .apexcharts-reset-icon,
        .apexcharts-zoom-icon {
            transform: scale(.85)
        }

        .apexcharts-zoomin-icon,
        .apexcharts-zoomout-icon {
            transform: scale(.7)
        }

        .apexcharts-zoomout-icon {
            margin-right: 3px
        }

        .apexcharts-pan-icon {
            transform: scale(.62);
            position: relative;
            left: 1px;
            top: 0
        }

        .apexcharts-pan-icon svg {
            fill: #fff;
            stroke: #6e8192;
            stroke-width: 2
        }

        .apexcharts-pan-icon.apexcharts-selected svg {
            stroke: #008ffb
        }

        .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
            stroke: #333
        }

        .apexcharts-toolbar {
            position: absolute;
            z-index: 11;
            max-width: 176px;
            text-align: right;
            border-radius: 3px;
            padding: 0 6px 2px;
            display: flex;
            justify-content: space-between;
            align-items: center
        }

        .apexcharts-menu {
            background: #fff;
            position: absolute;
            top: 100%;
            border: 1px solid #ddd;
            border-radius: 3px;
            padding: 3px;
            right: 10px;
            opacity: 0;
            min-width: 110px;
            transition: .15s ease all;
            pointer-events: none
        }

        .apexcharts-menu.apexcharts-menu-open {
            opacity: 1;
            pointer-events: all;
            transition: .15s ease all
        }

        .apexcharts-menu-item {
            padding: 6px 7px;
            font-size: 12px;
            cursor: pointer
        }

        .apexcharts-theme-light .apexcharts-menu-item:hover {
            background: #eee
        }

        .apexcharts-theme-dark .apexcharts-menu {
            background: rgba(0, 0, 0, .7);
            color: #fff
        }

        @media screen and (min-width:768px) {
            .apexcharts-canvas:hover .apexcharts-toolbar {
                opacity: 1
            }
        }

        .apexcharts-canvas .apexcharts-element-hidden,
        .apexcharts-datalabel.apexcharts-element-hidden,
        .apexcharts-hide .apexcharts-series-points {
            opacity: 0
        }

        .apexcharts-hidden-element-shown {
            opacity: 1;
            transition: 0.25s ease all;
        }

        .apexcharts-datalabel,
        .apexcharts-datalabel-label,
        .apexcharts-datalabel-value,
        .apexcharts-datalabels,
        .apexcharts-pie-label {
            cursor: default;
            pointer-events: none
        }

        .apexcharts-pie-label-delay {
            opacity: 0;
            animation-name: opaque;
            animation-duration: .3s;
            animation-fill-mode: forwards;
            animation-timing-function: ease
        }

        .apexcharts-annotation-rect,
        .apexcharts-area-series .apexcharts-area,
        .apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
        .apexcharts-gridline,
        .apexcharts-line,
        .apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
        .apexcharts-point-annotation-label,
        .apexcharts-radar-series path,
        .apexcharts-radar-series polygon,
        .apexcharts-toolbar svg,
        .apexcharts-tooltip .apexcharts-marker,
        .apexcharts-xaxis-annotation-label,
        .apexcharts-yaxis-annotation-label,
        .apexcharts-zoom-rect {
            pointer-events: none
        }

        .apexcharts-marker {
            transition: .15s ease all
        }

        .resize-triggers {
            animation: 1ms resizeanim;
            visibility: hidden;
            opacity: 0;
            height: 100%;
            width: 100%;
            overflow: hidden
        }

        .contract-trigger:before,
        .resize-triggers,
        .resize-triggers>div {
            content: " ";
            display: block;
            position: absolute;
            top: 0;
            left: 0
        }

        .resize-triggers>div {
            height: 100%;
            width: 100%;
            background: #eee;
            overflow: auto
        }

        .contract-trigger:before {
            overflow: hidden;
            width: 200%;
            height: 200%
        }

        .apexcharts-bar-goals-markers {
            pointer-events: none
        }

        .apexcharts-bar-shadows {
            pointer-events: none
        }

        .apexcharts-rangebar-goals-markers {
            pointer-events: none
        }
    </style>
    <style id="__web-inspector-hide-shortcut-style__">
        .__web-inspector-hide-shortcut__,
        .__web-inspector-hide-shortcut__ *,
        .__web-inspector-hidebefore-shortcut__::before,
        .__web-inspector-hideafter-shortcut__::after {
            visibility: hidden !important;
        }
    </style>
</head>

<body style="">
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
                                href="javascript:void(0);" class="btn btn-light btn-icon"
                                data-bs-toggle="dropdown" aria-expanded="false"> <i
                                    class="fe fe-more-vertical"></i> </a>
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
                            <span class="search-tags alert"><i class="fe fe-user me-2"></i>People<a
                                    aria-label="anchor" href="javascript:void(0)" class="tag-addon"
                                    data-bs-dismiss="alert"><i class="fe fe-x"></i></a></span> <span
                                class="search-tags alert"><i class="fe fe-file-text me-2"></i>Pages<a
                                    aria-label="anchor" href="javascript:void(0)" class="tag-addon"
                                    data-bs-dismiss="alert"><i class="fe fe-x"></i></a></span> <span
                                class="search-tags alert"><i class="fe fe-align-left me-2"></i>Articles<a
                                    aria-label="anchor" href="javascript:void(0)" class="tag-addon"
                                    data-bs-dismiss="alert"><i class="fe fe-x"></i></a></span> <span
                                class="search-tags alert"><i class="fe fe-server me-2"></i>Tags<a
                                    aria-label="anchor" href="javascript:void(0)" class="tag-addon"
                                    data-bs-dismiss="alert"><i class="fe fe-x"></i></a></span>
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
        <!--Country Modal Popup-->
        <div class="modal fade" id="countryModal" tabindex="-1" aria-labelledby="countryModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body p-4">
                        <label class="form-label fs-16">Select Location</label>
                        <div class="choices" data-type="select-one" tabindex="0" role="combobox"
                            aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                            <div class="choices__inner">
                                <select class="form-control choices-images choices__input" hidden=""
                                    tabindex="-1" data-choice="active">
                                    <option value="7" data-custom-properties="[object Object]">&lt;img
                                        class="avatar avatar-xs avatar-rounded"
                                        src="{{ asset('images/crm/flags/argentina_flag.jpg') }}" alt=""&gt; &lt;span
                                        class="ms-1"&gt;Argentina&lt;/span&gt;</option>
                                </select>
                                <div class="choices__list choices__list--single">
                                    <div class="choices__item choices__item--selectable" data-item=""
                                        data-id="1" data-value="7" data-custom-properties="[object Object]"
                                        aria-selected="true"><img class="avatar avatar-xs avatar-rounded"
                                            src="{{ asset('images/crm/flags/argentina_flag.jpg') }}" alt=""> <span
                                            class="ms-1">Argentina</span></div>
                                </div>
                            </div>
                            <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                <input type="text" class="choices__input choices__input--cloned"
                                    autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox"
                                    aria-autocomplete="list" aria-label="null" placeholder="">
                                <div class="choices__list" role="listbox">
                                    <div id="choices--1qxd-item-choice-1"
                                        class="choices__item choices__item--choice is-selected choices__item--selectable is-highlighted"
                                        role="option" data-choice="" data-id="1" data-value="7"
                                        data-select-text="Press to select" data-choice-selectable=""
                                        aria-selected="true"><img class="avatar avatar-xs avatar-rounded"
                                            src="{{ asset('images/crm/flags/argentina_flag.jpg') }}" alt=""> <span
                                            class="ms-1">Argentina</span></div>
                                    <div id="choices--1qxd-item-choice-2"
                                        class="choices__item choices__item--choice choices__item--selectable"
                                        role="option" data-choice="" data-id="2" data-value="8"
                                        data-select-text="Press to select" data-choice-selectable=""><img
                                            class="avatar avatar-xs avatar-rounded"
                                            src="{{ asset('images/crm/flags/argentina_flag.jpg') }}" alt=""> <span
                                            class="ms-1">Argentina</span></div>
                                    <div id="choices--1qxd-item-choice-3"
                                        class="choices__item choices__item--choice choices__item--selectable"
                                        role="option" data-choice="" data-id="3" data-value="3"
                                        data-select-text="Press to select" data-choice-selectable=""><img
                                            class="avatar avatar-xs avatar-rounded"
                                            src="{{ asset('images/crm/flags/french_flag.jpg') }}" alt=""> <span
                                            class="ms-1">France</span></div>
                                    <div id="choices--1qxd-item-choice-4"
                                        class="choices__item choices__item--choice choices__item--selectable"
                                        role="option" data-choice="" data-id="4" data-value="4"
                                        data-select-text="Press to select" data-choice-selectable=""><img
                                            class="avatar avatar-xs avatar-rounded"
                                            src="{{ asset('images/crm/flags/germany_flag.jpg') }}" alt=""> <span
                                            class="ms-1">Germany</span></div>
                                    <div id="choices--1qxd-item-choice-5"
                                        class="choices__item choices__item--choice choices__item--selectable"
                                        role="option" data-choice="" data-id="5" data-value="5"
                                        data-select-text="Press to select" data-choice-selectable=""><img
                                            class="avatar avatar-xs avatar-rounded"
                                            src="{{ asset('images/crm/flags/italy_flag.jpg') }}" alt=""> <span
                                            class="ms-1">Italy</span></div>
                                    <div id="choices--1qxd-item-choice-6"
                                        class="choices__item choices__item--choice choices__item--selectable"
                                        role="option" data-choice="" data-id="6" data-value="6"
                                        data-select-text="Press to select" data-choice-selectable=""><img
                                            class="avatar avatar-xs avatar-rounded"
                                            src="{{ asset('images/crm/flags/russia_flag.jpg') }}" alt=""> <span
                                            class="ms-1">Netherlands</span></div>
                                    <div id="choices--1qxd-item-choice-7"
                                        class="choices__item choices__item--choice choices__item--selectable"
                                        role="option" data-choice="" data-id="7" data-value="2"
                                        data-select-text="Press to select" data-choice-selectable=""><img
                                            class="avatar avatar-xs avatar-rounded"
                                            src="{{ asset('images/crm/flags/spain_flag.jpg') }}" alt=""> <span
                                            class="ms-1">Spain</span></div>
                                    <div id="choices--1qxd-item-choice-8"
                                        class="choices__item choices__item--choice choices__item--selectable"
                                        role="option" data-choice="" data-id="8" data-value="1"
                                        data-select-text="Press to select" data-choice-selectable=""><img
                                            class="avatar avatar-xs avatar-rounded"
                                            src="{{ asset('images/crm/flags/us_flag.jpg') }}" alt=""> <span
                                            class="mx-1">United States</span></div>
                                </div>
                            </div>
                        </div>
                        <label class="form-label fs-16">Select Language</label>
                        <div class="choices" data-type="select-one" tabindex="0" role="combobox"
                            aria-autocomplete="list" aria-haspopup="true" aria-expanded="false">
                            <div class="choices__inner">
                                <select class="form-control choices__input" data-trigger="" hidden=""
                                    tabindex="-1" data-choice="active">
                                    <option value="1" data-custom-properties="[object Object]">English (En)
                                    </option>
                                </select>
                                <div class="choices__list choices__list--single">
                                    <div class="choices__item choices__item--selectable" data-item=""
                                        data-id="1" data-value="1" data-custom-properties="[object Object]"
                                        aria-selected="true">English (En)</div>
                                </div>
                            </div>
                            <div class="choices__list choices__list--dropdown" aria-expanded="false">
                                <input type="text" class="choices__input choices__input--cloned"
                                    autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox"
                                    aria-autocomplete="list" aria-label="This is a placeholder set in the config"
                                    placeholder="Search">
                                <div class="choices__list" role="listbox">
                                    <div id="choices--y29q-item-choice-1"
                                        class="choices__item choices__item--choice choices__item--selectable is-highlighted"
                                        role="option" data-choice="" data-id="1" data-value="4"
                                        data-select-text="Press to select" data-choice-selectable=""
                                        aria-selected="true">Deutsch (DE)</div>
                                    <div id="choices--y29q-item-choice-2"
                                        class="choices__item choices__item--choice is-selected choices__item--selectable"
                                        role="option" data-choice="" data-id="2" data-value="1"
                                        data-select-text="Press to select" data-choice-selectable="">English (En)
                                    </div>
                                    <div id="choices--y29q-item-choice-3"
                                        class="choices__item choices__item--choice choices__item--selectable"
                                        role="option" data-choice="" data-id="3" data-value="2"
                                        data-select-text="Press to select" data-choice-selectable="">Española (ES)
                                    </div>
                                    <div id="choices--y29q-item-choice-4"
                                        class="choices__item choices__item--choice choices__item--selectable"
                                        role="option" data-choice="" data-id="4" data-value="3"
                                        data-select-text="Press to select" data-choice-selectable="">Français (FR)
                                    </div>
                                    <div id="choices--y29q-item-choice-5"
                                        class="choices__item choices__item--choice choices__item--selectable"
                                        role="option" data-choice="" data-id="5" data-value="5"
                                        data-select-text="Press to select" data-choice-selectable="">Italiana (IT)
                                    </div>
                                    <div id="choices--y29q-item-choice-6"
                                        class="choices__item choices__item--choice choices__item--selectable"
                                        role="option" data-choice="" data-id="6" data-value="6"
                                        data-select-text="Press to select" data-choice-selectable="">Русский (RU)
                                    </div>
                                    <div id="choices--y29q-item-choice-7"
                                        class="choices__item choices__item--choice choices__item--selectable"
                                        role="option" data-choice="" data-id="7" data-value="7"
                                        data-select-text="Press to select" data-choice-selectable="">عربي (AR)</div>
                                    <div id="choices--y29q-item-choice-8"
                                        class="choices__item choices__item--choice choices__item--selectable"
                                        role="option" data-choice="" data-id="8" data-value="8"
                                        data-select-text="Press to select" data-choice-selectable="">한국인 (KO)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer"> <button type="button" class="btn btn-primary-light"
                            data-bs-dismiss="modal">Close</button> <button type="button"
                            class="btn btn-primary">Save changes</button> </div>
                </div>
            </div>
        </div>
        <!--Country Modal Popup--> <!-- Footer Start -->
        <footer aria-label="Main Footer" class="footer mt-auto py-3 bg-white text-center">
            <div class="container"> <span class="text-muted"> Copyright © <span id="year">2025</span> <a
                        href="javascript:void(0);" class="text-dark fw-semibold">Ynex</a>. Designed with <span
                        class="bi bi-heart-fill text-danger"></span> by <a href="javascript:void(0);"> <span
                            class="fw-semibold text-primary text-decoration-underline">Spruko</span> </a> All rights
                    reserved </span> </div>
        </footer>
        <!-- Footer End -->
    </div>
    <!-- Scroll To Top -->
    <div class="scrollToTop" style="display: flex;"> <span class="arrow"><i
                class="ri-arrow-up-s-fill fs-20"></i></span> </div>
    <div id="responsive-overlay"></div>

    <div class="pcr-app " data-theme="nano" aria-label="color picker dialog" role="window"
        style="left: 0px; top: 8px;">
        <div class="pcr-selection">
            <div class="pcr-color-preview">
                <button type="button" class="pcr-last-color" aria-label="use previous color"
                    style="--pcr-color: rgba(132, 90, 223, 1);"></button>
                <div class="pcr-current-color" style="--pcr-color: rgba(132, 90, 223, 1);"></div>
            </div>
            <div class="pcr-color-palette">
                <div class="pcr-picker"
                    style="left: calc(59.6413% - 9px); top: calc(12.549% - 9px); background: rgb(132, 90, 223);">
                </div>
                <div class="pcr-palette" tabindex="0" aria-label="color selection area" role="listbox"
                    style="background: linear-gradient(to top, rgb(0, 0, 0), transparent), linear-gradient(to left, rgb(81, 0, 255), rgb(255, 255, 255));">
                </div>
            </div>
            <div class="pcr-color-chooser">
                <div class="pcr-picker" style="left: calc(71.9298% - 9px); background-color: rgb(81, 0, 255);">
                </div>
                <div class="pcr-hue pcr-slider" tabindex="0" aria-label="hue selection slider" role="slider">
                </div>
            </div>
            <div class="pcr-color-opacity" style="display:none" hidden="">
                <div class="pcr-picker"></div>
                <div class="pcr-opacity pcr-slider" tabindex="0" aria-label="selection slider" role="slider">
                </div>
            </div>
        </div>
        <div class="pcr-swatches "></div>
        <div class="pcr-interaction">
            <input class="pcr-result" type="text" spellcheck="false" aria-label="color input field">
            <input class="pcr-type" data-type="HEXA" value="HEXA" type="button" style="display:none"
                hidden="">
            <input class="pcr-type active" data-type="RGBA" value="RGBA" type="button">
            <input class="pcr-type" data-type="HSLA" value="HSLA" type="button" style="display:none"
                hidden="">
            <input class="pcr-type" data-type="HSVA" value="HSVA" type="button" style="display:none"
                hidden="">
            <input class="pcr-type" data-type="CMYK" value="CMYK" type="button" style="display:none"
                hidden="">
            <input class="pcr-save" value="Save" type="button" style="display:none" hidden=""
                aria-label="save and close">
            <input class="pcr-cancel" value="Cancel" type="button" style="display:none" hidden=""
                aria-label="cancel and close">
            <input class="pcr-clear" value="Clear" type="button" style="display:none" hidden=""
                aria-label="clear and close">
        </div>
    </div>
    <div class="pcr-app " data-theme="nano" aria-label="color picker dialog" role="window"
        style="left: 0px; top: 8px;">
        <div class="pcr-selection">
            <div class="pcr-color-preview">
                <button type="button" class="pcr-last-color" aria-label="use previous color"
                    style="--pcr-color: rgba(132, 90, 223, 1);"></button>
                <div class="pcr-current-color" style="--pcr-color: rgba(132, 90, 223, 1);"></div>
            </div>
            <div class="pcr-color-palette">
                <div class="pcr-picker"
                    style="left: calc(59.6413% - 9px); top: calc(12.549% - 9px); background: rgb(132, 90, 223);">
                </div>
                <div class="pcr-palette" tabindex="0" aria-label="color selection area" role="listbox"
                    style="background: linear-gradient(to top, rgb(0, 0, 0), transparent), linear-gradient(to left, rgb(81, 0, 255), rgb(255, 255, 255));">
                </div>
            </div>
            <div class="pcr-color-chooser">
                <div class="pcr-picker" style="left: calc(71.9298% - 9px); background-color: rgb(81, 0, 255);">
                </div>
                <div class="pcr-hue pcr-slider" tabindex="0" aria-label="hue selection slider" role="slider">
                </div>
            </div>
            <div class="pcr-color-opacity" style="display:none" hidden="">
                <div class="pcr-picker"></div>
                <div class="pcr-opacity pcr-slider" tabindex="0" aria-label="selection slider" role="slider">
                </div>
            </div>
        </div>
        <div class="pcr-swatches "></div>
        <div class="pcr-interaction">
            <input class="pcr-result" type="text" spellcheck="false" aria-label="color input field">
            <input class="pcr-type" data-type="HEXA" value="HEXA" type="button" style="display:none"
                hidden="">
            <input class="pcr-type active" data-type="RGBA" value="RGBA" type="button">
            <input class="pcr-type" data-type="HSLA" value="HSLA" type="button" style="display:none"
                hidden="">
            <input class="pcr-type" data-type="HSVA" value="HSVA" type="button" style="display:none"
                hidden="">
            <input class="pcr-type" data-type="CMYK" value="CMYK" type="button" style="display:none"
                hidden="">
            <input class="pcr-save" value="Save" type="button" style="display:none" hidden=""
                aria-label="save and close">
            <input class="pcr-cancel" value="Cancel" type="button" style="display:none" hidden=""
                aria-label="cancel and close">
            <input class="pcr-clear" value="Clear" type="button" style="display:none" hidden=""
                aria-label="clear and close">
        </div>
    </div>

    <svg id="SvgjsSvg1483" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
        xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"
        style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
        <defs id="SvgjsDefs1484"></defs>
        <polyline id="SvgjsPolyline1485" points="0,0"></polyline>
        <path id="SvgjsPath1486"
            d="M-1 245.59519881057736L-1 245.59519881057736C-1 245.59519881057736 44.023579597473145 245.59519881057736 44.023579597473145 245.59519881057736C44.023579597473145 245.59519881057736 88.04715919494629 245.59519881057736 88.04715919494629 245.59519881057736C88.04715919494629 245.59519881057736 132.07073879241943 245.59519881057736 132.07073879241943 245.59519881057736C132.07073879241943 245.59519881057736 176.09431838989258 245.59519881057736 176.09431838989258 245.59519881057736C176.09431838989258 245.59519881057736 220.1178979873657 245.59519881057736 220.1178979873657 245.59519881057736C220.1178979873657 245.59519881057736 264.14147758483887 245.59519881057736 264.14147758483887 245.59519881057736C264.14147758483887 245.59519881057736 308.165057182312 245.59519881057736 308.165057182312 245.59519881057736C308.165057182312 245.59519881057736 352.18863677978516 245.59519881057736 352.18863677978516 245.59519881057736C352.18863677978516 245.59519881057736 396.2122163772583 245.59519881057736 396.2122163772583 245.59519881057736C396.2122163772583 245.59519881057736 440.2357959747314 245.59519881057736 440.2357959747314 245.59519881057736C440.2357959747314 245.59519881057736 484.25937557220453 245.59519881057736 484.25937557220453 245.59519881057736C484.25937557220453 245.59519881057736 484.25937557220453 245.59519881057736 484.25937557220453 245.59519881057736 ">
        </path>
    </svg>
</body>

</html>
