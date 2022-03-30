<?php

namespace FilamentPro\FilamentSettings;

use Filament\PluginServiceProvider;
use FilamentPro\FilamentSettings\Pages\ManageAppearance;
use FilamentPro\FilamentSettings\Pages\ManageEmail;
use FilamentPro\FilamentSettings\Pages\ManageGeneral;
use FilamentPro\FilamentSettings\Pages\ManageSocialLogin;
use Spatie\LaravelPackageTools\Package;

class FilamentSettingsServiceProvider extends PluginServiceProvider
{
    protected array $pages = [
        ManageGeneral::class,
        ManageAppearance::class,
        ManageEmail::class,
        ManageSocialLogin::class,
    ];

    public function configurePackage(Package $package): void
    {
        $package->name('filament-settings');
    }
}
