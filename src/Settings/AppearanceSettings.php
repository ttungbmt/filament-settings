<?php

namespace FilamentPro\FilamentSettings\Settings;

use Spatie\LaravelSettings\Settings;

class AppearanceSettings extends Settings
{
    public ?string $site_logo;
    public ?string $site_logo_light;
    public ?string $site_favicon;
    public ?string $admin_login_background;
    public ?string $footer_html;
    public ?string $primary_font;
    public ?string $button_radius;
    public ?string $base_color;
    public ?string $headline_color;
    public ?string $primary_color;
    public ?string $secondary_color;
    public ?string $custom_css;
    public ?string $html_scripts_header;
    public ?string $html_scripts_footer;
    public ?string $html_scripts_after_body;
    public ?string $html_scripts_before_body;
    public ?string $social_facebook;
    public ?string $social_twitter;
    public ?string $social_youtube;

    public static function group(): string
    {
        return 'appearance';
    }
}
