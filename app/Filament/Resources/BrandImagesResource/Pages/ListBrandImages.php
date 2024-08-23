<?php

namespace App\Filament\Resources\BrandImagesResource\Pages;

use App\Filament\Resources\BrandImagesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBrandImages extends ListRecords
{
    protected static string $resource = BrandImagesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
