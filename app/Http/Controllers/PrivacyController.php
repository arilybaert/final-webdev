<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function getIndex()
    {
        return view('pages.privacy');
    }
}
