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
                                        <img src="{{ (!empty($admin_data->photo)) ? asset('upload/admin_images/'.$admin_data->photo) : asset('upload/no_image.jpg') }}" alt=""
                                            class="img-fluid rounded-circle d-block">
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
                </div>
                <!-- end card body -->
            </div>
            <!-- end card -->

        </div> <!-- container-fluid -->
    </div>
@endsection
