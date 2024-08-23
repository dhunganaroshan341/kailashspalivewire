<?php

namespace App\Filament\Resources\Home\MilestoneResource\Pages;

use App\Filament\Resources\Home\MilestoneResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMilestones extends ListRecords
{
    protected static string $resource = MilestoneResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
