<?php

namespace App\Filament\Resources\Home;

use App\Filament\Resources\Home\BannerSliderResource\Pages;
use App\Models\BannerSlider as ModelsBannerSlider;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class BannerSliderResource extends Resource
{
    protected static ?string $model = ModelsBannerSlider::class;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';

    protected static ?string $navigationGroup = 'Home Control';

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
            'index' => Pages\ListBannerSliders::route('/'),
            'create' => Pages\CreateBannerSlider::route('/create'),
            'edit' => Pages\EditBannerSlider::route('/{record}/edit'),
        ];
    }
}
