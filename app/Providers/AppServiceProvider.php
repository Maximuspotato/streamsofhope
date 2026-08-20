<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Cause; // Import your Cause model
use Illuminate\Support\Facades\View; // Import the View facade

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Every time 'layouts.app' is loaded, pass it the 3 latest causes
        View::composer('layouts.app', function ($view) {
            $footerCauses = Cause::latest()->take(3)->get();
            $view->with('footerCauses', $footerCauses);
        });
    }
}
