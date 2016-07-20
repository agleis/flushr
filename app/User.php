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
        'name', 'email', 'password', 'username'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Returns the comments this thing has.
     */
    public function comments() {
      return $this->hasMany('App\Comment');
    }

    /**
     * Returns the bathrooms this thing has through comments.
     */
    public function bathrooms() {
      return $this->hasManyThrough('App\Bathroom', 'App\Comment');
    }

}
