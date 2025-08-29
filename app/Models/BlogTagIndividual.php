<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogTagIndividual extends Model
{
   protected $fillable = [
		'idtag',
		'idblog'
    ];
}
