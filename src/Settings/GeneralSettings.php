<?php

namespace FilamentPro\FilamentSettings\Settings;

use Spatie\LaravelSettings\Settings;

class GeneralSettings extends Settings
{
    public ?string $site_name;
    public ?string $site_title;
    public ?string $site_keywords;
    public ?string $site_author;
    public ?string $site_url;
    public ?string $site_version;
    public ?string $admin_email;
    public ?string $active_language;
    public ?string $date_format;
    public ?string $time_format;
    public ?string $timezone;
    public ?bool $users_can_register;
    public ?string $default_role;

    public static function group(): string
    {
        return 'general';
    }
}
