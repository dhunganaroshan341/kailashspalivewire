<?php

namespace App\Filament\Resources\FooterSettingResource\Pages;

use App\Filament\Resources\FooterSettingResource;
use App\Models\FooterSetting;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFooterSettings extends ListRecords
{
    protected static string $resource = FooterSettingResource::class;

    protected function getHeaderActions(): array
    {
        // Check if there is at least one footer setting record
        $footerSettingExists = FooterSetting::exists();

        // Only add the CreateAction if no footer settings record exists
        if (! $footerSettingExists) {
            return [
                Actions\CreateAction::make(),
            ];
        }

        return []; // Return empty array if a record exists, removing the create action
    }
}
