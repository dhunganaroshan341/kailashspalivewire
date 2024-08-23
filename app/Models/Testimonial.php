<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $table = 'testimonials';

    protected $primary_key = 'id';

    protected $fillable = [
        'name',
        'position',
        'company',
        'testimonial',
        'image_path',
        'writer',
        'role',
    ];

    public function page()
    {
        return $this->belongsTo(Page::class);
    }
}
