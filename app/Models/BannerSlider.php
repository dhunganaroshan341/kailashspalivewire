<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BannerSlider extends Model
{
    protected $table = 'banner_sliders';

    protected $fillable = ['image', 'title', 'description'];

    use HasFactory;
}
