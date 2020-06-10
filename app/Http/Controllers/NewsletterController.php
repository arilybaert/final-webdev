<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;
use App\Key;

class NewsletterController extends Controller
{
    public function create()
    {
        return view('newsletter');
    }

    public function store(Request $request)
    {

        // Look in db for an active api key
        $keys = Key::where('active', '1')->first();

        config()->set([
            "newsletter.apiKey" => $keys->newschimp_api_key,
            "newsletter.lists.subscribers.id" => $keys->newschimp_list_id

        ]);

        if ( ! Newsletter::isSubscribed($request->email) )
        {

            Newsletter::subscribePending($request->email);
            return view('newsletter',[
                "message" => 'Thanks For Subscribe'
            ]);
        }
        return view('newsletter',[
            "message" => "You have already subscribed"
        ]);

    }
}
