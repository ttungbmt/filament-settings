<?php

namespace FilamentPro\FilamentSettings\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \FilamentPro\FilamentSettings\FilamentSettings
 */
class FilamentSettings extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'filament-settings';
    }
}
