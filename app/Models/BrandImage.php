<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class BrandImage extends Model
{
    use HasFactory;

    protected $fillable = ['brand_id', 'image_path'];

    protected $table = 'brand_images';

    protected $casts = [
        'image_path' => 'array',
    ];

    protected $primaryKey = 'id'; // Correct property name

    // Define the relationship properly
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    // deleting  from the storage if edit delete selected , boot event listener
    protected static function boot()
    {
        parent::boot();

        static::updating(function ($model) {
            // Check if the 'image_path' field is being updated
            if ($model->isDirty('image_path')) {
                // Get the original and new values of 'image_path'
                $originalImages = $model->getOriginal('image_path');
                $newImages = $model->image_path;

                // Decode if necessary
                if (is_string($originalImages)) {
                    $originalImages = json_decode($originalImages, true) ?? [];
                }
                if (is_string($newImages)) {
                    $newImages = json_decode($newImages, true) ?? [];
                }

                // Determine which images have been removed
                $removedImages = array_diff($originalImages, $newImages);

                // Delete the removed images from the storage
                foreach ($removedImages as $imagePath) {
                    // Check if the file exists to prevent errors
                    if ($imagePath && Storage::disk('public')->exists($imagePath)) {
                        // Delete the file
                        Storage::disk('public')->delete($imagePath);
                    }
                }
            }
        });
    }
}
