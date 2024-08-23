<?php

namespace App\Filament\Resources\GalleryListResource\Pages;

use App\Filament\Resources\GalleryListResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGalleryLists extends ListRecords
{
    protected static string $resource = GalleryListResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
