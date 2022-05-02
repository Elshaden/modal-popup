<?php

namespace Elshaden\ModalPopup;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Elshaden\ModalPopup\Commands\ModalPopupCommand;

class ModalPopupServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('modal-popup')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_modal-popup_table')
            ->hasCommand(ModalPopupCommand::class);
    }
}
