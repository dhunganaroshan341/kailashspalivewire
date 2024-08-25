<?php

namespace App\Filament\Resources\Home\HomeBrandImageResource\Pages;

use App\Filament\Resources\Home\HomeBrandImageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHomeBrandImage extends EditRecord
{
    protected static string $resource = HomeBrandImageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
