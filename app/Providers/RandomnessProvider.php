<?php

namespace App\Providers;

use App\Randomness;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class RandomnessProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->singleton(Randomness::class, function () {
            return new Randomness();
        });

        View::share('randomness', app(\App\Randomness::class));
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
