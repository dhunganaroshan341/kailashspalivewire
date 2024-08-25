<?php

namespace App\Filament\Resources\Home\HomeBrandImageResource\Pages;

use App\Filament\Resources\Home\HomeBrandImageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHomeBrandImages extends ListRecords
{
    protected static string $resource = HomeBrandImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
