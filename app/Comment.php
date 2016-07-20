<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    /**
     * Shows the bathroom this thing belongs to.
     */
    public function bathroom() {
      return $this->belongsTo('App\Bathroom');
    }

    /**
     * Shows the user this thing belongs to.
     */
    public function user() {
      return $this->belongsTo('App\User');
    }
    
}
