<?php

namespace App\Filament\Resources\Home\BannerSliderResource\Pages;

use App\Filament\Resources\Home\BannerSliderResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBannerSlider extends EditRecord
{
    protected static string $resource = BannerSliderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
