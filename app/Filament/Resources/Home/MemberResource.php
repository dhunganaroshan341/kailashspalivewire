<?php

namespace App\Filament\Resources\Home;

use App\Filament\Resources\Home\MemberResource\Pages;
use App\Models\TeamMember;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class MemberResource extends Resource
{
    protected static ?string $model = TeamMember::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationGroup = 'About Page';

    public static function form(Form $form): Form
    {
        // Get the maximum priority from the existing records
        $maxPriority = TeamMember::max('priority');
        $maxPriority++;

        return $form
            ->schema([
                //
                TextInput::make('name')->required(),
                TextInput::make('priority')
                    ->required()
                    ->numeric()
                    ->default($maxPriority + 1) // Set default to one more than the maximum priority
                    ->label('Priority'),
                // Add other fields here

                FileUpload::make('image')->label('image')->image()->nullable()->disk('public')->directory('image'),
                // Select::make('role')
                //     ->label('Role')
                //     ->options([
                //         'ceo' => 'CEO',
                //         'staff' => 'Staff',
                //         'other' => 'Other', // Add an "Other" option
                //     ])
                //     ->reactive() // Make it reactive to update the form based on selection
                //     ->afterStateUpdated(fn ($state, callable $set) => $state === 'other' ? $set('custom_role', null) : $set('custom_role', null)),

                TextInput::make('role')
                    ->label('role'),
                Textarea::make('description')->nullable(),
                TextInput::make('twitter')->nullable(),
                TextInput::make('facebook')->nullable(),
                TextInput::make('instagram')->nullable(),
                TextInput::make('linked-in')->nullable(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                TextColumn::make('priority')->searchable()->sortable(),
                TextColumn::make('name')->searchable()->sortable(),
                TextColumn::make('role')->searchable()->sortable(),
                ImageColumn::make('image')->searchable()->sortable(),
            ])
            ->filters([
                //
            ])->reorderable('priority')
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
            'index' => Pages\ListMembers::route('/'),
            'create' => Pages\CreateMember::route('/create'),
            'edit' => Pages\EditMember::route('/{record}/edit'),
        ];
    }
}
