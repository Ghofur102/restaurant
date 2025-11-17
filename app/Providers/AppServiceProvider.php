<?php

namespace App\Providers;

use App\Models\Admin;
use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('client.body.header', function ($view) {
            if(Auth::guard('client')->check()) {
                $id = Auth::guard('client')->id();
                $profileData = Client::find($id);

                $view->with('profileData', $profileData);
            }
        });
        view()->composer('admin.body.header', function ($view) {
            if(Auth::guard('admin')->check()) {
                $id = Auth::guard('admin')->id();
                $profileData = Admin::find($id);

                $view->with('profileData', $profileData);
            }
        });
    }
}
