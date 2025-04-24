<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

Route::get('/', function () {
    return view('Welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/laravel02', function () {
    return view('Welcome to day -02');
});

Route::get('/say-hello/{name}', [HelloController::class, 'sayhello']);
