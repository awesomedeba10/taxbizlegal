@extends('admin._layouts.master')

@section('content')
    <div class="container-fluid">
        <!-- Start::page-header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">Application Sitemap</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">Site Settings</li>
                        <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Generate
                                Sitemap</a></li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">Sitemap Preview</div>
                        <div class="d-flex flex-wrap gap-2">
                            <form action="{{ route('admin.sitemap.generate') }}" method="post">
                                @csrf
                                <button type="submit"
                                    class="btn btn-primary-gradient btn-wave btn-sm waves-effect waves-light">
                                    <i class="bi bi-arrow-clockwise"></i> Refresh
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="card-body">
                        <pre class="xml-preview-vscode">{{ $sitemap }}</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
