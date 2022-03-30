<?php

namespace FilamentPro\FilamentSettings\Settings;

use Spatie\LaravelSettings\Settings;

class EmailSettings extends Settings
{
    public ?string $email_driver;
    public ?int $email_port;
    public ?string $email_host;
    public ?string $email_username;
    public ?string $email_password;
    public ?string $email_encryption;
    public ?string $email_from_name;
    public ?string $email_from_address;

    public static function group(): string
    {
        return 'email';
    }
}
