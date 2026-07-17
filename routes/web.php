<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\MustBeLoggedIn;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LivestreamController;
use Illuminate\Http\Request;

Route::get('/', function (Request $request) {

    //start session for postcard IF the route is /joinus
    if (!session()->has('utm_source') && $request->has('utm_source')) {
        session([
            'utm_source' => $request->utm_source,
        ]);
    }

    return view('home');
});

//debug---delete when done
Route::get('/session-test', function () {
    return response()->json(session()->all());
});



Route::view('/sponsorship', 'sponsorship');

Route::view('/exhibitors', 'exhibitors');

Route::view('/photos', 'photos');

//Postcard redirect
Route::redirect(
    '/joinus',
    '/?utm_source=postcard',
    301
);

