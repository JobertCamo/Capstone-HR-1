<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('hr.welcome');
});

Route::get('/dashboard', function () {
    return view('hr.dashboard');
});

Route::get('/onboard', function () {
    return view('hr.onboard');
});
Route::get('/application', function () {
    return view('user.application');
});
Route::get('/jobpost', function () {
    return view('user.jobpost');
});
Route::get('/jobscript', function () {
    return view('user.jobscript');
});
