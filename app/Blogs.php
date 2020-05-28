<?php

namespace App;
use App\Blogs;

use Illuminate\Database\Eloquent\Model;
class Blogs extends Model
{

    protected $fillable = [

            'title_nl',
            'intro_nl',
            'content_nl',
            'tag_nl',
            'title_en',
            'intro_en',
            'content_en',
            'tag_en',
            'image',
    ];
}