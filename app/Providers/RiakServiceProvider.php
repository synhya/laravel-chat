<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RiakServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(Connection::class, );
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
