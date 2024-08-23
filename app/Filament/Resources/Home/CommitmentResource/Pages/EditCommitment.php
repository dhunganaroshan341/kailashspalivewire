<?php

namespace App\Filament\Resources\Home\CommitmentResource\Pages;

use App\Filament\Resources\Home\CommitmentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCommitment extends EditRecord
{
    protected static string $resource = CommitmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
