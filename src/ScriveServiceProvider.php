<?php

namespace BernskioldMedia\LaravelScrive;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ScriveServiceProvider extends PackageServiceProvider
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
            ->hasConfigFile();
    }

    public function registeringPackage()
    {
        $this->app->bind(ScriveClient::class, function () {
            return ScriveClient::fromConfig(config('scrive'));
        });

        $this->app->bind(Scrive::class, function () {
            $this->protectAgainstInvalidConfiguration(config('scrive'));
            $client = app(ScriveClient::class);

            return new Scrive($client);
        });

        $this->app->alias(Scrive::class, 'laravel-scrive');
    }

    protected function protectAgainstInvalidConfiguration(array $config): void
    {

    }
}
