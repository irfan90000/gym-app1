<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HealthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::post('/login', [UserController::class, 'login'])->name('login');
Route::post('/signUp', [UserController::class, 'signUp'])->name('signUp');
Route::post('/otp-sent', [UserController::class, 'otp'])->name('opt');
Route::post('/reset-password', [UserController::class, 'resetPasswod'])->name('opt');

Route::middleware('auth:api')->group(function () {
    Route::controller(UserController::class)->group(function () {
        Route::post('add/user', 'store');
        Route::get('users', 'index');
        Route::get('trainers', 'trainers');
        Route::get('edit/user/{id}', 'edit');
        Route::get('show/user/{id}', 'show');
        Route::post('update/user/{id}', 'update');
        Route::get('delete/user/{id}', 'destroy');
    });

    Route::controller(CategoryController::class)->group(function () {
        Route::post('add/category', 'store');
        Route::get('category', 'index');
        Route::get('edit/category/{id}', 'edit');
        Route::post('update/category/{id}', 'update');
        Route::get('delete/category/{id}', 'destroy');
    });

    Route::controller(ProductController::class)->group(function () {
        Route::post('add/product', 'store');
        Route::get('product', 'index');
        Route::get('show/product/{id}', 'show');
        Route::get('edit/product/{id}', 'edit');
        Route::post('update/product/{id}', 'update');
        Route::get('delete/product/{id}', 'destroy');
        Route::get('delete/file/{id}', 'delete');
        Route::get('download/file/{id}', 'download');
        Route::get('download/product/all/file/{id}', 'productFiles');
        Route::get('product/subscription', 'subscription');
        Route::get('product/program', 'program');
    });

    Route::controller(SettingsController::class)->group(function () {
        Route::post('add/setting', 'store');
        Route::get('settings', 'index');
        Route::get('edit/setting/{id}', 'edit');
        Route::post('update/setting/{id}', 'update');
        Route::get('delete/setting/{id}', 'destroy');
    });

    Route::controller(HealthController::class)->group(function () {
        Route::post('add/health', 'store');
    });
    Route::controller(OrderController::class)->group(function () {
        Route::get('orders', 'index');
        Route::get('order/show/{id}', 'show');
    });
});
Route::get('product/subscription/user', [ProductController::class, 'subscription_user']);
Route::get('product/program/user', [ProductController::class, 'program_user']);
Route::get('product/personal-program/user', [ProductController::class, 'personal_program']);


Route::post('payment/initiate', [StripeController::class, 'initiatePayment']);
Route::post('payment/complete', [StripeController::class, 'completePayment']);
Route::post('payment/failure', [StripeController::class, 'failPayment']);
Route::post('/stripe/payment/{id}', [StripeController::class, 'payment']);


