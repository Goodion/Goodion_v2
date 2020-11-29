<?php

use App\Http\Controllers\CityCookieController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/about', \App\Http\Livewire\About::class)->name('about');

Route::get('/feedback', \App\Http\Livewire\Feedback::class)->name('feedback');

Route::get('/delivery_payment', \App\Http\Livewire\DeliveryPayment::class)->name('delivery_payment');

Route::get('/users_agreement', \App\Http\Livewire\UsersAgreement::class)->name('users_agreement');

Route::post('/city_choice', [CityCookieController::class, 'placeCityCookie']);

Route::get('/offers_news', \App\Http\Livewire\OffersNews::class)->name('offers_news');

//Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
//    return view('dashboard');
//})->name('dashboard');
