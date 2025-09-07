<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LpUrgencyCards extends Model
{
	protected $fillable = [
		'img',
		'icon',
		'title',
		'description'
	];
}
