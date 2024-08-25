<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class News extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'title',
        'slug',
        'content',
        'image',
    ];

    // public function media()
    // {
    //     return $this->morphMany(Media::class, 'related');
    // }

    // public function images()
    // {
    //     return $this->hasMany(ArticleImage::class);
    // }

    public function newNoticeSections()
    {
        return $this->hasMany(NewsNoticeSection::class, 'news_id');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('image')->useDisk('public');
    }
}
