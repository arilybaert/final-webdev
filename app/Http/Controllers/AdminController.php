<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Blogs;
use App\Payment;
use App\Albums;
use App\Songs;
use App\Page;
use App\Key;

class AdminController extends Controller
{
    // Secure admin controller
    public function __construct()
    {
        $this->middleware('auth');
    }

    ////////////////////////////////////////////////////////////////  PAGES
    public function getIndexPages()
    {
        $pages = Page::all();
        return view('admin.pages.index', [
            "pages" => $pages
        ]);
    }
    public function getCreatePage()
    {
        return view('admin.pages.create');
    }
    public function postCreatePage(Request $r)
    {
        $page = new Page();
        $page->slug = str::snake($r->title_nl);
        $page->title_nl = $r->title_nl;
        $page->title_en = $r->title_en;
        $page->intro_nl = $r->intro_nl;
        $page->intro_en = $r->intro_en;
        $page->content_nl = $r->content_nl;
        $page->content_en = $r->content_en;
        $page->template = $r->template;


        $page->save();

        return redirect()->route('admin.pages.index');
    }

    public function getEditPage(Page $page)
    {
        return view('admin.pages.edit', [
            "page" => $page
        ]);
    }

    public function postEditPage(Page $page, Request $r)
    {
        if($r->id != $page->id) abort('403', 'Ela, dat mag niet!');

        $page->slug = str::snake($r->title_nl);
        $page->title_nl = $r->title_nl;
        $page->title_en = $r->title_en;
        $page->intro_nl = $r->intro_nl;
        $page->intro_en = $r->intro_en;
        $page->content_nl = $r->content_nl;
        $page->content_en = $r->content_en;
        $page->template = $r->template;

        $page->save();

        return redirect()->route('admin.pages.index');
    }

    public function postDeletePage(Page $page, Request $r)
    {
        if($r->id != $page->id) abort('403', 'Ela, dat mag niet!');

        $page->delete();
        return redirect()->route('admin.pages.index');

    }

    //////////////////////////////////////////////////////////////// HOME

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

    //////////////////////////////////////////////////////////////// BLOGS

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

        if($r->id) {
            $blog = Blogs::where('id', $r->id)->first();
            $blog->update($data);
        } else {
            $blog = Blogs::create($data);
        }


        return redirect()->route('admin.blogs');
    }

    public function postdelete(Request $r) {

        Blogs::find($r->id)->delete();

        return redirect()->route('admin.blogs');
    }

    ///////////////////////////////////////////////////////////////// DONATIONS

    public function getDonations()
    {
        $donations = Payment::paginate(12);

        return view('admin.donations.index', [
            'donations' => $donations,
        ]);
    }

    public function editDonations(Payment $donation)
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

        if($r->id) {
            $donation = Payment::where('id', $r->id)->first();
            //dd($blog);
            $donation->update($data);
        } else {
            $donation = Payment::create($data);
        }

        return redirect()->route('admin.donations');
    }

    public function donationDelete(Request $r) {

        Payment::find($r->id)->delete();

        return redirect()->route('admin.donations');
    }

    //////////////////////////////////////////////////////////////// manage mailchimp api keys

    public function getKey()
    {
        $keys = Key::get();

        return view('admin.apikey.index', [
            "keys" => $keys,
        ]);
    }

    public function keySave(Request $r)
    {
        $apikey = $r->newschimp_api_key;
        $list_id = $r->newschimp_list_id;
        $actives = $r->active;
        $id = $r->id;


        $keys = [];
        foreach($actives as $i => $active) {
            $keys = [
                "newschimp_api_key" => $apikey[$i],
                "newschimp_list_id" => $list_id[$i],
                "active" => $actives[$i],
                // "id" => $id[$i],
            ];
            if($id[$i] != "new"){
                $key = Key::where('id', $id[$i])->first();
                $key->update($keys);
            } else if(strlen($keys["newschimp_api_key"]) > 0  && strlen($keys["newschimp_list_id"]) > 0) {
                Key::create($keys);
            }
        }

        return redirect()->route('admin.apikey');

    }

    public function keyDelete(Request $r)
    {
        Key::find($r->id)->delete();

        return redirect()->route('admin.apikey');
    }
}
