<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    const VERIFIED_USER = '1';
    const UNVERIFIED_USER = '0';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'expertise',
        'business_type',
        'workplace',
        'verified_token',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'verified_token',

    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isVerified()
    {
        return $this->verified == self::VERIFIED_USER;
    }

    public function unVerified()
    {
        return $this->unverifed == self::UNVERIFIED_USER;
    }

    public static function generateVerifiedCode()
    {
        return str_random(40);
    }

    public function contacts()
    {
        return $this->belongsTo(Contact::class);
    }

    public function events()
    {
        return $this->belongsToMany(Event::class);
    }

    public function vouchers()
    {
        return $this->belongsToMany(Voucher::class);
    }

    public function workplaces()
    {
        return $this->belongsTo(Workplace::class);
    }


}
