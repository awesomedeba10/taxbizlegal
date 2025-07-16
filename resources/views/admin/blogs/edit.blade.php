@extends('admin._layouts.master')

@php
    $statusLabel = '';
    $statusClass = '';

    if (!$blog->is_published && is_null($blog->published_at)) {
        $statusLabel = 'Current Status: Drafted';
        $statusClass = 'btn-warning-light';
    } elseif (!$blog->is_published && !is_null($blog->published_at)) {
        $statusLabel = 'Current Status: Not Published';
        $statusClass = 'btn-danger-light';
    } else {
        $statusLabel = 'Current Status: Published';
        $statusClass = 'btn-success-light';
    }

    $tagOptions = [
        'Tax',
        'Savings',
        'GST',
        'Company Registration',
        'Startup',
        'Trademark',
        'Legal Advice',
        'Compliance',
        'LLP',
        'Private Limited Company',
        'HUF',
        'MSME Registration',
        'Digital Signature (DSC)',
        'ROC Filings',
        'ITR Filing',
        'Audit',
    ];
    $selectedTags = is_array($blog->tags) ? $blog->tags : explode(',', $blog->tags);
    $selectedrelatedServices = is_array($blog->related_services) ? $blog->related_services : explode(',', $blog->related_services);
@endphp

@section('content')
    <div class="container-fluid">
        <!-- Start::page-header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">Edit Blog</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">Site Settings</li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.blogs.index') }}">Manage Blogs</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Edit Blog</a>
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
                        <div class="card-title">Edit Blog</div>
                        <div class="d-flex flex-wrap gap-2">
                            <button class="btn {{ $statusClass }} btn-sm btn-wave waves-effect waves-light">{{ $statusLabel }}</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.blogs.update', encrypt($blog->id)) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="col-md-12">
                                        <label for="title" class="form-label fs-14 text-dark required">Enter
                                        Blog Title</label>
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <i class="ri-article-line"></i>
                                            </div>
                                            <input type="text" class="form-control" id="title" name="title"
                                                value="{{ old('title', $blog->title) }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="col-md-12">
                                        <label for="title" class="form-label fs-14 text-dark required">Type
                                        Blog URL Part</label>
                                        <div class="input-group">
                                            <div class="input-group-text">
                                                <i class="ri-links-line"></i>
                                            </div>
                                            <input type="text" class="form-control" id="blog-slug" name="slug"
                                                value="{{ old('slug', $blog->slug) }}"
                                                placeholder="Write a SEO friendly slug" required>
                                        </div>
                                        @error('slug')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                        <div id="blogSlugHelp" class="form-text" data-url="{{ route('front.blogs') }}">
                                            Blog URL will looks like : {{ route('front.blogs.view', $blog->slug) }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="excerpt" class="form-label fs-14 text-dark required">Describe Blog
                                    Excerpt</label>
                                <div class="input-group">
                                    <div class="input-group-text"><i class="ri-edit-line"></i></div>
                                    <textarea type="text" class="form-control" id="excerpt" name="excerpt"
                                        placeholder="Write a short summary or preview of the blog post content." required>{{ old('excerpt', $blog->excerpt) }}</textarea>
                                </div>
                                <div id="excerptHelp" class="form-text">This will be used as Meta Description for SEO,
                                    Social media previews & Related Article previews.</div>
                            </div>
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <div class="col-md-12 mb-3">
                                        <label class="form-label required">Tags</label>
                                        <select class="form-select choices__select" name="tags[]" multiple required>
                                            @foreach ($tagOptions as $tag)
                                                <option value="{{ $tag }}"
                                                    {{ in_array($tag, $selectedTags) ? 'selected' : '' }}>
                                                    {{ $tag }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-12 mb-3">
                                        <label class="form-label required">Blog Type</label>
                                        <select class="form-select choices__select" name="blog_type" required>
                                            @foreach (['Insights', 'Guidance', 'Resources', 'Tutorials', 'Case Studies'] as $type)
                                                <option value="{{ $type }}"
                                                    {{ $blog->blog_type == $type ? 'selected' : '' }}>
                                                    {{ $type }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="col-md-12">
                                        <label class="form-label required">Related Service</label>
                                        <select class="form-select choices__select" name="related_services[]"
                                            data-placeholder="Choose Related Service" multiple required>
                                            @foreach ($services as $service)
                                                <option value="{{ $service->slug }}"
                                                    {{ in_array($service->slug, $selectedrelatedServices) ? 'selected' : '' }}>{{ $service->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="banner_img" class="form-label fs-14 text-dark">Upload File</label>
                                    <input type="file" class="form-control filepond" name="banner_img" id="banner_img"
                                        @if(isset($blog->banner_img))
                                            data-source="{{ asset('storage/' . $blog->banner_img) }}"
                                            data-file-name="{{ basename($blog->banner_img) }}"
                                        @endif
                                        accept="image/*">
                                    <div class="form-text">You can upload an jpg, png or webp image.</div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="excerpt" class="form-label fs-14 text-dark required">Write Blog Content</label>
                                <div id="quill-snow-container">{!! $blog->content !!}</div>
                                <input type="hidden" name="content" id="quill-snow-inputholder"
                                    value="{{ old('content', $blog->content) }}">
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
