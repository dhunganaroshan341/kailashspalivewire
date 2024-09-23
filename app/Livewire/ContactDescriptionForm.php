<?php

namespace App\Http\Livewire;

use App\Models\HomeContactSectionDescription;
// Model for Contact Description
use Livewire\Component;

class ContactDescriptionForm extends Component
{
    public $title;

    public $description;

    public $contactId;  // Store the ID if exists

    protected $rules = [
        'title' => 'required|max:255',
        'description' => 'required|max:500',
    ];

    public function mount()
    {
        // Check if the contact description with ID 1 exists
        $contactDescription = HomeContactSectionDescription::find(1);

        if ($contactDescription) {
            // If record exists, set the fields for editing
            $this->contactId = $contactDescription->id;
            $this->title = $contactDescription->title;
            $this->description = $contactDescription->description;
        } else {
            // No existing record, so it's a new entry
            $this->contactId = null;
        }
    }

    public function submit()
    {
        $this->validate();

        if ($this->contactId) {
            // Update the existing contact description
            $contactDescription = HomeContactSectionDescription::find($this->contactId);
            $contactDescription->update([
                'title' => $this->title,
                'description' => $this->description,
            ]);
            session()->flash('message', 'Contact Description updated successfully!');
        } else {
            // Create a new contact description
            HomeContactSectionDescription::create([
                'title' => $this->title,
                'description' => $this->description,
            ]);
            session()->flash('message', 'Contact Description created successfully!');
        }

        // Optionally reset fields after creation/update
        $this->reset();
    }

    public function render()
    {
        return view('livewire.contact-description-form');
    }
}
