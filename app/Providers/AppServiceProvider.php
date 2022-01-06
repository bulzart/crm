<?php

namespace App\Providers;
use DB;

use Illuminate\Support\ServiceProvider;

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
        if(env("APP_ENV")==="local"){
            DB::listen(function ($query) {
                error_log($query->time);
            });
        }
    }
}
