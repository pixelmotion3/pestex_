<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class schedule_inspection extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'confirmed',
		'viewed'
    ];
}
