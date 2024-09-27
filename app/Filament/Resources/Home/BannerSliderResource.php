<?php

namespace App\Filament\Resources\Home;

use App\Filament\Resources\Home\BannerSliderResource\Pages;
use App\Models\BannerSlider as ModelsBannerSlider;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;

class BannerSliderResource extends Resource
{
    protected static ?string $model = ModelsBannerSlider::class;

    protected static ?string $navigationIcon = 'heroicon-o-adjustments-horizontal';

    protected static ?string $navigationGroup = 'Home Control';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->nullable()
                    ->maxLength(255),
                RichEditor::make('description')
                    ->required(),
                // SpatieMediaLibraryFileUpload::make('image'),
                FileUpload::make('image')
                    ->disk('public') // Use 'public' disk
                    ->directory('images') // Store files in 'storage/app/public/images'
                    ->image(), // Ensure the file is an image

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('description')->limit(50),
                ImageColumn::make('image')->disk('public'),

            ])->reorderable('id')
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
