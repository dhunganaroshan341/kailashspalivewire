<?php

namespace App\Filament\Resources\Home;

use App\Filament\Resources\Home\CommitmentResource\Pages;
use App\Models\OurCommitment;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;

class CommitmentResource extends Resource
{
    protected static ?string $model = OurCommitment::class;

    protected static ?string $navigationIcon = 'heroicon-o-hand-raised';

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
                // Tables\Columns\TextColumn::make('order'),
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
            'index' => Pages\ListCommitments::route('/'),
            'create' => Pages\CreateCommitment::route('/create'),
            'edit' => Pages\EditCommitment::route('/{record}/edit'),
        ];
    }
}
