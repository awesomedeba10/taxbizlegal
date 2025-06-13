@extends('admin._layouts.master')

@section('content')
    <div class="container-fluid">
        <!-- Start::page-header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">View Enquiry Request</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">Leads</li>
                        <li class="breadcrumb-item">Enquiries</li>
                        <li class="breadcrumb-item active" aria-current="page">Inbound Contact Request</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- End::page-header --> <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">View Enquiry Requests</div>
                        <div class="d-flex flex-wrap gap-2">
                            <form class="d-flex flex-wrap gap-2" action="" method="get">
                                <div>
                                    <input class="form-control form-control-sm" type="text" placeholder="Search Leads"
                                        name="query" value="{{ request('query') }}" aria-label=".form-control-sm example">
                                </div>
                                <button type="submit"
                                    class="btn btn-primary-gradient btn-wave btn-sm waves-effect waves-light">
                                    <i class="bi bi-search"></i>
                                </button>
                            </form>
                            <div class="dropdown"> <a aria-label="anchor" href="javascript:void(0);"
                                    class="btn btn-icon btn-sm btn-light" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i> </a>
                                <ul class="dropdown-menu" style="">
                                    <li>
                                        <a class="dropdown-item" href="javascript:void(0);">
                                            Add to Custom View
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table text-nowrap table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">#No</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Mobile</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Message</th>
                                        <th scope="col">Redirected From</th>
                                        <th scope="col">Enquiry Time</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($enquiries as $enq)
                                        <tr>
                                            <th scope="row">
                                                {{ $loop->iteration }}
                                            </th>
                                            <td>{{ $enq->name }}</td>
                                            <td>
                                                <span
                                                    class="badge bg-primary-transparent fs-12">{{ $enq->phone }}</span>
                                            </td>
                                            <td>{{ $enq->email }}</td>
                                            <td>{{ $enq->message }}</td>
                                            <td>{{ ucfirst(str_replace('-', ' ', $enq->redirected_from)) }}</td>
                                            <td>{{ $enq->created_at }}</td>
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
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center py-4">
                                                <span class="d-block w-100">No Records Found</span>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        {{ $enquiries->links('vendor.pagination.custom-design-1') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
