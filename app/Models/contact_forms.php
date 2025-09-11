<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class contact_forms extends Model
{
    protected $fillable = [
        'phone',
        'name',
        'email',
        'confirmed',
		'viewed',
		'message',
		'from',
		'locality',
		'service'
    ];
}
