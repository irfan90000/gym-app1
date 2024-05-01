<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Payment;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\User;
use Exception;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Stripe\StripeClient;
use Stripe\PaymentIntent;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Stripe\Stripe;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;



use Stripe\Stripe as StripeGateway;


class StripeController extends Controller
{


    public function paymentSuccess(Request $request)
    {


        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));


        $response = $stripe->checkout->sessions->retrieve($request->session_id);



        if ($response->payment_status == 'paid') {



            $payment = Payment::where('id', $response->metadata->payment_id)->first();

            $product_detail = Product::with('file')->where('id',$response->metadata->product_id)->first();

//            dd($product_detail);

            $order = new Order();
            $order->user_id = 2;
            $order->product_id = $product_detail->id;
            $order->payment_id =  $response->payment_intent;
            $order->save();

            $payment = Payment::where('id', $payment->id)->first();
            $payment->status = 'success';
            $payment->order_id = $order->id;
            $payment->is_processed = 1;
            $payment->payment_post_status = json_encode($response);
            $payment->reference_number = $response->payment_intent;
            $payment->save();

            $filePath = storage_path('app/' . $product_detail->file->image);
            // Check if the file exists
            if (!file_exists($filePath)) {
                abort(404);
            }
            $response = Response::download($filePath);
            return Redirect::to('/')->withHeaders([
                'Content-Type' => 'application/octet-stream',
            ]);
            dd($response);

// Redirect to a specific URL
            return Redirect::to('your-url')->withHeaders([
                'Content-Type' => 'application/octet-stream',
            ]);
            // Return the file as a download response
            return response()->download($filePath);


        }



        return redirect()->route('home')
            ->with('success', 'Payment successful completed.');

    }

    public function payment($id)
    {


        $stripe = new \Stripe\StripeClient('sk_test_51Ly0sBE75ef8cmSMEa1B83Au27sdHcgiWi6r2yoIcjUznNaFQxMYqU6j9uPTc87xiH09jpi1rJV7FUZhIrF0vZcj00ngTV87a7');


//          $user = Auth::user();



        $product = Product::where('id', $id)->first();

        $payment = new Payment();
        $payment->order_id = null;
        $payment->product_id = $id;
        $payment->user_id = 2;
        $payment->reference_number = null;
        $payment->is_processed = 0;
        $payment->payment_method = 'stripe';
        $payment->amount = $product->price ?? null;
        $payment->checkout_amount = $product->price ?? null;
        $payment->old_balance = 0;
        $payment->payment_details = $product->description;
        $payment->payment_post_status = null;
        $payment->status = 'pending';
        $payment->save();


        $user =  User::find(2);
        $redirectUrl = route('payment.success') . '?session_id={CHECKOUT_SESSION_ID}&product_id=' . 1;
        $response = $stripe->checkout->sessions->create([
            'success_url' => $redirectUrl,
            'customer_email' => $user->email,
            'payment_method_types' => ['link', 'card'],
            'metadata' => [
                'payment_id' => $payment->id,
                'product_id' => $product->id,
            ],
            'line_items' => [
                [
                    'price_data' => [
                        'product_data' => [
                            'name' => 'logo',
                        ],
                        'unit_amount' => 100 * $product->price,
                        'currency' => 'USD',
                    ],
                    'quantity' => 1
                ],
            ],

            'mode' => 'payment',
            'allow_promotion_codes' => true,
        ]);

        return redirect($response['url']);
    }

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
            'token' => (string)Str::uuid(),
            'client_secret' => $paymentIntent->client_secret
        ];
    }

    public function completePayment(Request $request)
    {

        $stripe = new StripeClient('sk_test_51Ly0sBE75ef8cmSMEa1B83Au27sdHcgiWi6r2yoIcjUznNaFQxMYqU6j9uPTc87xiH09jpi1rJV7FUZhIrF0vZcj00ngTV87a7');

        $order = new Order();
        $order->user_id = $request->user_id;
        $order->product_id = $request->product_id;
        $order->payment_id = $request->token;
        $order->save();


        // Use the payment intent ID stored when initiating payment
//        $paymentDetail = $stripe->paymentIntents->retrieve('PAYMENT_INTENT_ID');
//
//        if ($paymentDetail->status != 'succeeded') {
//            // throw error
//        }
    }

    public function failPayment(Request $request)
    {
        // Log the failed payment if you wish
    }
}
