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
    302
);

//Facebook redirect
Route::redirect(
    '/join',
    '/?utm_source=facebook&utm_medium=paid-social&utm_campaign=conference2026&utm_content=grid_targeted',
    302
);

//FacebXook redirect
Route::redirect(
    '/x',
    '/?utm_source=x&utm_medium=paid-social&utm_campaign=conference2026&utm_content=grid',
    302
);

//Touchstone Back Page Ad redirect
Route::redirect(
    '/magazine',
    '/?utm_source=touchstone&utm_medium=print&utm_campaign=conference2026&utm_content=sept_oct_back_cover',
    302
);

//Touchstone Reduced Rate redirects
foreach ([
    '/reduced'          => 113,
    '/reduced-thursday' => 114,
    '/reduced-friday'   => 115,
    '/reduced-saturday' => 116,
] as $path => $id) {
    Route::redirect(
        $path,
        "https://wl.donorperfect.net/weblink/WebLink.aspx?name=E350987&id={$id}"
    );
}