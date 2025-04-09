<?php

use Illuminate\Support\Facades\Route;


// Auth
Route::view('/reset-password', 'Authentification.ResetPassword');
Route::view('/verifie-code', 'Authentification.VerifieCode');

// Vendeur
Route::view('/vendeur/vendeurSignUp', 'vendeur.dashboard.vendeurSignUp');
Route::view('/vendeur/dashboard', 'vendeur.dashboard.vendeurDashboard');
Route::view('/vendeur/analytics', 'vendeur.dashboard.vendeurAnalytics');
Route::view('/vendeur/paquet', 'vendeur.dashboard.vendeurPaquet');
Route::view('/vendeur/preference', 'vendeur.dashboard.vendeurPreference');
Route::view('/vendeur/profile', 'vendeur.dashboard.vendeurProfile');
Route::view('/vendeur/programmation', 'vendeur.dashboard.vendeurProgrammation');
Route::view('/vendeur/security', 'vendeur.dashboard.vendeurSecurity');
Route::view('/vendeur/signin', 'vendeur.dashboard.vendeurSignin');
Route::view('/vendeur/signup', 'vendeur.dashboard.vendeurSignUp');



use App\Http\Controllers\VendeurRegisterController;
// use App\Http\Controllers\VendeurController;

// Route::get('/vendeur/signup', [VendeurController::class, 'showForm'])->name('vendeur.inscription');
Route::post('/vendeur/signup', [VendeurRegisterController::class, 'register'])->name('vendeur.register');

