<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BrandImagesResource\Pages;
use App\Models\BrandImage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class BrandImagesResource extends Resource
{
    protected static ?string $model = BrandImage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('brand_id')->required(),
                Forms\Components\TextInput::make('image_path')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('brand_id')->sortable()->searchable(),
                Tables\Columns\ImageColumn::make('image_path')->sortable()->searchable()->label('Image'),
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
            'index' => Pages\ListBrandImages::route('/'),
            'create' => Pages\CreateBrandImages::route('/create'),
            'view' => Pages\ViewBrandImages::route('/{record}'),
            'edit' => Pages\EditBrandImages::route('/{record}/edit'),
        ];
    }
}
