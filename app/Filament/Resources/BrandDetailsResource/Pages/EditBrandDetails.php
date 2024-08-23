<?php

namespace App\Filament\Resources\BrandDetailsResource\Pages;

use App\Filament\Resources\BrandDetailsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBrandDetails extends EditRecord
{
    protected static string $resource = BrandDetailsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
