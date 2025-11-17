@extends('client.client_dashboard')
@section('client')
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
                        <div class="order-2 col-sm order-sm-1">
                            <div class="mt-3 d-flex align-items-start mt-sm-0">
                                <div class="flex-shrink-0">
                                    <div class="avatar-xl me-3">
                                        <img src="{{ !empty($profileData->photo) ? asset('upload/client_images/' . $profileData->photo) : asset('upload/no_image.jpg') }}"
                                            alt="" class="img-fluid rounded-circle d-block" style="object-fit: cover;height: 100%;width: 100%;">
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <div>
                                        <h5 class="mb-1 font-size-16">{{ $profileData->name }}</h5>
                                        <p class="text-muted font-size-13">{{ $profileData->email }}</p>

                                        <div
                                            class="flex-wrap gap-2 d-flex align-items-start gap-lg-3 text-muted font-size-13">
                                            <div><i
                                                    class="align-middle mdi mdi-circle-medium me-1 text-success"></i>{{ $profileData->phone }}
                                            </div>
                                            <div><i
                                                    class="align-middle mdi mdi-circle-medium me-1 text-success"></i>{{ $profileData->address }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="order-1 col-sm-auto order-sm-2">
                            <div class="gap-2 d-flex align-items-start justify-content-end">
                                <div>
                                    <button type="button" class="btn btn-soft-light"><i class="me-1"></i>
                                        Message</button>
                                </div>
                                <div>
                                    <div class="dropdown">
                                        <button class="shadow-none btn btn-link font-size-16 text-muted dropdown-toggle"
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
                        <div class="p-4 card-body">
                            <form action="{{ route('client.profile.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="example-text-input-name" class="form-label">Name</label>
                                            <input class="form-control" name="name" type="text"
                                                value="{{ $profileData->name }}" id="example-text-input-name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-text-input-email" class="form-label">Email</label>
                                            <input class="form-control" name="email" type="email"
                                                value="{{ $profileData->email }}" id="example-text-input-email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-text-input-phone" class="form-label">Phone</label>
                                            <input class="form-control" name="phone" type="text"
                                                value="{{ $profileData->phone }}" id="example-text-input-phone">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="mt-3 mt-lg-0">
                                            <div class="mb-3">
                                                <label for="example-date-input-address" class="form-label">Address</label>
                                                <input class="form-control" type="text" name="address"
                                                    value="{{ $profileData->address }}" id="example-date-input-address">
                                            </div>
                                            <div class="mb-3">
                                                <label for="image" class="form-label">Photo
                                                    Profile</label>
                                                <input class="form-control" type="file" name="photo" value=""
                                                    id="image">
                                                <div class="flex-shrink-0 mt-2">
                                                    <div class="avatar-xl me-3">
                                                        <img src="{{ !empty($profileData->photo) ? asset('upload/client_images/' . $profileData->photo) : asset('upload/no_image.jpg') }}"
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
