<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriptionForm extends Model
{
    use HasFactory;

    protected $primaKey = 'id';

    protected $table = 'subscription_forms';

    protected $fillable = ['name', 'email', 'phone'];
}
