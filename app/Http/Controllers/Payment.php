<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Flutterwave\Payments\Facades\Flutterwave;
use Flutterwave\Payments\Data\Currency;

class Payment extends Controller
{
    public function Index() {
        $payload = [
            "tx_ref" => Flutterwave::generateTransactionReference(),
            "amount" => 100,
            "currency" => Currency::NGN,
            "customer" => [
                "email" => "developers@flutterwavego.com"
            ],
        ];

        $payment_details = Flutterwave::render('inline', $payload);

        return view('flutterwave::modal', compact('payment_details'));
    }

    public function Standard() {
        $payload = [
            "tx_ref" => Flutterwave::generateTransactionReference(),
            "amount" => 100,
            "currency" => Currency::NGN,
            "customer" => [
                "email" => "developers@flutterwavego.com"
            ],
        ];
        
        $payment_link = Flutterwave::render('standard', $payload);
        
        return redirect($payment_link);
    }

    public function callback() {

    }

    public function webhook() {
        
    }
}
