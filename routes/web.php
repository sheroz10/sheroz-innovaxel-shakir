<?php

use App\Http\Controllers\ShortUrlController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/shorten', [ShortUrlController::class, 'shorebten']);
Route::get('/shorten/{code}', [ShortUrlController::class, 'retrieve']);
Route::put('/shorten/{code}', [ShortUrlController::class, 'update']);
Route::delete('/shorten/{code}', [ShortUrlController::class, 'delete']);
Route::get('/shorten/{code}/stats', [ShortUrlController::class, 'statistics']);