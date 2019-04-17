<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


class GoogleMapsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        app()->singleton('googlemaps', function(){
            return new \App\Services\GoogleMap(env('GOOGLE_MAPS_KEY'));
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
