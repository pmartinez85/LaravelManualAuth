<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class AppServiceProvider
 * @package App\Providers
 */
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
<<<<<<< HEAD
        //borrat el container
=======
        //PAS 1 Middleware. com protegir pàgines?


//Container



$this->app->bind(
    \App\ManualAuth\Guard::class, config('manualAuth.guard')
);
>>>>>>> a6bc5f624da7a85b36ceb775d362a9dabd467383
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
