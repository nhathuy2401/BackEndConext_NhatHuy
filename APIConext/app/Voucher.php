<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $fillable = [
        'title',
        'description',
        'time',
        'contact',
    ];
    public function users(){
        return $this->hasMany(User::class);
    }
}
