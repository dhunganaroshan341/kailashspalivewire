<?php

namespace App\Filament\Resources\Home\MilestoneResource\Pages;

use App\Filament\Resources\Home\MilestoneResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMilestone extends EditRecord
{
    protected static string $resource = MilestoneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
