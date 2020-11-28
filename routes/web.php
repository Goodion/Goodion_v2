<?php

use App\Http\Controllers\CityCookieController;
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

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/feedback', function () {
    return view('feedback');
})->name('feedback');

Route::get('/delivery_payment', function () {
    return view('delivery_payment');
})->name('delivery_payment');

Route::get('/users_agreement', function () {
    return view('users_agreement');
})->name('users_agreement');

Route::post('/city_choice', [CityCookieController::class, 'placeCityCookie']);

//Route::get('/offers_news', 'OffersNewsController@index');
//

//Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
//    return view('dashboard');
//})->name('dashboard');
