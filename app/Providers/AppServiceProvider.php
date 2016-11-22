<?php

namespace App\Providers;

use App\ManualAuth\Guard;
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

        //borrat el container

        //PAS 1 Middleware. com protegir pàgines?


//Container



$this->app->bind(
    Guard::class, config('manualAuth.guard')
);
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
