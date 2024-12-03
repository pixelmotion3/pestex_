<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Method extends Model
{
    protected $fillable = [
        'img',
        'title1',
        'p',
        'title2',
        'p1',
        'service_id'
    ];


    public function service(){
        return $this->belongsTo('App\Models\ServiceDetails');
    }
}
