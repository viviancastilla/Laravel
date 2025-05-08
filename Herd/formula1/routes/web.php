

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Formula1Controller;


Route::get('/', function () {
    return view('welcome');
});

/*
 * Route to display F1 2025 races
 */
Route::get('/', [Formula1Controller::class, 'index'])->name('races');
