<?php

use App\Http\Controllers\PlantController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Welcome'); // halaman welcome
});

Route::get('/about', function () {
    return view('about'); // halaman about
});

Route::get('/register', function () {
    return view('register'); // halaman register
});

Route::get('/login', function () {
    return view('login'); // halaman login
});

Route::resource('/plants', PlantController::class);