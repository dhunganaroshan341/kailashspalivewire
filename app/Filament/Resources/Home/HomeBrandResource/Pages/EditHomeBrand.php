<?php

namespace App\Filament\Resources\Home\HomeBrandResource\Pages;

use App\Filament\Resources\Home\HomeBrandResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomeBrand extends EditRecord
{
    protected static string $resource = HomeBrandResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
