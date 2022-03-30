<?php

namespace FilamentPro\FilamentSettings\Pages;

use Filament\Forms\Components\TextInput;
use Filament\Pages\SettingsPage;

class ManageAccount extends SettingsPage
{
    protected static ?string $navigationGroup = 'Settings';

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    protected static string $view = 'filament.pages.manage-account';

    protected static ?string $navigationLabel = 'Account';

    protected function getFormSchema(): array{
        return [
            // Profile Information
            TextInput::make('name'),
            TextInput::make('email'),
            TextInput::make('profile_photo_path'),

            // Update Password
            TextInput::make('current_password'),
            TextInput::make('password'),
            TextInput::make('password_confirmation'),

            // Browser Sessions

            // Delete Account
        ];
    }
}
