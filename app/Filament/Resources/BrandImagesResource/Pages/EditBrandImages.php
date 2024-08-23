<?php

namespace App\Filament\Resources\BrandImagesResource\Pages;

use App\Filament\Resources\BrandImagesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBrandImages extends EditRecord
{
    protected static string $resource = BrandImagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
