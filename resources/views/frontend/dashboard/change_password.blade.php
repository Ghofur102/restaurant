 @extends('frontend.dashboard.dashboard')
 @section('content')
     <h4 class="mt-0 mb-4 font-weight-bold">Profile User</h4>
     <div class="mb-4 bg-white shadow-sm card order-list">
         <div class="p-4 gold-members">
             <form action="{{ route('user.update.password') }}" method="post">
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
                     <input class="form-control" type="password" name="new_password_confirmation" value=""
                         id="new_password_confirmation">
                     @error('new_password_confirmation')
                         <span class="text-danger">{{ $message }}</span>
                     @enderror
                 </div>
                 <div class="mt-4">
                     <button type="submit" class="btn btn-primary waves-effect waves-light">Save
                         Changes</button>
                 </div>
             </form>
         </div>
     </div>
 @endsection
