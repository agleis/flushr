<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    /**
     * Returns the bathrooms this thing has.
     */
    public function bathrooms() {
      return $this->hasMany('App\Bathroom');
    }
}
