<?php

namespace App\Filament\Resources\Home\NewsResource\Pages;

use App\Filament\Resources\Home\NewsResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateNews extends CreateRecord
{
    protected static string $resource = NewsResource::class;
}
