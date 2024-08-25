<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
