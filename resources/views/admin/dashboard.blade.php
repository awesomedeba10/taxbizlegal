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
    <!-- Start Switcher -->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="switcher-canvas" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title text-default" id="offcanvasRightLabel">Switcher</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <nav aria-label="Switcher Navigation" class="border-bottom border-block-end-dashed">
                <div class="nav nav-tabs nav-justified" id="switcher-main-tab" role="tablist"> <button
                        class="nav-link active" id="switcher-home-tab" data-bs-toggle="tab"
                        data-bs-target="#switcher-home" type="button" role="tab" aria-controls="switcher-home"
                        aria-selected="true">Theme Styles</button> <button class="nav-link" id="switcher-profile-tab"
                        data-bs-toggle="tab" data-bs-target="#switcher-profile" type="button" role="tab"
                        aria-controls="switcher-profile" aria-selected="false" tabindex="-1">Theme Colors</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active border-0" id="switcher-home" role="tabpanel"
                    aria-labelledby="switcher-home-tab" tabindex="0">
                    <div class="">
                        <p class="switcher-style-head">Theme Color Mode:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-light-theme"> Light </label> <input class="form-check-input"
                                        type="radio" name="theme-style" id="switcher-light-theme" checked="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-dark-theme"> Dark </label> <input class="form-check-input"
                                        type="radio" name="theme-style" id="switcher-dark-theme"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Directions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-ltr"> LTR </label> <input class="form-check-input" type="radio"
                                        name="direction" id="switcher-ltr" checked=""> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-rtl"> RTL </label> <input class="form-check-input"
                                        type="radio" name="direction" id="switcher-rtl"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Navigation Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-vertical"> Vertical </label> <input class="form-check-input"
                                        type="radio" name="navigation-style" id="switcher-vertical"
                                        checked=""> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-horizontal"> Horizontal </label> <input class="form-check-input"
                                        type="radio" name="navigation-style" id="switcher-horizontal"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-menu-styles">
                        <p class="switcher-style-head">Vertical &amp; Horizontal Menu Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-menu-click"> Menu Click </label> <input class="form-check-input"
                                        type="radio" name="navigation-menu-styles" id="switcher-menu-click"> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-menu-hover"> Menu Hover </label> <input class="form-check-input"
                                        type="radio" name="navigation-menu-styles" id="switcher-menu-hover"> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-icon-click"> Icon Click </label> <input class="form-check-input"
                                        type="radio" name="navigation-menu-styles" id="switcher-icon-click"> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-icon-hover"> Icon Hover </label> <input class="form-check-input"
                                        type="radio" name="navigation-menu-styles" id="switcher-icon-hover"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidemenu-layout-styles">
                        <p class="switcher-style-head">Sidemenu Layout Styles:</p>
                        <div class="row switcher-style gx-0 pb-2 gy-2">
                            <div class="col-sm-6">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-default-menu"> Default Menu </label> <input
                                        class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-default-menu" checked=""> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-closed-menu"> Closed Menu </label> <input
                                        class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-closed-menu"> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-icontext-menu"> Icon Text </label> <input
                                        class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icontext-menu"> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-icon-overlay"> Icon Overlay </label> <input
                                        class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-icon-overlay"> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-detached"> Detached </label> <input class="form-check-input"
                                        type="radio" name="sidemenu-layout-styles" id="switcher-detached"> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-double-menu"> Double Menu </label> <input
                                        class="form-check-input" type="radio" name="sidemenu-layout-styles"
                                        id="switcher-double-menu"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Page Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-regular"> Regular </label> <input class="form-check-input"
                                        type="radio" name="page-styles" id="switcher-regular" checked="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-classic"> Classic </label> <input class="form-check-input"
                                        type="radio" name="page-styles" id="switcher-classic"> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-modern"> Modern </label> <input class="form-check-input"
                                        type="radio" name="page-styles" id="switcher-modern"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Layout Width Styles:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-full-width"> Full Width </label> <input class="form-check-input"
                                        type="radio" name="layout-width" id="switcher-full-width" checked="">
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-boxed"> Boxed </label> <input class="form-check-input"
                                        type="radio" name="layout-width" id="switcher-boxed"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Menu Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-menu-fixed"> Fixed </label> <input class="form-check-input"
                                        type="radio" name="menu-positions" id="switcher-menu-fixed"
                                        checked=""> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-menu-scroll"> Scrollable </label> <input
                                        class="form-check-input" type="radio" name="menu-positions"
                                        id="switcher-menu-scroll"> </div>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <p class="switcher-style-head">Header Positions:</p>
                        <div class="row switcher-style gx-0">
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-header-fixed"> Fixed </label> <input class="form-check-input"
                                        type="radio" name="header-positions" id="switcher-header-fixed"
                                        checked=""> </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check switch-select"> <label class="form-check-label"
                                        for="switcher-header-scroll"> Scrollable </label> <input
                                        class="form-check-input" type="radio" name="header-positions"
                                        id="switcher-header-scroll"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade border-0" id="switcher-profile" role="tabpanel"
                    aria-labelledby="switcher-profile-tab" tabindex="0">
                    <div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Menu Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" type="radio" name="menu-colors"
                                        id="switcher-menu-light" aria-label="Light Menu"
                                        data-bs-original-title="Light Menu"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" type="radio" name="menu-colors"
                                        id="switcher-menu-dark" checked="" aria-label="Dark Menu"
                                        data-bs-original-title="Dark Menu"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" type="radio" name="menu-colors"
                                        id="switcher-menu-primary" aria-label="Color Menu"
                                        data-bs-original-title="Color Menu"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                        data-bs-placement="top" type="radio" name="menu-colors"
                                        id="switcher-menu-gradient" aria-label="Gradient Menu"
                                        data-bs-original-title="Gradient Menu"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-transparent"
                                        data-bs-toggle="tooltip" data-bs-placement="top" type="radio"
                                        name="menu-colors" id="switcher-menu-transparent"
                                        aria-label="Transparent Menu" data-bs-original-title="Transparent Menu">
                                </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Menu dynamically
                                change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Header Colors:</p>
                            <div class="d-flex switcher-style pb-2">
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-white" data-bs-toggle="tooltip"
                                        data-bs-placement="top" type="radio" name="header-colors"
                                        id="switcher-header-light" checked="" aria-label="Light Header"
                                        data-bs-original-title="Light Header"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-dark" data-bs-toggle="tooltip"
                                        data-bs-placement="top" type="radio" name="header-colors"
                                        id="switcher-header-dark" aria-label="Dark Header"
                                        data-bs-original-title="Dark Header"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-primary" data-bs-toggle="tooltip"
                                        data-bs-placement="top" type="radio" name="header-colors"
                                        id="switcher-header-primary" aria-label="Color Header"
                                        data-bs-original-title="Color Header"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-gradient" data-bs-toggle="tooltip"
                                        data-bs-placement="top" type="radio" name="header-colors"
                                        id="switcher-header-gradient" aria-label="Gradient Header"
                                        data-bs-original-title="Gradient Header"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-transparent"
                                        data-bs-toggle="tooltip" data-bs-placement="top" type="radio"
                                        name="header-colors" id="switcher-header-transparent"
                                        aria-label="Transparent Header" data-bs-original-title="Transparent Header">
                                </div>
                            </div>
                            <div class="px-4 pb-3 text-muted fs-11">Note:If you want to change color Header dynamically
                                change from below Theme Primary color picker</div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Primary:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-primary-1" type="radio"
                                        name="theme-primary" id="switcher-primary"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-primary-2" type="radio"
                                        name="theme-primary" id="switcher-primary1"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-primary-3" type="radio"
                                        name="theme-primary" id="switcher-primary2"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-primary-4" type="radio"
                                        name="theme-primary" id="switcher-primary3"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-primary-5" type="radio"
                                        name="theme-primary" id="switcher-primary4"> </div>
                                <div class="form-check switch-select ps-0 mt-1 color-primary-light">
                                    <div class="theme-container-primary"><button class="">nano</button></div>
                                    <div class="pickr-container-primary">
                                        <div class="pickr">
                                            <button type="button" class="pcr-button" role="button"
                                                aria-label="toggle color picker dialog"
                                                style="--pcr-color: rgba(132, 90, 223, 1);"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="theme-colors">
                            <p class="switcher-style-head">Theme Background:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-bg-1" type="radio"
                                        name="theme-background" id="switcher-background"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-bg-2" type="radio"
                                        name="theme-background" id="switcher-background1"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-bg-3" type="radio"
                                        name="theme-background" id="switcher-background2"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-bg-4" type="radio"
                                        name="theme-background" id="switcher-background3"> </div>
                                <div class="form-check switch-select me-3"> <input
                                        class="form-check-input color-input color-bg-5" type="radio"
                                        name="theme-background" id="switcher-background4"> </div>
                                <div
                                    class="form-check switch-select ps-0 mt-1 tooltip-static-demo color-bg-transparent">
                                    <div class="theme-container-background"><button>nano</button></div>
                                    <div class="pickr-container-background">
                                        <div class="pickr">
                                            <button type="button" class="pcr-button" role="button"
                                                aria-label="toggle color picker dialog"
                                                style="--pcr-color: rgba(132, 90, 223, 1);"></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="menu-image mb-3">
                            <p class="switcher-style-head">Menu With Background Image:</p>
                            <div class="d-flex flex-wrap align-items-center switcher-style">
                                <div class="form-check switch-select m-2"> <input
                                        class="form-check-input bgimage-input bg-img1" type="radio" name="theme-bg"
                                        id="switcher-bg-img"> </div>
                                <div class="form-check switch-select m-2"> <input
                                        class="form-check-input bgimage-input bg-img2" type="radio" name="theme-bg"
                                        id="switcher-bg-img1"> </div>
                                <div class="form-check switch-select m-2"> <input
                                        class="form-check-input bgimage-input bg-img3" type="radio" name="theme-bg"
                                        id="switcher-bg-img2"> </div>
                                <div class="form-check switch-select m-2"> <input
                                        class="form-check-input bgimage-input bg-img4" type="radio" name="theme-bg"
                                        id="switcher-bg-img3"> </div>
                                <div class="form-check switch-select m-2"> <input
                                        class="form-check-input bgimage-input bg-img5" type="radio" name="theme-bg"
                                        id="switcher-bg-img4"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between canvas-footer"> <a
                        href="https://themeforest.net/item/ynex-blazor-bootstrap-admin-dashboard-template/52528275"
                        target="_blank" class="btn btn-primary">Buy Now</a> <a
                        href="https://themeforest.net/user/spruko/portfolio" class="btn btn-secondary"
                        target="_blank">Our Portfolio</a> <a href="javascript:void(0);" id="reset-all"
                        class="btn btn-danger">Reset</a> </div>
            </div>
        </div>
    </div>
    <!-- End Switcher -->
    <div class="page">
        <!-- app-header -->
        <header class="app-header">
            <!-- Start::main-header-container -->
            <div class="main-header-container container-fluid">
                <!-- Start::header-content-left -->
                <div class="header-content-left">
                    <!-- Start::header-element -->
                    <div class="header-element">
                        <div class="horizontal-logo"> <a href="index" class="header-logo"> <img
                                    src="{{ asset('images/crm/brand-logos/desktop-logo.png') }}" alt="logo"
                                    class="desktop-logo"> <img src="{{ asset('images/crm/brand-logos/toggle-logo.png') }}"
                                    alt="logo" class="toggle-logo"> <img
                                    src="{{ asset('images/crm/brand-logos/desktop-dark.png') }}" alt="logo"
                                    class="desktop-dark"> <img src="{{ asset('images/crm/brand-logos/toggle-dark.png') }}"
                                    alt="logo" class="toggle-dark"> <img
                                    src="{{ asset('images/crm/brand-logos/desktop-white.png') }}" alt="logo"
                                    class="desktop-white"> <img src="{{ asset('images/crm/brand-logos/toggle-white.png') }}"
                                    alt="logo" class="toggle-white"> </a> </div>
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
                        <!-- Start::header-link --> <a aria-label="anchor" href="javascript:void(0);"
                            class="header-link" data-bs-toggle="modal" data-bs-target="#searchModal"> <i
                                class="bx bx-search-alt-2 header-link-icon"></i> </a> <!-- End::header-link -->
                    </div>
                    <!-- End::header-element --> <!-- Start::header-element -->
                    <div class="header-element country-selector">
                        <!-- Start::header-link --> <a href="javascript:void(0);" class="header-link"
                            data-bs-toggle="modal" data-bs-target="#countryModal"> <img
                                src="{{ asset('images/crm/flags/us_flag.jpg') }}" alt="img"
                                class="rounded-circle header-link-icon"> <span class="fw-semibold mb-0 lh-1">EN</span>
                        </a>
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
                    <!-- End::header-element --> <!-- Start::header-element -->
                    <div class="header-element cart-dropdown">
                        <!-- Start::header-link|dropdown-toggle --> <a href="javascript:void(0);"
                            class="header-link dropdown-toggle" data-bs-auto-close="outside"
                            data-bs-toggle="dropdown"> <i class="bx bx-cart header-link-icon"></i> <span
                                class="badge bg-primary rounded-pill header-icon-badge" id="cart-icon-badge">5</span>
                        </a> <!-- End::header-link|dropdown-toggle --> <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown dropdown-menu dropdown-menu-end"
                            data-popper-placement="none">
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fs-17 fw-semibold">Cart Items</p>
                                    <span class="badge bg-success-transparent" id="cart-data">5 Items</span>
                                </div>
                            </div>
                            <div>
                                <hr class="dropdown-divider">
                            </div>
                            <ul class="list-unstyled mb-0" id="header-cart-items-scroll" data-simplebar="init">
                                <div class="simplebar-wrapper" style="margin: 0px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                                aria-label="scrollable content"
                                                style="height: auto; overflow: hidden;">
                                                <div class="simplebar-content" style="padding: 0px;">
                                                    <li class="dropdown-item">
                                                        <div class="d-flex align-items-start cart-dropdown-item">
                                                            <img src="{{ asset('images/crm/ecommerce/jpg/1.jpg') }}"
                                                                alt="img"
                                                                class="avatar avatar-sm avatar-rounded br-5 me-3">
                                                            <div class="flex-grow-1">
                                                                <div
                                                                    class="d-flex align-items-start justify-content-between mb-0">
                                                                    <div class="mb-0 fs-13 text-dark fw-semibold"> <a
                                                                            href="cart">SomeThing Phone</a> </div>
                                                                    <div> <span
                                                                            class="text-black mb-1">$1,299.00</span> <a
                                                                            aria-label="anchor"
                                                                            href="javascript:void(0);"
                                                                            class="header-cart-remove float-end dropdown-item-close"><i
                                                                                class="ti ti-trash"></i></a> </div>
                                                                </div>
                                                                <div
                                                                    class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                                    <ul class="header-product-item d-flex">
                                                                        <li>Metallic Blue</li>
                                                                        <li>6gb Ram</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <div class="d-flex align-items-start cart-dropdown-item">
                                                            <img src="{{ asset('images/crm/ecommerce/jpg/3.jpg') }}"
                                                                alt="img"
                                                                class="avatar avatar-sm avatar-rounded br-5 me-3">
                                                            <div class="flex-grow-1">
                                                                <div
                                                                    class="d-flex align-items-start justify-content-between mb-0">
                                                                    <div class="mb-0 fs-13 text-dark fw-semibold"> <a
                                                                            href="cart">Stop Watch</a> </div>
                                                                    <div> <span class="text-black mb-1">$179.29</span>
                                                                        <a aria-label="anchor"
                                                                            href="javascript:void(0);"
                                                                            class="header-cart-remove float-end dropdown-item-close"><i
                                                                                class="ti ti-trash"></i></a> </div>
                                                                </div>
                                                                <div
                                                                    class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                                    <ul class="header-product-item">
                                                                        <li>Analog</li>
                                                                        <li><span
                                                                                class="badge bg-pink-transparent fs-10">Free
                                                                                shipping</span></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <div class="d-flex align-items-start cart-dropdown-item">
                                                            <img src="{{ asset('images/crm/ecommerce/jpg/5.jpg') }}"
                                                                alt="img"
                                                                class="avatar avatar-sm avatar-rounded br-5 me-3">
                                                            <div class="flex-grow-1">
                                                                <div
                                                                    class="d-flex align-items-start justify-content-between mb-0">
                                                                    <div class="mb-0 fs-13 text-dark fw-semibold"> <a
                                                                            href="cart">Photo Frame</a> </div>
                                                                    <div> <span class="text-black mb-1">$29.00</span>
                                                                        <a aria-label="anchor"
                                                                            href="javascript:void(0);"
                                                                            class="header-cart-remove float-end dropdown-item-close"><i
                                                                                class="ti ti-trash"></i></a> </div>
                                                                </div>
                                                                <div
                                                                    class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                                    <ul class="header-product-item d-flex">
                                                                        <li>Decorative</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <div class="d-flex align-items-start cart-dropdown-item">
                                                            <img src="{{ asset('images/crm/ecommerce/jpg/4.jpg') }}"
                                                                alt="img"
                                                                class="avatar avatar-sm avatar-rounded br-5 me-3">
                                                            <div class="flex-grow-1">
                                                                <div
                                                                    class="d-flex align-items-start justify-content-between mb-0">
                                                                    <div class="mb-0 fs-13 text-dark fw-semibold"> <a
                                                                            href="cart">Kikon Camera</a> </div>
                                                                    <div> <span
                                                                            class="text-black mb-1">$4,999.00</span> <a
                                                                            aria-label="anchor"
                                                                            href="javascript:void(0);"
                                                                            class="header-cart-remove float-end dropdown-item-close"><i
                                                                                class="ti ti-trash"></i></a> </div>
                                                                </div>
                                                                <div
                                                                    class="min-w-fit-content d-flex align-items-start justify-content-between">
                                                                    <ul class="header-product-item d-flex">
                                                                        <li>Black</li>
                                                                        <li>50MM</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <div class="d-flex align-items-start cart-dropdown-item">
                                                            <img src="{{ asset('images/crm/ecommerce/jpg/6.jpg') }}"
                                                                alt="img"
                                                                class="avatar avatar-sm avatar-rounded br-5 me-3">
                                                            <div class="flex-grow-1">
                                                                <div
                                                                    class="d-flex align-items-start justify-content-between mb-0">
                                                                    <div class="mb-0 fs-13 text-dark fw-semibold"> <a
                                                                            href="cart">Canvas Shoes</a> </div>
                                                                    <div> <span class="text-black mb-1">$129.00</span>
                                                                        <a aria-label="anchor"
                                                                            href="javascript:void(0);"
                                                                            class="header-cart-remove float-end dropdown-item-close"><i
                                                                                class="ti ti-trash"></i></a> </div>
                                                                </div>
                                                                <div
                                                                    class="d-flex align-items-start justify-content-between">
                                                                    <ul class="header-product-item d-flex">
                                                                        <li>Gray</li>
                                                                        <li>Sports</li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
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
                            </ul>
                            <div class="p-3 empty-header-item border-top">
                                <div class="d-grid"> <a href="checkout" class="btn btn-primary">Proceed to
                                        checkout</a> </div>
                            </div>
                            <div class="p-5 empty-item d-none">
                                <div class="text-center">
                                    <span class="avatar avatar-xl avatar-rounded bg-warning-transparent"> <i
                                            class="ri-shopping-cart-2-line fs-2"></i> </span>
                                    <h6 class="fw-bold mb-1 mt-3">Your Cart is Empty</h6>
                                    <span class="mb-3 fw-normal fs-13 d-block">Add some items to make me happy
                                        :)</span> <a href="products"
                                        class="btn btn-primary btn-wave btn-sm m-1 waves-effect waves-light"
                                        data-abc="true">continue shopping <i class="bi bi-arrow-right ms-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- End::main-header-dropdown -->
                    </div>
                    <!-- End::header-element --> <!-- Start::header-element -->
                    <div class="header-element notifications-dropdown">
                        <!-- Start::header-link|dropdown-toggle --> <a aria-label="anchor" href="javascript:void(0);"
                            class="header-link dropdown-toggle" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" id="messageDropdown" aria-expanded="false"> <i
                                class="bx bx-bell header-link-icon"></i> <span
                                class="badge bg-secondary rounded-pill header-icon-badge pulse pulse-secondary"
                                id="notification-icon-badge">5</span> </a> <!-- End::header-link|dropdown-toggle -->
                        <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown dropdown-menu dropdown-menu-end"
                            data-popper-placement="none">
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fs-17 fw-semibold">Notifications</p>
                                    <span class="badge bg-secondary-transparent" id="notifiation-data">5 Unread</span>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <ul class="list-unstyled mb-0" id="header-notification-scroll" data-simplebar="init">
                                <div class="simplebar-wrapper" style="margin: 0px;">
                                    <div class="simplebar-height-auto-observer-wrapper">
                                        <div class="simplebar-height-auto-observer"></div>
                                    </div>
                                    <div class="simplebar-mask">
                                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                            <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                                aria-label="scrollable content"
                                                style="height: auto; overflow: hidden;">
                                                <div class="simplebar-content" style="padding: 0px;">
                                                    <li class="dropdown-item">
                                                        <div class="d-flex align-items-start">
                                                            <div class="pe-2"> <span
                                                                    class="avatar avatar-md bg-primary-transparent avatar-rounded"><i
                                                                        class="ti ti-gift fs-18"></i></span> </div>
                                                            <div
                                                                class="flex-grow-1 d-flex align-items-center justify-content-between">
                                                                <div>
                                                                    <p class="mb-0 fw-semibold"><a
                                                                            href="notifications">Your Order Has Been
                                                                            Shipped</a></p>
                                                                    <span
                                                                        class="text-muted fw-normal fs-12 header-notification-text">Order
                                                                        No: 123456 Has Shipped To Your Delivery
                                                                        Address</span>
                                                                </div>
                                                                <div> <a aria-label="anchor"
                                                                        href="javascript:void(0);"
                                                                        class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                                            class="ti ti-x fs-16"></i></a> </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <div class="d-flex align-items-start">
                                                            <div class="pe-2"> <span
                                                                    class="avatar avatar-md bg-secondary-transparent avatar-rounded"><i
                                                                        class="ti ti-discount-2 fs-18"></i></span>
                                                            </div>
                                                            <div
                                                                class="flex-grow-1 d-flex align-items-center justify-content-between">
                                                                <div>
                                                                    <p class="mb-0 fw-semibold"><a
                                                                            href="notifications">Discount Available</a>
                                                                    </p>
                                                                    <span
                                                                        class="text-muted fw-normal fs-12 header-notification-text">Discount
                                                                        Available On Selected Products</span>
                                                                </div>
                                                                <div> <a aria-label="anchor"
                                                                        href="javascript:void(0);"
                                                                        class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                                            class="ti ti-x fs-16"></i></a> </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <div class="d-flex align-items-start">
                                                            <div class="pe-2"> <span
                                                                    class="avatar avatar-md bg-pink-transparent avatar-rounded"><i
                                                                        class="ti ti-user-check fs-18"></i></span>
                                                            </div>
                                                            <div
                                                                class="flex-grow-1 d-flex align-items-center justify-content-between">
                                                                <div>
                                                                    <p class="mb-0 fw-semibold"><a
                                                                            href="notifications">Account Has Been
                                                                            Verified</a></p>
                                                                    <span
                                                                        class="text-muted fw-normal fs-12 header-notification-text">Your
                                                                        Account Has Been Verified Sucessfully</span>
                                                                </div>
                                                                <div> <a aria-label="anchor"
                                                                        href="javascript:void(0);"
                                                                        class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                                            class="ti ti-x fs-16"></i></a> </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <div class="d-flex align-items-start">
                                                            <div class="pe-2"> <span
                                                                    class="avatar avatar-md bg-warning-transparent avatar-rounded"><i
                                                                        class="ti ti-circle-check fs-18"></i></span>
                                                            </div>
                                                            <div
                                                                class="flex-grow-1 d-flex align-items-center justify-content-between">
                                                                <div>
                                                                    <p class="mb-0 fw-semibold"><a
                                                                            href="notifications">Order Placed <span
                                                                                class="text-warning">ID:
                                                                                #1116773</span></a></p>
                                                                    <span
                                                                        class="text-muted fw-normal fs-12 header-notification-text">Order
                                                                        Placed Successfully</span>
                                                                </div>
                                                                <div> <a aria-label="anchor"
                                                                        href="javascript:void(0);"
                                                                        class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                                            class="ti ti-x fs-16"></i></a> </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown-item">
                                                        <div class="d-flex align-items-start">
                                                            <div class="pe-2"> <span
                                                                    class="avatar avatar-md bg-success-transparent avatar-rounded"><i
                                                                        class="ti ti-clock fs-18"></i></span> </div>
                                                            <div
                                                                class="flex-grow-1 d-flex align-items-center justify-content-between">
                                                                <div>
                                                                    <p class="mb-0 fw-semibold"><a
                                                                            href="notifications">Order Delayed <span
                                                                                class="text-success">ID:
                                                                                7731116</span></a></p>
                                                                    <span
                                                                        class="text-muted fw-normal fs-12 header-notification-text">Order
                                                                        Delayed Unfortunately</span>
                                                                </div>
                                                                <div> <a aria-label="anchor"
                                                                        href="javascript:void(0);"
                                                                        class="min-w-fit-content text-muted me-1 dropdown-item-close1"><i
                                                                            class="ti ti-x fs-16"></i></a> </div>
                                                            </div>
                                                        </div>
                                                    </li>
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
                            </ul>
                            <div class="p-3 empty-header-item1 border-top">
                                <div class="d-grid"> <a href="notifications" class="btn btn-primary">View All</a>
                                </div>
                            </div>
                            <div class="p-5 empty-item1 d-none">
                                <div class="text-center">
                                    <span class="avatar avatar-xl avatar-rounded bg-secondary-transparent"> <i
                                            class="ri-notification-off-line fs-2"></i> </span>
                                    <h6 class="fw-semibold mt-3">No New Notifications</h6>
                                </div>
                            </div>
                        </div>
                        <!-- End::main-header-dropdown -->
                    </div>
                    <!-- End::header-element --> <!-- Start::header-element -->
                    <div class="header-element header-shortcuts-dropdown">
                        <!-- Start::header-link|dropdown-toggle --> <a aria-label="anchor" href="javascript:void(0);"
                            class="header-link dropdown-toggle" data-bs-toggle="dropdown"
                            data-bs-auto-close="outside" id="notificationDropdown" aria-expanded="false"> <i
                                class="bx bx-grid-alt header-link-icon"></i> </a>
                        <!-- End::header-link|dropdown-toggle --> <!-- Start::main-header-dropdown -->
                        <div class="main-header-dropdown header-shortcuts-dropdown dropdown-menu pb-0 dropdown-menu-end"
                            aria-labelledby="notificationDropdown">
                            <div class="p-3">
                                <div class="d-flex align-items-center justify-content-between">
                                    <p class="mb-0 fs-17 fw-semibold">Related Apps</p>
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
                                                aria-label="scrollable content"
                                                style="height: auto; overflow: hidden;">
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
                                        All</a> </div>
                            </div>
                        </div>
                        <!-- End::main-header-dropdown -->
                    </div>
                    <!-- End::header-element --> <!-- Start::header-element -->
                    <div class="header-element header-fullscreen">
                        <!-- Start::header-link --> <a aria-label="anchor"
                            href="javascript:void(0);" class="header-link"> <i
                                class="bx bx-fullscreen full-screen-open header-link-icon"></i> <i
                                class="bx bx-exit-fullscreen full-screen-close header-link-icon d-none"></i> </a>
                        <!-- End::header-link -->
                    </div>
                    <!-- End::header-element --> <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link|dropdown-toggle -->
                        <a href="javascript:void(0);" class="header-link dropdown-toggle" id="mainHeaderProfile"
                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                            <div class="d-flex align-items-center">
                                <div class="me-sm-2 me-0"> <img src="{{ asset('images/crm/faces/9.jpg') }}" alt="img"
                                        width="32" height="32" class="rounded-circle"> </div>
                                <div class="d-sm-block d-none">
                                    <p class="fw-semibold mb-0 lh-1">Json Taylor</p>
                                    <span class="op-7 fw-normal d-block fs-11">Web Designer</span>
                                </div>
                            </div>
                        </a>
                        <!-- End::header-link|dropdown-toggle -->
                        <ul class="main-header-dropdown dropdown-menu pt-0 overflow-hidden header-profile-dropdown dropdown-menu-end"
                            aria-labelledby="mainHeaderProfile">
                            <li><a class="dropdown-item d-flex" href="profile"><i
                                        class="ti ti-user-circle fs-18 me-2 op-7"></i>Profile</a></li>
                            <li><a class="dropdown-item d-flex" href="mail"><i
                                        class="ti ti-inbox fs-18 me-2 op-7"></i>Inbox <span
                                        class="badge bg-success-transparent ms-auto">25</span></a></li>
                            <li><a class="dropdown-item d-flex border-block-end" href="to-do-list"><i
                                        class="ti ti-clipboard-check fs-18 me-2 op-7"></i>Task Manager</a></li>
                            <li><a class="dropdown-item d-flex" href="mail-settings"><i
                                        class="ti ti-adjustments-horizontal fs-18 me-2 op-7"></i>Settings</a></li>
                            <li><a class="dropdown-item d-flex border-block-end" href="javascript:void(0);"><i
                                        class="ti ti-wallet fs-18 me-2 op-7"></i>Bal: $7,12,950</a></li>
                            <li><a class="dropdown-item d-flex" href="chat"><i
                                        class="ti ti-headset fs-18 me-2 op-7"></i>Support</a></li>
                            <li><a class="dropdown-item d-flex" href="sign-in-cover"><i
                                        class="ti ti-logout fs-18 me-2 op-7"></i>Log Out</a></li>
                        </ul>
                    </div>
                    <!-- End::header-element --> <!-- Start::header-element -->
                    <div class="header-element">
                        <!-- Start::header-link|switcher-icon --> <a aria-label="anchor" href="javascript:void(0);"
                            class="header-link switcher-icon" data-bs-toggle="offcanvas"
                            data-bs-target="#switcher-canvas"> <i class="bx bx-cog header-link-icon"></i> </a>
                        <!-- End::header-link|switcher-icon -->
                    </div>
                    <!-- End::header-element -->
                </div>
                <!-- End::header-content-right -->
            </div>
            <!-- End::main-header-container -->
        </header>
        <!-- /app-header --> <!-- Start::app-sidebar -->
        <aside class="app-sidebar sticky sticky-pin" id="sidebar">
            <!-- Start::main-sidebar-header -->
            <div class="main-sidebar-header"> <a href="index" class="header-logo"> <img
                        src="{{ asset('images/svg/tbl_logo.svg') }}" alt="logo" class="desktop-logo">
                    <img src="{{ asset('images/svg/tbl_logo.svg') }}" alt="logo" class="toggle-logo">
                    <img src="{{ asset('images/svg/tbl_logo.svg') }}" alt="logo" class="desktop-dark">
                    <img src="{{ asset('images/svg/tbl_logo.svg') }}" alt="logo" class="toggle-dark">
                    <img src="{{ asset('images/svg/tbl_logo.svg') }}" alt="logo"
                        class="desktop-white"> <img src="{{ asset('images/svg/tbl_logo.svg') }}"
                        alt="logo" class="toggle-white"> </a> </div>
            <!-- End::main-sidebar-header --> <!-- Start::main-sidebar -->
            <div class="main-sidebar" id="sidebar-scroll" data-simplebar="init">
                <div class="simplebar-wrapper" style="margin: -8px 0px -80px;">
                    <div class="simplebar-height-auto-observer-wrapper">
                        <div class="simplebar-height-auto-observer"></div>
                    </div>
                    <div class="simplebar-mask">
                        <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                            <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                                <div class="simplebar-content" style="padding: 8px 0px 80px;">
                                    <!-- Start::nav -->
                                    <nav aria-label="Main Navigation"
                                        class="main-menu-container nav nav-pills flex-column sub-open">
                                        <div class="slide-left d-none" id="slide-left">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24"
                                                height="24" viewBox="0 0 24 24">
                                                <path
                                                    d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z">
                                                </path>
                                            </svg>
                                        </div>
                                        <ul class="main-menu" style="margin-left: 0px; margin-right: 0px;">
                                            <!-- Start::slide__category -->
                                            <li class="slide__category"><span class="category-name">Main</span></li>
                                            <!-- End::slide__category --> <!-- Start::slide -->
                                            <li class="slide has-sub">
                                                <a href="javascript:void(0);" class="side-menu__item"> <i
                                                        class="bx bx-home side-menu__icon"></i> <span
                                                        class="side-menu__label">Dashboards<span
                                                            class="badge bg-warning-transparent ms-2">12</span></span>
                                                    <i class="fe fe-chevron-right side-menu__angle"></i> </a>
                                                <ul class="slide-menu child1" data-popper-placement="bottom"
                                                    style="position: relative; left: 0px; top: 0px; margin: 0px; transform: translate3d(119.2px, 1022.4px, 0px);"
                                                    data-popper-reference-hidden="" data-popper-escaped="">
                                                    <li class="slide side-menu__label1"> <a
                                                            href="javascript:void(0)">Dashboards</a> </li>
                                                    <li class="slide"> <a href="index"
                                                            class="side-menu__item">CRM</a> </li>
                                                    <li class="slide"> <a href="index-1"
                                                            class="side-menu__item">Ecommerce</a> </li>
                                                    <li class="slide"> <a href="index-2"
                                                            class="side-menu__item">Crypto</a> </li>
                                                    <li class="slide"> <a href="index-3"
                                                            class="side-menu__item">Jobs</a> </li>
                                                    <li class="slide"> <a href="index-4"
                                                            class="side-menu__item">NFT</a> </li>
                                                    <li class="slide"> <a href="index-5"
                                                            class="side-menu__item">Sales</a> </li>
                                                    <li class="slide"> <a href="index-6"
                                                            class="side-menu__item">Analytics</a> </li>
                                                    <li class="slide"> <a href="index-7"
                                                            class="side-menu__item">Projects</a> </li>
                                                    <li class="slide"> <a href="index-8"
                                                            class="side-menu__item">HRM</a> </li>
                                                    <li class="slide"> <a href="index-9"
                                                            class="side-menu__item">Stocks</a> </li>
                                                    <li class="slide"> <a href="index-10"
                                                            class="side-menu__item">Courses</a> </li>
                                                    <li class="slide"> <a href="index-11"
                                                            class="side-menu__item">Personal</a> </li>
                                                </ul>
                                            </li>
                                            <!-- End::slide --> <!-- Start::slide__category -->
                                            <li class="slide__category"><span class="category-name">Pages</span>
                                            </li>
                                            <!-- End::slide__category --> <!-- Start::slide -->
                                            <li class="slide has-sub">
                                                <a href="javascript:void(0);" class="side-menu__item"> <i
                                                        class="bx bx-file-blank side-menu__icon"></i> <span
                                                        class="side-menu__label">Pages<span
                                                            class="badge bg-secondary-transparent ms-2">New</span></span>
                                                    <i class="fe fe-chevron-right side-menu__angle"></i> </a>
                                                <ul class="slide-menu child1" data-popper-placement="bottom"
                                                    style="position: relative; left: 0px; top: 0px; margin: 0px; transform: translate3d(119.2px, 1111.2px, 0px);"
                                                    data-popper-reference-hidden="" data-popper-escaped="">
                                                    <li class="slide side-menu__label1"> <a
                                                            href="javascript:void(0)">Pages</a> </li>
                                                    <li class="slide"> <a href="about-us"
                                                            class="side-menu__item">About Us</a> </li>
                                                    <li class="slide"> <a href="counters"
                                                            class="side-menu__item">Counters</a> </li>
                                                    <li class="slide has-sub">
                                                        <a href="javascript:void(0);" class="side-menu__item">Blog
                                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                                        <ul class="slide-menu child2">
                                                            <li class="slide"> <a href="blog"
                                                                    class="side-menu__item">Blog</a> </li>
                                                            <li class="slide"> <a href="blog-details"
                                                                    class="side-menu__item">Blog Details</a> </li>
                                                            <li class="slide"> <a href="blog-create"
                                                                    class="side-menu__item">Create Blog</a> </li>
                                                        </ul>
                                                    </li>
                                                    <li class="slide"> <a href="chat"
                                                            class="side-menu__item">Chat</a> </li>
                                                    <li class="slide"> <a href="contacts"
                                                            class="side-menu__item">Contacts</a> </li>
                                                    <li class="slide"> <a href="contact-us"
                                                            class="side-menu__item">Contact Us</a> </li>
                                                    <li class="slide has-sub">
                                                        <a href="javascript:void(0);"
                                                            class="side-menu__item">Ecommerce <i
                                                                class="fe fe-chevron-right side-menu__angle"></i></a>
                                                        <ul class="slide-menu child2">
                                                            <li class="slide"> <a href="add-products"
                                                                    class="side-menu__item">Add Products</a> </li>
                                                            <li class="slide"> <a href="cart"
                                                                    class="side-menu__item">Cart</a> </li>
                                                            <li class="slide"> <a href="checkout"
                                                                    class="side-menu__item">Checkout</a> </li>
                                                            <li class="slide"> <a href="edit-products"
                                                                    class="side-menu__item">Edit Products</a> </li>
                                                            <li class="slide"> <a href="order-details"
                                                                    class="side-menu__item">Order Details</a> </li>
                                                            <li class="slide"> <a href="orders"
                                                                    class="side-menu__item">Orders</a> </li>
                                                            <li class="slide"> <a href="products"
                                                                    class="side-menu__item">Products</a> </li>
                                                            <li class="slide"> <a href="product-details"
                                                                    class="side-menu__item">Product Details</a> </li>
                                                            <li class="slide"> <a href="products-list"
                                                                    class="side-menu__item">Products List</a> </li>
                                                            <li class="slide"> <a href="wishlist"
                                                                    class="side-menu__item">Wishlist</a> </li>
                                                        </ul>
                                                    </li>
                                                    <li class="slide has-sub">
                                                        <a href="javascript:void(0);" class="side-menu__item">Email
                                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                                        <ul class="slide-menu child2">
                                                            <li class="slide"> <a href="mail"
                                                                    class="side-menu__item">Mail App</a> </li>
                                                            <li class="slide"> <a href="mail-settings"
                                                                    class="side-menu__item">Mail Settings</a> </li>
                                                        </ul>
                                                    </li>
                                                    <li class="slide"> <a href="empty"
                                                            class="side-menu__item">Empty</a> </li>
                                                    <li class="slide"> <a href="faq's"
                                                            class="side-menu__item">FAQ's</a> </li>
                                                    <li class="slide has-sub">
                                                        <a href="javascript:void(0);" class="side-menu__item">File
                                                            Manager <i
                                                                class="fe fe-chevron-right side-menu__angle"></i></a>
                                                        <ul class="slide-menu child2">
                                                            <li class="slide"> <a href="file-manager"
                                                                    class="side-menu__item">File Manager</a> </li>
                                                        </ul>
                                                    </li>
                                                    <li class="slide has-sub">
                                                        <a href="javascript:void(0);"
                                                            class="side-menu__item">Invoice <i
                                                                class="fe fe-chevron-right side-menu__angle"></i></a>
                                                        <ul class="slide-menu child2">
                                                            <li class="slide"> <a href="invoice-create"
                                                                    class="side-menu__item">Create Invoice</a> </li>
                                                            <li class="slide"> <a href="invoice-details"
                                                                    class="side-menu__item">Invoice Details</a> </li>
                                                            <li class="slide"> <a href="invoice-list"
                                                                    class="side-menu__item">Invoice List</a> </li>
                                                        </ul>
                                                    </li>
                                                    <li class="slide"> <a href="landing"
                                                            class="side-menu__item">Landing</a> </li>
                                                    <li class="slide"> <a href="landing-jobs"
                                                            class="side-menu__item">Jobs Landing<span
                                                                class="badge bg-secondary-transparent ms-2">New</span></a>
                                                    </li>
                                                    <li class="slide"> <a href="notifications"
                                                            class="side-menu__item">Notifications</a> </li>
                                                    <li class="slide"> <a href="pricing"
                                                            class="side-menu__item">Pricing</a> </li>
                                                    <li class="slide"> <a href="profile"
                                                            class="side-menu__item">Profile</a> </li>
                                                    <li class="slide"> <a href="reviews"
                                                            class="side-menu__item">Reviews</a> </li>
                                                    <li class="slide"> <a href="team"
                                                            class="side-menu__item">Team</a> </li>
                                                    <li class="slide"> <a href="terms_conditions"
                                                            class="side-menu__item">Terms &amp; Conditions</a> </li>
                                                    <li class="slide"> <a href="timeline"
                                                            class="side-menu__item">Timeline</a> </li>
                                                    <li class="slide"> <a href="to-do-list"
                                                            class="side-menu__item">To Do List</a> </li>
                                                </ul>
                                            </li>
                                            <!-- End::slide --> <!-- Start::slide -->
                                            <li class="slide has-sub">
                                                <a href="javascript:void(0);" class="side-menu__item"> <i
                                                        class="bx bx-task side-menu__icon"></i> <span
                                                        class="side-menu__label">Task<span
                                                            class="badge bg-secondary-transparent ms-2">New</span></span>
                                                    <i class="fe fe-chevron-right side-menu__angle"></i> </a>
                                                <ul class="slide-menu child1" data-popper-placement="bottom"
                                                    style="position: relative; left: 0px; top: 0px; margin: 0px; transform: translate3d(119.2px, 1161.6px, 0px);"
                                                    data-popper-reference-hidden="" data-popper-escaped="">
                                                    <li class="slide side-menu__label1"> <a
                                                            href="javascript:void(0)">Task</a> </li>
                                                    <li class="slide"> <a href="task-kanban-board"
                                                            class="side-menu__item">Kanban Board</a> </li>
                                                    <li class="slide"> <a href="task-list-view"
                                                            class="side-menu__item">List View</a> </li>
                                                    <li class="slide"> <a href="task-details"
                                                            class="side-menu__item">Task Details</a> </li>
                                                </ul>
                                            </li>
                                            <!-- End::slide --> <!-- Start::slide -->
                                            <li class="slide has-sub">
                                                <a href="javascript:void(0);" class="side-menu__item"> <i
                                                        class="bx bx-fingerprint side-menu__icon"></i> <span
                                                        class="side-menu__label">Authentication</span> <i
                                                        class="fe fe-chevron-right side-menu__angle"></i> </a>
                                                <ul class="slide-menu child1" data-popper-placement="bottom"
                                                    style="position: relative; left: 0px; top: 0px; margin: 0px; transform: translate3d(119.2px, 1212px, 0px);"
                                                    data-popper-reference-hidden="" data-popper-escaped="">
                                                    <li class="slide side-menu__label1"> <a
                                                            href="javascript:void(0)">Authentication</a> </li>
                                                    <li class="slide"> <a href="coming-soon"
                                                            class="side-menu__item">Coming Soon</a> </li>
                                                    <li class="slide has-sub">
                                                        <a href="javascript:void(0);" class="side-menu__item">Create
                                                            Password <i
                                                                class="fe fe-chevron-right side-menu__angle"></i></a>
                                                        <ul class="slide-menu child2">
                                                            <li class="slide"> <a href="create-password-basic"
                                                                    class="side-menu__item">Basic</a> </li>
                                                            <li class="slide"> <a href="create-password-cover"
                                                                    class="side-menu__item">Cover</a> </li>
                                                        </ul>
                                                    </li>
                                                    <li class="slide has-sub">
                                                        <a href="javascript:void(0);" class="side-menu__item">Lock
                                                            Screen <i
                                                                class="fe fe-chevron-right side-menu__angle"></i></a>
                                                        <ul class="slide-menu child2">
                                                            <li class="slide"> <a href="lockscreen-basic"
                                                                    class="side-menu__item">Basic</a> </li>
                                                            <li class="slide"> <a href="lockscreen-cover"
                                                                    class="side-menu__item">Cover</a> </li>
                                                        </ul>
                                                    </li>
                                                    <li class="slide has-sub">
                                                        <a href="javascript:void(0);" class="side-menu__item">Reset
                                                            Password <i
                                                                class="fe fe-chevron-right side-menu__angle"></i></a>
                                                        <ul class="slide-menu child2">
                                                            <li class="slide"> <a href="reset-password-basic"
                                                                    class="side-menu__item">Basic</a> </li>
                                                            <li class="slide"> <a href="reset-password-cover"
                                                                    class="side-menu__item">Cover</a> </li>
                                                        </ul>
                                                    </li>
                                                    <li class="slide has-sub">
                                                        <a href="javascript:void(0);" class="side-menu__item">Sign
                                                            Up <i
                                                                class="fe fe-chevron-right side-menu__angle"></i></a>
                                                        <ul class="slide-menu child2">
                                                            <li class="slide"> <a href="sign-up-basic"
                                                                    class="side-menu__item">Basic</a> </li>
                                                            <li class="slide"> <a href="sign-up-cover"
                                                                    class="side-menu__item">Cover</a> </li>
                                                        </ul>
                                                    </li>
                                                    <li class="slide has-sub">
                                                        <a href="javascript:void(0);" class="side-menu__item">Sign
                                                            In <i
                                                                class="fe fe-chevron-right side-menu__angle"></i></a>
                                                        <ul class="slide-menu child2">
                                                            <li class="slide"> <a href="sign-in-basic"
                                                                    class="side-menu__item">Basic</a> </li>
                                                            <li class="slide"> <a href="sign-in-cover"
                                                                    class="side-menu__item">Cover</a> </li>
                                                        </ul>
                                                    </li>
                                                    <li class="slide has-sub">
                                                        <a href="javascript:void(0);" class="side-menu__item">Two
                                                            Step Verification <i
                                                                class="fe fe-chevron-right side-menu__angle"></i></a>
                                                        <ul class="slide-menu child2">
                                                            <li class="slide"> <a
                                                                    href="two-step-verification-basic"
                                                                    class="side-menu__item">Basic</a> </li>
                                                            <li class="slide"> <a
                                                                    href="two-step-verification-cover"
                                                                    class="side-menu__item">Cover</a> </li>
                                                        </ul>
                                                    </li>
                                                    <li class="slide"> <a href="under-maintenance"
                                                            class="side-menu__item">Under Maintenance</a> </li>
                                                </ul>
                                            </li>
                                            <!-- End::slide --> <!-- Start::slide -->
                                            <li class="slide has-sub">
                                                <a href="javascript:void(0);" class="side-menu__item"> <i
                                                        class="bx bx-error side-menu__icon"></i> <span
                                                        class="side-menu__label">Error</span> <i
                                                        class="fe fe-chevron-right side-menu__angle"></i> </a>
                                                <ul class="slide-menu child1" data-popper-placement="bottom"
                                                    style="position: relative; left: 0px; top: 0px; margin: 0px; transform: translate3d(119.2px, 1262.4px, 0px);"
                                                    data-popper-reference-hidden="" data-popper-escaped="">
                                                    <li class="slide side-menu__label1"> <a
                                                            href="javascript:void(0)">Error</a> </li>
                                                    <li class="slide"> <a href="401-error"
                                                            class="side-menu__item">401 - Error</a> </li>
                                                    <li class="slide"> <a href="404-error"
                                                            class="side-menu__item">404 - Error</a> </li>
                                                    <li class="slide"> <a href="500-error"
                                                            class="side-menu__item">500 - Error</a> </li>
                                                </ul>
                                            </li>
                                            <!-- End::slide --> <!-- Start::slide__category -->
                                            <li class="slide__category"><span class="category-name">General</span>
                                            </li>
                                            <!-- End::slide__category --> <!-- Start::slide -->
                                            <li class="slide has-sub">
                                                <a href="javascript:void(0);" class="side-menu__item"> <i
                                                        class="bx bx-box side-menu__icon"></i> <span
                                                        class="side-menu__label">Ui Elements</span> <i
                                                        class="fe fe-chevron-right side-menu__angle"></i> </a>
                                                <ul class="slide-menu child1 mega-menu"
                                                    data-popper-placement="bottom"
                                                    style="position: relative; left: 0px; top: 0px; margin: 0px; transform: translate3d(119.2px, 1351.2px, 0px);"
                                                    data-popper-reference-hidden="" data-popper-escaped="">
                                                    <li class="slide side-menu__label1"> <a
                                                            href="javascript:void(0)">Ui Elements</a> </li>
                                                    <li class="slide"> <a href="alerts"
                                                            class="side-menu__item">Alerts</a> </li>
                                                    <li class="slide"> <a href="badge"
                                                            class="side-menu__item">Badge</a> </li>
                                                    <li class="slide"> <a href="breadcrumb"
                                                            class="side-menu__item">Breadcrumb</a> </li>
                                                    <li class="slide"> <a href="buttons"
                                                            class="side-menu__item">Buttons</a> </li>
                                                    <li class="slide"> <a href="buttongroup"
                                                            class="side-menu__item">Button Group</a> </li>
                                                    <li class="slide"> <a href="cards"
                                                            class="side-menu__item">Cards</a> </li>
                                                    <li class="slide"> <a href="dropdowns"
                                                            class="side-menu__item">Dropdowns</a> </li>
                                                    <li class="slide"> <a href="images_figures"
                                                            class="side-menu__item">Images &amp; Figures</a> </li>
                                                    <li class="slide"> <a href="links_interactions"
                                                            class="side-menu__item">Links &amp; Interactions</a> </li>
                                                    <li class="slide"> <a href="listgroup"
                                                            class="side-menu__item">List Group</a> </li>
                                                    <li class="slide"> <a href="navs_tabs"
                                                            class="side-menu__item">Navs &amp; Tabs</a> </li>
                                                    <li class="slide"> <a href="object-fit"
                                                            class="side-menu__item">Object Fit</a> </li>
                                                    <li class="slide"> <a href="pagination"
                                                            class="side-menu__item">Pagination</a> </li>
                                                    <li class="slide"> <a href="popovers"
                                                            class="side-menu__item">Popovers</a> </li>
                                                    <li class="slide"> <a href="progress"
                                                            class="side-menu__item">Progress</a> </li>
                                                    <li class="slide"> <a href="spinners"
                                                            class="side-menu__item">Spinners</a> </li>
                                                    <li class="slide"> <a href="toasts"
                                                            class="side-menu__item">Toasts</a> </li>
                                                    <li class="slide"> <a href="tooltips"
                                                            class="side-menu__item">Tooltips</a> </li>
                                                    <li class="slide"> <a href="typography"
                                                            class="side-menu__item">Typography</a> </li>
                                                </ul>
                                            </li>
                                            <!-- End::slide --> <!-- Start::slide -->
                                            <li class="slide has-sub">
                                                <a href="javascript:void(0);" class="side-menu__item"> <i
                                                        class="bx bx-medal side-menu__icon"></i> <span
                                                        class="side-menu__label">Utilities</span> <i
                                                        class="fe fe-chevron-right side-menu__angle"></i> </a>
                                                <ul class="slide-menu child1" data-popper-placement="bottom"
                                                    style="position: relative; left: 0px; top: 0px; margin: 0px; transform: translate3d(119.2px, 1401.6px, 0px);"
                                                    data-popper-reference-hidden="" data-popper-escaped="">
                                                    <li class="slide side-menu__label1"> <a
                                                            href="javascript:void(0)">Utilities</a> </li>
                                                    <li class="slide"> <a href="avatars"
                                                            class="side-menu__item">Avatars</a> </li>
                                                    <li class="slide"> <a href="borders"
                                                            class="side-menu__item">Borders</a> </li>
                                                    <li class="slide"> <a href="breakpoints"
                                                            class="side-menu__item">Breakpoints</a> </li>
                                                    <li class="slide"> <a href="colors"
                                                            class="side-menu__item">Colors</a> </li>
                                                    <li class="slide"> <a href="columns"
                                                            class="side-menu__item">Columns</a> </li>
                                                    <li class="slide"> <a href="flex"
                                                            class="side-menu__item">Flex</a> </li>
                                                    <li class="slide"> <a href="gutters"
                                                            class="side-menu__item">Gutters</a> </li>
                                                    <li class="slide"> <a href="helpers"
                                                            class="side-menu__item">Helpers</a> </li>
                                                    <li class="slide"> <a href="position"
                                                            class="side-menu__item">Position</a> </li>
                                                    <li class="slide"> <a href="more"
                                                            class="side-menu__item">Additional Content</a> </li>
                                                </ul>
                                            </li>
                                            <!-- End::slide --> <!-- Start::slide -->
                                            <li class="slide has-sub">
                                                <a href="javascript:void(0);" class="side-menu__item"> <i
                                                        class="bx bx-file side-menu__icon"></i> <span
                                                        class="side-menu__label">Forms</span> <i
                                                        class="fe fe-chevron-right side-menu__angle"></i> </a>
                                                <ul class="slide-menu child1" data-popper-placement="bottom"
                                                    style="position: relative; left: 0px; top: 0px; margin: 0px; transform: translate3d(119.2px, 1452px, 0px);">
                                                    <li class="slide side-menu__label1"> <a
                                                            href="javascript:void(0)">Forms</a> </li>
                                                    <li class="slide has-sub">
                                                        <a href="javascript:void(0);" class="side-menu__item">Form
                                                            Elements <i
                                                                class="fe fe-chevron-right side-menu__angle"></i></a>
                                                        <ul class="slide-menu child2">
                                                            <li class="slide"> <a href="form_inputs"
                                                                    class="side-menu__item">Inputs</a> </li>
                                                            <li class="slide"> <a href="form_check_radios"
                                                                    class="side-menu__item">Checks &amp; Radios</a>
                                                            </li>
                                                            <li class="slide"> <a href="form_input_group"
                                                                    class="side-menu__item">Input Group</a> </li>
                                                            <li class="slide"> <a href="form_select"
                                                                    class="side-menu__item">Form Select</a> </li>
                                                            <li class="slide"> <a href="form_range"
                                                                    class="side-menu__item">Range Slider</a> </li>
                                                            <li class="slide"> <a href="form_input_masks"
                                                                    class="side-menu__item">Input Masks</a> </li>
                                                            <li class="slide"> <a href="form_file_uploads"
                                                                    class="side-menu__item">File Uploads</a> </li>
                                                            <li class="slide"> <a href="form_dateTime_pickers"
                                                                    class="side-menu__item">Date,Time Picker</a> </li>
                                                            <li class="slide"> <a href="form_color_pickers"
                                                                    class="side-menu__item">Color Pickers</a> </li>
                                                        </ul>
                                                    </li>
                                                    <li class="slide has-sub">
                                                        <a href="javascript:void(0);" class="side-menu__item">Form
                                                            Wizards <i
                                                                class="fe fe-chevron-right side-menu__angle"></i></a>
                                                        <ul class="slide-menu child2">
                                                            <li class="slide"> <a href="form-wizard"
                                                                    class="side-menu__item">Js</a> </li>
                                                            <li class="slide"> <a href="blazor-form-wizard"
                                                                    class="side-menu__item">Blazor</a> </li>
                                                        </ul>
                                                    </li>
                                                    <li class="slide"> <a href="floating_labels"
                                                            class="side-menu__item">Floating Labels</a> </li>
                                                    <li class="slide"> <a href="form_layout"
                                                            class="side-menu__item">Form Layouts</a> </li>
                                                    <li class="slide has-sub">
                                                        <a href="javascript:void(0);" class="side-menu__item">Form
                                                            Editors <i
                                                                class="fe fe-chevron-right side-menu__angle"></i></a>
                                                        <ul class="slide-menu child2">
                                                            <li class="slide"> <a href="quill_editor"
                                                                    class="side-menu__item">Quill Editor</a> </li>
                                                        </ul>
                                                    </li>
                                                    <li class="slide"> <a href="form_validation"
                                                            class="side-menu__item">Validation</a> </li>
                                                    <li class="slide"> <a href="form_select2"
                                                            class="side-menu__item">Select2</a> </li>
                                                </ul>
                                            </li>
                                            <!-- End::slide --> <!-- Start::slide -->
                                            <li class="slide has-sub">
                                                <a href="javascript:void(0);" class="side-menu__item"> <i
                                                        class="bx bx-party side-menu__icon"></i> <span
                                                        class="side-menu__label">Advanced Ui</span> <i
                                                        class="fe fe-chevron-right side-menu__angle"></i> </a>
                                                <ul class="slide-menu child1" data-popper-placement="bottom"
                                                    style="position: relative; left: 0px; top: 0px; margin: 0px; transform: translate3d(119.2px, 1502.4px, 0px);">
                                                    <li class="slide side-menu__label1"> <a
                                                            href="javascript:void(0)">Advanced Ui</a> </li>
                                                    <li class="slide"> <a href="accordions_collpase"
                                                            class="side-menu__item">Accordions &amp; Collapse</a>
                                                    </li>
                                                    <li class="slide"> <a href="carousel"
                                                            class="side-menu__item">Carousel</a> </li>
                                                    <li class="slide"> <a href="draggable-cards"
                                                            class="side-menu__item">Draggable Cards</a> </li>
                                                    <li class="slide"> <a href="modals_closes"
                                                            class="side-menu__item">Modals &amp; Closes</a> </li>
                                                    <li class="slide"> <a href="navbar"
                                                            class="side-menu__item">Navbar</a> </li>
                                                    <li class="slide"> <a href="offcanvas"
                                                            class="side-menu__item">Offcanvas</a> </li>
                                                    <li class="slide"> <a href="placeholders"
                                                            class="side-menu__item">Placeholders</a> </li>
                                                    <li class="slide"> <a href="ratings"
                                                            class="side-menu__item">Ratings</a> </li>
                                                    <li class="slide"> <a href="slickcarousel"
                                                            class="side-menu__item">Slick Carousel</a> </li>
                                                    <li class="slide"> <a href="treeview"
                                                            class="side-menu__item">Treeview</a> </li>
                                                </ul>
                                            </li>
                                            <!-- End::slide --> <!-- Start::slide -->
                                            <li class="slide"> <a href="widgets" class="side-menu__item"> <i
                                                        class="bx bx-gift side-menu__icon"></i> <span
                                                        class="side-menu__label">Widgets<span
                                                            class="badge bg-danger-transparent ms-2">Hot</span></span>
                                                </a> </li>
                                            <!-- End::slide --> <!-- Start::slide__category -->
                                            <li class="slide__category"><span class="category-name">Web Apps</span>
                                            </li>
                                            <!-- End::slide__category --> <!-- Start::slide -->
                                            <li class="slide has-sub">
                                                <a href="javascript:void(0);" class="side-menu__item"> <i
                                                        class="bx bx-grid-alt side-menu__icon"></i> <span
                                                        class="side-menu__label">Apps<span
                                                            class="badge bg-secondary-transparent ms-2">New</span></span>
                                                    <i class="fe fe-chevron-right side-menu__angle"></i> </a>
                                                <ul class="slide-menu child1" data-popper-placement="top"
                                                    style="position: relative; left: 0px; top: 0px; margin: 0px; transform: translate3d(119.2px, 1583.2px, 0px);">
                                                    <li class="slide side-menu__label1"> <a
                                                            href="javascript:void(0)">Apps</a> </li>
                                                    <li class="slide has-sub">
                                                        <a href="javascript:void(0);"
                                                            class="side-menu__item">Calendar <i
                                                                class="fe fe-chevron-right side-menu__angle"></i> </a>
                                                        <ul class="slide-menu child2">
                                                            <li class="slide"> <a href="full-calendar"
                                                                    class="side-menu__item">Full Calendar</a> </li>
                                                            <li class="slide"> <a href="blazor-calendar"
                                                                    class="side-menu__item">Blazor Calendar</a> </li>
                                                        </ul>
                                                    </li>
                                                    <li class="slide"> <a href="gallery"
                                                            class="side-menu__item">Gallery</a> </li>
                                                    <li class="slide"> <a href="sweet_alerts"
                                                            class="side-menu__item">Sweet Alerts</a> </li>
                                                    <li class="slide has-sub">
                                                        <a href="javascript:void(0);"
                                                            class="side-menu__item">Projects<span
                                                                class="badge bg-secondary-transparent ms-2">New</span>
                                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                                        <ul class="slide-menu child2">
                                                            <li class="slide"> <a href="projects-list"
                                                                    class="side-menu__item">Projects List</a> </li>
                                                            <li class="slide"> <a href="projects-overview"
                                                                    class="side-menu__item">Project Overview</a> </li>
                                                            <li class="slide"> <a href="projects-create"
                                                                    class="side-menu__item">Create Project</a> </li>
                                                        </ul>
                                                    </li>
                                                    <li class="slide has-sub">
                                                        <a href="javascript:void(0);"
                                                            class="side-menu__item">Jobs<span
                                                                class="badge bg-secondary-transparent ms-2">New</span>
                                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                                        <ul class="slide-menu child2">
                                                            <li class="slide"> <a href="job-details"
                                                                    class="side-menu__item">Job Details</a> </li>
                                                            <li class="slide"> <a href="job-company-search"
                                                                    class="side-menu__item">Search Company</a> </li>
                                                            <li class="slide"> <a href="job-search"
                                                                    class="side-menu__item">Search Jobs</a> </li>
                                                            <li class="slide"> <a href="job-post"
                                                                    class="side-menu__item">Job Post</a> </li>
                                                            <li class="slide"> <a href="jobs-list"
                                                                    class="side-menu__item">Jobs List</a> </li>
                                                            <li class="slide"> <a href="job-candidate-search"
                                                                    class="side-menu__item">Search Candidate</a> </li>
                                                            <li class="slide"> <a href="job-candidate-details"
                                                                    class="side-menu__item">Candidate Details</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="slide has-sub">
                                                        <a href="javascript:void(0);"
                                                            class="side-menu__item">NFT<span
                                                                class="badge bg-secondary-transparent ms-2">New</span>
                                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                                        <ul class="slide-menu child2">
                                                            <li class="slide"> <a href="nft-marketplace"
                                                                    class="side-menu__item">Market Place</a> </li>
                                                            <li class="slide"> <a href="nft-details"
                                                                    class="side-menu__item">NFT Details</a> </li>
                                                            <li class="slide"> <a href="nft-create"
                                                                    class="side-menu__item">Create NFT</a> </li>
                                                            <li class="slide"> <a href="nft-wallet-integration"
                                                                    class="side-menu__item">Wallet Integration</a>
                                                            </li>
                                                            <li class="slide"> <a href="nft-live-auction"
                                                                    class="side-menu__item">Live Auction</a> </li>
                                                        </ul>
                                                    </li>
                                                    <li class="slide has-sub">
                                                        <a href="javascript:void(0);"
                                                            class="side-menu__item">CRM<span
                                                                class="badge bg-secondary-transparent ms-2">New</span>
                                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                                        <ul class="slide-menu child2">
                                                            <li class="slide"> <a href="crm-contacts"
                                                                    class="side-menu__item">Contacts</a> </li>
                                                            <li class="slide"> <a href="crm-companies"
                                                                    class="side-menu__item">Companies</a> </li>
                                                            <li class="slide"> <a href="crm-deals"
                                                                    class="side-menu__item">Deals</a> </li>
                                                            <li class="slide"> <a href="crm-leads"
                                                                    class="side-menu__item">Leads</a> </li>
                                                        </ul>
                                                    </li>
                                                    <li class="slide has-sub">
                                                        <a href="javascript:void(0);"
                                                            class="side-menu__item">Crypto<span
                                                                class="badge bg-secondary-transparent ms-2">New</span>
                                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                                        <ul class="slide-menu child2">
                                                            <li class="slide"> <a href="crypto-transactions"
                                                                    class="side-menu__item">Transactions</a> </li>
                                                            <li class="slide"> <a href="crypto-currency-exchange"
                                                                    class="side-menu__item">Currency Exchange</a>
                                                            </li>
                                                            <li class="slide"> <a href="crypto-buy_sell"
                                                                    class="side-menu__item">Buy &amp; Sell</a> </li>
                                                            <li class="slide"> <a href="crypto-marketcap"
                                                                    class="side-menu__item">Marketcap</a> </li>
                                                            <li class="slide"> <a href="crypto-wallet"
                                                                    class="side-menu__item">Wallet</a> </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- End::slide --> <!-- Start::slide -->
                                            <li class="slide has-sub">
                                                <a href="javascript:void(0);" class="side-menu__item"> <i
                                                        class="bx bx-layer side-menu__icon"></i> <span
                                                        class="side-menu__label">Nested Menu</span> <i
                                                        class="fe fe-chevron-right side-menu__angle"></i> </a>
                                                <ul class="slide-menu child1" data-popper-placement="top"
                                                    style="position: relative; left: 0px; top: 0px; margin: 0px; transform: translate3d(119.2px, 1633.6px, 0px);"
                                                    data-popper-reference-hidden="" data-popper-escaped="">
                                                    <li class="slide side-menu__label1"> <a
                                                            href="javascript:void(0)">Nested Menu</a> </li>
                                                    <li class="slide"> <a href="javascript:void(0);"
                                                            class="side-menu__item">Nested-1</a> </li>
                                                    <li class="slide has-sub">
                                                        <a href="javascript:void(0);"
                                                            class="side-menu__item">Nested-2 <i
                                                                class="fe fe-chevron-right side-menu__angle"></i></a>
                                                        <ul class="slide-menu child2">
                                                            <li class="slide"> <a href="javascript:void(0);"
                                                                    class="side-menu__item">Nested-2-1</a> </li>
                                                            <li class="slide has-sub">
                                                                <a href="javascript:void(0);"
                                                                    class="side-menu__item">Nested-2-2 <i
                                                                        class="fe fe-chevron-right side-menu__angle"></i></a>
                                                                <ul class="slide-menu child3">
                                                                    <li class="slide"> <a
                                                                            href="javascript:void(0);"
                                                                            class="side-menu__item">Nested-2-2-1</a>
                                                                    </li>
                                                                    <li class="slide"> <a
                                                                            href="javascript:void(0);"
                                                                            class="side-menu__item">Nested-2-2-2</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <!-- End::slide --> <!-- Start::slide__category -->
                                            <li class="slide__category"><span class="category-name">Tables &amp;
                                                    Charts</span></li>
                                            <!-- End::slide__category --> <!-- Start::slide -->
                                            <li class="slide has-sub">
                                                <a href="javascript:void(0);" class="side-menu__item"> <i
                                                        class="bx bx-table side-menu__icon"></i> <span
                                                        class="side-menu__label">Tables<span
                                                            class="badge bg-success-transparent ms-2">3</span></span>
                                                    <i class="fe fe-chevron-right side-menu__angle"></i> </a>
                                                <ul class="slide-menu child1" data-popper-placement="top"
                                                    style="position: relative; left: 0px; top: 0px; margin: 0px; transform: translate3d(119.2px, 1722.4px, 0px);"
                                                    data-popper-reference-hidden="" data-popper-escaped="">
                                                    <li class="slide side-menu__label1"> <a
                                                            href="javascript:void(0)">Tables</a> </li>
                                                    <li class="slide"> <a href="tables"
                                                            class="side-menu__item">Tables</a> </li>
                                                    <li class="slide"> <a href="grid-tables"
                                                            class="side-menu__item">Grid JS Tables</a> </li>
                                                    <li class="slide"> <a href="data-tables"
                                                            class="side-menu__item">Data Tables</a> </li>
                                                </ul>
                                            </li>
                                            <!-- End::slide --> <!-- Start::slide -->
                                            <li class="slide has-sub">
                                                <a href="javascript:void(0);" class="side-menu__item"> <i
                                                        class="bx bx-bar-chart-square side-menu__icon"></i> <span
                                                        class="side-menu__label">Charts</span> <i
                                                        class="fe fe-chevron-right side-menu__angle"></i> </a>
                                                <ul class="slide-menu child1" data-popper-placement="top"
                                                    style="position: relative; left: 0px; top: 0px; margin: 0px; transform: translate3d(119.2px, 1772.8px, 0px);"
                                                    data-popper-reference-hidden="" data-popper-escaped="">
                                                    <li class="slide side-menu__label1"> <a
                                                            href="javascript:void(0)">Charts</a> </li>
                                                    <li class="slide has-sub">
                                                        <a href="javascript:void(0);" class="side-menu__item">Apex
                                                            Charts <i
                                                                class="fe fe-chevron-right side-menu__angle"></i></a>
                                                        <ul class="slide-menu child2">
                                                            <li class="slide"> <a href="apex-line-charts"
                                                                    class="side-menu__item">Line Charts</a> </li>
                                                            <li class="slide"> <a href="apex-area-charts"
                                                                    class="side-menu__item">Area Charts</a> </li>
                                                            <li class="slide"> <a href="apex-column-charts"
                                                                    class="side-menu__item">Column Charts</a> </li>
                                                            <li class="slide"> <a href="apex-bar-charts"
                                                                    class="side-menu__item">Bar Charts</a> </li>
                                                            <li class="slide"> <a href="apex-mixed-charts"
                                                                    class="side-menu__item">Mixed Charts</a> </li>
                                                            <li class="slide"> <a href="apex-rangearea-charts"
                                                                    class="side-menu__item">Range Area Charts</a>
                                                            </li>
                                                            <li class="slide"> <a href="apex-timeline-charts"
                                                                    class="side-menu__item">Timeline Charts</a> </li>
                                                            <li class="slide"> <a href="apex-candlestick-charts"
                                                                    class="side-menu__item">CandleStick Charts</a>
                                                            </li>
                                                            <li class="slide"> <a href="apex-boxplot-charts"
                                                                    class="side-menu__item">Boxplot Charts</a> </li>
                                                            <li class="slide"> <a href="apex-bubble-charts"
                                                                    class="side-menu__item">Bubble Charts</a> </li>
                                                            <li class="slide"> <a href="apex-scatter-charts"
                                                                    class="side-menu__item">Scatter Charts</a> </li>
                                                            <li class="slide"> <a href="apex-heatmap-charts"
                                                                    class="side-menu__item">Heatmap Charts</a> </li>
                                                            <li class="slide"> <a href="apex-treemap-charts"
                                                                    class="side-menu__item">Treemap Charts</a> </li>
                                                            <li class="slide"> <a href="apex-pie-charts"
                                                                    class="side-menu__item">Pie Charts</a> </li>
                                                            <li class="slide"> <a href="apex-radialbar-charts"
                                                                    class="side-menu__item">Radialbar Charts</a> </li>
                                                            <li class="slide"> <a href="apex-radar-charts"
                                                                    class="side-menu__item">Radar Charts</a> </li>
                                                            <li class="slide"> <a href="apex-polararea-charts"
                                                                    class="side-menu__item">Polararea Charts</a> </li>
                                                        </ul>
                                                    </li>
                                                    <li class="slide"> <a href="chartjs-charts"
                                                            class="side-menu__item">Chartjs Charts</a> </li>
                                                </ul>
                                            </li>
                                            <!-- End::slide --> <!-- Start::slide__category -->
                                            <li class="slide__category"><span class="category-name">Maps &amp;
                                                    Icons</span></li>
                                            <!-- End::slide__category --> <!-- Start::slide -->
                                            <li class="slide has-sub">
                                                <a href="javascript:void(0);" class="side-menu__item"> <i
                                                        class="bx bx-map side-menu__icon"></i> <span
                                                        class="side-menu__label">Maps</span> <i
                                                        class="fe fe-chevron-right side-menu__angle"></i> </a>
                                                <ul class="slide-menu child1" data-popper-placement="top"
                                                    style="position: relative; left: 0px; top: 0px; margin: 0px; transform: translate3d(119.2px, 1861.6px, 0px);"
                                                    data-popper-reference-hidden="" data-popper-escaped="">
                                                    <li class="slide side-menu__label1"> <a
                                                            href="javascript:void(0)">Maps</a> </li>
                                                    <li class="slide"> <a href="google-maps"
                                                            class="side-menu__item">Google Maps</a> </li>
                                                    <li class="slide"> <a href="leaflet-maps"
                                                            class="side-menu__item">Leaflet Maps</a> </li>
                                                    <li class="slide"> <a href="vector-maps"
                                                            class="side-menu__item">Vector Maps</a> </li>
                                                </ul>
                                            </li>
                                            <!-- End::slide --> <!-- Start::slide -->
                                            <li class="slide"> <a href="icons" class="side-menu__item"> <i
                                                        class="bx bx-store-alt side-menu__icon"></i> <span
                                                        class="side-menu__label">Icons</span> </a> </li>
                                            <!-- End::slide -->
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
        <!-- End::app-sidebar --> <!-- Start::app-content -->
        <div class="main-content app-content">
            <div class="container-fluid">
                <!-- Start::page-header -->
                <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
                    <div>
                        <p class="fw-semibold fs-18 mb-0">Welcome back, Json Taylor !</p>
                        <span class="fs-semibold text-muted">Track your sales activity, leads and deals here.</span>
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
                                            <div class="card-title"> Top Deals </div>
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
                                                        <div class="me-2"> <span
                                                                class="avatar avatar-sm avatar-rounded"> <img
                                                                    src="{{ asset('images/crm/faces/10.jpg') }}"
                                                                    alt=""> </span> </div>
                                                        <div class="flex-fill">
                                                            <p class="fw-semibold mb-0">Michael Jordan</p>
                                                            <span
                                                                class="text-muted fs-12">michael.jordan@example.com</span>
                                                        </div>
                                                        <div class="fw-semibold fs-15">$2,893</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-top flex-wrap">
                                                        <div class="me-2"> <span
                                                                class="avatar avatar-sm avatar-rounded bg-warning-transparent fw-semibold">
                                                                EK </span> </div>
                                                        <div class="flex-fill">
                                                            <p class="fw-semibold mb-0">Emigo Kiaren</p>
                                                            <span
                                                                class="text-muted fs-12">emigo.kiaren@gmail.com</span>
                                                        </div>
                                                        <div class="fw-semibold fs-15">$4,289</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-top flex-wrap">
                                                        <div class="me-2"> <span
                                                                class="avatar avatar-sm avatar-rounded"> <img
                                                                    src="{{ asset('images/crm/faces/12.jpg') }}"
                                                                    alt=""> </span> </div>
                                                        <div class="flex-fill">
                                                            <p class="fw-semibold mb-0">Randy Origoan</p>
                                                            <span
                                                                class="text-muted fs-12">randy.origoan@gmail.com</span>
                                                        </div>
                                                        <div class="fw-semibold fs-15">$6,347</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-top flex-wrap">
                                                        <div class="me-2"> <span
                                                                class="avatar avatar-sm avatar-rounded bg-success-transparent fw-semibold">
                                                                GP </span> </div>
                                                        <div class="flex-fill">
                                                            <p class="fw-semibold mb-0">George Pieterson</p>
                                                            <span
                                                                class="text-muted fs-12">george.pieterson@gmail.com</span>
                                                        </div>
                                                        <div class="fw-semibold fs-15">$3,894</div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="d-flex align-items-top flex-wrap">
                                                        <div class="me-2"> <span
                                                                class="avatar avatar-sm avatar-rounded bg-primary-transparent fw-semibold">
                                                                KA </span> </div>
                                                        <div class="flex-fill">
                                                            <p class="fw-semibold mb-0">Kiara Advain</p>
                                                            <span
                                                                class="text-muted fs-12">kiaraadvain214@gmail.com</span>
                                                        </div>
                                                        <div class="fw-semibold fs-15">$2,679</div>
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
                                                    <div> <span class="avatar avatar-md avatar-rounded bg-primary"> <i
                                                                class="ti ti-users fs-16"></i> </span> </div>
                                                    <div class="flex-fill ms-3">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between flex-wrap">
                                                            <div>
                                                                <p class="text-muted mb-0">Total Customers</p>
                                                                <h4 class="fw-semibold mt-1">1,02,890</h4>
                                                            </div>
                                                            <div id="crm-total-customers" style="min-height: 40px;">
                                                                <div id="apexchartsr6wg7996"
                                                                    class="apexcharts-canvas apexchartsr6wg7996 apexcharts-theme-light"
                                                                    style="width: 100px; height: 40px;">
                                                                    <svg id="SvgjsSvg6175" width="100"
                                                                        height="40"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        version="1.1"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        xmlns:svgjs="http://svgjs.dev"
                                                                        class="apexcharts-svg"
                                                                        xmlns:data="ApexChartsNS"
                                                                        transform="translate(0, 0)"
                                                                        style="background: transparent;">
                                                                        <foreignObject x="0" y="0" width="100"
                                                                            height="40">
                                                                            <div class="apexcharts-legend"
                                                                                xmlns="http://www.w3.org/1999/xhtml"
                                                                                style="max-height: 20px;"></div>
                                                                        </foreignObject>
                                                                        <rect id="SvgjsRect6179" width="0"
                                                                            height="0" x="0" y="0"
                                                                            rx="0" ry="0"
                                                                            opacity="1" stroke-width="0"
                                                                            stroke="none" stroke-dasharray="0"
                                                                            fill="#fefefe"></rect>
                                                                        <g id="SvgjsG6222" class="apexcharts-yaxis"
                                                                            rel="0"
                                                                            transform="translate(-18, 0)"></g>
                                                                        <g id="SvgjsG6177"
                                                                            class="apexcharts-inner apexcharts-graphical"
                                                                            transform="translate(0, 0)">
                                                                            <defs id="SvgjsDefs6176">
                                                                                <clipPath id="gridRectMaskr6wg7996">
                                                                                    <rect id="SvgjsRect6181"
                                                                                        width="105.5"
                                                                                        height="41.5" x="-2.75"
                                                                                        y="-0.75" rx="0"
                                                                                        ry="0"
                                                                                        opacity="1"
                                                                                        stroke-width="0"
                                                                                        stroke="none"
                                                                                        stroke-dasharray="0"
                                                                                        fill="#fff"></rect>
                                                                                </clipPath>
                                                                                <clipPath id="forecastMaskr6wg7996">
                                                                                </clipPath>
                                                                                <clipPath
                                                                                    id="nonForecastMaskr6wg7996">
                                                                                </clipPath>
                                                                                <clipPath
                                                                                    id="gridRectMarkerMaskr6wg7996">
                                                                                    <rect id="SvgjsRect6182"
                                                                                        width="104"
                                                                                        height="44" x="-2" y="-2"
                                                                                        rx="0"
                                                                                        ry="0"
                                                                                        opacity="1"
                                                                                        stroke-width="0"
                                                                                        stroke="none"
                                                                                        stroke-dasharray="0"
                                                                                        fill="#fff"></rect>
                                                                                </clipPath>
                                                                                <linearGradient
                                                                                    id="SvgjsLinearGradient6187"
                                                                                    x1="0" y1="1"
                                                                                    x2="1" y2="1">
                                                                                    <stop id="SvgjsStop6188"
                                                                                        stop-opacity="0.9"
                                                                                        stop-color="rgba(66,45,112,0.9)"
                                                                                        offset="0"></stop>
                                                                                    <stop id="SvgjsStop6189"
                                                                                        stop-opacity="0.9"
                                                                                        stop-color="rgba(132,90,223,0.9)"
                                                                                        offset="0.98"></stop>
                                                                                    <stop id="SvgjsStop6190"
                                                                                        stop-opacity="0.9"
                                                                                        stop-color="rgba(132,90,223,0.9)"
                                                                                        offset="1"></stop>
                                                                                </linearGradient>
                                                                            </defs>
                                                                            <line id="SvgjsLine6180" x1="0"
                                                                                y1="0" x2="0"
                                                                                y2="40" stroke="#b6b6b6"
                                                                                stroke-dasharray="3"
                                                                                stroke-linecap="butt"
                                                                                class="apexcharts-xcrosshairs" x="0"
                                                                                y="0" width="1" height="40"
                                                                                fill="#b1b9c4" filter="none"
                                                                                fill-opacity="0.9" stroke-width="1">
                                                                            </line>
                                                                            <g id="SvgjsG6192"
                                                                                class="apexcharts-grid">
                                                                                <g id="SvgjsG6193"
                                                                                    class="apexcharts-gridlines-horizontal"
                                                                                    style="display: none;">
                                                                                    <line id="SvgjsLine6196"
                                                                                        x1="0"
                                                                                        y1="0"
                                                                                        x2="100"
                                                                                        y2="0"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6197"
                                                                                        x1="0"
                                                                                        y1="4"
                                                                                        x2="100"
                                                                                        y2="4"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6198"
                                                                                        x1="0"
                                                                                        y1="8"
                                                                                        x2="100"
                                                                                        y2="8"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6199"
                                                                                        x1="0"
                                                                                        y1="12"
                                                                                        x2="100"
                                                                                        y2="12"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6200"
                                                                                        x1="0"
                                                                                        y1="16"
                                                                                        x2="100"
                                                                                        y2="16"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6201"
                                                                                        x1="0"
                                                                                        y1="20"
                                                                                        x2="100"
                                                                                        y2="20"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6202"
                                                                                        x1="0"
                                                                                        y1="24"
                                                                                        x2="100"
                                                                                        y2="24"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6203"
                                                                                        x1="0"
                                                                                        y1="28"
                                                                                        x2="100"
                                                                                        y2="28"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6204"
                                                                                        x1="0"
                                                                                        y1="32"
                                                                                        x2="100"
                                                                                        y2="32"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6205"
                                                                                        x1="0"
                                                                                        y1="36"
                                                                                        x2="100"
                                                                                        y2="36"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6206"
                                                                                        x1="0"
                                                                                        y1="40"
                                                                                        x2="100"
                                                                                        y2="40"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                </g>
                                                                                <g id="SvgjsG6194"
                                                                                    class="apexcharts-gridlines-vertical"
                                                                                    style="display: none;"></g>
                                                                                <line id="SvgjsLine6208"
                                                                                    x1="0" y1="40"
                                                                                    x2="100" y2="40"
                                                                                    stroke="transparent"
                                                                                    stroke-dasharray="0"
                                                                                    stroke-linecap="butt"></line>
                                                                                <line id="SvgjsLine6207"
                                                                                    x1="0" y1="1"
                                                                                    x2="0" y2="40"
                                                                                    stroke="transparent"
                                                                                    stroke-dasharray="0"
                                                                                    stroke-linecap="butt"></line>
                                                                            </g>
                                                                            <g id="SvgjsG6195"
                                                                                class="apexcharts-grid-borders"
                                                                                style="display: none;"></g>
                                                                            <g id="SvgjsG6183"
                                                                                class="apexcharts-line-series apexcharts-plot-series">
                                                                                <g id="SvgjsG6184"
                                                                                    class="apexcharts-series"
                                                                                    seriesName="Value"
                                                                                    data:longestSeries="true"
                                                                                    rel="1"
                                                                                    data:realIndex="0">
                                                                                    <path id="SvgjsPath6191"
                                                                                        d="M 0 5.217391304347828C 4.375 5.217391304347828 8.125 15.65217391304348 12.5 15.65217391304348C 16.875 15.65217391304348 20.625 6.956521739130437 25 6.956521739130437C 29.375 6.956521739130437 33.125 22.608695652173914 37.5 22.608695652173914C 41.875 22.608695652173914 45.625 7.105427357601002e-15 50 7.105427357601002e-15C 54.375 7.105427357601002e-15 58.125 5.217391304347828 62.5 5.217391304347828C 66.875 5.217391304347828 70.625 1.7391304347826164 75 1.7391304347826164C 79.375 1.7391304347826164 83.125 24.347826086956523 87.5 24.347826086956523C 91.875 24.347826086956523 95.625 19.1304347826087 100 19.1304347826087"
                                                                                        fill="none"
                                                                                        fill-opacity="1"
                                                                                        stroke="url(#SvgjsLinearGradient6187)"
                                                                                        stroke-opacity="1"
                                                                                        stroke-linecap="butt"
                                                                                        stroke-width="1.5"
                                                                                        stroke-dasharray="0"
                                                                                        class="apexcharts-line"
                                                                                        index="0"
                                                                                        clip-path="url(#gridRectMaskr6wg7996)"
                                                                                        pathTo="M 0 5.217391304347828C 4.375 5.217391304347828 8.125 15.65217391304348 12.5 15.65217391304348C 16.875 15.65217391304348 20.625 6.956521739130437 25 6.956521739130437C 29.375 6.956521739130437 33.125 22.608695652173914 37.5 22.608695652173914C 41.875 22.608695652173914 45.625 7.105427357601002e-15 50 7.105427357601002e-15C 54.375 7.105427357601002e-15 58.125 5.217391304347828 62.5 5.217391304347828C 66.875 5.217391304347828 70.625 1.7391304347826164 75 1.7391304347826164C 79.375 1.7391304347826164 83.125 24.347826086956523 87.5 24.347826086956523C 91.875 24.347826086956523 95.625 19.1304347826087 100 19.1304347826087"
                                                                                        pathFrom="M 0 5.217391304347828C 4.375 5.217391304347828 8.125 15.65217391304348 12.5 15.65217391304348C 16.875 15.65217391304348 20.625 6.956521739130437 25 6.956521739130437C 29.375 6.956521739130437 33.125 22.608695652173914 37.5 22.608695652173914C 41.875 22.608695652173914 45.625 7.105427357601002e-15 50 7.105427357601002e-15C 54.375 7.105427357601002e-15 58.125 5.217391304347828 62.5 5.217391304347828C 66.875 5.217391304347828 70.625 1.7391304347826164 75 1.7391304347826164C 79.375 1.7391304347826164 83.125 24.347826086956523 87.5 24.347826086956523C 91.875 24.347826086956523 95.625 19.1304347826087 100 19.1304347826087"
                                                                                        fill-rule="evenodd"></path>
                                                                                    <g id="SvgjsG6185"
                                                                                        class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                                        data:realIndex="0"></g>
                                                                                </g>
                                                                                <g id="SvgjsG6186"
                                                                                    class="apexcharts-datalabels"
                                                                                    data:realIndex="0"></g>
                                                                            </g>
                                                                            <line id="SvgjsLine6209" x1="0"
                                                                                y1="0" x2="100"
                                                                                y2="0" stroke="#b6b6b6"
                                                                                stroke-dasharray="0"
                                                                                stroke-width="1"
                                                                                stroke-linecap="butt"
                                                                                class="apexcharts-ycrosshairs"></line>
                                                                            <line id="SvgjsLine6210" x1="0"
                                                                                y1="0" x2="100"
                                                                                y2="0" stroke-dasharray="0"
                                                                                stroke-width="0"
                                                                                stroke-linecap="butt"
                                                                                class="apexcharts-ycrosshairs-hidden">
                                                                            </line>
                                                                            <g id="SvgjsG6211"
                                                                                class="apexcharts-xaxis"
                                                                                transform="translate(0, 0)">
                                                                                <g id="SvgjsG6212"
                                                                                    class="apexcharts-xaxis-texts-g"
                                                                                    transform="translate(0, -4)"></g>
                                                                            </g>
                                                                            <g id="SvgjsG6223"
                                                                                class="apexcharts-yaxis-annotations">
                                                                            </g>
                                                                            <g id="SvgjsG6224"
                                                                                class="apexcharts-xaxis-annotations">
                                                                            </g>
                                                                            <g id="SvgjsG6225"
                                                                                class="apexcharts-point-annotations">
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between mt-1">
                                                            <div> <a class="text-primary"
                                                                    href="javascript:void(0);">View All<i
                                                                        class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                                            </div>
                                                            <div class="text-end">
                                                                <p class="mb-0 text-success fw-semibold">+40%</p>
                                                                <span class="text-muted op-7 fs-11">this month</span>
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
                                                    <div> <span class="avatar avatar-md avatar-rounded bg-secondary">
                                                            <i class="ti ti-wallet fs-16"></i> </span> </div>
                                                    <div class="flex-fill ms-3">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between flex-wrap">
                                                            <div>
                                                                <p class="text-muted mb-0">Total Revenue</p>
                                                                <h4 class="fw-semibold mt-1">$56,562</h4>
                                                            </div>
                                                            <div id="crm-total-revenue" style="min-height: 40px;">
                                                                <div id="apexchartsmxmztn0o"
                                                                    class="apexcharts-canvas apexchartsmxmztn0o apexcharts-theme-light"
                                                                    style="width: 100px; height: 40px;">
                                                                    <svg id="SvgjsSvg6226" width="100"
                                                                        height="40"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        version="1.1"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        xmlns:svgjs="http://svgjs.dev"
                                                                        class="apexcharts-svg"
                                                                        xmlns:data="ApexChartsNS"
                                                                        transform="translate(0, 0)"
                                                                        style="background: transparent;">
                                                                        <foreignObject x="0" y="0" width="100"
                                                                            height="40">
                                                                            <div class="apexcharts-legend"
                                                                                xmlns="http://www.w3.org/1999/xhtml"
                                                                                style="max-height: 20px;"></div>
                                                                        </foreignObject>
                                                                        <rect id="SvgjsRect6230" width="0"
                                                                            height="0" x="0" y="0"
                                                                            rx="0" ry="0"
                                                                            opacity="1" stroke-width="0"
                                                                            stroke="none" stroke-dasharray="0"
                                                                            fill="#fefefe"></rect>
                                                                        <g id="SvgjsG6273" class="apexcharts-yaxis"
                                                                            rel="0"
                                                                            transform="translate(-18, 0)"></g>
                                                                        <g id="SvgjsG6228"
                                                                            class="apexcharts-inner apexcharts-graphical"
                                                                            transform="translate(0, 0)">
                                                                            <defs id="SvgjsDefs6227">
                                                                                <clipPath id="gridRectMaskmxmztn0o">
                                                                                    <rect id="SvgjsRect6232"
                                                                                        width="105.5"
                                                                                        height="41.5" x="-2.75"
                                                                                        y="-0.75" rx="0"
                                                                                        ry="0"
                                                                                        opacity="1"
                                                                                        stroke-width="0"
                                                                                        stroke="none"
                                                                                        stroke-dasharray="0"
                                                                                        fill="#fff"></rect>
                                                                                </clipPath>
                                                                                <clipPath id="forecastMaskmxmztn0o">
                                                                                </clipPath>
                                                                                <clipPath
                                                                                    id="nonForecastMaskmxmztn0o">
                                                                                </clipPath>
                                                                                <clipPath
                                                                                    id="gridRectMarkerMaskmxmztn0o">
                                                                                    <rect id="SvgjsRect6233"
                                                                                        width="104"
                                                                                        height="44" x="-2" y="-2"
                                                                                        rx="0"
                                                                                        ry="0"
                                                                                        opacity="1"
                                                                                        stroke-width="0"
                                                                                        stroke="none"
                                                                                        stroke-dasharray="0"
                                                                                        fill="#fff"></rect>
                                                                                </clipPath>
                                                                                <linearGradient
                                                                                    id="SvgjsLinearGradient6238"
                                                                                    x1="0" y1="1"
                                                                                    x2="1" y2="1">
                                                                                    <stop id="SvgjsStop6239"
                                                                                        stop-opacity="0.9"
                                                                                        stop-color="rgba(18,92,115,0.9)"
                                                                                        offset="0"></stop>
                                                                                    <stop id="SvgjsStop6240"
                                                                                        stop-opacity="0.9"
                                                                                        stop-color="rgba(35,183,229,0.9)"
                                                                                        offset="0.98"></stop>
                                                                                    <stop id="SvgjsStop6241"
                                                                                        stop-opacity="0.9"
                                                                                        stop-color="rgba(35,183,229,0.9)"
                                                                                        offset="1"></stop>
                                                                                </linearGradient>
                                                                            </defs>
                                                                            <line id="SvgjsLine6231" x1="0"
                                                                                y1="0" x2="0"
                                                                                y2="40" stroke="#b6b6b6"
                                                                                stroke-dasharray="3"
                                                                                stroke-linecap="butt"
                                                                                class="apexcharts-xcrosshairs" x="0"
                                                                                y="0" width="1" height="40"
                                                                                fill="#b1b9c4" filter="none"
                                                                                fill-opacity="0.9" stroke-width="1">
                                                                            </line>
                                                                            <g id="SvgjsG6243"
                                                                                class="apexcharts-grid">
                                                                                <g id="SvgjsG6244"
                                                                                    class="apexcharts-gridlines-horizontal"
                                                                                    style="display: none;">
                                                                                    <line id="SvgjsLine6247"
                                                                                        x1="0"
                                                                                        y1="0"
                                                                                        x2="100"
                                                                                        y2="0"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6248"
                                                                                        x1="0"
                                                                                        y1="4"
                                                                                        x2="100"
                                                                                        y2="4"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6249"
                                                                                        x1="0"
                                                                                        y1="8"
                                                                                        x2="100"
                                                                                        y2="8"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6250"
                                                                                        x1="0"
                                                                                        y1="12"
                                                                                        x2="100"
                                                                                        y2="12"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6251"
                                                                                        x1="0"
                                                                                        y1="16"
                                                                                        x2="100"
                                                                                        y2="16"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6252"
                                                                                        x1="0"
                                                                                        y1="20"
                                                                                        x2="100"
                                                                                        y2="20"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6253"
                                                                                        x1="0"
                                                                                        y1="24"
                                                                                        x2="100"
                                                                                        y2="24"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6254"
                                                                                        x1="0"
                                                                                        y1="28"
                                                                                        x2="100"
                                                                                        y2="28"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6255"
                                                                                        x1="0"
                                                                                        y1="32"
                                                                                        x2="100"
                                                                                        y2="32"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6256"
                                                                                        x1="0"
                                                                                        y1="36"
                                                                                        x2="100"
                                                                                        y2="36"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6257"
                                                                                        x1="0"
                                                                                        y1="40"
                                                                                        x2="100"
                                                                                        y2="40"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                </g>
                                                                                <g id="SvgjsG6245"
                                                                                    class="apexcharts-gridlines-vertical"
                                                                                    style="display: none;"></g>
                                                                                <line id="SvgjsLine6259"
                                                                                    x1="0" y1="40"
                                                                                    x2="100" y2="40"
                                                                                    stroke="transparent"
                                                                                    stroke-dasharray="0"
                                                                                    stroke-linecap="butt"></line>
                                                                                <line id="SvgjsLine6258"
                                                                                    x1="0" y1="1"
                                                                                    x2="0" y2="40"
                                                                                    stroke="transparent"
                                                                                    stroke-dasharray="0"
                                                                                    stroke-linecap="butt"></line>
                                                                            </g>
                                                                            <g id="SvgjsG6246"
                                                                                class="apexcharts-grid-borders"
                                                                                style="display: none;"></g>
                                                                            <g id="SvgjsG6234"
                                                                                class="apexcharts-line-series apexcharts-plot-series">
                                                                                <g id="SvgjsG6235"
                                                                                    class="apexcharts-series"
                                                                                    seriesName="Value"
                                                                                    data:longestSeries="true"
                                                                                    rel="1"
                                                                                    data:realIndex="0">
                                                                                    <path id="SvgjsPath6242"
                                                                                        d="M 0 8C 4.375 8 8.125 17.6 12.5 17.6C 16.875 17.6 20.625 8 25 8C 29.375 8 33.125 4.799999999999997 37.5 4.799999999999997C 41.875 4.799999999999997 45.625 25.6 50 25.6C 54.375 25.6 58.125 20.8 62.5 20.8C 66.875 20.8 70.625 9.600000000000001 75 9.600000000000001C 79.375 9.600000000000001 83.125 24 87.5 24C 91.875 24 95.625 0 100 0"
                                                                                        fill="none"
                                                                                        fill-opacity="1"
                                                                                        stroke="url(#SvgjsLinearGradient6238)"
                                                                                        stroke-opacity="1"
                                                                                        stroke-linecap="butt"
                                                                                        stroke-width="1.5"
                                                                                        stroke-dasharray="0"
                                                                                        class="apexcharts-line"
                                                                                        index="0"
                                                                                        clip-path="url(#gridRectMaskmxmztn0o)"
                                                                                        pathTo="M 0 8C 4.375 8 8.125 17.6 12.5 17.6C 16.875 17.6 20.625 8 25 8C 29.375 8 33.125 4.799999999999997 37.5 4.799999999999997C 41.875 4.799999999999997 45.625 25.6 50 25.6C 54.375 25.6 58.125 20.8 62.5 20.8C 66.875 20.8 70.625 9.600000000000001 75 9.600000000000001C 79.375 9.600000000000001 83.125 24 87.5 24C 91.875 24 95.625 0 100 0"
                                                                                        pathFrom="M -1 40 L -1 40 L 12.5 40 L 25 40 L 37.5 40 L 50 40 L 62.5 40 L 75 40 L 87.5 40 L 100 40"
                                                                                        fill-rule="evenodd"></path>
                                                                                    <g id="SvgjsG6236"
                                                                                        class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                                        data:realIndex="0"></g>
                                                                                </g>
                                                                                <g id="SvgjsG6237"
                                                                                    class="apexcharts-datalabels"
                                                                                    data:realIndex="0"></g>
                                                                            </g>
                                                                            <line id="SvgjsLine6260" x1="0"
                                                                                y1="0" x2="100"
                                                                                y2="0" stroke="#b6b6b6"
                                                                                stroke-dasharray="0"
                                                                                stroke-width="1"
                                                                                stroke-linecap="butt"
                                                                                class="apexcharts-ycrosshairs"></line>
                                                                            <line id="SvgjsLine6261" x1="0"
                                                                                y1="0" x2="100"
                                                                                y2="0" stroke-dasharray="0"
                                                                                stroke-width="0"
                                                                                stroke-linecap="butt"
                                                                                class="apexcharts-ycrosshairs-hidden">
                                                                            </line>
                                                                            <g id="SvgjsG6262"
                                                                                class="apexcharts-xaxis"
                                                                                transform="translate(0, 0)">
                                                                                <g id="SvgjsG6263"
                                                                                    class="apexcharts-xaxis-texts-g"
                                                                                    transform="translate(0, -4)"></g>
                                                                            </g>
                                                                            <g id="SvgjsG6274"
                                                                                class="apexcharts-yaxis-annotations">
                                                                            </g>
                                                                            <g id="SvgjsG6275"
                                                                                class="apexcharts-xaxis-annotations">
                                                                            </g>
                                                                            <g id="SvgjsG6276"
                                                                                class="apexcharts-point-annotations">
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between mt-1">
                                                            <div> <a class="text-secondary"
                                                                    href="javascript:void(0);">View All<i
                                                                        class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                                            </div>
                                                            <div class="text-end">
                                                                <p class="mb-0 text-success fw-semibold">+25%</p>
                                                                <span class="text-muted op-7 fs-11">this month</span>
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
                                                                <p class="text-muted mb-0">Conversion Ratio</p>
                                                                <h4 class="fw-semibold mt-1">12.08%</h4>
                                                            </div>
                                                            <div id="crm-conversion-ratio"
                                                                style="min-height: 40px;">
                                                                <div id="apexchartsch27b0ht"
                                                                    class="apexcharts-canvas apexchartsch27b0ht apexcharts-theme-light"
                                                                    style="width: 100px; height: 40px;">
                                                                    <svg id="SvgjsSvg6277" width="100"
                                                                        height="40"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        version="1.1"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        xmlns:svgjs="http://svgjs.dev"
                                                                        class="apexcharts-svg"
                                                                        xmlns:data="ApexChartsNS"
                                                                        transform="translate(0, 0)"
                                                                        style="background: transparent;">
                                                                        <foreignObject x="0" y="0" width="100"
                                                                            height="40">
                                                                            <div class="apexcharts-legend"
                                                                                xmlns="http://www.w3.org/1999/xhtml"
                                                                                style="max-height: 20px;"></div>
                                                                        </foreignObject>
                                                                        <rect id="SvgjsRect6281" width="0"
                                                                            height="0" x="0" y="0"
                                                                            rx="0" ry="0"
                                                                            opacity="1" stroke-width="0"
                                                                            stroke="none" stroke-dasharray="0"
                                                                            fill="#fefefe"></rect>
                                                                        <g id="SvgjsG6324" class="apexcharts-yaxis"
                                                                            rel="0"
                                                                            transform="translate(-18, 0)"></g>
                                                                        <g id="SvgjsG6279"
                                                                            class="apexcharts-inner apexcharts-graphical"
                                                                            transform="translate(0, 0)">
                                                                            <defs id="SvgjsDefs6278">
                                                                                <clipPath id="gridRectMaskch27b0ht">
                                                                                    <rect id="SvgjsRect6283"
                                                                                        width="105.5"
                                                                                        height="41.5" x="-2.75"
                                                                                        y="-0.75" rx="0"
                                                                                        ry="0"
                                                                                        opacity="1"
                                                                                        stroke-width="0"
                                                                                        stroke="none"
                                                                                        stroke-dasharray="0"
                                                                                        fill="#fff"></rect>
                                                                                </clipPath>
                                                                                <clipPath id="forecastMaskch27b0ht">
                                                                                </clipPath>
                                                                                <clipPath
                                                                                    id="nonForecastMaskch27b0ht">
                                                                                </clipPath>
                                                                                <clipPath
                                                                                    id="gridRectMarkerMaskch27b0ht">
                                                                                    <rect id="SvgjsRect6284"
                                                                                        width="104"
                                                                                        height="44" x="-2" y="-2"
                                                                                        rx="0"
                                                                                        ry="0"
                                                                                        opacity="1"
                                                                                        stroke-width="0"
                                                                                        stroke="none"
                                                                                        stroke-dasharray="0"
                                                                                        fill="#fff"></rect>
                                                                                </clipPath>
                                                                                <linearGradient
                                                                                    id="SvgjsLinearGradient6289"
                                                                                    x1="0" y1="1"
                                                                                    x2="1" y2="1">
                                                                                    <stop id="SvgjsStop6290"
                                                                                        stop-opacity="0.9"
                                                                                        stop-color="rgba(19,96,74,0.9)"
                                                                                        offset="0"></stop>
                                                                                    <stop id="SvgjsStop6291"
                                                                                        stop-opacity="0.9"
                                                                                        stop-color="rgba(38,191,148,0.9)"
                                                                                        offset="0.98"></stop>
                                                                                    <stop id="SvgjsStop6292"
                                                                                        stop-opacity="0.9"
                                                                                        stop-color="rgba(38,191,148,0.9)"
                                                                                        offset="1"></stop>
                                                                                </linearGradient>
                                                                            </defs>
                                                                            <line id="SvgjsLine6282" x1="0"
                                                                                y1="0" x2="0"
                                                                                y2="40" stroke="#b6b6b6"
                                                                                stroke-dasharray="3"
                                                                                stroke-linecap="butt"
                                                                                class="apexcharts-xcrosshairs" x="0"
                                                                                y="0" width="1" height="40"
                                                                                fill="#b1b9c4" filter="none"
                                                                                fill-opacity="0.9" stroke-width="1">
                                                                            </line>
                                                                            <g id="SvgjsG6294"
                                                                                class="apexcharts-grid">
                                                                                <g id="SvgjsG6295"
                                                                                    class="apexcharts-gridlines-horizontal"
                                                                                    style="display: none;">
                                                                                    <line id="SvgjsLine6298"
                                                                                        x1="0"
                                                                                        y1="0"
                                                                                        x2="100"
                                                                                        y2="0"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6299"
                                                                                        x1="0"
                                                                                        y1="4"
                                                                                        x2="100"
                                                                                        y2="4"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6300"
                                                                                        x1="0"
                                                                                        y1="8"
                                                                                        x2="100"
                                                                                        y2="8"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6301"
                                                                                        x1="0"
                                                                                        y1="12"
                                                                                        x2="100"
                                                                                        y2="12"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6302"
                                                                                        x1="0"
                                                                                        y1="16"
                                                                                        x2="100"
                                                                                        y2="16"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6303"
                                                                                        x1="0"
                                                                                        y1="20"
                                                                                        x2="100"
                                                                                        y2="20"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6304"
                                                                                        x1="0"
                                                                                        y1="24"
                                                                                        x2="100"
                                                                                        y2="24"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6305"
                                                                                        x1="0"
                                                                                        y1="28"
                                                                                        x2="100"
                                                                                        y2="28"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6306"
                                                                                        x1="0"
                                                                                        y1="32"
                                                                                        x2="100"
                                                                                        y2="32"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6307"
                                                                                        x1="0"
                                                                                        y1="36"
                                                                                        x2="100"
                                                                                        y2="36"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6308"
                                                                                        x1="0"
                                                                                        y1="40"
                                                                                        x2="100"
                                                                                        y2="40"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                </g>
                                                                                <g id="SvgjsG6296"
                                                                                    class="apexcharts-gridlines-vertical"
                                                                                    style="display: none;"></g>
                                                                                <line id="SvgjsLine6310"
                                                                                    x1="0" y1="40"
                                                                                    x2="100" y2="40"
                                                                                    stroke="transparent"
                                                                                    stroke-dasharray="0"
                                                                                    stroke-linecap="butt"></line>
                                                                                <line id="SvgjsLine6309"
                                                                                    x1="0" y1="1"
                                                                                    x2="0" y2="40"
                                                                                    stroke="transparent"
                                                                                    stroke-dasharray="0"
                                                                                    stroke-linecap="butt"></line>
                                                                            </g>
                                                                            <g id="SvgjsG6297"
                                                                                class="apexcharts-grid-borders"
                                                                                style="display: none;"></g>
                                                                            <g id="SvgjsG6285"
                                                                                class="apexcharts-line-series apexcharts-plot-series">
                                                                                <g id="SvgjsG6286"
                                                                                    class="apexcharts-series"
                                                                                    seriesName="Value"
                                                                                    data:longestSeries="true"
                                                                                    rel="1"
                                                                                    data:realIndex="0">
                                                                                    <path id="SvgjsPath6293"
                                                                                        d="M 0 8C 4.375 8 8.125 8 12.5 8C 16.875 8 20.625 4.799999999999997 25 4.799999999999997C 29.375 4.799999999999997 33.125 25.6 37.5 25.6C 41.875 25.6 45.625 17.6 50 17.6C 54.375 17.6 58.125 9.600000000000001 62.5 9.600000000000001C 66.875 9.600000000000001 70.625 24 75 24C 79.375 24 83.125 0 87.5 0C 91.875 0 95.625 20.8 100 20.8"
                                                                                        fill="none"
                                                                                        fill-opacity="1"
                                                                                        stroke="url(#SvgjsLinearGradient6289)"
                                                                                        stroke-opacity="1"
                                                                                        stroke-linecap="butt"
                                                                                        stroke-width="1.5"
                                                                                        stroke-dasharray="0"
                                                                                        class="apexcharts-line"
                                                                                        index="0"
                                                                                        clip-path="url(#gridRectMaskch27b0ht)"
                                                                                        pathTo="M 0 8C 4.375 8 8.125 8 12.5 8C 16.875 8 20.625 4.799999999999997 25 4.799999999999997C 29.375 4.799999999999997 33.125 25.6 37.5 25.6C 41.875 25.6 45.625 17.6 50 17.6C 54.375 17.6 58.125 9.600000000000001 62.5 9.600000000000001C 66.875 9.600000000000001 70.625 24 75 24C 79.375 24 83.125 0 87.5 0C 91.875 0 95.625 20.8 100 20.8"
                                                                                        pathFrom="M -1 40 L -1 40 L 12.5 40 L 25 40 L 37.5 40 L 50 40 L 62.5 40 L 75 40 L 87.5 40 L 100 40"
                                                                                        fill-rule="evenodd"></path>
                                                                                    <g id="SvgjsG6287"
                                                                                        class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                                        data:realIndex="0"></g>
                                                                                </g>
                                                                                <g id="SvgjsG6288"
                                                                                    class="apexcharts-datalabels"
                                                                                    data:realIndex="0"></g>
                                                                            </g>
                                                                            <line id="SvgjsLine6311" x1="0"
                                                                                y1="0" x2="100"
                                                                                y2="0" stroke="#b6b6b6"
                                                                                stroke-dasharray="0"
                                                                                stroke-width="1"
                                                                                stroke-linecap="butt"
                                                                                class="apexcharts-ycrosshairs"></line>
                                                                            <line id="SvgjsLine6312" x1="0"
                                                                                y1="0" x2="100"
                                                                                y2="0" stroke-dasharray="0"
                                                                                stroke-width="0"
                                                                                stroke-linecap="butt"
                                                                                class="apexcharts-ycrosshairs-hidden">
                                                                            </line>
                                                                            <g id="SvgjsG6313"
                                                                                class="apexcharts-xaxis"
                                                                                transform="translate(0, 0)">
                                                                                <g id="SvgjsG6314"
                                                                                    class="apexcharts-xaxis-texts-g"
                                                                                    transform="translate(0, -4)"></g>
                                                                            </g>
                                                                            <g id="SvgjsG6325"
                                                                                class="apexcharts-yaxis-annotations">
                                                                            </g>
                                                                            <g id="SvgjsG6326"
                                                                                class="apexcharts-xaxis-annotations">
                                                                            </g>
                                                                            <g id="SvgjsG6327"
                                                                                class="apexcharts-point-annotations">
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between mt-1">
                                                            <div> <a class="text-success"
                                                                    href="javascript:void(0);">View All<i
                                                                        class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                                            </div>
                                                            <div class="text-end">
                                                                <p class="mb-0 text-danger fw-semibold">-12%</p>
                                                                <span class="text-muted op-7 fs-11">this month</span>
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
                                                                <p class="text-muted mb-0">Total Deals</p>
                                                                <h4 class="fw-semibold mt-1">2,543</h4>
                                                            </div>
                                                            <div id="crm-total-deals" style="min-height: 40px;">
                                                                <div id="apexchartsd4jlntjph"
                                                                    class="apexcharts-canvas apexchartsd4jlntjph apexcharts-theme-light"
                                                                    style="width: 100px; height: 40px;">
                                                                    <svg id="SvgjsSvg6328" width="100"
                                                                        height="40"
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        version="1.1"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        xmlns:svgjs="http://svgjs.dev"
                                                                        class="apexcharts-svg"
                                                                        xmlns:data="ApexChartsNS"
                                                                        transform="translate(0, 0)"
                                                                        style="background: transparent;">
                                                                        <foreignObject x="0" y="0" width="100"
                                                                            height="40">
                                                                            <div class="apexcharts-legend"
                                                                                xmlns="http://www.w3.org/1999/xhtml"
                                                                                style="max-height: 20px;"></div>
                                                                        </foreignObject>
                                                                        <rect id="SvgjsRect6332" width="0"
                                                                            height="0" x="0" y="0"
                                                                            rx="0" ry="0"
                                                                            opacity="1" stroke-width="0"
                                                                            stroke="none" stroke-dasharray="0"
                                                                            fill="#fefefe"></rect>
                                                                        <g id="SvgjsG6375" class="apexcharts-yaxis"
                                                                            rel="0"
                                                                            transform="translate(-18, 0)"></g>
                                                                        <g id="SvgjsG6330"
                                                                            class="apexcharts-inner apexcharts-graphical"
                                                                            transform="translate(0, 0)">
                                                                            <defs id="SvgjsDefs6329">
                                                                                <clipPath id="gridRectMaskd4jlntjph">
                                                                                    <rect id="SvgjsRect6334"
                                                                                        width="105.5"
                                                                                        height="41.5" x="-2.75"
                                                                                        y="-0.75" rx="0"
                                                                                        ry="0"
                                                                                        opacity="1"
                                                                                        stroke-width="0"
                                                                                        stroke="none"
                                                                                        stroke-dasharray="0"
                                                                                        fill="#fff"></rect>
                                                                                </clipPath>
                                                                                <clipPath id="forecastMaskd4jlntjph">
                                                                                </clipPath>
                                                                                <clipPath
                                                                                    id="nonForecastMaskd4jlntjph">
                                                                                </clipPath>
                                                                                <clipPath
                                                                                    id="gridRectMarkerMaskd4jlntjph">
                                                                                    <rect id="SvgjsRect6335"
                                                                                        width="104"
                                                                                        height="44" x="-2" y="-2"
                                                                                        rx="0"
                                                                                        ry="0"
                                                                                        opacity="1"
                                                                                        stroke-width="0"
                                                                                        stroke="none"
                                                                                        stroke-dasharray="0"
                                                                                        fill="#fff"></rect>
                                                                                </clipPath>
                                                                                <linearGradient
                                                                                    id="SvgjsLinearGradient6340"
                                                                                    x1="0" y1="1"
                                                                                    x2="1" y2="1">
                                                                                    <stop id="SvgjsStop6341"
                                                                                        stop-opacity="0.9"
                                                                                        stop-color="rgba(123,92,37,0.9)"
                                                                                        offset="0"></stop>
                                                                                    <stop id="SvgjsStop6342"
                                                                                        stop-opacity="0.9"
                                                                                        stop-color="rgba(245,184,73,0.9)"
                                                                                        offset="0.98"></stop>
                                                                                    <stop id="SvgjsStop6343"
                                                                                        stop-opacity="0.9"
                                                                                        stop-color="rgba(245,184,73,0.9)"
                                                                                        offset="1"></stop>
                                                                                </linearGradient>
                                                                            </defs>
                                                                            <line id="SvgjsLine6333" x1="0"
                                                                                y1="0" x2="0"
                                                                                y2="40" stroke="#b6b6b6"
                                                                                stroke-dasharray="3"
                                                                                stroke-linecap="butt"
                                                                                class="apexcharts-xcrosshairs" x="0"
                                                                                y="0" width="1" height="40"
                                                                                fill="#b1b9c4" filter="none"
                                                                                fill-opacity="0.9" stroke-width="1">
                                                                            </line>
                                                                            <g id="SvgjsG6345"
                                                                                class="apexcharts-grid">
                                                                                <g id="SvgjsG6346"
                                                                                    class="apexcharts-gridlines-horizontal"
                                                                                    style="display: none;">
                                                                                    <line id="SvgjsLine6349"
                                                                                        x1="0"
                                                                                        y1="0"
                                                                                        x2="100"
                                                                                        y2="0"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6350"
                                                                                        x1="0"
                                                                                        y1="4"
                                                                                        x2="100"
                                                                                        y2="4"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6351"
                                                                                        x1="0"
                                                                                        y1="8"
                                                                                        x2="100"
                                                                                        y2="8"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6352"
                                                                                        x1="0"
                                                                                        y1="12"
                                                                                        x2="100"
                                                                                        y2="12"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6353"
                                                                                        x1="0"
                                                                                        y1="16"
                                                                                        x2="100"
                                                                                        y2="16"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6354"
                                                                                        x1="0"
                                                                                        y1="20"
                                                                                        x2="100"
                                                                                        y2="20"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6355"
                                                                                        x1="0"
                                                                                        y1="24"
                                                                                        x2="100"
                                                                                        y2="24"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6356"
                                                                                        x1="0"
                                                                                        y1="28"
                                                                                        x2="100"
                                                                                        y2="28"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6357"
                                                                                        x1="0"
                                                                                        y1="32"
                                                                                        x2="100"
                                                                                        y2="32"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6358"
                                                                                        x1="0"
                                                                                        y1="36"
                                                                                        x2="100"
                                                                                        y2="36"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                    <line id="SvgjsLine6359"
                                                                                        x1="0"
                                                                                        y1="40"
                                                                                        x2="100"
                                                                                        y2="40"
                                                                                        stroke="#e0e0e0"
                                                                                        stroke-dasharray="0"
                                                                                        stroke-linecap="butt"
                                                                                        class="apexcharts-gridline">
                                                                                    </line>
                                                                                </g>
                                                                                <g id="SvgjsG6347"
                                                                                    class="apexcharts-gridlines-vertical"
                                                                                    style="display: none;"></g>
                                                                                <line id="SvgjsLine6361"
                                                                                    x1="0" y1="40"
                                                                                    x2="100" y2="40"
                                                                                    stroke="transparent"
                                                                                    stroke-dasharray="0"
                                                                                    stroke-linecap="butt"></line>
                                                                                <line id="SvgjsLine6360"
                                                                                    x1="0" y1="1"
                                                                                    x2="0" y2="40"
                                                                                    stroke="transparent"
                                                                                    stroke-dasharray="0"
                                                                                    stroke-linecap="butt"></line>
                                                                            </g>
                                                                            <g id="SvgjsG6348"
                                                                                class="apexcharts-grid-borders"
                                                                                style="display: none;"></g>
                                                                            <g id="SvgjsG6336"
                                                                                class="apexcharts-line-series apexcharts-plot-series">
                                                                                <g id="SvgjsG6337"
                                                                                    class="apexcharts-series"
                                                                                    seriesName="Value"
                                                                                    data:longestSeries="true"
                                                                                    rel="1"
                                                                                    data:realIndex="0">
                                                                                    <path id="SvgjsPath6344"
                                                                                        d="M 0 8C 4.375 8 8.125 8 12.5 8C 16.875 8 20.625 4.799999999999997 25 4.799999999999997C 29.375 4.799999999999997 33.125 25.6 37.5 25.6C 41.875 25.6 45.625 20.8 50 20.8C 54.375 20.8 58.125 17.6 62.5 17.6C 66.875 17.6 70.625 9.600000000000001 75 9.600000000000001C 79.375 9.600000000000001 83.125 24 87.5 24C 91.875 24 95.625 0 100 0"
                                                                                        fill="none"
                                                                                        fill-opacity="1"
                                                                                        stroke="url(#SvgjsLinearGradient6340)"
                                                                                        stroke-opacity="1"
                                                                                        stroke-linecap="butt"
                                                                                        stroke-width="1.5"
                                                                                        stroke-dasharray="0"
                                                                                        class="apexcharts-line"
                                                                                        index="0"
                                                                                        clip-path="url(#gridRectMaskd4jlntjph)"
                                                                                        pathTo="M 0 8C 4.375 8 8.125 8 12.5 8C 16.875 8 20.625 4.799999999999997 25 4.799999999999997C 29.375 4.799999999999997 33.125 25.6 37.5 25.6C 41.875 25.6 45.625 20.8 50 20.8C 54.375 20.8 58.125 17.6 62.5 17.6C 66.875 17.6 70.625 9.600000000000001 75 9.600000000000001C 79.375 9.600000000000001 83.125 24 87.5 24C 91.875 24 95.625 0 100 0"
                                                                                        pathFrom="M -1 40 L -1 40 L 12.5 40 L 25 40 L 37.5 40 L 50 40 L 62.5 40 L 75 40 L 87.5 40 L 100 40"
                                                                                        fill-rule="evenodd"></path>
                                                                                    <g id="SvgjsG6338"
                                                                                        class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
                                                                                        data:realIndex="0"></g>
                                                                                </g>
                                                                                <g id="SvgjsG6339"
                                                                                    class="apexcharts-datalabels"
                                                                                    data:realIndex="0"></g>
                                                                            </g>
                                                                            <line id="SvgjsLine6362" x1="0"
                                                                                y1="0" x2="100"
                                                                                y2="0" stroke="#b6b6b6"
                                                                                stroke-dasharray="0"
                                                                                stroke-width="1"
                                                                                stroke-linecap="butt"
                                                                                class="apexcharts-ycrosshairs"></line>
                                                                            <line id="SvgjsLine6363" x1="0"
                                                                                y1="0" x2="100"
                                                                                y2="0" stroke-dasharray="0"
                                                                                stroke-width="0"
                                                                                stroke-linecap="butt"
                                                                                class="apexcharts-ycrosshairs-hidden">
                                                                            </line>
                                                                            <g id="SvgjsG6364"
                                                                                class="apexcharts-xaxis"
                                                                                transform="translate(0, 0)">
                                                                                <g id="SvgjsG6365"
                                                                                    class="apexcharts-xaxis-texts-g"
                                                                                    transform="translate(0, -4)"></g>
                                                                            </g>
                                                                            <g id="SvgjsG6376"
                                                                                class="apexcharts-yaxis-annotations">
                                                                            </g>
                                                                            <g id="SvgjsG6377"
                                                                                class="apexcharts-xaxis-annotations">
                                                                            </g>
                                                                            <g id="SvgjsG6378"
                                                                                class="apexcharts-point-annotations">
                                                                            </g>
                                                                        </g>
                                                                    </svg>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="d-flex align-items-center justify-content-between mt-1">
                                                            <div> <a class="text-warning"
                                                                    href="javascript:void(0);">View All<i
                                                                        class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                                            </div>
                                                            <div class="text-end">
                                                                <p class="mb-0 text-success fw-semibold">+19%</p>
                                                                <span class="text-muted op-7 fs-11">this month</span>
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
                                                                    Analytics with sales &amp; profit (USD)</text>
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
                                                                            <tspan id="SvgjsTspan6500">$1000</tspan>
                                                                            <title>$1000</title>
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
                                                                            <tspan id="SvgjsTspan6503">$800</tspan>
                                                                            <title>$800</title>
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
                                                                            <tspan id="SvgjsTspan6506">$600</tspan>
                                                                            <title>$600</title>
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
                                                                            <tspan id="SvgjsTspan6509">$400</tspan>
                                                                            <title>$400</title>
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
                                                                            <tspan id="SvgjsTspan6512">$200</tspan>
                                                                            <title>$200</title>
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
                                                                            <tspan id="SvgjsTspan6515">$0</tspan>
                                                                            <title>$0</title>
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
                                                                                class="apexcharts-tooltip-text-y-value">$180</span>
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
                                                                                class="apexcharts-tooltip-text-y-value">$476</span>
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
                            <div class="col-xl-12">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title"> Deals Statistics </div>
                                        <div class="d-flex flex-wrap gap-2">
                                            <div> <input class="form-control form-control-sm" type="text"
                                                    placeholder="Search Here" aria-label=".form-control-sm example">
                                            </div>
                                            <div class="dropdown">
                                                <a href="javascript:void(0);"
                                                    class="btn btn-primary btn-sm btn-wave waves-effect waves-light"
                                                    data-bs-toggle="dropdown" aria-expanded="false"> Sort By<i
                                                        class="ri-arrow-down-s-line align-middle ms-1 d-inline-block"></i>
                                                </a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a class="dropdown-item" href="javascript:void(0);">New</a>
                                                    </li>
                                                    <li><a class="dropdown-item"
                                                            href="javascript:void(0);">Popular</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="javascript:void(0);">Relevant</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table text-nowrap table-hover border table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th scope="row" class="ps-4"><input
                                                                class="form-check-input" type="checkbox"
                                                                id="checkboxNoLabel1" value=""
                                                                aria-label="..."></th>
                                                        <th scope="col">Sales Rep</th>
                                                        <th scope="col">Category</th>
                                                        <th scope="col">Mail</th>
                                                        <th scope="col">Location</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row" class="ps-4"><input
                                                                class="form-check-input" type="checkbox"
                                                                id="checkboxNoLabel2" value=""
                                                                aria-label="..."></th>
                                                        <td>
                                                            <div class="d-flex align-items-center fw-semibold"> <span
                                                                    class="avatar avatar-sm me-2 avatar-rounded"> <img
                                                                        src="{{ asset('images/crm/faces/4.jpg') }}"
                                                                        alt="img"> </span>Mayor Kelly </div>
                                                        </td>
                                                        <td>Manufacture</td>
                                                        <td>mayorkelly@gmail.com</td>
                                                        <td> <span class="badge bg-info-transparent">Germany</span>
                                                        </td>
                                                        <td>Sep 15 - Oct 12, 2023</td>
                                                        <td>
                                                            <div class="hstack gap-2 fs-15"> <a aria-label="anchor"
                                                                    href="javascript:void(0);"
                                                                    class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-success-light"><i
                                                                        class="ri-download-2-line"></i></a> <a
                                                                    aria-label="anchor" href="javascript:void(0);"
                                                                    class="btn btn-icon btn-wave waves-effect waves-light btn-sm btn-primary-light"><i
                                                                        class="ri-edit-line"></i></a> </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="ps-4"><input
                                                                class="form-check-input" type="checkbox"
                                                                id="checkboxNoLabel13" value=""
                                                                aria-label="..." checked=""></th>
                                                        <td>
                                                            <div class="d-flex align-items-center fw-semibold"> <span
                                                                    class="avatar avatar-sm me-2 avatar-rounded"> <img
                                                                        src="{{ asset('images/crm/faces/15.jpg') }}"
                                                                        alt="img"> </span>Andrew Garfield </div>
                                                        </td>
                                                        <td>Development</td>
                                                        <td>andrewgarfield@gmail.com</td>
                                                        <td> <span class="badge bg-primary-transparent">Canada</span>
                                                        </td>
                                                        <td>Apr 10 - Dec 12, 2023</td>
                                                        <td>
                                                            <div class="hstack gap-2 fs-15"> <a aria-label="anchor"
                                                                    href="javascript:void(0);"
                                                                    class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i
                                                                        class="ri-download-2-line"></i></a> <a
                                                                    aria-label="anchor" href="javascript:void(0);"
                                                                    class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i
                                                                        class="ri-edit-line"></i></a> </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="ps-4"><input
                                                                class="form-check-input" type="checkbox"
                                                                id="checkboxNoLabel4" value=""
                                                                aria-label="..."></th>
                                                        <td>
                                                            <div class="d-flex align-items-center fw-semibold"> <span
                                                                    class="avatar avatar-sm me-2 avatar-rounded"> <img
                                                                        src="{{ asset('images/crm/faces/11.jpg') }}"
                                                                        alt="img"> </span>Simon Cowel </div>
                                                        </td>
                                                        <td>Service</td>
                                                        <td>simoncowel234@gmail.com</td>
                                                        <td> <span class="badge bg-danger-transparent">Europe</span>
                                                        </td>
                                                        <td>Sep 15 - Oct 12, 2023</td>
                                                        <td>
                                                            <div class="hstack gap-2 fs-15"> <a aria-label="anchor"
                                                                    href="javascript:void(0);"
                                                                    class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i
                                                                        class="ri-download-2-line"></i></a> <a
                                                                    aria-label="anchor" href="javascript:void(0);"
                                                                    class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i
                                                                        class="ri-edit-line"></i></a> </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="ps-4"><input
                                                                class="form-check-input" type="checkbox"
                                                                id="checkboxNoLabel5" value=""
                                                                aria-label="..." checked=""></th>
                                                        <td>
                                                            <div class="d-flex align-items-center fw-semibold"> <span
                                                                    class="avatar avatar-sm me-2 avatar-rounded"> <img
                                                                        src="{{ asset('images/crm/faces/8.jpg') }}"
                                                                        alt="img"> </span>Mirinda Hers </div>
                                                        </td>
                                                        <td>Marketing</td>
                                                        <td>mirindahers@gmail.com</td>
                                                        <td> <span class="badge bg-warning-transparent">USA</span>
                                                        </td>
                                                        <td>Apr 14 - Dec 14, 2023</td>
                                                        <td>
                                                            <div class="hstack gap-2 fs-15"> <a aria-label="anchor"
                                                                    href="javascript:void(0);"
                                                                    class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i
                                                                        class="ri-download-2-line"></i></a> <a
                                                                    aria-label="anchor" href="javascript:void(0);"
                                                                    class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i
                                                                        class="ri-edit-line"></i></a> </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row" class="ps-4"><input
                                                                class="form-check-input" type="checkbox"
                                                                id="checkboxNoLabel3" value=""
                                                                aria-label="..." checked=""></th>
                                                        <td>
                                                            <div class="d-flex align-items-center fw-semibold"> <span
                                                                    class="avatar avatar-sm me-2 avatar-rounded"> <img
                                                                        src="{{ asset('images/crm/faces/9.jpg') }}"
                                                                        alt="img"> </span>Jacob Smith </div>
                                                        </td>
                                                        <td>Social Plataform</td>
                                                        <td>jacobsmith@gmail.com</td>
                                                        <td> <span
                                                                class="badge bg-success-transparent">Singapore</span>
                                                        </td>
                                                        <td>Feb 25 - Nov 25, 2023</td>
                                                        <td>
                                                            <div class="hstack gap-2 fs-15"> <a aria-label="anchor"
                                                                    href="javascript:void(0);"
                                                                    class="btn btn-icon waves-effect waves-light btn-sm btn-success-light"><i
                                                                        class="ri-download-2-line"></i></a> <a
                                                                    aria-label="anchor" href="javascript:void(0);"
                                                                    class="btn btn-icon waves-effect waves-light btn-sm btn-primary-light"><i
                                                                        class="ri-edit-line"></i></a> </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex align-items-center">
                                            <div> Showing 5 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i>
                                            </div>
                                            <div class="ms-auto">
                                                <nav aria-label="Page navigation" class="pagination-style-4">
                                                    <ul class="pagination mb-0">
                                                        <li class="page-item disabled"> <a class="page-link"
                                                                href="javascript:void(0);"> Prev </a> </li>
                                                        <li class="page-item active"><a class="page-link"
                                                                href="javascript:void(0);">1</a></li>
                                                        <li class="page-item"><a class="page-link"
                                                                href="javascript:void(0);">2</a></li>
                                                        <li class="page-item"> <a class="page-link text-primary"
                                                                href="javascript:void(0);"> next </a> </li>
                                                    </ul>
                                                </nav>
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
                                                <div class="card-title"> Leads By Source </div>
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
                                                                class="text-muted fs-12 mb-1 crm-lead-legend mobile d-inline-block">Mobile
                                                            </span>
                                                            <div><span class="fs-16 fw-semibold">1,624</span> </div>
                                                        </div>
                                                    </div>
                                                    <div class="col p-0">
                                                        <div
                                                            class="p-3 text-center border-end border-inline-end-dashed">
                                                            <span
                                                                class="text-muted fs-12 mb-1 crm-lead-legend desktop d-inline-block">Desktop
                                                            </span>
                                                            <div><span class="fs-16 fw-semibold">1,267</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="col p-0">
                                                        <div
                                                            class="p-3 text-center border-end border-inline-end-dashed">
                                                            <span
                                                                class="text-muted fs-12 mb-1 crm-lead-legend laptop d-inline-block">Laptop
                                                            </span>
                                                            <div><span class="fs-16 fw-semibold">1,153</span> </div>
                                                        </div>
                                                    </div>
                                                    <div class="col p-0">
                                                        <div class="p-3 text-center">
                                                            <span
                                                                class="text-muted fs-12 mb-1 crm-lead-legend tablet d-inline-block">Tablet
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
                                                <div class="card-title"> Deals Status </div>
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
                                                            <div>Successful Deals</div>
                                                            <div class="fs-12 text-muted">987 deals</div>
                                                        </div>
                                                    </li>
                                                    <li class="info">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between">
                                                            <div>Pending Deals</div>
                                                            <div class="fs-12 text-muted">1,073 deals</div>
                                                        </div>
                                                    </li>
                                                    <li class="warning">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between">
                                                            <div>Rejected Deals</div>
                                                            <div class="fs-12 text-muted">1,674 deals</div>
                                                        </div>
                                                    </li>
                                                    <li class="success">
                                                        <div
                                                            class="d-flex align-items-center justify-content-between">
                                                            <div>Upcoming Deals</div>
                                                            <div class="fs-12 text-muted">921 deals</div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-12 col-xl-6">
                                        <div class="card custom-card">
                                            <div class="card-header justify-content-between">
                                                <div class="card-title"> Recent Activity </div>
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
                                                <div>
                                                    <ul class="list-unstyled mb-0 crm-recent-activity">
                                                        <li class="crm-recent-activity-content">
                                                            <div class="d-flex align-items-top">
                                                                <div class="me-3"> <span
                                                                        class="avatar avatar-xs bg-primary-transparent avatar-rounded">
                                                                        <i class="bi bi-circle-fill fs-8"></i> </span>
                                                                </div>
                                                                <div class="crm-timeline-content"> <span
                                                                        class="fw-semibold">Update of calendar events
                                                                        &amp;</span><span><a
                                                                            href="javascript:void(0);"
                                                                            class="text-primary fw-semibold"> Added
                                                                            new events in next week.</a></span> </div>
                                                                <div class="flex-fill text-end"> <span
                                                                        class="d-block text-muted fs-11 op-7">4:45PM</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="crm-recent-activity-content">
                                                            <div class="d-flex align-items-top">
                                                                <div class="me-3"> <span
                                                                        class="avatar avatar-xs bg-secondary-transparent avatar-rounded">
                                                                        <i class="bi bi-circle-fill fs-8"></i> </span>
                                                                </div>
                                                                <div class="crm-timeline-content"> <span>New theme for
                                                                        <span class="fw-semibold">Spruko
                                                                            Website</span> completed</span> <span
                                                                        class="d-block fs-12 text-muted">Lorem ipsum,
                                                                        dolor sit amet.</span> </div>
                                                                <div class="flex-fill text-end"> <span
                                                                        class="d-block text-muted fs-11 op-7">3
                                                                        hrs</span> </div>
                                                            </div>
                                                        </li>
                                                        <li class="crm-recent-activity-content">
                                                            <div class="d-flex align-items-top">
                                                                <div class="me-3"> <span
                                                                        class="avatar avatar-xs bg-success-transparent avatar-rounded">
                                                                        <i class="bi bi-circle-fill fs-8"></i> </span>
                                                                </div>
                                                                <div class="crm-timeline-content"> <span>Created a
                                                                        <span class="text-success fw-semibold">New
                                                                            Task</span> today <span
                                                                            class="avatar avatar-xs bg-purple-transparent avatar-rounded ms-1"><i
                                                                                class="ri-add-fill text-purple fs-12"></i></span></span>
                                                                </div>
                                                                <div class="flex-fill text-end"> <span
                                                                        class="d-block text-muted fs-11 op-7">22
                                                                        hrs</span> </div>
                                                            </div>
                                                        </li>
                                                        <li class="crm-recent-activity-content">
                                                            <div class="d-flex align-items-top">
                                                                <div class="me-3"> <span
                                                                        class="avatar avatar-xs bg-pink-transparent avatar-rounded">
                                                                        <i class="bi bi-circle-fill fs-8"></i> </span>
                                                                </div>
                                                                <div class="crm-timeline-content"> <span>New member
                                                                        <span
                                                                            class="badge bg-pink-transparent">@andreas
                                                                            gurrero</span> added today to AI
                                                                        Summit.</span> </div>
                                                                <div class="flex-fill text-end"> <span
                                                                        class="d-block text-muted fs-11 op-7">Today</span>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="crm-recent-activity-content">
                                                            <div class="d-flex align-items-top">
                                                                <div class="me-3"> <span
                                                                        class="avatar avatar-xs bg-warning-transparent avatar-rounded">
                                                                        <i class="bi bi-circle-fill fs-8"></i> </span>
                                                                </div>
                                                                <div class="crm-timeline-content"> <span>32 New people
                                                                        joined summit.</span> </div>
                                                                <div class="flex-fill text-end"> <span
                                                                        class="d-block text-muted fs-11 op-7">22
                                                                        hrs</span> </div>
                                                            </div>
                                                        </li>
                                                        <li class="crm-recent-activity-content">
                                                            <div class="d-flex align-items-top">
                                                                <div class="me-3"> <span
                                                                        class="avatar avatar-xs bg-info-transparent avatar-rounded">
                                                                        <i class="bi bi-circle-fill fs-8"></i> </span>
                                                                </div>
                                                                <div class="crm-timeline-content"> <span>Neon Tarly
                                                                        added <span
                                                                            class="text-info fw-semibold">Robert
                                                                            Bright</span> to AI summit project.</span>
                                                                </div>
                                                                <div class="flex-fill text-end"> <span
                                                                        class="d-block text-muted fs-11 op-7">12
                                                                        hrs</span> </div>
                                                            </div>
                                                        </li>
                                                        <li class="crm-recent-activity-content">
                                                            <div class="d-flex align-items-top">
                                                                <div class="me-3"> <span
                                                                        class="avatar avatar-xs bg-dark-transparent avatar-rounded">
                                                                        <i class="bi bi-circle-fill fs-8"></i> </span>
                                                                </div>
                                                                <div class="crm-timeline-content"> <span>Replied to
                                                                        new support request <i
                                                                            class="ri-checkbox-circle-line text-success fs-16 align-middle"></i></span>
                                                                </div>
                                                                <div class="flex-fill text-end"> <span
                                                                        class="d-block text-muted fs-11 op-7">4
                                                                        hrs</span> </div>
                                                            </div>
                                                        </li>
                                                        <li class="crm-recent-activity-content">
                                                            <div class="d-flex align-items-top">
                                                                <div class="me-3"> <span
                                                                        class="avatar avatar-xs bg-purple-transparent avatar-rounded">
                                                                        <i class="bi bi-circle-fill fs-8"></i> </span>
                                                                </div>
                                                                <div class="crm-timeline-content"> <span>Completed
                                                                        documentation of <a href="javascript:void(0);"
                                                                            class="text-purple text-decoration-underline fw-semibold">AI
                                                                            Summit.</a></span> </div>
                                                                <div class="flex-fill text-end"> <span
                                                                        class="d-block text-muted fs-11 op-7">4
                                                                        hrs</span> </div>
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
                </div>
                <!-- End::row-1 -->
            </div>
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
