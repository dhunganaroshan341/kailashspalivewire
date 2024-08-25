<?php

namespace App\Filament\Resources\Home;

use App\Filament\Resources\Home\HomeBrandResource\Pages\CreateHomeBrand;
use App\Filament\Resources\Home\HomeBrandResource\Pages\EditHomeBrand;
use App\Filament\Resources\Home\HomeBrandResource\Pages\ListHomeBrands;
use App\Models\HomeBrand;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class HomeBrandResource extends Resource
{
    protected static ?string $model = HomeBrand::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $navigationGroup = 'Home Control';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->label('Name')
                    ->required(),

                // TextInput::make('email')->label('Email'),

                // TextInput::make('phone')->label('Phone'),

                // TextInput::make('website')->label('Website'),

                // TextInput::make('address')->label('Address'),
                TextInput::make('year')->label('Estd year')->nullable(),
                FileUpload::make('logo_path')
                    ->label('Logo /Image')
                    ->disk('public'),

                TextInput::make('description')->label('Description'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Brand'),
                Tables\Columns\ImageColumn::make('logo_path')->label('Logo'),
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
            'index' => ListHomeBrands::route('/'),
            'create' => CreateHomeBrand::route('/create'),
            'edit' => EditHomeBrand::route('/{record}/edit'),
        ];
    }
}
