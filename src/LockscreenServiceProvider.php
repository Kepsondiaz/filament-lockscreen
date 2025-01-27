<?php

namespace Kepsondiaz\Lockscreen;

use Kepsondiaz\Lockscreen\Commands\LockscreenCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
            ->hasRoute('lockscreen')
            ->hasMigration('create_lockscreen_table')
            ->hasCommand(LockscreenCommand::class);
    }
}
