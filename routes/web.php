<?php

use App\Http\Livewire\About;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/about', About::class)->name('about');

Route::get('/feedback', \App\Http\Livewire\FeedbackForm::class)->name('feedback');

Route::get('/delivery_payment', \App\Http\Livewire\DeliveryPayment::class)->name('delivery_payment');

Route::get('/users_agreement', \App\Http\Livewire\UsersAgreement::class)->name('users_agreement');

Route::get('/offers', \App\Http\Livewire\ShowOffers::class)->name('offers');

Route::get('/news', \App\Http\Livewire\ShowNews::class)->name('news');

//Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
//    return view('dashboard');
//})->name('dashboard');
