<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageView extends Model
{
    protected $table = 'page_views';

    protected $fillable = [
        'route_name',
        'view_date',
        'view_count',
    ];
}
