<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShortUrlController;


    Route::post('/shorten', [ShortUrlController::class, 'shorten']);
    Route::get('/shorten/{code}', [ShortUrlController::class, 'retrieve']);
    Route::put('/shorten/{code}', [ShortUrlController::class, 'update']);
    Route::delete('/shorten/{code}', [ShortUrlController::class, 'delete']);
    Route::get('/shorten/{code}/stats', [ShortUrlController::class, 'statistics']);
