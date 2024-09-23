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

    public static function groupIcon(): ?string
    {
        return 'heroicon-o-document'; // Icon for the group
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('brand_id')
                    ->label('Brand')
                    ->options(Brand::all()->pluck('name', 'id'))
                    ->required(),

                FileUpload::make('image_path')
                    ->columnSpanFull()
                    ->disk('public') // Use the 'public' disk
                    ->multiple() // Allow multiple files
                    ->panelLayout('grid') // Use grid layout
                    ->reorderable() // Allow reordering
                    ->directory('images') // Directory within the disk
                    ->maxSize(10024) // Maximum file size in KB
                    ->image() // Restrict to image files
                    ->required(), // Make it required
            ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('brand.name')->sortable()->searchable(),
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
