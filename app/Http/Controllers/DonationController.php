<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DonationController extends Controller
{
    public function getIndex()
    {
        return view('pages.donations');
    }
}
