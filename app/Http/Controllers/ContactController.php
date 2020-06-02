<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\ContactUS;
class ContactController extends Controller
{
    public function getIndex()
    {
        return view('pages.contact');
    }
    public function postContact(Request $r)
    {

        $data = [
            'firstname' => $r->firstname,
            'lastname' => $r->lastname,
            'email' => $r->email,
            'subject' => $r->subject,
            'msg' => $r->msg,
        ];

        Mail::send('mail.contact', $data, function ($message) use($r) {
            $message->sender('arilybae@student.arteveldehs.be', 'Ari Lybaert');
            $message->to('arilybae@student.arteveldehs.be', 'Ari Lybaert');
            $message->cc($r->email, $r->firstname);
            // $message->bcc('arilybae@student.arteveldehs.be', 'Ari Lybaert');
            $message->subject($r->subject);
            // $message->priority(3);
            // $message->attach('pathToFile');

        });
        return view('mail.confirm');

    }
}
