<?php

namespace App\Filament\Resources\BrandDetailsResource\Pages;

use App\Filament\Resources\BrandDetailsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBrandDetails extends ListRecords
{
    protected static string $resource = BrandDetailsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
