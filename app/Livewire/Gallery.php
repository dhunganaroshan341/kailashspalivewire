<?php

namespace App\Livewire;

use App\Models\Gallery as ModelsGallery;
use Livewire\Component;

class Gallery extends Component
{
    public function render()
    {
        $galleries = ModelsGallery::all();

        return view('livewire.gallery', compact('galleries'));
    }
}
