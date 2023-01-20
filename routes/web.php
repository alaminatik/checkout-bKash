<?php

use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PaymentController::class, 'index']);

Route::resource('payments', PaymentController::class);

// For Checkout Bikash Payment

Route::match(array('GET','POST'),'token',[PaymentController::class, 'token'])->name('token');
Route::match(array('GET','POST'),'createpayment',[PaymentController::class, 'createpayment'])->name('createpayment');
Route::match(array('GET','POST'),'executepayment',[PaymentController::class, 'executepayment'])->name('executepayment');