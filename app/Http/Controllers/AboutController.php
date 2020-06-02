<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;

class AboutController extends Controller
{
    public function getIndex()
    {
        $about = About::get()->first();
        return view('pages.about', [
            "about" => $about
        ]);
    }
}
