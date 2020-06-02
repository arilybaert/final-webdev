<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'title_left_nl',
        'title_left_en',
        'content_left_nl',
        'content_left_en',
    ];

}
