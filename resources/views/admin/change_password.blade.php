@extends('admin.admin_dashboard')
@section('admin')
    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0 font-size-18">Profile</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->


            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm order-2 order-sm-1">
                            <div class="d-flex align-items-start mt-3 mt-sm-0">
                                <div class="flex-shrink-0">
                                    <div class="avatar-xl me-3">
                                        <img src="{{ !empty($admin_data->photo) ? asset('upload/admin_images/' . $admin_data->photo) : asset('upload/no_image.jpg') }}"
                                            alt="" class="img-fluid rounded-circle d-block"
                                            style="object-fit: cover;height: 100%;width: 100%;">
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <div>
                                        <h5 class="font-size-16 mb-1">{{ $admin_data->name }}</h5>
                                        <p class="text-muted font-size-13">{{ $admin_data->email }}</p>

                                        <div
                                            class="d-flex flex-wrap align-items-start gap-2 gap-lg-3 text-muted font-size-13">
                                            <div><i
                                                    class="mdi mdi-circle-medium me-1 text-success align-middle"></i>{{ $admin_data->phone }}
                                            </div>
                                            <div><i
                                                    class="mdi mdi-circle-medium me-1 text-success align-middle"></i>{{ $admin_data->address }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-auto order-1 order-sm-2">
                            <div class="d-flex align-items-start justify-content-end gap-2">
                                <div>
                                    <button type="button" class="btn btn-soft-light"><i class="me-1"></i>
                                        Message</button>
                                </div>
                                <div>
                                    <div class="dropdown">
                                        <button class="btn btn-link font-size-16 shadow-none text-muted dropdown-toggle"
                                            type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bx bx-dots-horizontal-rounded"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a class="dropdown-item" href="#">Action</a></li>
                                            <li><a class="dropdown-item" href="#">Another action</a></li>
                                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body p-4">
                            <form action="{{ route('admin.update.password') }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="example-text-input-old_password" class="form-label">Old
                                        Password</label>
                                    <input class="form-control" name="old_password" type="password" value=""
                                        @error('old_password') is-invalid @enderror id="example-text-input-old_password">
                                    @error('old_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="example-date-input-new_password" class="form-label">New
                                        Password</label>
                                    <input class="form-control" type="password" name="new_password" value=""
                                        @error('new_password') is-invalid @enderror id="example-date-input-new_password">
                                    @error('new_password')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="example-date-input-new_password" class="form-label">Confirm New
                                        Password</label>
                                    <input class="form-control" type="password" name="new_password_confirmation"
                                        value="" id="new_password_confirmation">
                                </div>
                                <div class="mt-4">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Save
                                        Changes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->

        </div> <!-- container-fluid -->
    </div>
@endsection
