<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Privacy;
use App\Page;

class PrivacyController extends Controller
{
    public function getIndex()
    {
        $privacy = Page::where('slug', 'privacy-policy')->first();
        return view('pages.privacy', [
            "privacy" => $privacy
        ]);
    }
}
