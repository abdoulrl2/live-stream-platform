<?php

use App\Http\Controllers\StreamController;
use Illuminate\Support\Facades\Route;

Route::get('/stream/{id}', [StreamController::class, 'show']);
Route::post('/subscribe', [StreamController::class, 'subscribe']);
