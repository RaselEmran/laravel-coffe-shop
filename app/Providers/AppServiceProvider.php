<?php

namespace App\Providers;

use App\Api;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Config;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
         if (Schema::hasTable('apis')) {
            foreach (Api::all() as $setting) {
               Config::set('settings.'.$setting->key,$setting->value);
            }
         }

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
