<?php

namespace App\Livewire;

use App\Models\Contact as ModelsContact;
use Livewire\Component;

class Contact extends Component
{
    public function render()
    {
        $contactDetails = ModelsContact::all();

        return view('livewire.contact', compact('contactDetails'));
    }
}
