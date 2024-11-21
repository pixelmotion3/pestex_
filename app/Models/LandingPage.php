<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LandingPage extends Model
{
    protected $fillable = [
        'id',
        'nav-paragraph',

        'quote-form-tab-title-1',
        'quote-form-tab-title-2',
        'quote-form-tab-2-h2',
        'quote-form-tab-2-p',
        
        'carrousel-h5',
        'carrousel-h2',
        'carrousel-p',
        'carrousel-a-1',
        'carrousel-bg-img-path',

        'carrousel-h5-1',
        'carrousel-h2-1',
        'carrousel-p-1',
        'carrousel-a-1-1',
        'carrousel-bg-img-path-1',

        'carrousel-h5-2',
        'carrousel-h2-2',
        'carrousel-p-2',
        'carrousel-a-1-2',
        'carrousel-bg-img-path-2',
        
    ];
}
