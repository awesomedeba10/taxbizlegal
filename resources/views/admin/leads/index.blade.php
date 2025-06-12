@extends('admin._layouts.master')

@section('content')
    <div class="container-fluid">
        <!-- Start::page-header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">View Leads</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Leads</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Summary</li>
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
                            <div>
                                <input class="form-control form-control-sm" type="text" placeholder="Search Here"
                                    aria-label=".form-control-sm example">
                            </div>
                            <button type="button"
                                class="btn btn-primary-gradient btn-wave btn-sm waves-effect waves-light">
                                <i class="bi bi-search"></i>
                            </button>
                            <button type="button" class="btn btn-secondary btn-wave btn-sm me-2 waves-effect waves-light">
                                Create Custom View
                            </button>
                            <div class="dropdown"> <a aria-label="anchor" href="javascript:void(0);"
                                    class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i> </a>
                                <ul class="dropdown-menu" style="">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Week</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Month</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Year</a></li>
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
                                        <th scope="col">Date</th>
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
                                                        <div class="lh-1"> <span>{{ $order->service_name }}</span> </div>
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
                                                <span
                                                    class="badge bg-primary-transparent fs-12">{{ $order->current_stage }}</span>
                                            </td>
                                            <td>{{ $order->created_at }}</td>
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
                        <div class="d-flex align-items-center">
                            <div> Showing 6 Entries <i class="bi bi-arrow-right ms-2 fw-semibold"></i> </div>
                            <div class="ms-auto">
                                <nav aria-label="Page navigation" class="pagination-style-4">
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled"> <a class="page-link" href="javascript:void(0);">
                                                Prev </a> </li>
                                        <li class="page-item active"><a class="page-link"
                                                href="javascript:void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
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
        <!-- End::row-1 -->
    </div>
@endsection
