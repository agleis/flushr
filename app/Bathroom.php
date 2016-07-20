<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bathroom extends Model
{
    /**
     * Returns the comments this bathroom has.
     */
    public function comments() {
      return $this->hasMany('App\Comment');
    }

    /**
     * Returns the users this thing has through comments.
     */
    public function users() {
      return $this->hasManyThrough('App\User', 'App\Comment');
    }

    /**
     * Shows the building this thing belongs to.
     */
    public function building() {
      return $this->belongsTo('App\Building');
    }

    

}
