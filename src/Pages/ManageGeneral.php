<?php

namespace FilamentPro\FilamentSettings\Pages;

use FilamentPro\FilamentSettings\Settings\GeneralSettings;
use DateTimeZone;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Pages\SettingsPage;

class ManageGeneral extends SettingsPage
{
    protected static ?string $navigationGroup = 'Settings';

    protected static ?string $navigationIcon = 'heroicon-o-cog';

    protected static string $settings = GeneralSettings::class;

    protected static ?string $navigationLabel = 'General';

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
        $timezone = collect(DateTimeZone::listIdentifiers(DateTimeZone::ALL))->prepend('Asia/Ho_Chi_Minh')->mapWithKeys(function ($timezone) {
            return [$timezone => $timezone];
        })->all();

        return [

            TextInput::make('site_name')->label('Name'),
            TextInput::make('site_title')->label('Title'),
            Textarea::make('site_description')->label('Description')->rows(3),
            TextInput::make('site_keywords')->label('Keywords'),
            TextInput::make('site_url')->label('Url')->url(),
            TextInput::make('site_author')->label('Author'),
            TextInput::make('site_version')->label('Version'),
            TextInput::make('admin_email')->label('Admin Email')->email(),

            Select::make('active_language')->label('Language')
                ->options([
                    'en' => 'English',
                    'vi' => 'Tiếng việt'
                ]),

            Radio::make('date_format')->label('Date Format')
                ->options([
                    'Y-m-d' => date('Y-m-d'),
                    'm/d/Y' => date('m/d/Y'),
                    'd/m/Y' => date('d/m/Y'),
                ])->default('d/m/Y'),


            Radio::make('time_format')->label('Time Format')
                ->options([
                    'g:i a' => date('g:i a'),
                    'g:i A' => date('g:i A'),
                    'H:i' => date('H:i'),
                ])->default('H:i'),

            Select::make('timezone')->label('Timezone')->options($timezone)->searchable(),

            // User

            Toggle::make('users_can_register')->label('Anyone can register'),

            Select::make('default_role')->label('New User Default Role')
                ->options([
                    'admin' => 'Administrator',
                ]),
        ];
    }
}
