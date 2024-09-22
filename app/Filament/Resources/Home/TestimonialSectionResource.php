<?php

namespace App\Filament\Resources\Home;

use App\Filament\Resources\Home\TestimonialSectionResource\Pages;
use App\Models\TestimonialSection as ModelTestimonialSection;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Table;

class TestimonialSectionResource extends Resource
{
    protected static ?string $model = ModelTestimonialSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-chat-bubble-bottom-center-text';

    protected static ?string $navigationGroup = 'Home Control';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Toggle::make(name: 'enable')->default('true'),
                TextInput::make(name: 'testimonial_title')
                    ->label('Message Title')->placeholder('Message from Chairman')
                    ->required()->columnSpanFull(),

                TextInput::make('name')
                    ->label('written by')->placeholder('Tashi Gurung')
                    ->required(),
                TextInput::make('position')
                    ->label('position'),

                RichEditor::make('testimonial')
                    ->label('Testimonial')
                    ->required(),

                FileUpload::make('image_path')
                    ->label('Image')
                    ->disk('public')
                    ->image()
                    ->required(),
                TextInput::make('company')
                    ->label('company'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Name'),

                Tables\Columns\TextColumn::make('testimonial')
                    ->limit(10)
                    ->label('Testimonial'),

                ImageColumn::make('image_path')
                    ->disk('public')
                    ->label('Image'),

                Tables\Columns\TextColumn::make('order')
                    ->label('Order'),
            ])
            ->filters([
                // Add filters here if needed
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
            'index' => Pages\ListTestimonialSections::route('/'),
            'create' => Pages\CreateTestimonialSection::route('/create'),
            'edit' => Pages\EditTestimonialSection::route('/{record}/edit'),
        ];
    }
}
