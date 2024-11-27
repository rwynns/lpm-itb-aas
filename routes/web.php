<?php

use App\Http\Controllers\AkreditasiController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostinganController;
use App\Http\Controllers\RegisterController;
use App\Models\Akreditasi;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


Route::get('/', [PostinganController::class, 'index']);

// Route::get('/profile', function () {
//     return view('profile', [
//         "title" => "Profil"
//     ]);
// });

// Route::get('/akreditasi', function () {
//     return view('akreditasi', [
//         "title" => "Akreditasi"
//     ]);
// });

Route::get('/akreditasi', [AkreditasiController::class, 'showPublic']);

Route::get('/layanan', function () {
    return view('layanan', [
        "title" => "Layanan"
    ]);
});

Route::get('/jadwal-audit', function () {
    return view('jadwal-audit', [
        "title" => "Jadwal Audit"
    ]);
});

Route::get('/daftar-audit', function () {
    return view('daftar-audit', [
        "title" => "Daftar Audit"
    ]);
});

Route::get('/upm', function () {
    return view('upm', [
        "title" => "UPM"
    ]);
});

Route::get('/login', function () {
    return view('login.index', [
        "title" => "Login"
    ]);
})->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', function () {
    return view('register.index', [
        "title" => "Register"
    ]);
})->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        "title" => "Dashboard"
    ]);
})->middleware('auth');

Route::get('/dashboard/postingan/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('auth');

Route::resource('/dashboard/postingan', DashboardPostController::class)->middleware('auth');
Route::get('/berita/{slug}', [PostinganController::class, 'detail']);

Route::resource('/dashboard/akreditasi', AkreditasiController::class)->middleware('auth');
