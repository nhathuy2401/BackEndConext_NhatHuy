<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workplace extends Model
{
    protected $fillable = [
        'title',
        'description',
        'options',
        'location',
    ];
    public function users(){
        return $this->hasMany(User::class);
    }
}
