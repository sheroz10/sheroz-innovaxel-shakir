<?php

use App\Http\Controllers\ShortUrlController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/shorten', [ShortUrlController::class, 'shorebten']);
Route::get('/shorten/{code}', [ShortUrlController::class, 'retrieve']);