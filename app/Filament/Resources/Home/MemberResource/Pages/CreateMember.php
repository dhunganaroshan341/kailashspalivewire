<?php

namespace App\Filament\Resources\Home\MemberResource\Pages;

use App\Filament\Resources\Home\MemberResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMember extends CreateRecord
{
    protected static string $resource = MemberResource::class;
}
