<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class GalleryItem extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $table = 'gallery_items';

    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];
    // storign multiple files using casts

    protected $fillable = ['image', 'gallery_id', 'title', 'description', 'contact_link'];

    protected $casts = [
        'image' => 'array',
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('image')
            ->useDisk('public'); // Ensure the disk matches your Filament setup
    }

    public function gallery()
    {
        return $this->belongsTo(Gallery::class);
    }
}
