<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConvertController;


Route::get('/', [ConvertController::class, 'index'])->name('converter.index');
Route::post('/', [ConvertController::class, 'convert'])->name('converter.convert');
