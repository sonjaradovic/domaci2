<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Professor extends Authenticatable
{

    protected $guard='professor';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'imePrezime', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function users(){
        return $this->hasMany('App\User');
    }
}

