<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blogs;
use App\Payments;

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
    // BLOGS
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

    public function createBlogs() {
        return view('admin.blogs.create');
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

    // DONATIONS
    public function getDonations()
    {
        $donations = Payments::paginate(12);

        return view('admin.donations.index', [
            'donations' => $donations,
        ]);
    }
    public function editDonations(Payments $donation)
    {
        return view('admin.donations.edit', [
        'donation' => $donation,
        ]);
    }
    public function donationSave(Request $r) {

        $validationRules = [
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',

            'msg' => 'required|max:2000',
            'amount' => 'required',

        ];
        $r->validate($validationRules);

        $data = [
            'firstname' => $r->firstname,
            'lastname' => $r->lastname,
            'email' => $r->email,

            'msg'=> $r->msg,
            'show' => $r->show,
            'amount' => $r->amount,
            'currency' => $r->currency,
            'show' => $r->show,
        ];
        //dd($data);
        if($r->id) {
            $donation = Payments::where('id', $r->id)->first();
            //dd($blog);
            $donation->update($data);
        } else {
            $donation = Payments::create($data);
        }


        return redirect()->route('admin.donations');
    }
}
