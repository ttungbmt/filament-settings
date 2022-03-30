<?php

namespace FilamentPro\FilamentSettings\Settings;

use Spatie\LaravelSettings\Settings;

class SocialLoginSettings extends Settings
{
    public ?bool $social_login_enable;
    public ?bool $google_enable;
    public ?string $google_client_id;
    public ?string $google_client_secret;
    public ?bool $facebook_enable;
    public ?string $facebook_client_id;
    public ?string $facebook_client_secret;
    public ?bool $github_enable;
    public ?string $github_client_id;
    public ?string $github_client_secret;
    public ?bool $twitter_enable;
    public ?string $twitter_client_id;
    public ?string $twitter_client_secret;

    public static function group(): string
    {
        return 'social_login';
    }
}
