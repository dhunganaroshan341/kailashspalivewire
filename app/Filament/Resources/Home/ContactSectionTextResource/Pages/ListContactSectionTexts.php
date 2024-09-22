<?php

namespace App\Filament\Resources\Home\ContactSectionTextResource\Pages;

use App\Filament\Resources\Home\ContactSectionTextResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContactSectionTexts extends ListRecords
{
    protected static string $resource = ContactSectionTextResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
