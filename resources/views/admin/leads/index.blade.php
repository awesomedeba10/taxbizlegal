@extends('admin._layouts.master')

@section('content')
    <div class="container-fluid">
        <!-- Start::page-header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">View Leads</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">Service</li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Leads</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- End::page-header --> <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">View Service Leads </div>
                        <div class="d-flex flex-wrap gap-2">
                            <button type="button" data-bs-toggle="offcanvas"
                                class="btn btn-primary-gradient btn-wave btn-sm waves-effect waves-light"
                                data-bs-target="#offcanvasFilter" aria-controls="offcanvasFilter">
                                <i class="bi bi-filter"></i>
                            </button>
                            <div class="dropdown"> <a aria-label="anchor" href="javascript:void(0);"
                                    class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i> </a>
                                <ul class="dropdown-menu" style="">
                                    <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasFilter" aria-controls="offcanvasFilter">
                                        Apply Filter
                                    </a>
                                    <a class="dropdown-item save-custom-view" href="javascript:void(0);">
                                        Add to Custom View
                                    </a>
                                    <a class="dropdown-item" href="{{ route('admin.service-leads.export') }}">
                                        Export
                                    </a>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-nowrap table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#TBL Id</th>
                                        <th scope="col">Customer Name</th>
                                        <th scope="col">Contact No</th>
                                        <th scope="col">Service Name</th>
                                        <th scope="col">Current Status</th>
                                        <th scope="col">Submitted Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($orders as $order)
                                        <tr>
                                            <th scope="row">
                                                {{ Str::upper($order->order_id) }}
                                            </th>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <div class="lh-1"> <span>{{ $order->cus_name }}</span> </div>
                                                        <div class="lh-1">
                                                            <span class="fs-11 text-muted">{{ $order->cus_email }}</span>
                                                        </div>
                                                        <div class="lh-1">
                                                            <span class="fs-11 text-muted">State: <span
                                                                    class="text-primary">{{ slugToTitle($order->cus_state) }}</span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <span
                                                    class="badge bg-primary-transparent fs-12">{{ $order->cus_phone }}</span>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div>
                                                        <div class="lh-1">
                                                            <span>{{ $order->service->name }}</span>
                                                        </div>
                                                        @if (isset($order->service_plan_name))
                                                            <div class="lh-1">
                                                                <span class="fs-11 text-muted">Plan: <span
                                                                        class="text-primary">{{ $order->service_plan_name }}</span></span>
                                                            </div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                @if ($order->current_stage == 'basic_details_submitted')
                                                    <span class="badge bg-danger-transparent fs-12">Basic Details
                                                        Submitted</span>
                                                @elseif($order->current_stage == 'payment_pending')
                                                    <span class="badge bg-info-transparent fs-12">Plan Selected</span>
                                                @elseif($order->current_stage == 'payment_initiated')
                                                    <span class="badge bg-warning-transparent fs-12">Payment Pending</span>
                                                @elseif($order->current_stage == 'payment_received')
                                                    <span class="badge bg-success-transparent fs-12">Payment Received</span>
                                                @endif
                                            </td>
                                            <td>{{ $order->formatted_created_at }}</td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <button type="button"
                                                        class="btn btn-icon btn-primary-transparent btn-wave btn-sm waves-effect waves-light">
                                                        <i class="bi bi-eye-fill"></i>
                                                    </button>
                                                    <button type="button"
                                                        class="btn btn-icon btn-danger-transparent btn-wave btn-sm waves-effect waves-light">
                                                        <i class="ri-customer-service-2-line"></i>
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        {{ $orders->links('vendor.pagination.custom-design-1') }}
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
                    {{-- {{ dd(request()->input()) }} --}}
                    <form data-action="{{ url()->current() }}" id="filterForm" autocomplete="off">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Services</label>
                                <select class="form-select choices__select" name="services[]" multiple
                                    data-placeholder="Choose services to filter">
                                    @foreach ($services as $service)
                                        <option value="{{ $service->slug }}"
                                            {{ in_array($service->slug, request()->input('services', [])) ? 'selected' : '' }}>
                                            {{ $service->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Filter Leads From</label>
                                <div class="input-group">
                                    <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                    <input type="text" class="form-control flatpickr-date" placeholder="Select start date to filter"
                                        name="from_date" value="{{ request('from_date') }}">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Filter Leads To</label>
                                <div class="input-group">
                                    <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                    <input type="text" class="form-control flatpickr-date" placeholder="Select end date to filter"
                                        name="to_date" value="{{ request('to_date') ?? now()->format('Y-m-d') }}">
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Current Status</label>
                                <select class="form-select choices__select" name="current_status[]" data-placeholder="Select lead status"
                                    multiple>
                                    <option value="basic_details_submitted"
                                        {{ in_array('basic_details_submitted', request()->input('current_status', [])) ? 'selected' : '' }}>
                                        Basic Details Submitted</option>
                                    <option value="payment_pending"
                                        {{ in_array('payment_pending', request()->input('current_status', [])) ? 'selected' : '' }}>
                                        Plan Selected</option>
                                    <option value="payment_initiated"
                                        {{ in_array('payment_initiated', request()->input('current_status', [])) ? 'selected' : '' }}>
                                        Payment Pending</option>
                                    <option value="payment_received"
                                        {{ in_array('payment_received', request()->input('current_status', [])) ? 'selected' : '' }}>
                                        Payment Received</option>
                                </select>

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
