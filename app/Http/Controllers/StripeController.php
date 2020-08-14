<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Customer;
use Stripe\Checkout\Session;

class StripeController extends Controller
{
    //

    public function cargoStripe(Request $request){

        Stripe::setApiKey('sk_test_WoU72Lb4i9MMkWWqANvMy1rc00fJym1egv');

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'T-shirt',
                    ],
                    'unit_amount' => 2000,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => 'https://example.com/success?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => 'https://example.com/cancel',
        ]);


/*
        Stripe::setApiKey(config('services.stripe.secret'));


        $token  = $_POST['stripeToken'];
        $email  = $_POST['stripeEmail'];

        $customer = Customer::create([
            'email' => $email,
            'source'  => $token,
        ]);

        $charge = Charge::create([
            'customer' => $customer->id,
            'amount'   => 5000,
            'currency' => 'usd',
        ]);

        return 'realizado';

        Stripe::setApiKey('sk_test_WoU72Lb4i9MMkWWqANvMy1rc00fJym1egv');

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'T-shirt',
                    ],
                    'unit_amount' => 2000,
                ],
                'quantity' => 1,
            ]],
            'mode' => 'payment',
            'success_url' => 'https://example.com/success?session_id={CHECKOUT_SESSION_ID}',
            'cancel_url' => 'https://example.com/cancel',
        ]);

        /*
        Stripe::setApiKey('sk_test_WoU72Lb4i9MMkWWqANvMy1rc00fJym1egv');
        $token  = $_POST['stripeToken'];
        $email  = $_POST['stripeEmail'];

        $customer = Customer::create([
            'email' => $email,
            'source'  => $token,
        ]);

        $charge = Charge::create([
            'customer' => $customer->id,
            'amount'   => 5000,
            'currency' => 'usd',
        ]);*/
    }
}
