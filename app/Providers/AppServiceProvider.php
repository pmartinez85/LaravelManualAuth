<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //PAS 1 Middleware. com protegir pàgines?


        //Container


        //
        //$this->app->bind(
        //    \App\ManualAuth\Guard::class, config('manualAuth.guard')
    //);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
