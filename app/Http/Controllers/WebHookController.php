<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Mollie\Laravel\Facades\Mollie;

use Illuminate\Http\Request;
use App\Payments;

class WebHookController extends Controller
{

    public function handle(Request $request) {
        /*
        if (! $request->has('id')) {
            return;
        } */

        $payment = Mollie::api()->payments()->get($request->id);

        if ($payment->isPaid()) {
            $db_payment = new Payments();

            $db_payment->firstname = $payment->metadata->firstname;
            $db_payment->lastname = $payment->metadata->lastname;
            $db_payment->email = $payment->metadata->email;
            $db_payment->msg = $payment->metadata->msg;
            $db_payment->show = $payment->metadata->show;
            $db_payment->amount = $payment->amount->value;
            $db_payment->currency = $payment->amount->currency;

            $db_payment->save();
            dd($payment->metadata);
            Log::info(json_encode($payment));
            Log::info('Betaling is gelukt');
        } else {
            Log::warning('Betaling is mislukt');

        }
    }
}
