<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class News extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $table = 'news';

    protected $primary_key = 'id';

    protected $fillable = [
        'title',               // Title of the news article
        'content',             // Main content of the news article
        'slug',                // SEO-friendly URL slug
        'cover_photo_path',    // Path to the cover photo
        'published_at',        // Publish date and time
        'is_published',        // Whether the news is published or not
        'author',              // Author of the news article
        'meta_title',          // SEO meta title
        'meta_description',    // SEO meta description
        'meta_keywords',       // SEO meta keywords
    ];

    protected $casts = [
        'published_at' => 'datetime',
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
