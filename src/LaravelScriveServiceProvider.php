<?php

namespace BernskioldMedia\LaravelScrive;

use BernskioldMedia\LaravelScrive\Commands\LaravelScriveCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
