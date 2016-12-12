<?php

namespace App\Providers;

use App\ManualAuth\Guard;
use App\ManualAuth\UserProviders\UserProvider;
use Illuminate\Support\ServiceProvider;

/**
 * Class ManualAuthServiceProvider.
 */
class ManualAuthServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(
    Guard::class, config('manualauth.guard')
);
        $this->app->bind(
            UserProvider::class, config('manualauth.user')
        );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
