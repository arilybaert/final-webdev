<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Privacy;

class PrivacyController extends Controller
{
    public function getIndex()
    {
        $privacy = Privacy::get()->first();
        return view('pages.privacy', [
            "privacy" => $privacy
        ]);
    }
}
