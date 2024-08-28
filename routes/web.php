<?php

use Illuminate\Support\Facades\Route;

// routes/web.php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/onboard', function () {
    return view('onboard');
});
