<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Page;

class AboutController extends Controller
{
    public function getIndex()
    {
        // search in database for the about page
        $about = Page::where('slug', 'about')->first();

        return view('pages.about', [
            "about" => $about
        ]);
    }
}
