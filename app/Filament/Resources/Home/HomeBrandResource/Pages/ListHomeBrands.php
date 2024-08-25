<?php

namespace App\Filament\Resources\Home\HomeBrandResource\Pages;

use App\Filament\Resources\Home\HomeBrandResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomeBrands extends ListRecords
{
    protected static string $resource = HomeBrandResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
