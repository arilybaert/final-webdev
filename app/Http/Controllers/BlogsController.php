<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function getIndex()
    {
        return view('pages.blogs');
    }

    public function getBlog()
    {
        return view('blogs.show');
    }


}
