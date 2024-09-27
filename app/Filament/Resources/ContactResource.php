<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Models\Contact;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-phone';

    protected static ?string $navigationGroup = 'contact page';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('email')->required(),
                TextInput::make('phone')->required(),
                TextInput::make('address')->required(),
                TextInput::make('contacts')
                    ->required()
                    ->reactive() // Makes the field reactive to add new inputs
                    ->afterStateUpdated(function ($state, callable $set) {
                        // Logic to add new input fields dynamically can be implemented here
                    }),
                // Add a button to add new contact inputs dynamically
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('email')->sortable()->searchable(),
                TextColumn::make('phone')->sortable()->searchable(),
                TextColumn::make('address')->sortable()->searchable(),
                // TextColumn::make('contacts')
                //     ->label('Contacts')
                //     ->formatStateUsing(fn ($state) => json_encode($state)) // Displaying contacts as JSON
                //     ->sortable()
                //     ->searchable(),
                ImageColumn::make('image_path')->sortable()->searchable()->label('Image'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListContacts::route('/'),
            'create' => Pages\CreateContact::route('/create'),
            'edit' => Pages\EditContact::route('/{record}/edit'),
        ];
    }
}
