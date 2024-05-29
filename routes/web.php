<?php

use Illuminate\Support\Facades\Route;
use App\Models\RegisterUsers;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\LocaleController;
Route::get('/', function () {
    return view('index');
});
Route::resource('/adduser', Usercontroller::class);
Route::get('/locale/{locale}',[LocaleController::class, 'setLocale']);