<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landingpage');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/pembayaran', function () {
    return view('pembayaran');
});
Route::get('/paket', function () {
    return view('paket');
});
Route::get('/galeri', function () {
    return view('galeri');
});

