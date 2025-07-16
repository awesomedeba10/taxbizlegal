@extends('admin._layouts.master')

@section('content')
    <div class="container-fluid">
        <!-- Start::page-header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">View All Blogs</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">Site Settings</li>
                        <li class="breadcrumb-item">Manage Blogs</li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">List</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- End::page-header --> <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">Blogs List </div>
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
                                    <a class="dropdown-item" href="{{ route('admin.blogs.create') }}">
                                        Create New
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
                                        <th scope="col">#No</th>
                                        <th scope="col">Title</th>
                                        <th scope="col">Tags</th>
                                        <th scope="col">Blog Type</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Created At</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($blogs as $blog)
                                        <tr>
                                            <th scope="row">
                                                {{ $blog->id }}
                                            </th>
                                            <td>
                                                {{ Str::limit($blog->title, 25, ' ...') }}
                                            </td>
                                            <td>
                                                @foreach(explode(',', $blog->tags) as $tag)
                                                    <span class="badge rounded-pill bg-primary">{{ trim($tag) }}</span>
                                                @endforeach
                                            </td>
                                            <td>
                                                <span
                                                    class="badge bg-primary-gradient">{{ $blog->blog_type }}</span>
                                            </td>
                                            <td>
                                                @if (!$blog->is_published && is_null($blog->published_at))
                                                    <span class="badge bg-warning">Drafted</span>
                                                @elseif (!$blog->is_published && !is_null($blog->published_at))
                                                    <span class="badge bg-danger">Not Published</span>
                                                @elseif ($blog->is_published && !is_null($blog->published_at))
                                                    <span class="badge bg-success">Published</span>
                                                @endif
                                            </td>
                                            <td>{{ $blog->formatted_created_at }}</td>
                                            <td>
                                                <div class="hstack gap-2 fs-15">
                                                    <a type="button" href="{{ route('admin.blogs.edit', encrypt($blog->id)) }}"
                                                        class="btn btn-icon btn-primary-transparent btn-wave btn-sm waves-effect waves-light">
                                                        <i class="bi bi-pencil-square"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7" class="text-center py-4">
                                                <span class="d-block w-100">No Records Found</span>
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        {{ $blogs->links('vendor.pagination.custom-design-1') }}
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
