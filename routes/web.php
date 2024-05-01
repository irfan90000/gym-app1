<?php

use App\Http\Controllers\StripeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/{any}', function () {
    return view('app'); // Assuming 'app' is your main Vue.js application entry point
})->where('any', '.*');

 Route::get('/', function () {
     return view('app');
 })->name('home');
//Route::get('{any?}', function () {
//    return view('app');
//})->where('any', '.*');
//// Route::post('/login', [UserController::class, 'login'])->name('login');

//
//Route::post('/checkout/process',  [PaymentsController::class,'index'])->name('checkout.process');
Route::get('/payment/success', [StripeController::class,'paymentSuccess'])->name('payment.success');
Route::get('stripp/{id}', [StripeController::class,'payment'])->name('payment');

