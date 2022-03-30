<?php

namespace FilamentPro\FilamentSettings\Pages;

use FilamentPro\FilamentSettings\Settings\EmailSettings;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Pages\SettingsPage;

class ManageEmail extends SettingsPage
{
    protected static ?string $navigationGroup = 'Settings';

    protected static ?string $navigationIcon = 'heroicon-o-inbox';

    protected static string $settings = EmailSettings::class;

    protected static ?string $navigationLabel = 'Email';

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
            Select::make('email_driver')->label('Mailer')->options([
                'smtp' => 'SMTP',
                'mailgun' => 'Mailgun',
            ]),
            TextInput::make('email_port')->label('Port')->numeric(),
            TextInput::make('email_host')->label('Host'),
            TextInput::make('email_username')->label('Username'),
            TextInput::make('email_password')->label('Password')->password(),
            TextInput::make('email_encryption')->label('Encryption'),
            TextInput::make('email_from_name')->label('Sender Name'),
            TextInput::make('email_from_address')->label('Sender Email')->email(),
        ];
    }
}
