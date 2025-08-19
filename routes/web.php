<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/allsaints', function () {
    return redirect()->away('https://wl.donorperfect.net/weblink/WebLink.aspx?name=E350987&id=99');
});

Route::get('/christthesavior', function () {
    return redirect()->away('https://wl.donorperfect.net/weblink/WebLink.aspx?name=E350987&id=99');
});
