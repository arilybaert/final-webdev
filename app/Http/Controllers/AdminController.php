<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blogs;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function getIndex()
    {
        return view('admin.index');
    }
    public function getBlogs()
    {
        $blogs = Blogs::paginate(12);

        return view('admin.blogs.index', [
            'blogs' => $blogs,
        ]);
    }

    public function editBlogs(Blogs $blog)
    {
        return view('admin.blogs.edit', [
        'blog' => $blog,
        ]);
    }

    public function postSave(Request $r) {
        //dd($r->id);

        $validationRules = [
            'title_nl' => 'required|max:10',
            'intro_nl' => 'required|max:1500',
            'content_en' => 'required|max:5000',
            'tag_nl' => 'required|max:15',
            
            'title_en' => 'required|max:10',
            'intro_en' => 'required|max:1500',
            'content_en' => 'required|max:5000',
            'tag_en' => 'required|max:15',

            'image' => 'required',
        ];
        // // update client
        // if($r->id){
        //      $r->id;
        // } else {
        //     // create client
        //     $validationRules['email'] = 'required|email|max:255|unique:clients,email';
        // }

        $r->validate($validationRules);

        $data = [
            'title_nl' => $r->title_nl,
            'intro_nl' => $r->intro_nl,
            'content_nl' => $r->content_nl,
            'tag_nl' => $r->tag_nl,
            
            'title_en' => $r->title_en,
            'intro_en' => $r->intro_en,
            'content_en' => $r->content_en,
            'tag_en' => $r->tag_en,

            'image' => $r->image,
        ];
        //dd($data);
        if($r->id) {
            $blog = Blogs::where('id', $r->id)->first();
            //dd($blog);
            $blog->update($data);
        } else {
            $blog = Blogs::create($data);
        }


        return redirect()->route('admin.blogs');
    }

    public function postdelete(Request $r) {
        
        Blogs::find($r->id)->delete();
        
        // foreach ($reservations as $reservation) {
        //     Reservations::find($reservation->id)->delete();
        // };

        // Client::find($request->clientId)->delete();
        return redirect()->route('admin.blogs');


    }
}
