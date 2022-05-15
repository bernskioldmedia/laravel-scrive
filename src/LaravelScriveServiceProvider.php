<?php

namespace BernskioldMedia\LaravelScrive;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use BernskioldMedia\LaravelScrive\Commands\LaravelScriveCommand;

class LaravelScriveServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-scrive')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-scrive_table')
            ->hasCommand(LaravelScriveCommand::class);
    }
}
