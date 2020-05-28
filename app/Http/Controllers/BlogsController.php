<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blogs;

class BlogsController extends Controller
{
    public function getIndex()
    {
        $blogs = Blogs::paginate(12);
        //dd($blogs);

        return view('pages.blogs', [
            'blogs' => $blogs,
        ]);
    }

    public function getBlog($prefix, Blogs $blog)
    {
        //dd($prefix);
        return view('blogs.show', [
            'blog' => $blog,
        ]);
    }





}
