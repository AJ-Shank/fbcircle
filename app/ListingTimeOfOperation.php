<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListingTimeOfOperation extends Model
{
    protected $table = "listing_time_of_operation";

    const MONDAY= 1;
    const TUESDAY= 2;
    const WEDNESDAY= 3;
    const THURSDAY= 4;
    const FRIDAY= 5;
    const SATURDAY= 6;
    const SUNDAY= 7;

    public function listing(){
      return $this->belongsTo('App\Listing');
    }
}
