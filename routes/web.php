<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminCrud;
use App\Http\Controllers\onePageController;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\SslCommerzPaymentController;
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

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', [ProductController::class, 'index']);
// Route::get('/admin123', [ProductController::class, 'formindex']);

Route::get('getState',[ProductController::class, 'getState'])->name('getState');

// // Route::post('/productStore', [ProductController::class, 'store']);
Route::get('mainview/{id}', [ProductController::class, 'mainview']);

// for cart***************.START
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart']);
Route::get('/cart', [ProductController::class, 'cart']);
Route::patch('update-cart', [ProductController::class, 'update']);
Route::delete('remove-from-cart', [ProductController::class, 'remove']);

// for cart***************.END
// Admin crude control .START
Route::get('/crIndex', [AdminCrud::class, 'crIndex']);
Route::post('/crStore', [AdminCrud::class, 'crStore']);
Route::get('/crCreate', [AdminCrud::class, 'crCreate']);

// Route::get('/crShow/{$id}', [AdminCrud::class, 'crShow']);
// Route::put('/crUpdate/{$id}', [AdminCrud::class, 'crUpdate']);
Route::delete('/crDestroy/{id}', [AdminCrud::class, 'crDestroy'])->name('crDestroy');
// Route::delete('/destroy/{id}', [UserController::class, 'destroy'])->name('destroy');
// Route::get('/crEdit/{$id}/edit', [AdminCrud::class, 'crEdit']);

// Admin crude control .END

//admin slider
Route::get('/sliderindex', [AdminCrud::class, 'sliderindex']);
Route::get('/sliderform', [AdminCrud::class, 'sliderform']);
Route::post('/sliderstore', [AdminCrud::class, 'sliderstore']);
Route::delete('/sliderdelete/{id}', [AdminCrud::class, 'sliderdelete'])->name('sliderdelete');

//admin slider

//onpage controller
Route::get('onepage/{id}', [onePageController::class, 'onepage']);
//onpage controller


// SSLCOMMERZ Start
Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);
Route::post('/pay', [SslCommerzPaymentController::class, 'index']);
Route::post('/pay-via-ajax', [SslCommerzPaymentController::class, 'payViaAjax']);
Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);
Route::post('/ipn', [SslCommerzPaymentController::class, 'ipn']);
//SSLCOMMERZ END

// new route start for fronentcontroller
//  Route::get('/', [frontendController::class, 'index']);

//new route End for fronentcontroller

// Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

