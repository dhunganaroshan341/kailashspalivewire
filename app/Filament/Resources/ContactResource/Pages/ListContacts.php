<?php

namespace App\Filament\Resources\ContactResource\Pages;

use App\Filament\Resources\ContactResource;
use App\Models\Contact;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContacts extends ListRecords
{
    protected static string $resource = ContactResource::class;

    // Check if there is at least one footer setting record

    protected function getHeaderActions(): array
    {
        $contactExists = Contact::exists();
        // Only add the CreateAction if no footer settings record exists
        if (! $contactExists) {
            return [
                Actions\CreateAction::make(),
            ];
        }

        return []; // Return empty array if a record exists, removing the create action
    }
}
