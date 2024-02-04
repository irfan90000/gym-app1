<?php

namespace App\Http\Controllers;

use Exception;
use Stripe\StripeClient;
use Stripe\PaymentIntent;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Stripe\Stripe;
;
use Stripe\Stripe as StripeGateway;


class StripeController extends Controller
{
    public function initiatePayment(Request $request)
    {
//        dd($request->all());
        StripeGateway::setApiKey('sk_test_51Ly0sBE75ef8cmSMEa1B83Au27sdHcgiWi6r2yoIcjUznNaFQxMYqU6j9uPTc87xiH09jpi1rJV7FUZhIrF0vZcj00ngTV87a7');

        try {
            $paymentIntent = PaymentIntent::create([
                'amount' => $request->amount * 100, // Multiply as & when required
                'currency' => $request->currency,
                'automatic_payment_methods' => [
                    'enabled' => true,
                ],
            ]);

            // Save the $paymentIntent->id to identify this payment later
        } catch (Exception $e) {
            // throw error
        }

//        dd($paymentIntent->client_secret);

        return [
            'token' => (string) Str::uuid(),
            'client_secret' => $paymentIntent->client_secret
        ];
    }
    public function completePayment(Request $request)
    {
        $stripe = new StripeClient('pk_test_51Ly0sBE75ef8cmSM17gsugzMcI83OTNR2hanKNL47KbmcKmsPfNdo054xhxWDKpbD2HDKKr3e7Gzp4Yzek4mwmlX00918XSUUX');
        try {
            $paymentIntentId = $request['token']; // Replace with the actual Payment Intent ID



// Split the string based on the "_secret" delimiter
            $parts = explode('_secret', $paymentIntentId);

// Get the part before the delimiter
            $result = $parts[0];

            $paymentDetail = $stripe->paymentIntents->retrieve($result);
            dd($paymentDetail);
        } catch (\Stripe\Exception\ApiErrorException $e) {
            // Handle any errors that occurred during the retrieval
            echo 'Error: ' . $e->getMessage();
        }








// Output the result

//        try {
            $paymentDetail = $stripe->paymentIntents->retrieve($result);
            dd($paymentDetail);

//            // Now $paymentDetail contains the details of the retrieved Payment Intent
//            // You can access specific details using $paymentDetail->property_name
//        } catch (\Stripe\Exception\ApiErrorException $e) {
//            // Handle any errors that occurred during the retrieval
//            echo 'Error: ' . $e->getMessage();
//        }

        // Use the payment intent ID stored when initiating payment
        $paymentDetail = $stripe->paymentIntents->retrieve($request['token']);

        dd($paymentDetail);

        if ($paymentDetail->status != 'succeeded') {
            // throw error
        }

        // Complete the payment
    }
    public function failPayment(Request $request)
    {
        // Log the failed payment if you wish
    }
}
