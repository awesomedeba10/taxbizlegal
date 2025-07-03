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
                                                    <button type="button" data-bs-toggle="offcanvas"
                                                        data-order-id="{{ $order->order_id }}"
                                                        data-bs-target="#offcanvasTimeline"
                                                        aria-controls="offcanvasTimeline"
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
                                    <input type="text" class="form-control flatpickr-date"
                                        placeholder="Select start date to filter" name="from_date"
                                        value="{{ request('from_date') }}">
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Filter Leads To</label>
                                <div class="input-group">
                                    <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                    <input type="text" class="form-control flatpickr-date"
                                        placeholder="Select end date to filter" name="to_date"
                                        value="{{ request('to_date') ?? now()->format('Y-m-d') }}">
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Current Status</label>
                                <select class="form-select choices__select" name="current_status[]"
                                    data-placeholder="Select lead status" multiple>
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

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasTimeline"
        aria-labelledby="offcanvasTimelineLabel1">
        <div class="offcanvas-header border-bottom border-block-end-dashed">
            <h5 class="offcanvas-title" id="offcanvasTimelineLabel1">View Timeline
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0">
            <div class="card custom-card">
                <div class="card-body">
                    <div class="col-md-12">
                        <p class="fs-18 fw-semibold mb-2">TBL Id - <span class="text-primary"
                                id="tbl-id-div">#TBL-26352veh2</span></p>
                    </div>
                    <ul class="nav nav-tabs tab-style-2 nav-justified mb-3 d-sm-flex d-block" id="myTab1"
                        role="tablist">
                        <li class="nav-item" role="presentation"> <button class="nav-link active" id="order-tab"
                                data-bs-toggle="tab" data-bs-target="#order-tab-pane" type="button" role="tab"
                                aria-controls="home-tab-pane" aria-selected="false" tabindex="-1"><i
                                    class="ri-gift-line me-1 align-middle"></i>Ordered</button> </li>
                        <li class="nav-item" role="presentation"> <button class="nav-link" id="confirmed-tab"
                                data-bs-toggle="tab" data-bs-target="#confirm-tab-pane" type="button" role="tab"
                                aria-controls="profile-tab-pane" aria-selected="false" tabindex="-1"><i
                                    class="ri-check-double-line me-1 align-middle"></i>Confirmed</button> </li>
                        <li class="nav-item" role="presentation"> <button class="nav-link" id="shipped-tab"
                                data-bs-toggle="tab" data-bs-target="#shipped-tab-pane" type="button" role="tab"
                                aria-controls="contact-tab-pane" aria-selected="true"><i
                                    class="ri-shopping-bag-3-line me-1 align-middle"></i>Shipped</button> </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade text-muted active show" id="order-tab-pane" role="tabpanel"
                            aria-labelledby="home-tab" tabindex="0">
                            <div class="d-sm-flex">
                                <div class="my-md-auto mt-4 ms-md-1">
                                    <h5 class="font-weight-semibold ms-2 mb-1 pb-0">Adam Smith</h5>
                                    <p class="text-muted ms-1 mb-2 pb-2 d-flex justify-content-between">
                                        <span class="me-3">
                                            <i class="ri-stack-line me-2 fs-14 text-muted"></i>Service
                                        </span>
                                        <span class="me-3 text-primary">
                                            Private Limited Company
                                        </span>
                                    </p>
                                    <p class="text-muted ms-1 mb-2">
                                        <span class="d-block"><i
                                                class="ri-phone-line me-2 fs-14 text-primary"></i>1678-28993-223</span>
                                    </p>
                                    <p class="text-muted ms-1 mb-2">
                                        <span class="d-block">
                                            <i class="ri-mail-line me-2 fs-14 text-dark"></i>email@gmail.com</span>
                                    </p>
                                    <p class="text-muted ms-1 mb-2">
                                        <span class="d-block">
                                            <i class="bi bi-node-plus me-2 fs-14 text-dark"></i>West Begal</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade text-muted" id="confirm-tab-pane" role="tabpanel"
                            aria-labelledby="profile-tab" tabindex="0">
                            <ul class="timeline list-unstyled">
                                <li>
                                    <div class="timeline-time text-end"> <span class="date">22 Jun, 2025</span> <span
                                            class="time d-inline-block">02:31 PM</span> </div>
                                    <div class="timeline-icon"> <a href="javascript:void(0);"></a> </div>
                                    <div class="timeline-body">
                                        <div class="d-flex align-items-top timeline-main-content flex-wrap mt-0">
                                            <div class="flex-fill">
                                                <div class="d-flex align-items-center">
                                                    <div class="mt-sm-0 mt-2">
                                                        <p class="badge mb-0 bg-danger-transparent fs-14 fw-semibold ps-2">Basic Details Submitted</p>
                                                        <p class="text-dark mt-2 mb-1"><i class="bi bi-person-badge me-1"></i> Debanjan Ganguly</p>
                                                        <p class="text-dark my-1"><i class="ri-phone-line me-1"></i> 00000 00000</p>
                                                        <p class="text-dark my-1"><i class="ri-mail-line me-1"></i> fghgfhtfhvht@gmail.com</p>
                                                        <p class="text-dark my-1"><i class="bi bi-node-plus me-1"></i> West Bengal</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-time text-end"> <span class="date">MONDAY</span> <span
                                            class="time d-inline-block">08:47</span> </div>
                                    <div class="timeline-icon"> <a href="javascript:void(0);"></a> </div>
                                    <div class="timeline-body">
                                        <div class="d-flex align-items-top timeline-main-content flex-wrap mt-0">
                                            <div class="avatar avatar-md offline me-3 avatar-rounded mt-sm-0 mt-4"> <img
                                                    alt="avatar" src="../assets/images/faces/15.jpg"> </div>
                                            <div class="flex-fill">
                                                <div class="d-flex align-items-center">
                                                    <div class="mt-sm-0 mt-2">
                                                        <p class="mb-0 fs-14 fw-semibold">Dwayne Bero</p>
                                                        <p class="mb-0 text-muted">Admin and other team accepted your work
                                                            request</p>
                                                    </div>
                                                    <div class="ms-auto"> <span
                                                            class="float-end badge bg-light text-muted timeline-badge">
                                                            30,Sep 2022 </span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-time text-end"> <span class="date">YESTERDAY</span> <span
                                            class="time d-inline-block">18:43</span> </div>
                                    <div class="timeline-icon"> <a href="javascript:void(0);"></a> </div>
                                    <div class="timeline-body">
                                        <div class="d-flex align-items-top timeline-main-content flex-wrap mt-0">
                                            <div class="avatar avatar-md offline me-3 avatar-rounded mt-sm-0 mt-4"> <img
                                                    alt="avatar" src="../assets/images/faces/11.jpg"> </div>
                                            <div class="flex-fill">
                                                <div class="d-flex align-items-center">
                                                    <div class="mt-sm-0 mt-2">
                                                        <p class="mb-0 fs-14 fw-semibold">Alister Chuk</p>
                                                        <p class="mb-0 text-muted">Temporary data will be <span
                                                                class="badge bg-danger-transparent fw-semibold mx-1">deleted</span>
                                                            once dedicated time complated</p>
                                                    </div>
                                                    <div class="ms-auto"> <span
                                                            class="float-end badge bg-light text-muted timeline-badge">
                                                            11,Sep 2021 </span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-time text-end"> <span class="date">TODAY</span> <span
                                            class="time d-inline-block">03:18</span> </div>
                                    <div class="timeline-icon"> <a href="javascript:void(0);"></a> </div>
                                    <div class="timeline-body">
                                        <div class="d-flex align-items-top timeline-main-content flex-wrap mt-0">
                                            <div class="avatar avatar-md online me-3 avatar-rounded mt-sm-0 mt-4"> <img
                                                    alt="avatar" src="../assets/images/faces/5.jpg"> </div>
                                            <div class="flex-fill">
                                                <div class="d-flex align-items-center">
                                                    <div class="mt-sm-0 mt-2">
                                                        <p class="mb-0 fs-14 fw-semibold">Melissa Blue</p>
                                                        <p class="mb-0 text-muted">Approved date for sanction of loan is
                                                            verified <i
                                                                class="ri-checkbox-circle-line text-success ms-1 fs-16 align-middle"></i>
                                                        </p>
                                                    </div>
                                                    <div class="ms-auto"> <span
                                                            class="float-end badge bg-light text-muted timeline-badge">
                                                            18,Sep 2021 </span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-time text-end"> <span class="date">TODAY</span> <span
                                            class="time d-inline-block">12:24</span> </div>
                                    <div class="timeline-icon"> <a href="javascript:void(0);"></a> </div>
                                    <div class="timeline-body">
                                        <div class="d-flex align-items-top timeline-main-content flex-wrap mt-0">
                                            <div class="avatar avatar-md online me-3 avatar-rounded mt-sm-0 mt-4"> <img
                                                    alt="avatar" src="../assets/images/faces/10.jpg"> </div>
                                            <div class="flex-fill">
                                                <div class="d-flex align-items-center">
                                                    <div class="mt-sm-0 mt-2">
                                                        <p class="mb-0 fs-14 fw-semibold">Zack Slayer</p>
                                                        <p class="mb-0 text-muted">Social network accounts are at risk
                                                            check your <span
                                                                class="badge bg-success-transparent fw-semibold mx-1">login</span>
                                                            details</p>
                                                    </div>
                                                    <div class="ms-auto"> <span
                                                            class="float-end badge bg-light text-muted timeline-badge">
                                                            15,Sep 2021 </span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-time text-end"> <span class="date">TODAY</span> <span
                                            class="time d-inline-block">04:11</span> </div>
                                    <div class="timeline-icon"> <a href="javascript:void(0);"></a> </div>
                                    <div class="timeline-body">
                                        <div class="d-flex align-items-top timeline-main-content flex-wrap mt-0">
                                            <div class="avatar avatar-md online me-3 avatar-rounded mt-sm-0 mt-4"> <img
                                                    alt="avatar" src="../assets/images/faces/2.jpg"> </div>
                                            <div class="flex-fill">
                                                <div class="d-flex align-items-center">
                                                    <div class="mt-sm-0 mt-2">
                                                        <p class="mb-0 fs-14 fw-semibold">Monika Karen</p>
                                                        <p class="mb-0 text-muted">Changed the password of gmail 4 hrs ago.
                                                            <span class="badge bg-secondary">Update</span></p>
                                                    </div>
                                                    <div class="ms-auto"> <span
                                                            class="float-end badge bg-light text-muted timeline-badge">
                                                            12,Sep 2021 </span> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade text-muted" id="shipped-tab-pane" role="tabpanel"
                            aria-labelledby="contact-tab" tabindex="0">
                            <ul class="ps-3 mb-0">
                                <li>but also the leap into electronic typesetting, remaining essentially unchanged. It was
                                    popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                                    passages, and more recently.</li>
                            </ul>
                        </div>
                        <div class="tab-pane fade text-muted" id="delivered-tab-pane" role="tabpanel" tabindex="0"
                            aria-labelledby="delivered-tab">
                            <ul class="list-unstyled mb-0">
                                <li>A Latin professor at Hampden-Sydney College in Virginia, looked up one of the more
                                    obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the
                                    cites of the word in classical literature.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endpush

@push('script')
    <script>
        // document.addEventListener("DOMContentLoaded", function() {
        //     const offcanvasEl = document.getElementById('offcanvasTimeline');
        //     const contentArea = document.getElementById('offcanvasContent');

        //     offcanvasEl.addEventListener('show.bs.offcanvas', function(event) {
        //         const triggerButton = event.relatedTarget;
        //         const orderId = triggerButton.getAttribute('data-order-id');

        //         document.getElementById('tbl-id-div').innerHTML = ("#" + orderId).toUpperCase();
        //     });
        // });
    </script>
@endpush
