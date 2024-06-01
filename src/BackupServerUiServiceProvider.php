<?php

declare(strict_types=1);

namespace Moox\BackupServerUi;

use Moox\BackupServerUi\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class BackupServerUiServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('backup-server-ui')
            ->hasConfigFile()
            // ->hasViews() // there aren't any views - this breaks calls to artisan view:cache
            ->hasTranslations()
            ->hasCommand(InstallCommand::class);
    }
}
