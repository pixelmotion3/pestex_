<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BlogsCategories extends Model
{
   protected $fillable = [
    	'title',
		'slug'
    ];
}
