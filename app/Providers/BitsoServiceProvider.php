<?php

namespace App\Providers;

use App\Lib\BitsoConnection;
use Illuminate\Support\ServiceProvider;

class BitsoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(BitsoConnection::class, function ($app) {
            return new BitsoConnection(config('services.bitso'));
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
