<?php

use App\Http\Controllers\DateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/create-date', [DateController::class, 'getcreateDatePage'])->name('getcreateDatePage');
Route::post('/create-date/create', [DateController::class, 'createDate'])->name('createDate');
