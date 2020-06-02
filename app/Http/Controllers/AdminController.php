<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blogs;
use App\Payments;
use App\Albums;
use App\Songs;
use App\About;
use App\Privacy;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    // HOME
    public function getIndex()
    {
        $albums = Albums::paginate(12);
        $topTenSongs = Songs::orderBy('id', 'asc')->paginate(12);

        return view('admin.index', [
            'albums' => $albums,
            'topTenSongs' => $topTenSongs,
        ]);
    }

    public function editAlbums(Albums $album)
    {
        return view('admin.album.edit', [
            'album' => $album,
            ]);
    }

    public function albumSave(Request $r)
    {
        $validationRules = [
            'name'=> 'required',
            'artist'=> 'required',
            'release_date'=> 'required',
            'album_cover_url'=> 'required',
        ];
        $data = [
            'name' => $r->name,
            'artist'=> $r->artist,
            'release_date'=> $r->release_date,
            'album_cover_url'=> $r->album_cover_url,
        ];

        $r->validate($validationRules);


        if($r->id){
            $album = Albums::where('id', $r->id)->first();
            $album->update($data);
        } else {
            $album = Albums::create($data);
        }

        return redirect()->route('admin');
    }

    public function albumDelete(Request $r)
    {

        Albums::find($r->id)->delete();

        return redirect()->route('admin');

    }

    public function editTopTenSong(Songs $song)
    {
        return view('admin.topTenSong.edit', [
            'song' => $song,
            ]);
    }

    public function topTenSongSave(Request $r)
    {
        $validationRules = [
            'name' => 'required',
            'artist' => 'required',
            'album_name' => 'required',
            'album_cover_url' => 'required',
        ];
        $data = [
            'name' => $r->name,
        ];

        $r->validate($validationRules);
        $album_data = [
            'artist' => $r->artist,
            'name' => $r->album_name,
            'album_cover_url' => $r->album_cover_url,
        ];

        if($r->album_id){
            $album = Albums::where('id', $r->album_id)->first();
            $album->update($album_data);
        } else {
            $album = Albums::create($album_data);
            $albumID = Albums::getPdo()->lastInsertId();
            $data = [
                'name' => $r->name,
                'album_id' => $albumID,
            ];
        }



        if($r->id) {
            $song = Songs::where('id', $r->id)->first();
            //dd($blog);
            $song->update($data);
        } else {
            $song = Songs::create($data);
        }



        return redirect()->route('admin');
    }

    public function topTenSongDelete(Request $r)
    {
        Songs::find($r->id)->delete();

        return redirect()->route('admin');
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
    public function donationDelete(Request $r) {

        Payments::find($r->id)->delete();

        return redirect()->route('admin.donations');

    }

// about page
    public function getAboutPage()
    {
        $about = About::get()->first();
        return view('admin.about.edit', [
            "about" => $about
        ]);
    }

    public function aboutSave(Request $r)
    {
        $validationRules = [
            'title_left_nl'=> 'required',
            'title_left_en'=> 'required',
            'content_left_nl'=> 'required',
            'content_left_en'=> 'required',
        ];
        $data = [
            'title_left_nl' => $r->title_left_nl,
            'title_left_en'=> $r->title_left_en,
            'content_left_nl'=> $r->content_left_nl,
            'content_left_en'=> $r->content_left_en,
        ];

        $r->validate($validationRules);
        $about = About::get()->first();


        if($about){
            $about = About::get()->first();
            $about->update($data);
        } else {
            $about = About::create($data);
        }

        return redirect()->route('admin.about');
    }

    public function getPrivacy()
    {
        $privacy = Privacy::get()->first();

        return view('admin.privacy.edit', [
            "privacy" => $privacy,
        ]);
    }

    public function privacySave(Request $r)
    {
        $validationRules = [
            'content_nl'=> 'required',
            'content_en'=> 'required',
        ];
        $data = [
            'content_nl' => $r->content_nl,
            'content_en'=> $r->content_en,
        ];

        $r->validate($validationRules);
        $privacy = Privacy::get()->first();


        if($privacy){
            $privacy = Privacy::get()->first();
            $privacy->update($data);
        } else {
            $privacy = Privacy::create($data);
        }

        return redirect()->route('admin.privacy');
    }
}
