<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class DailyRemindersProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('DailyReminders', function ($app) {
            return new DailyReminders();
        });
    }
}
