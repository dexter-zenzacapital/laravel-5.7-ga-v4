<?php

namespace Vormkracht10\Analytics;

use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class AnalyticsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-5.7-ga-v4')
            ->hasConfigFile();

        if (app()->runningUnitTests()) {
            return;
        }

        $package->hasInstallCommand(function (InstallCommand $command) {
            $command->publishConfigFile()
                ->askToStarRepoOnGitHub('vormkracht10/laravel-google-analytics');
        });
    }
}
