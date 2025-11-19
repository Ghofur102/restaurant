@include('frontend.dashboard.header')
<section class="pt-4 pb-4 section osahan-account-page">
    <div class="container">
        <div class="row">
            @include('frontend.dashboard.sidebar')
            <div class="col-md-9">
                <div class="p-4 bg-white rounded shadow-sm osahan-account-page-right h-100">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</section>
@include('frontend.dashboard.footer')
