<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Albums;
use App\Songs;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // HOMEPAGE
    public function getIndex()
    {

        // Divide albums per date category
        $classics = Albums::where('release_date', '<', '1990-01-01')->get();
        $newReleases = Albums::where('release_date', '>', now()->subDays(90))->get();
        $futureClassics = Albums::whereBetween('release_date',['1990-01-01', '2000-01-01'])->get();

        $topTenSongs = Songs::orderBy('id', 'asc')->get();


        return view('pages.home', [
            'classics' => $classics,
            'newReleases' => $newReleases,
            'futureClassics' => $futureClassics,
            'topTenSongs' => $topTenSongs,
        ]);
    }
}
