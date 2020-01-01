<?php

namespace App\Providers;

use App\Stats;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class StatsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(Stats::class, function () {
            return new Stats();
        });

        View::share('stats', app(\App\Stats::class));
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
