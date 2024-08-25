<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BrandImagesResource\Pages;
use App\Models\Brand;
use App\Models\BrandImage;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class BrandImagesResource extends Resource
{
    protected static ?string $model = BrandImage::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'Brands Page';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('brand_id')
                    ->label('Brand')
                    ->options(Brand::all()->pluck('id', 'name'))
                    ->required(),

                FileUpload::make('image_path')->columnSpanFull()
                    ->disk('public')->multiple()->panelLayout('grid')->reorderable()
                    ->directory('images') // Specify the directory within the public disk
                    ->maxSize(10024)
                    ->image() // Ensure that only images can be uploaded
                    ->required(), // Make it required if it's mandatory
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
