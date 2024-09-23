<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactPage extends Model
{
    use HasFactory;

    protected $table = 'contact_pages';

    protected $primary_key = 'id';

    protected $fillable = ['email', 'phone', 'address', 'contacts'];
}
