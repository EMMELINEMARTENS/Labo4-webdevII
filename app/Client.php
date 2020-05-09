<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'title',
        'email',
        'firstname',
        'lastname',
        'address',
        'postal_code',
        'city',
        'province'
    ];
    //relaties weergeven -> func heeft naam van wat we willen linken
    public function room()
    {
        return $this->belongsTo('App\Room');
    }
    public function reservation()
    {
        return $this->belongsTo('App\Reservation');
    }
    //
}
