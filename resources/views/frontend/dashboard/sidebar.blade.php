<div class="col-md-3">
    <div class="bg-white rounded shadow-sm osahan-account-page-left h-100">
        <div class="p-4 border-bottom">
            <div class="text-center osahan-user">
                <div class="osahan-user-media">
                    <img class="mt-1 mb-3 shadow-sm rounded-pill"
                        src="{{ !empty($profileData->photo) ? asset('upload/user_images/' . $profileData->photo) : asset('upload/no_image.jpg') }}"
                        alt="gurdeep singh osahan">
                    <div class="osahan-user-media-body">
                        <h6 class="mb-2">{{ $profileData->name }}</h6>
                        <p class="mb-1">{{ $profileData->phone }}</p>
                        <p>{{ $profileData->email }}</p>
                    </div>
                </div>
            </div>
        </div>
        <ul class="pt-4 pb-4 pl-4 border-0 nav nav-tabs flex-column" id="myTab" role="tablist">
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() === 'dashboard' ? 'active' : '' }}" href="{{ route('dashboard') }}"><i
                        class="icofont icofont-businessman"></i> Profile
                    User</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Route::currentRouteName() === 'user.change.password' ? 'active' : '' }}" href="{{ route('user.change.password') }}"><i class="icofont-ui-edit"></i>
                    Change Password</a>
            </li>
        </ul>
    </div>
</div>
