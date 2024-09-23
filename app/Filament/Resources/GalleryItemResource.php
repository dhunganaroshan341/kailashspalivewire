<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GalleryItemResource\Pages;
use App\Models\Gallery;
use App\Models\GalleryItem;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Form as FormsForm;
use Filament\Resources\Resource;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class GalleryItemResource extends Resource
{
    protected static ?string $model = GalleryItem::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function getNavigationLabel(): string
    {
        return 'Gallery Images'; // Set the navigation label to "Gallery Images"
    }

    protected static ?string $navigationGroup = 'Gallery Page';

    public static function form(FormsForm $form): FormsForm
    {
        $existingGalleryIds = GalleryItem::pluck('gallery_id')->toArray();

        return $form
            ->schema([
                Select::make('gallery_id')
                    ->label('Gallery')
                    ->options(Gallery::whereNotIn('id', $existingGalleryIds)->pluck('title', 'id'))
                    ->required(),

                FileUpload::make('image')
                    ->columnSpanFull()
                    ->disk('public') // Store files on the 'public' disk
                    ->multiple() // Allow multiple files
                    ->panelLayout('grid') // Display files in a grid layout
                    ->reorderable() // Enable reordering of files
                    ->directory('images') // Store files in the 'images' directory within the public disk
                    ->maxSize(31240) // Maximum file size in kilobytes
                    ->image() // Restrict to image files
                    ->preserveFilenames() // Preserve original filenames
                    ->required(), // Make this field required)
            ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // TextColumn::make('title')
                //     ->sortable()
                //     ->searchable(),
                TextColumn::make('id')->sortable()->searchable(),

                TextColumn::make('gallery_id')
                    ->label('Gallery')
                    ->sortable()
                    ->searchable()
                    ->formatStateUsing(function ($state, $record) {
                        return $record->gallery ? $record->gallery->title : 'No Gallery';
                    }),

                ImageColumn::make('image')
                    ->label('Image')
                    ->circular()->stacked()
                    ->ring(5)
                    // ->disk('public') // Ensure the correct disk is used
                    // ->directory('images') // Specify the directory within the public disk
                    ->extraAttributes(['class' => 'w-10 h-10 object-cover']), // Example customization for image styling
            ])
            ->filters([
                // Define table filters if needed
            ])
            ->actions([
                EditAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Define relations if needed
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGalleryItems::route('/'),
            'create' => Pages\CreateGalleryItem::route('/create'),
            'edit' => Pages\EditGalleryItem::route('/{record}/edit'),
        ];
    }
}
