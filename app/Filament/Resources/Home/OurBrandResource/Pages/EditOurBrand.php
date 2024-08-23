<?php

namespace App\Filament\Resources\Home\OurBrandResource\Pages;

use App\Filament\Resources\Home\OurBrandResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOurBrand extends EditRecord
{
    protected static string $resource = OurBrandResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
