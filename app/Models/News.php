<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
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
}
