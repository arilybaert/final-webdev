<?php

namespace App;

use App\Songs;

use Illuminate\Database\Eloquent\Model;

class Albums extends Model
{
    public function song()
    {
        return $this->belongsTo('App\Songs');
    }

    protected $fillable = [
            'name',
            'artist',
            'release_date',
            'album_cover_url',
            'lbum_cover_path',

    ];
}