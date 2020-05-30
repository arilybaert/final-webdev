<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactUS;
class ContactController extends Controller
{
    public function getIndex()
    {
        return view('pages.contact');
    }
    public function contactUSPost(Request $request)
    {
        $this->validate($request, [
         'name' => 'required',
         'email' => 'required|email',
         'message' => 'required'
         ]);
        ContactUS::create($request->all());
        return back()->with('success', 'Thanks for contacting us!');
    }
}
