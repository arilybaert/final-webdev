<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PagesController extends Controller
{
    public function getPage($locale, $page)
    {
        $pageData = Page::where('slug', $page)->first();
        if(!$pageData) abort('404');

        return view('pages.' . $pageData->template, [
            'page' => $pageData
        ]);
    }
}
