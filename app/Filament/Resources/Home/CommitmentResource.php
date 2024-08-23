<?php

namespace App\Filament\Resources\Home;

use App\Filament\Resources\Home\CommitmentResource\Pages;
use App\Models\OurCommitment;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class CommitmentResource extends Resource
{
    protected static ?string $model = OurCommitment::class;

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
            'index' => Pages\ListCommitments::route('/'),
            'create' => Pages\CreateCommitment::route('/create'),
            'edit' => Pages\EditCommitment::route('/{record}/edit'),
        ];
    }
}
