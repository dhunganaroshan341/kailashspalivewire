<?php

namespace App\Filament\Resources\Home;

use App\Filament\Resources\Home\AboutResource\Pages;
use App\Models\AboutSection as ModelsAbout;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;

class AboutResource extends Resource
{
    protected static ?string $model = ModelsAbout::class;

    protected static ?string $navigationIcon = 'heroicon-o-information-circle';

    protected static ?string $navigationTitle = 'About Section';

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

                //     ->maxSize(2 * 1024), // Max file size (e.g., 2MB)
                TextInput::make('order')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('description')->limit(10),
                ImageColumn::make('image')->disk('public'),
                Tables\Columns\TextColumn::make('order'),
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
            'index' => Pages\ListAbouts::route('/'),
            'create' => Pages\CreateAbout::route('/create'),
            'edit' => Pages\EditAbout::route('/{record}/edit'),
        ];
    }
}
