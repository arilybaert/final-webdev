<?php

namespace App;
use App\Blogs;

use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{

    protected $fillable = [
            'name',
            'title',
            'intro',
            'content',
            'tag',
            'image',
    ];
}