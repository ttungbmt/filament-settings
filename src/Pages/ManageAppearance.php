<?php

namespace FilamentPro\FilamentSettings\Pages;

use FilamentPro\FilamentSettings\Settings\AppearanceSettings;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Pages\SettingsPage;

class ManageAppearance extends SettingsPage
{
    protected static ?string $navigationGroup = 'Settings';

    protected static ?string $navigationIcon = 'heroicon-o-color-swatch';

    protected static string $settings = AppearanceSettings::class;

    protected static ?string $navigationLabel = 'Appearance';

    protected function getForms(): array
    {
        return [
            'form' => $this->makeForm()
                ->schema($this->getFormSchema())
                ->statePath('data')
                ->columns(1)
                ->inlineLabel(true),
        ];
    }

    protected function getFormSchema(): array
    {
        return [
            # General
            FileUpload::make('site_logo')->label('Logo'),
            FileUpload::make('site_logo_light')->label('Logo - Light'),
            FileUpload::make('site_favicon')->label('Favicon'),
            FileUpload::make('admin_login_background')->label('Admin Login Background'),
            //Code::make('Footer HTML', 'footer_html')->language('php'),

            # Style
            TextInput::make('primary_font')->label('Primary Font'),
            TextInput::make('button_radius')->label('Button Radius'),
            // Color
            TextInput::make('base_color')->label('Base Color')->type('color')->helperText('Used for all normal texts.'),
            TextInput::make('headline_color')->label('Headline Color')->type('color')->helperText('Used for all normal texts.'),
            TextInput::make('primary_color')->label('Primary Color')->type('color')->helperText('Used for all normal texts.'),
            TextInput::make('secondary_color')->label('Secondary Color')->type('color')->helperText('Used for all normal texts.'),
            // Custom CSS
            //Code::make('Custom CSS', 'custom_css')->language('sass'),

            # HTML Scripts
            //Code::make('Header', 'html_scripts_header')->language('php'),
            //Code::make('Footer', 'html_scripts_footer')->language('php'),
            //Code::make('After Body', 'html_scripts_after_body')->language('php'),
            //Code::make('Before Body', 'html_scripts_before_body')->language('php'),
        ];
    }
}
