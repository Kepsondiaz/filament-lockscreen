<?php

namespace Kepsondiaz\Lockscreen;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Kepsondiaz\Lockscreen\Commands\LockscreenCommand;

class LockscreenServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('lockscreen')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_lockscreen_table')
            ->hasCommand(LockscreenCommand::class);
    }
}
