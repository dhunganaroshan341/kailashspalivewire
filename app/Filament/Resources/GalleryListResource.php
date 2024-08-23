<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryListResource\Pages;
use App\Filament\Resources\GalleryListResource\RelationManagers;
use App\Models\GalleryList;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GalleryListResource extends Resource
{
    protected static ?string $model = GalleryList::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListGalleryLists::route('/'),
            'create' => Pages\CreateGalleryList::route('/create'),
            'edit' => Pages\EditGalleryList::route('/{record}/edit'),
        ];
    }
}
