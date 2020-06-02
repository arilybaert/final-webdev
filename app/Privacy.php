<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Privacy extends Model
{
    protected $fillable = [
        'content_nl',
        'content_en',
];
}
