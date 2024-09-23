<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class ImageGallery extends Component
{
    public $images = [];

    public function mount()
    {
        $this->images = Storage::files('images'); // Adjust path if needed
    }

    public function render()
    {
        return view('livewire.image-gallery');
    }
}
