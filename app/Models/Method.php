<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Method extends Model
{
    protected $fillable = [
        'img',
        'title-1',
        'p',
        'title-2',
        'p-1',
        'service_id'
    ];


    public function service(){
        return $this->belongsTo('App\Models\ServiceDetails');
    }
}
