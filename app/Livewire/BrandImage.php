<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\BrandImage as ModelsBrandImage;
use Livewire\Component;

class BrandImage extends Component
{
    public $id; // Public property to hold the ID

    public $brand; // Public property to hold the brand item data

    public $brandTitle;

    public function mount($id)
    {
        $this->id = $id; // Set the ID property

        // Fetch BrandImage by ID
        $this->brand = ModelsBrandImage::find($id);

        // Check if BrandImage exists
        if ($this->brand) {
            // Fetch related Brand using brand_id from BrandImage
            $brand = Brand::find($this->brand->brand_id); // Assuming BrandImage has a foreign key 'brand_id'
            $this->brandTitle = $brand ? $brand->name : null;
        } else {
            // Handle case where BrandImage is not found
            abort(404, 'Brand Image not found');
        }
    }

    public function render()
    {
        return view('livewire.brand-image', [
            'brand' => $this->brand,
            'brandTitle' => $this->brandTitle,
        ]);
    }
}
