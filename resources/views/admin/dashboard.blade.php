@extends('admin._layouts.master')

@php
    use Carbon\Carbon;

    $from = $to = null;
    $days = 30;

    if (request()->filled('from_date') && request()->filled('to_date')) {
        $from = Carbon::parse(request()->input('from_date'))->startOfDay();
        $to = Carbon::parse(request()->input('to_date'))->endOfDay();
        $days = intval($from->diffInDays($to) + 1);
    } elseif (request()->filled('date_range')) {
        $days = intval(request()->input('date_range'));
        $to = now()->endOfDay();
        $from = $to->copy()->subDays($days - 1)->startOfDay();
    } else {
        $to = now()->endOfDay();
        $from = $to->copy()->subDays(29)->startOfDay();
    }
@endphp

@section('content')
    <div class="container-fluid">
        <!-- Start::page-header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <div>
                <p class="fw-semibold fs-18 mb-0">Welcome back, {{ auth()->user()->first_name }}
                    {{ auth()->user()->last_name }} !</p>
                    {{-- {{ dd(request()->input()) }} --}}
                <span class="fs-semibold text-muted">
                    Track your sales, activity, leads here.
                    Showing data of last {{ $days }} days,
                    from {{ $from->format('j M Y') }} to {{ $to->format('j M Y') }}.
                </span>
            </div>
            <div class="btn-list mt-md-0 mt-2">
                <button type="button" class="btn btn-primary btn-wave waves-effect waves-light" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasFilter" aria-controls="offcanvasFilter">
                    <i class="ri-filter-3-fill me-2 align-middle d-inline-block"></i>Filters
                </button>
            </div>
        </div>
        <!-- End::page-header --> <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xxl-8 col-xl-8 col-md-12">
                <div class="row">
                    {{-- <div class="col-xl-4">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card custom-card crm-highlight-card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div>
                                                <div class="fw-semibold fs-18 text-fixed-white mb-2">Your
                                                    target is incomplete</div>
                                                <span class="d-block fs-12 text-fixed-white"><span class="op-7">You have
                                                        completed</span> <span class="fw-semibold text-warning">48%</span>
                                                    <span class="op-7">of the given target, you can also check
                                                        your status</span>.</span> <span class="d-block fw-semibold mt-1"><a
                                                        class="text-fixed-white" href="javascript:void(0);"><u>Click
                                                            here</u></a></span>
                                            </div>
                                            <div>
                                                <div id="crm-main">
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
                                                    <span
                                                        class="avatar avatar-sm avatar-rounded bg-warning-transparent fw-semibold">
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
                                                    <span
                                                        class="avatar avatar-sm avatar-rounded bg-warning-transparent fw-semibold">
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
                                                    <span
                                                        class="avatar avatar-sm avatar-rounded bg-success-transparent fw-semibold">
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
                                                    <span
                                                        class="avatar avatar-sm avatar-rounded bg-primary-transparent fw-semibold">
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
                                </div>
                                <div class="card-body py-0 ps-0">
                                    <div id="crm-profits-earned">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                    <div class="col-xl-12">
                        <div class="row">
                            <div class="col-xxl-6 col-lg-6 col-md-6">
                                <div class="card custom-card overflow-hidden">
                                    <div class="card-body">
                                        <div class="d-flex align-items-top justify-content-between">
                                            <div>
                                                <span class="avatar avatar-md avatar-rounded bg-primary">
                                                    <i class="ti ti-wallet fs-16"></i>
                                                </span>
                                            </div>
                                            <div class="flex-fill ms-3">
                                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                    <div>
                                                        <p class="text-muted mb-0">Total Revenue</p>
                                                        <h4 class="fw-semibold mt-1" id="total-revenue-amount">Loading...</h4>
                                                    </div>
                                                    <div id="crm-total-revenue">
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mt-1">
                                                    <div>
                                                        <a class="text-primary" href="javascript:void(0);">View Leads<i
                                                                class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                                    </div>
                                                    <div class="text-end">
                                                        <p class="mb-0 text-success fw-semibold"
                                                            id="total-revenue-percentage">+0%</p>
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
                                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                    <div>
                                                        <p class="text-muted mb-0">Total Leads</p>
                                                        <h4 class="fw-semibold mt-1" id="total-leads-count">Loading...</h4>
                                                    </div>
                                                    <div id="crm-total-leads">
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mt-1">
                                                    <div> <a class="text-warning" href="javascript:void(0);">View All<i
                                                                class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                                    </div>
                                                    <div class="text-end">
                                                        <p class="mb-0 text-danger fw-semibold" id="total-leads-percentage">0%
                                                        </p>
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
                                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                    <div>
                                                        <p class="text-muted mb-0">Conversion %</p>
                                                        <h4 class="fw-semibold mt-1" id="total-conversion-percentage">Loading...
                                                        </h4>
                                                    </div>
                                                    <div id="crm-conversion-ratio">
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mt-1">
                                                    <div>
                                                        <a class="text-success" href="javascript:void(0);">View All
                                                            <i
                                                                class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                                    </div>
                                                    <div class="text-end">
                                                        <p class="mb-0 text-danger fw-semibold" id="total-conversion-change">0%
                                                        </p>
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
                                                </span>
                                            </div>
                                            <div class="flex-fill ms-3">
                                                <div class="d-flex align-items-center justify-content-between flex-wrap">
                                                    <div>
                                                        <p class="text-muted mb-0">Total Clients</p>
                                                        <h4 class="fw-semibold mt-1" id="total-clients-count">Loading...</h4>
                                                    </div>
                                                    <div id="crm-total-clients">
                                                    </div>
                                                </div>
                                                <div class="d-flex align-items-center justify-content-between mt-1">
                                                    <div>
                                                        <a class="text-secondary" href="javascript:void(0);">View Leads<i
                                                                class="ti ti-arrow-narrow-right ms-2 fw-semibold d-inline-block"></i></a>
                                                    </div>
                                                    <div class="text-end">
                                                        <p class="mb-0 text-success fw-semibold"
                                                            id="total-clients-percentage">+0%</p>
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
                                    </div>
                                    <div class="card-body">
                                        <div class="content-wrapper">
                                            <div id="crm-revenue-analytics">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-xl-4 col-md-12">
                <div class="row">
                    <div class="col-xxl-12 col-xl-12">
                        <div class="row">
                            <div class="col-xl-12 col-xl-6">
                                <div class="card custom-card">
                                    <div class="card-header justify-content-between">
                                        <div class="card-title"> Leads By Service </div>
                                    </div>
                                    <div class="card-body p-0 overflow-hidden">
                                        <div class="leads-source-chart d-flex align-items-center justify-content-center">
                                            <canvas id="leads-source" class="chartjs-chart w-100 p-4"></canvas>
                                            <div class="lead-source-value"> <span class="d-block fs-14">Total</span> <span
                                                    class="d-block fs-25 fw-bold">Loading...</span> </div>
                                        </div>
                                        <div class="row row-cols-12 border-top border-block-start-dashed">
                                            <div class="col p-0">
                                                <div
                                                    class="ps-4 py-3 pe-3 text-center border-end border-inline-end-dashed">
                                                    <span
                                                        class="text-muted fs-12 mb-1 crm-lead-legend mobile">Loading...
                                                    </span>
                                                    <div><span class="fs-16 fw-semibold">Loading...</span> </div>
                                                </div>
                                            </div>
                                            <div class="col p-0">
                                                <div class="p-3 text-center border-end border-inline-end-dashed">
                                                    <span
                                                        class="text-muted fs-12 mb-1 crm-lead-legend desktop">Loading...
                                                    </span>
                                                    <div><span class="fs-16 fw-semibold">Loading...</span></div>
                                                </div>
                                            </div>
                                            <div class="col p-0">
                                                <div class="p-3 text-center border-end border-inline-end-dashed">
                                                    <span
                                                        class="text-muted fs-12 mb-1 crm-lead-legend laptop">Loading...
                                                    </span>
                                                    <div><span class="fs-16 fw-semibold">Loading...</span> </div>
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
                                    </div>
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <h4 id="total-leads-count-heading" class="fw-bold mb-0">Loading...</h4>
                                            <div class="ms-2">
                                                <span class="text-muted ms-1">Total Leads Received</span>
                                            </div>
                                        </div>
                                        <div class="progress-stacked progress-animate progress-xs mb-4">
                                            <div class="progress-bar" role="progressbar" style="width: 21%"
                                                aria-valuenow="21" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-info" role="progressbar" style="width: 26%"
                                                aria-valuenow="26" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-warning" role="progressbar" style="width: 35%"
                                                aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                            <div class="progress-bar bg-success" role="progressbar" style="width: 18%"
                                                aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <ul class="list-unstyled mb-0 pt-2 crm-deals-status">
                                            <li class="primary">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div>Basic Details Submitted</div>
                                                    <div class="fs-12 text-muted">Loading...</div>
                                                </div>
                                            </li>
                                            <li class="info">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div>Payment Pending</div>
                                                    <div class="fs-12 text-muted">Loading...</div>
                                                </div>
                                            </li>
                                            <li class="warning">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div>Payment Initiated</div>
                                                    <div class="fs-12 text-muted">Loading...</div>
                                                </div>
                                            </li>
                                            <li class="success">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div>Payment Received</div>
                                                    <div class="fs-12 text-muted">Loading...</div>
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


@push('html')
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasFilter" aria-labelledby="offcanvasFilterLabel1"
        data-bs-backdrop="static">
        <div class="offcanvas-header border-bottom border-block-end-dashed">
            <h5 class="offcanvas-title" id="offcanvasFilterLabel1">🔍 Apply Filters</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0">
            <div class="card custom-card">
                <div class="card-body">
                    <form data-action="{{ url()->current() }}" id="filterForm" autocomplete="off">
                        <div class="row">
                            <div class="col-xl-12 mb-4">
                                <div class="row">
                                    <label class="form-label mb-2">Quick Date Range</label>
                                    <div class="col-xl-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="date_range"
                                                id="date_today" value="0"
                                                {{ (!request()->filled('from_date') || !request()->filled('to_date')) && request('date_range') == '0' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="date_today">Today</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="date_range"
                                                id="date_7d" value="7"
                                                {{ (!request()->filled('from_date') || !request()->filled('to_date')) && request('date_range') == '7' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="date_7d">Last 7 Days</label>
                                        </div>
                                    </div>
                                    <div class="col-xl-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="date_range"
                                                id="date_30d" value="30"
                                                {{ (!request()->filled('from_date') || !request()->filled('to_date')) && request('date_range') == '30' ? 'checked' : '' }}>
                                            <label class="form-check-label" for="date_30d">Last 30 Days</label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <label class="form-label mb-2">Or Specify your own date range</label>
                            <div class="col-md-6 mb-4">
                                <div class="input-group">
                                    <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                    <input type="text" class="form-control flatpickr-date"
                                        placeholder="Select start date" name="from_date"
                                        value="{{ request('from_date') ?? '' }}">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <div class="input-group">
                                    <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                    <input type="text" class="form-control flatpickr-date"
                                        placeholder="Select end date" name="to_date"
                                        value="{{ request('to_date') ?? '' }}">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Apply Filter</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endpush
