<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class quote_forms extends Model
{
    protected $fillable = [
        'customer_type',
        'locality',
        'products',
        'name',
        'email',
        'phone',
        'confirmed',
		'viewed'
    ];
}
