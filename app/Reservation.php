<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{

    protected $fillable = [
        'room_id',
        'client_id',
        'date_start',
        'date_end',
    ];
    //relaties weergeven -> func heeft naam van wat we willen linken
    public function room(){
        return $this->belongsTo('App\Room');
    }
    public function client()
    {
        return $this->belongsTo('App\Client');
    }
}
