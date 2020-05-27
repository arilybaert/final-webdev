<?php

namespace App;
use App\Blogs;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{

    protected $fillable = [
            'title',
            'intro',
            'content',
            'tag',
            'image',
    ];
}