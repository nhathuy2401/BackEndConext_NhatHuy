<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable = [
        'business_type',
        'expertise',
        'user',
        'explore',
    ];
}
