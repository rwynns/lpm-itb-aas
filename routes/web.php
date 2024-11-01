<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/akreditasi', function () {
    return view('akreditasi');
});

Route::get('/layanan', function () {
    return view('layanan');
});

Route::get('/jadwal-audit', function () {
    return view('jadwal-audit');
});

Route::get('/daftar-audit', function () {
    return view('daftar-audit');
});

Route::get('/upm', function () {
    return view('upm');
});
