<?php

namespace App\Filament\Resources\Home;

use App\Filament\Resources\Home\HomeBrandImageResource\Pages;
use App\Models\HomeBrand;
use App\Models\HomeBrandImage as ModelHomeBrandImage;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class HomeBrandImageResource extends Resource
{
    protected static ?string $model = ModelHomeBrandImage::class;

    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'Home Control';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('brand_id')
                    ->label('Brand')
                    ->options(HomeBrand::all()->pluck('id', 'name'))
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
            'index' => Pages\ListHomeBrandImages::route('/'),
            'create' => Pages\CreateHomeBrandImage::route('/create'),
            'edit' => Pages\EditHomeBrandImage::route('/{record}/edit'),
        ];
    }
}
