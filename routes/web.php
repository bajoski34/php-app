<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Payment;

Route::get('/payment', [Payment::class, 'Index']);
Route::get('/payment-standard', [Payment::class, 'Standard']);


Route::get('/', function () {
    return view('welcome');
});

