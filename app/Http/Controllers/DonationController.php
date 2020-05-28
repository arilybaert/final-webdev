<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;
class DonationController extends Controller
{
    public function getSucces() {
        dd('je betaling is gelukt');
    }
    public function getIndex()
    {
        return view('pages.donations');
    }

    public function donationPayment(Request $r)
    {
        $value = (string)$r->amount;
        
        $payment = Mollie::api()->payments->create([
            'amount' => [
                'currency' => 'EUR',
                'value' => $value,
            ],
            'description' => 'first laravel payment',
            
            'webhookUrl' => 'https://375cd703dcc4.ngrok.io/webhooks/mollie',
            // "webhookUrl" => route('webhooks.mollie'),
            "'redirectUrl" => route('donations.succes', app()->getLocale()),
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
