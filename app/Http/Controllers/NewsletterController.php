<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsletterController extends Controller
{
    public function create()
    {
        return view('newsletter');
    }

    public function store(Request $request)
    {
        if ( ! Newsletter::isSubscribed($request->email) ) 
        {
            
            Newsletter::subscribePending($request->email);
            return view('newsletter',[
                "message" => 'Thanks For Subscribe'
            ]);
            // return redirect('newsletter'. app()->getLocale())->with('success', 'Thanks For Subscribe');
        }
        return view('newsletter',[
            "message" => "You have already subscribed"
        ]);
        // return redirect("newslettrer" .  app()->getLocale())->with('failure', 'Sorry! You have already subscribed ');
            
    }
}