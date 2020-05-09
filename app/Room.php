<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function client()
    {
        return $this->belongsTo('App\Client');
    }
    public function reservation()
    {
        return $this->belongsTo('App\Reservation');
    }
}
