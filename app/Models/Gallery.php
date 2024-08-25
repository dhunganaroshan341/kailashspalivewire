<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Gallery extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $table = 'galleries';

    // protected $primaryKey = 'id';
    // public $timestamps = false;
    protected $guarded = ['id'];

    protected $fillable = ['id', 'title', 'image'];

    public function images()
    {
        return $this->hasMany(GalleryItem::class, 'id');
    }

    public function galleryItem()
    {
        return $this->hasMany(GalleryItem::class, 'gallery_id');
    }
}
