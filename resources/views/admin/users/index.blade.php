@extends('admin._layouts.master')

@section('content')
    <div class="container-fluid">
        <!-- Start::page-header -->
        <div class="d-md-flex d-block align-items-center justify-content-between my-4 page-header-breadcrumb">
            <h1 class="page-title fw-semibold fs-18 mb-0">View Users</h1>
            <div class="ms-md-1 ms-0">
                <nav>
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">Admin</li>
                        <li class="breadcrumb-item active" aria-current="page">Manage Users</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- End::page-header --> <!-- Start::row-1 -->
        <div class="row">
            <div class="col-xl-12">
                <div class="card custom-card">
                    <div class="card-header justify-content-between">
                        <div class="card-title">View Users</div>
                        <div class="d-flex flex-wrap gap-2">
                            <form class="d-flex flex-wrap gap-2" action="{{ route('admin.users.index') }}" method="get">
                                <div>
                                    <input class="form-control form-control-sm" type="text" placeholder="Search Users"
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
                                        <a class="dropdown-item" href="javascript:void(0);" data-bs-toggle="offcanvas"
                                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                                            Create Users
                                        </a>
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
                                        <th scope="col">Designation</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($users as $user)
                                        <tr>
                                            <th scope="row">
                                                {{ $loop->iteration }}
                                            </th>
                                            <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                <span
                                                    class="badge bg-primary-transparent fs-12">{{ $user->designation }}</span>
                                            </td>
                                            <td>
                                                @if ($user->is_active == 1)
                                                    <span class="badge bg-success-transparent fs-12">Active</span>
                                                @else
                                                    <span class="badge bg-danger-transparent fs-12">Revoked</span>
                                                @endif
                                            </td>
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
                        {{ $users->links('vendor.pagination.custom-design-1') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('html')
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel1"
        data-bs-backdrop="static">
        <div class="offcanvas-header border-bottom border-block-end-dashed">
            <h5 class="offcanvas-title" id="offcanvasRightLabel1">Create User </h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body p-0">
            <div class="card custom-card">
                <div class="card-body">
                    <form method="post" action="{{ route('admin.users.create') }}" autocomplete="off"
                        class="needs-validation row">
                        @csrf
                        <div class="col-md-6 mb-3">
                            <label class="form-label required">First Name</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" placeholder="First name" name="first_name"
                                    aria-label="First name" required>
                                <div class="invalid-feedback">
                                    First Name is required
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label required">Last Name</label>
                            <input type="text" class="form-control" placeholder="Last name" name="last_name"
                                aria-label="Last name" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label required">Contact Number</label>
                            <input type="number" maxlength="10" class="form-control" placeholder="Phone number"
                                name="phone" aria-label="Phone number" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" required>Email</label>
                            <input type="text" class="form-control" placeholder="Email" name="email"
                                autocomplete="off" aria-label="Phone number" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label required">Designation</label>
                            <input type="text" class="form-control" placeholder="Designation" name="designation"
                                aria-label="Designation" required>
                        </div>
                        <div class="col-md-12 mb-3">
                            <label class="form-label required">Password</label>
                            <div class="input-group">
                                <div class="input-group-text"><i class="ri-lock-line"></i></div>
                                <input type="password" class="form-control" id="form-password1"
                                    placeholder="Enter Password" autocomplete="new-password" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endpush
