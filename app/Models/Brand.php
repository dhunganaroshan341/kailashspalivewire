<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'phone', 'website', 'address', 'logo_path', 'description'];

    protected $table = 'brands';

    protected $primaryKey = 'id'; // Correct property name

    public function brandImages()
    {
        return $this->hasMany(BrandImage::class, 'brand_id'); // Specify foreign key explicitly
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
