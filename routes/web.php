<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\MustBeLoggedIn;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LivestreamController;

Route::get('/', function () {
    return view('home');
});

Route::get('/photos', function () {
    return view('photos');
});

Route::get('/livestream', [LivestreamController::class, 'index'])->middleware(MustBeLoggedIn::class);
Route::get('/{id}', [LivestreamController::class, 'watch'])->middleware(MustBeLoggedIn::class);


//login
Route::get('/login', [UserController::class, 'loginpage']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);


