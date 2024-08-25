<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class HomeBrandImage extends Model
{
    use HasFactory;

    protected $fillable = ['brand_id', 'image_path'];

    protected $table = 'home_brand_images';

    protected $primaryKey = 'id'; // Correct property name

    public function brandImages()
    {
        return $this->belongsTo(HomeBrand::class, 'brand_id'); // Specify foreign key explicitly
    }

    // Boot method to handle the 'deleting' event
    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($brand) {
            if ($brand->logo_path) {
                $imagePath = public_path($brand->logo_path);
                if (File::exists($imagePath)) {
                    File::delete($imagePath);
                }
            }
        });
    }
}
