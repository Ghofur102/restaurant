 @extends('frontend.dashboard.dashboard')
 @section('content')
 <h4 class="mt-0 mb-4 font-weight-bold">Profile User</h4>
 <div class="mb-4 bg-white shadow-sm card order-list">
     <div class="p-4 gold-members">
         <form action="{{ route('user.profile.store') }}" method="post" enctype="multipart/form-data">
             @csrf
             <div class="row">
                 <div class="col-lg-6">
                     <div class="mb-3">
                         <label for="example-text-input-name" class="form-label">Name</label>
                         <input class="form-control" name="name" type="text" value="{{ $profileData->name }}"
                             id="example-text-input-name">
                     </div>
                     <div class="mb-3">
                         <label for="example-text-input-email" class="form-label">Email</label>
                         <input class="form-control" name="email" type="email" value="{{ $profileData->email }}"
                             id="example-text-input-email">
                     </div>
                     <div class="mb-3">
                         <label for="example-text-input-phone" class="form-label">Phone</label>
                         <input class="form-control" name="phone" type="text" value="{{ $profileData->phone }}"
                             id="example-text-input-phone">
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
                             <input class="form-control" type="file" name="photo" value="" id="image">
                             <div class="flex-shrink-0 mt-2">
                                 <div class="avatar-xl me-3">
                                     <img src="{{ !empty($profileData->photo) ? asset('upload/user_images/' . $profileData->photo) : asset('upload/no_image.jpg') }}"
                                         alt="" id="showImage" class="img-fluid rounded-circle d-block"
                                         style="object-fit: cover;height: 30%;width: 30%;">
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
 @endsection
