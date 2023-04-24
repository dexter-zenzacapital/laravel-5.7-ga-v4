<?php

namespace Vormkracht10\Analytics;

use Illuminate\Support\ServiceProvider;

class AnalyticsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/google-analytics.php' => config_path('analytics.php'),
        ], 'config');

        if ($this->app->runningUnitTests()) {
            return;
        }
    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/google-analytics.php',
            'analytics'
        );
    }
}
