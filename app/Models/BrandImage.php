<?php

namespace App\Models;

use App\Traits\MediaHandler;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class BrandImage extends Model
{
    use HasFactory, MediaHandler;

    protected $fillable = ['brand_id', 'image_path'];

    protected $casts = [
        'image_path' => 'array', // Cast image_path to an array for multiple images
    ];

    protected static function boot()
    {
        parent::boot();

        static::updating(function ($model) {
            // Get the original and new images
            $originalImages = $model->getOriginal('image_path');
            $newImages = $model->image_path;

            // Log the arrays to see what the delete function is dealing with
            Log::info('Original Images:', $originalImages);
            Log::info('New Images:', $newImages);

            // Use the MediaHandler trait to delete removed images
            $model->deleteMedia($originalImages, $newImages, 'public');
        });

        static::deleting(function ($model) {
            // On deleting the entire model, remove all associated images
            $model->deleteMedia($model->image_path, null, 'public');
        });
    }

    // Define the relationship
    public function brand()
    {
        return $this->belongsTo(Brand::class, 'brand_id');
    }
}
