<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterSetting extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'facebook', 'instagram', 'youtube', 'twitter', 'email', 'phone_numbers'];

    protected $casts = [
        'phone_numbers' => 'array', // Cast image_path to an array for multiple images
    ];

    protected $table = 'footer_settings';
}
