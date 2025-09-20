<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LpMaintenanceCardsFaqs extends Model
{
    protected $fillable = [
        'question',
		'response'
    ];
}
