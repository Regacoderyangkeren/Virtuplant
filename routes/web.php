<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Welcome'); // halaman welcome
});

Route::get('/register', function () {
    return view('register'); // halaman register
});

Route::get('/login', function () {
    return view('login'); // halaman login
});