<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LpMaintenanceComments extends Model
{
	protected $fillable = [
		'name',
		'comment'
	];
}
