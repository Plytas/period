<?php

namespace Gtmassey\Period;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Gtmassey\Period\Commands\PeriodCommand;

class PeriodServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('period')
            ->hasConfigFile();
    }
}
