<?php

namespace App\Filament\Resources\Home\ContactSectionTextResource\Pages;

use App\Filament\Resources\Home\ContactSectionTextResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContactSectionText extends EditRecord
{
    protected static string $resource = ContactSectionTextResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }
}
