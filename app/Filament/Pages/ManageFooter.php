<?php

namespace App\Filament\Pages;

use App\Models\FooterSettings;
use Filament\Forms;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Pages\SettingsPage;

class ManageFooter extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $settings = FooterSettings::class;

public function form(Form $form): Form
{
    return $form
        ->schema([
            \Filament\Forms\Components\TextInput::make('address')
                ->required(),
            \Filament\Forms\Components\TextInput::make('phone_number')
                ->tel()
                ->required(),
            \Filament\Forms\Components\TextInput::make('email')
                ->label('Contact email')
                ->email()
                ->required(),
            Repeater::make('social_links')
                ->schema([
                    TextInput::make('label')->required(),
                    TextInput::make('url')
                        ->url()
                        ->required(),
                ]),
        ]);
}
}
