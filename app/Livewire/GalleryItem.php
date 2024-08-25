<?php

namespace App\Livewire;

use App\Models\Gallery;
use App\Models\GalleryItem as GalleryItemModel;
use Livewire\Component;

class GalleryItem extends Component
{
    public $id; // Public property to hold the ID

    public $galleryItem; // Public property to hold the gallery item data

    public $galleryTitle;

    public function mount($id)
    {
        $this->id = $id; // Set the ID property
        $this->galleryItem = GalleryItemModel::where('gallery_id', $id)->first();
        $gallery = Gallery::find($id);
        $this->galleryTitle = $gallery ? $gallery->title : null;

        // // Optionally handle case where gallery item is not found
        // if (! $this->galleryItem) {
        //     abort(404, 'Gallery Item not found');
        // }
    }

    public function render()
    {
        return view('livewire.gallery-item', [
            'galleryTitle' => $this->galleryTitle,
            'galleryItem' => $this->galleryItem,
        ]);
    }
}
