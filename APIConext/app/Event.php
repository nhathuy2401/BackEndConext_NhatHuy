<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'time',
        'description',

    ];
    public function users(){
        return $this->hasMany(Event::class);
    }
}
