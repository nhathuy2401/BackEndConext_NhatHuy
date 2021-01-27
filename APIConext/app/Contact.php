<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'address',
        'hotline',
        'email',

    ];
    public function users(){
        return $this->hasMany(User::class);
    }
}
