<?php

namespace App;
use App\Albums;

use Illuminate\Database\Eloquent\Model;

class Songs extends Model
{

    public function album()
    {
        return $this->belongsTo('App\Albums');
    }

    protected $fillable = [
            'name',
    ];
}