<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','color','type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    protected function SetPasswordAttribute($password) {
        
        $this->attributes['password'] = bcrypt($password); 
        
    }
    
    protected function tasks() {
        
        return $this->hasMany('App\Task'); 
        
    }
}
