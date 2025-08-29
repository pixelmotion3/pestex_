<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
   protected $fillable = [
		'title',
		'image',
		'content',
		'content-prev',
		'category',
		'slug'
    ];
}
