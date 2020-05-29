<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;
use Illuminate\Support\Facades\Log;
class DonationController extends Controller
{
    public function getSucces() {
        Log::info('Betaling is gelukt');

        dd('je betaling is gelukt');
    }
    public function getIndex(Request $r)
    {
        // dd($r);
        return view('pages.donations');
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
        //dd($data);
        $value = (string) number_format($r->amount, 2, '.', '');
        // dd($value);

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

            'webhookUrl' => 'https://425cb2323cf6.ngrok.io/webhooks/mollie',
            // "webhookUrl" => route('webhooks.mollie'),
            "redirectUrl" => route('donations.succes', app()->getLocale()),
        ]);

        $payment = Mollie::api()->payments->get($payment->id);

        // redirect customer to Mollie checkout page
        return redirect($payment->getCheckoutUrl(), 303);
    }
}

// /**
//  * After the customer has completed the transaction,
//  * you can fetch, check and process the payment.
//  * (See the webhook docs for more information.)
//  */
// if ($payment->isPaid())
// {
//     echo 'Payment received.';
//     // Do your thing ...
// }
