<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Settings\SiteProfile;

// 
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Share site profile data globally
        view()->composer('*', function ($view) {
            $view->with('siteProfile', app(SiteProfile::class));
        });
    }
}
