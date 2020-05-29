<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    public function song()
    {
        return $this->belongsTo('App\Songs');
    }

    protected $fillable = [
            'firstname',
            'lastname',
            'email',
            'msg',
            'show',
            'amount',
            'currency',
    ];
}
