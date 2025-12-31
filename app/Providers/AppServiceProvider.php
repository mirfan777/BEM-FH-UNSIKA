<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Settings\SiteProfile;
use App\Models\Field;
use App\Models\Department;

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
        view()->composer('*', function ($view) {
            $siteProfile = app(SiteProfile::class);
            $view->with('siteProfile', $siteProfile);
        });

        // Share navigation data for guest layout
        view()->composer('components.guest.layout', function ($view) {
            $view->with([
                'fields' => Field::with('departments')->get(),
                'departments' => Department::all(),
            ]);
        });

    }
}
