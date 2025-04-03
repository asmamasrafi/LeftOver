<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



Route::get('/', function () {
    return view('index');
});

// ✅ Display Sign-in Page (GET)
Route::get('signin', function () {
    return view('signin'); 
})->name('signin');

// ✅ Handle Login Form Submission (POST)
Route::post('signin', [AuthController::class, 'login'])->name('login');

// ✅ Display Sign-up Page (GET)
Route::get('SignUpForClient', function () {
    return view('SignUpForClient'); 
})->name('signup');

// ✅ Handle Sign-up Form Submission (POST)
Route::post('register', [AuthController::class, 'register'])->name('register');

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware('auth');






