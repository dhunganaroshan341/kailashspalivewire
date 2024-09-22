<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeContactSectionDescription extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description'];

    protected $table = 'home_contact_section_descriptions';

    protected $primaryKey = 'id'; // Correct property name
}
