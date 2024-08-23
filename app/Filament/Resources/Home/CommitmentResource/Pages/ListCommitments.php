<?php

namespace App\Filament\Resources\Home\CommitmentResource\Pages;

use App\Filament\Resources\Home\CommitmentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCommitments extends ListRecords
{
    protected static string $resource = CommitmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
