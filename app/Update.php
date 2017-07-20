<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    public function listing(){
      return $this->belongsTo('App\Listing','listing_id');
    }
    public function author(){
      return $this->belongsTo('App\Listing','author_id');
    }
}
