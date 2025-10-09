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


Route::get('/livestream', [LivestreamController::class, 'view'])->middleware(MustBeLoggedIn::class);

//login
Route::get('/login', [UserController::class, 'loginpage']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout']);

//redirects
Route::get('/allsaints', function () {
    return redirect()->away('https://wl.donorperfect.net/weblink/WebLink.aspx?name=E350987&id=99');
});
Route::get('/christthesavior', function () {
    return redirect()->away('https://wl.donorperfect.net/weblink/WebLink.aspx?name=E350987&id=99');
});
