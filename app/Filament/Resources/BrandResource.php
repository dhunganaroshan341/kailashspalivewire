<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BrandResource\Pages;
use App\Models\Brand;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BrandResource extends Resource
{
    protected static ?string $model = Brand::class;

    protected static ?string $navigationGroup = 'Brands Page';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form

            ->schema([
                // Define the form schema
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('year')->label('Estd year')->nullable(),
                // TextInput::make('email')
                //     ->email()
                //     ->nullable()
                //     ->maxLength(255),

                // TextInput::make('phone')
                //     ->nullable()
                //     ->maxLength(20),

                TextInput::make('address')
                    ->nullable()->label('location')
                    ->maxLength(255),

                TextInput::make('website')
                    ->default('www.website.extensions')
                    ->maxLength(255),

                FileUpload::make('logo_path')
                    ->nullable()
                    ->image()->disk('public')
                    ->maxSize(10024),

                Textarea::make('description')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Define table columns
                TextColumn::make('name')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('email')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('phone')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('website')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('address')
                    ->sortable()
                    ->searchable(),

                ImageColumn::make('logo_path'),

                TextColumn::make('description')
                    ->limit(50),
            ])
            ->filters([
                // Define table filters
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Define relations if needed
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBrands::route('/'),
            'create' => Pages\CreateBrand::route('/create'),
            'edit' => Pages\EditBrand::route('/{record}/edit'),
        ];
    }
}
