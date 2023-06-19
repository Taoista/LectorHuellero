<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use App\Models\CreateFinger;
// use App\Observers\RegistroFingerPrintObserver;


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
        // CreateFinger::observe(RegistroFingerPrintObserver::class);
    }
}
