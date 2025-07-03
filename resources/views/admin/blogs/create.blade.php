@extends('admin._layouts.master')

@section('content')
    <div class="container-fluid">
        <!-- Start::page-header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">Create New Blog</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">Site Settings</li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.blogs.index') }}">Manage Blogs</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Create New</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- End::page-header --> <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">Create New Blog </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.blogs.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3"> <label for="title" class="form-label fs-14 text-dark required">Enter
                                    Blog Title</label>
                                <div class="input-group">
                                    <div class="input-group-text">
                                        <i class="ri-article-line"></i>
                                    </div>
                                    <input type="text" class="form-control" id="title" name="title" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="col-md-12 mb-3"> <label for="excerpt"
                                            class="form-label fs-14 text-dark required">Describe
                                            Blog Excerpt</label>
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <i class="ri-edit-line"></i>
                                            </div>
                                            <input type="text" class="form-control" id="excerpt" name="excerpt"
                                                placeholder="Write a short summary or preview of the blog post content."
                                                required>
                                        </div>
                                        <div id="excerptHelp" class="form-text">This will be used as Meta Description for
                                            SEO,
                                            Social media previews & Related Article previews.</div>
                                    </div>
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label required">Tags</label>
                                        <select class="form-select choices__select" name="tags[]" multiple
                                            data-placeholder="Choose tags related to blogs" required>
                                            <option value="Tax">Tax</option>
                                            <option value="Savings">Savings</option>
                                            <option value="GST">GST</option>
                                            <option value="Company Registration">Company Registration</option>
                                            <option value="Startup">Startup</option>
                                            <option value="Trademark">Trademark</option>
                                            <option value="Legal Advice">Legal Advice</option>
                                            <option value="Compliance">Compliance</option>
                                            <option value="LLP">LLP</option>
                                            <option value="Private Limited Company">Private Limited Company</option>
                                            <option value="HUF">HUF (Hindu Undivided Family)</option>
                                            <option value="MSME Registration">MSME Registration</option>
                                            <option value="Digital Signature (DSC)">Digital Signature (DSC)</option>
                                            <option value="ROC Filings">ROC Filings</option>
                                            <option value="ITR Filing">ITR Filing</option>
                                            <option value="Audit">Audit</option>
                                        </select>
                                    </div>
                                    <div class="col-md-12">
                                        <label class="form-label required">Filter Leads From</label>
                                        <select class="form-select choices__select" name="blog_type"
                                            data-placeholder="Choose blog type" required>
                                            <option value="Insights">Insights</option>
                                            <option value="Guidance">Guidance</option>
                                            <option value="Resources">Resources</option>
                                            <option value="Tutorials">Tutorials</option>
                                            <option value="Case Studies">Case Studies</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="banner_img" class="form-label fs-14 text-dark">Upload File</label>
                                    <input type="file" class="form-control filepond" name="banner_img" id="banner_img"
                                        accept="image/*">
                                    <div class="form-text">You can upload an jpg, png or webp image.</div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="excerpt" class="form-label fs-14 text-dark required">Write Blog Content</label>
                                <div id="quill-snow-container"></div>
                                <input type="hidden" name="content" id="quill-snow-inputholder">
                            </div>
                            <button class="btn btn-success me-2" value="1" name="type"
                                type="submit">Publish</button>
                            <button class="btn btn-primary" value="0" name="type" type="submit">Draft</button>
                        </form>
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
@endpush
