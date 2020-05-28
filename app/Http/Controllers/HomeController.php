<?php

namespace App\Http\Controllers;

use App\Albums;
use App\Songs;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // HOMEPAGE
    public function getIndex()
    {


        $classics = Albums::where('release_date', '<', '1990-01-01')->get();
        $newReleases = Albums::where('release_date', '>', now()->subDays(90))->get();
        $futureClassics = Albums::whereBetween('release_date',['1990-01-01', '2000-01-01'])->get();

        //$songs = Songs::get();
        $topTenSongs = Songs::orderBy('id', 'asc')->get();


        return view('pages.home', [
            'classics' => $classics,
            'newReleases' => $newReleases,
            'futureClassics' => $futureClassics,
            'topTenSongs' => $topTenSongs,
        ]);
    }
}
