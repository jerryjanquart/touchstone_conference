<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\MustBeLoggedIn;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LivestreamController;

Route::get('/', function () {
    return view('home');
});

Route::view('/sponsorship', 'sponsorship');