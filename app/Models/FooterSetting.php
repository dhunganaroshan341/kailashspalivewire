<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FooterSetting extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'descriptino', 'facebook', 'instagram', 'youtube', 'twitter', 'email', 'phone_numbers'];

    protected $table = 'footer_settings';
}
