<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FooterSettingResource\Pages;
use App\Models\FooterSetting;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class FooterSettingResource extends Resource
{
    protected static ?string $model = FooterSetting::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Footer Settings';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Footer Title
                Forms\Components\TextInput::make('title')
                    ->label('Footer Title')
                    ->required(),

                // Footer Description
                Forms\Components\Textarea::make('description')
                    ->label('Footer Description')
                    ->required(),

                // Social Media Links
                Forms\Components\TextInput::make('facebook')
                    ->label('Facebook Link'),

                Forms\Components\TextInput::make('instagram')
                    ->label('Instagram Link'),

                Forms\Components\TextInput::make('twitter')
                    ->label('Twitter Link'),

                Forms\Components\TextInput::make('youtube')
                    ->label('YouTube Link'),

                // Phone Numbers
                Forms\Components\Repeater::make('phone_numbers')
                    ->label('Phone Numbers')
                    ->schema([
                        Forms\Components\TextInput::make('number')
                            ->label('Phone Number')
                            ->required(),
                    ])
                    ->createItemButtonLabel('Add Phone Number')
                    ->disableItemDeletion(), // Optional: disable item deletion

                // Email
                Forms\Components\TextInput::make('email')
                    ->label('Email Address')
                    ->email()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Table Columns
                Tables\Columns\TextColumn::make('title')
                    ->label('Footer Title')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('description')
                    ->label('Footer Description')
                    ->limit(50) // Limit to show only part of the description
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('facebook')
                    ->label('Facebook Link')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('instagram')
                    ->label('Instagram Link')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('twitter')
                    ->label('Twitter Link')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('youtube')
                    ->label('YouTube Link')
                    ->sortable()
                    ->searchable(),

                // Display Phone Numbers as a comma-separated list
                Tables\Columns\TextColumn::make('phone_numbers')
                    ->label('Phone Numbers')
                    ->formatStateUsing(fn ($state) => implode(', ', array_column($state, 'number')))
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('email')
                    ->label('Email Address')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                // Add filters here if needed
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Add relations if needed
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFooterSettings::route('/'),
            'create' => Pages\CreateFooterSetting::route('/create'),
            'edit' => Pages\EditFooterSetting::route('/{record}/edit'),
        ];
    }
}
