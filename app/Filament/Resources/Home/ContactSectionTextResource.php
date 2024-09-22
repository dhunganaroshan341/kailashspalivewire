<?php

namespace App\Filament\Resources\Home;

use App\Filament\Resources\Home\ContactSectionTextResource\Pages;
use App\Models\HomeContactSectionDescription;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ContactSectionTextResource extends Resource
{
    protected static ?string $model = HomeContactSectionDescription::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    // Customize the singular label for the resource
    public static function getLabel(): string
    {
        return 'Contact Description'; // Custom singular label
    }

    // Customize the plural label for the resource
    public static function getPluralLabel(): string
    {
        return 'Contact Descriptions'; // Custom plural label for sidebar
    }

    protected static ?string $navigationGroup = 'Home Control';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                TextInput::make('title')
                    ->nullable()
                    ->maxLength(255),
                Textarea::make('description')
                    ->required(),
            ]);
    }

    // Remove the table method since we don't need a table
    // public static function table(): void
    // {
    //     // No table required, you can leave this empty
    // }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('title'),
                TextColumn::make('description'),
            ])
            ->filters([
                //
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
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListContactSectionTexts::route('/'),
            // 'index' => Pages\CreateContactSectionText::route('/create'),
            'create' => Pages\CreateContactSectionText::route('/create'),
            'edit' => Pages\EditContactSectionText::route('/{record}/edit'),
            // 'form' => Pages\EditContactSectionText::route('/'),
        ];
    }
}
