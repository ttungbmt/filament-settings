<?php

namespace FilamentPro\FilamentSettings\Pages;

use FilamentPro\FilamentSettings\Settings\SocialLoginSettings;
use Closure;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Pages\SettingsPage;

class ManageSocialLogin extends SettingsPage
{
    protected static ?string $navigationGroup = 'Settings';

    protected static ?string $navigationIcon = 'heroicon-o-wifi';

    protected static string $settings = SocialLoginSettings::class;

    protected static ?string $navigationLabel = 'Social Login';

    protected function getForms(): array
    {
        $forms = parent::getForms();
        $forms['form'] = $forms['form']->columns(1);

        return $forms;
    }

    protected function getFormSchema(): array
    {
        return [
            Toggle::make('social_login_enable')->reactive(),

            Tabs::make(__('Social Media Clients'))
                ->tabs([
                    Tabs\Tab::make('Google')
                        ->schema([
                            Toggle::make('google_enable')->label('Enable'),
                            TextInput::make('google_client_id')->label('Client ID'),
                            TextInput::make('google_client_secret')->label('Client Secret'),
                        ]),
                    Tabs\Tab::make('Facebook')
                        ->schema([
                            Toggle::make('facebook_enable')->label('Enable'),
                            TextInput::make('facebook_client_id')->label('Client ID'),
                            TextInput::make('facebook_client_secret')->label('Client Secret'),
                        ]),
                    Tabs\Tab::make('Github')
                        ->schema([
                            Toggle::make('github_enable')->label('Enable'),
                            TextInput::make('github_client_id')->label('Client ID'),
                            TextInput::make('github_client_secret')->label('Client Secret'),
                        ]),
                    Tabs\Tab::make('Twitter')
                        ->schema([
                            Toggle::make('twitter_enable')->label('Enable'),
                            TextInput::make('twitter_client_id')->label('Client ID'),
                            TextInput::make('twitter_client_secret')->label('Client Secret'),
                        ]),
                ])->hidden(fn (Closure $get) => $get('social_login_enable') !== true)
        ];
    }
}
