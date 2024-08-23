<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeSectionTitle extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    protected $table = 'home_section_titles';

    protected $primary_key = 'id';
}
