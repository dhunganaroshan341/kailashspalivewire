<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NewsResource\Pages;
use App\Models\News;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Auth;

class NewsResource extends Resource
{
    protected static ?string $model = News::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),

                Forms\Components\RichEditor::make('content')
                    ->required()->columnSpanFull(),

                Forms\Components\TextInput::make('slug')
                    ->unique(News::class, 'slug', ignoreRecord: true)
                    ->required()
                    ->maxLength(255),

                Forms\Components\FileUpload::make('cover_photo_path')
                    ->maxSize(20048)->disk('public')->directory('images'),

                Forms\Components\DatePicker::make('published_at')
                    ->nullable()->default(now()) // Set default to today's date
                    ->displayFormat('d M Y'), // Optional: Format the display format,

                Forms\Components\Toggle::make('is_published')
                    ->default(true),

                Forms\Components\TextInput::make('author')
                    ->nullable()
                    ->maxLength(255)->default(fn () => Auth::user()->name),

                Forms\Components\TextInput::make('meta_title')
                    ->nullable()
                    ->maxLength(255),

                Forms\Components\Textarea::make('meta_description')
                    ->nullable(),

                Forms\Components\TextInput::make('meta_keywords')
                    ->nullable()
                    ->maxLength(255),
            ]);

    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('slug')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\ImageColumn::make('cover_photo_path'),

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
            'index' => Pages\ListNews::route('/'),
            'create' => Pages\CreateNews::route('/create'),
            'edit' => Pages\EditNews::route('/{record}/edit'),
        ];
    }
}
