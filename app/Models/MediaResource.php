<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaResource extends Model
{
    use HasFactory;

    protected $table = 'media_resources';

    protected $primary_key = 'id';

    protected $fillable = ['media_path'];
}
