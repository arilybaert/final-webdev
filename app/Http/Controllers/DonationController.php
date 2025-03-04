<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;
use Illuminate\Support\Facades\Log;
use App\Payment;

class DonationController extends Controller
{
    public function getSucces() {

    }
    public function getIndex(Request $r)
    {
        $donations = Payment::orderBy('created_at', 'desc')->paginate(10);
        return view('pages.donations', [
            'donations' => $donations,
        ]);
    }

    public function donationPayment(Request $r)
    {
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
        ];
        $value = (string) number_format($r->amount, 2, '.', '');

        $payment = Mollie::api()->payments->create([
            'amount' => [
                'currency' => 'EUR',
                'value' => $value,
            ],
            'description' => $r->msg,
            'metadata' => [
                'firstname' => $r->firstname,
                'lastname' => $r->lastname,
                'email' => $r->email,

                'msg'=> $r->msg,
                'show' => $r->show,
                'amount' => $r->amount
            ],

            //'webhookUrl' => ' https://931103da3df6.ngrok.io/webhooks/mollie',
            "webhookUrl" => route('webhooks.mollie'),
            "redirectUrl" => route('donations.succes', app()->getLocale()),
        ]);

        $payment = Mollie::api()->payments->get($payment->id);

        // redirect customer to Mollie checkout page
        return redirect($payment->getCheckoutUrl(), 303);
    }
}

