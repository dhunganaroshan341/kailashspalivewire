<?php

namespace App\Filament\Resources\MediaResource\Pages;

use App\Filament\Resources\MediaResource;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Contracts\View\View;

class ListMedia extends ListRecords
{
    protected static string $resource = MediaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }

    public function render(): View
    {
        return view('filament.pages.list-media');
        // resources\views\filament\pages\list-media.blade.php
    }
}
