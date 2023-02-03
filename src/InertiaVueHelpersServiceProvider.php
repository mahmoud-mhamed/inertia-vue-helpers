<?php

namespace Mahmoudmhamed\InertiaVueHelpers;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class InertiaVueHelpersServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('inertia-vue-helpers')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_inertia-vue-helpers_table');
    }
}
