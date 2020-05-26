<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // HOMEPAGE
    public function getIndex()
    {
        return view('pages.home');
    }
}
