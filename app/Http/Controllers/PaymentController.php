<?php

namespace App\Http\Controllers;

use Stripe\Stripe;

use Stripe\PaymentIntent;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function createPaymentIntent()
    {
        Stripe::setApiKey(config('services.stripe.secret'));
        

        $paymentIntent = PaymentIntent::create([
            'amount' => 1000, // Amount in cents
            'currency' => 'usd',
        ]);

        return view('payment.payment', ['paymentIntent' => $paymentIntent]);
    }

public function processPayment(Request $request)
{
    $paymentIntentId = $request->input('payment_intent_id');

    Stripe::setApiKey(config('services.stripe.secret'));

    $paymentIntent = PaymentIntent::retrieve($paymentIntentId);

    if ($paymentIntent->status === 'succeeded') {
        // Payment was successful
        return view('payment.success');
    } else {
        // Payment failed
        return view('payment.failure');
    }
}


}
