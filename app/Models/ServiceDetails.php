<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceDetails extends Model
{
    protected $fillable = [
        'id',
        'img',
        'a',
        'p',
        'title',
        'p-1',
        'p-2',
        'p-3' 
    ];
}
