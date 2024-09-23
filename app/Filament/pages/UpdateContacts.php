<?php

namespace App\Filament\Pages;

use App\Models\Contact;
use Filament\Forms;
use Filament\Pages\Page;

class UpdateContacts extends Page
{
    protected static string $view = 'filament.resources.custom-resource.pages.update-contacts';

    protected static ?string $navigationIcon = 'heroicon-o-phone';

    protected static ?string $navigationGroup = 'Contacts';

    protected static ?string $navigationLabel = 'Update Contacts';

    public $contacts = [];

    public function mount()
    {
        $contact = Contact::first(); // Fetch the existing contact data
        if ($contact) {
            $this->contacts = json_decode($contact->contacts, true) ?? [];
        } else {
            $this->contacts = []; // Initialize to an empty array if no contact exists
        }
    }

    public function addContact()
    {
        $this->contacts[] = ''; // Add a new empty contact input
    }

    public function updateContacts()
    {
        // Logic for updating contacts
        $contact = Contact::first();
        if ($contact) {
            $contact->contacts = json_encode($this->contacts);
            $contact->save();
        }
    }

    protected function getFormSchema(): array
    {
        return [
            Forms\Components\Repeater::make('contacts')
                ->relationship('contacts')
                ->schema([
                    Forms\Components\TextInput::make('contact')
                        ->label('Contact')
                        ->required(),
                ])
                ->columns(1)
                ->createItemButtonLabel('Add Contact'),
        ];
    }
}
