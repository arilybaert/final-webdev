<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\Page;

class AboutController extends Controller
{
    public function getIndex()
    {
        $about = Page::where('slug', 'about')->first();

        return view('pages.about', [
            "about" => $about
        ]);
    }
}
