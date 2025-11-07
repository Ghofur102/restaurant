@extends('admin.admin_dashboard')
@section('admin')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

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
                                            alt="" class="img-fluid rounded-circle d-block" style="object-fit: cover;height: 100%;width: 100%;">
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
                            <form action="{{ route('admin.profile.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="example-text-input-name" class="form-label">Name</label>
                                            <input class="form-control" name="name" type="text"
                                                value="{{ $admin_data->name }}" id="example-text-input-name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-text-input-email" class="form-label">Email</label>
                                            <input class="form-control" name="email" type="email"
                                                value="{{ $admin_data->email }}" id="example-text-input-email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-text-input-phone" class="form-label">Phone</label>
                                            <input class="form-control" name="phone" type="text"
                                                value="{{ $admin_data->phone }}" id="example-text-input-phone">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mt-3 mt-lg-0">
                                            <div class="mb-3">
                                                <label for="example-date-input-address" class="form-label">Address</label>
                                                <input class="form-control" type="text" name="address"
                                                    value="{{ $admin_data->address }}" id="example-date-input-address">
                                            </div>
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Photo
                                                    Profile</label>
                                                <input class="form-control" type="file" name="photo" value=""
                                                    id="image">
                                                <div class="flex-shrink-0 mt-2">
                                                    <div class="avatar-xl me-3">
                                                        <img src="{{ !empty($admin_data->photo) ? asset('upload/admin_images/' . $admin_data->photo) : asset('upload/no_image.jpg') }}"
                                                            alt="" id="showImage" class="img-fluid rounded-circle d-block" style="object-fit: cover;height: 100%;width: 100%;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mt-4">
                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Save
                                                    Changes</button>
                                            </div>
                                        </div>
                                    </div>
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

    <script type="text/javascript">
        $(document).ready(function(e) {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files[0]);
            });
        });
    </script>
@endsection
