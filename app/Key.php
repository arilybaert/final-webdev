<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Key extends Model
{
    protected $fillable = [

        'newschimp_api_key',
        'newschimp_list_id',
        'active',
];
}
