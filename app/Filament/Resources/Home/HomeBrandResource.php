<?php

namespace App\Filament\Resources\Home;

use App\Filament\Resources\Home\HomeBrandResource\Pages\CreateHomeBrand;
use App\Filament\Resources\Home\HomeBrandResource\Pages\EditHomeBrand;
use App\Filament\Resources\Home\HomeBrandResource\Pages\ListHomeBrands;
use App\Models\BrandJourney;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class HomeBrandResource extends Resource
{
    protected static ?string $model = BrandJourney::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';

    protected static ?string $navigationGroup = 'Home Control';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Name')
                    ->required(),

                // TextInput::make('email')->label('Email'),

                // TextInput::make('phone')->label('Phone'),

                // TextInput::make('website')->label('Website'),

                // TextInput::make('address')->label('Address'),
                TextInput::make('date')->label('Estd year')->nullable(),
                FileUpload::make('image')
                    ->label('Logo /Image')
                    ->disk('public')->directory('images'),

                RichEditor::make('description')->label('Description'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Brand'),
                Tables\Columns\ImageColumn::make('image')->label('Logo'),
            ])
            ->filters([
                //
            ])->reorderable('id')
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
