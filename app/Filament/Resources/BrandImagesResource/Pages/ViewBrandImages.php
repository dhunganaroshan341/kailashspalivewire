<?php

namespace App\Filament\Resources\BrandImagesResource\Pages;

use App\Filament\Resources\BrandImagesResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewBrandImages extends ViewRecord
{
    protected static string $resource = BrandImagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
