<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'home'])->name('home');
Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/formations', [SiteController::class, 'formations'])->name('formations');
Route::get('/actualites', [SiteController::class, 'actualites'])->name('actualites');
Route::get('/inscription', [SiteController::class, 'inscription'])->name('inscription');

// Routes d'authentification
Route::get('/login', [SiteController::class, 'login'])->name('login');
Route::post('/login', [SiteController::class, 'loginSubmit'])->name('login.submit');
Route::get('/register', [SiteController::class, 'register'])->name('register');
Route::post('/register', [SiteController::class, 'registerSubmit'])->name('register.submit');
Route::get('/forgot-password', [SiteController::class, 'forgotPassword'])->name('forgot-password');

// Route protégée pour le dashboard
Route::get('/dashboard', [SiteController::class, 'dashboard'])->name('dashboard');

Route::get('/logout', function () {
    // Pour l'instant, on redirige simplement vers la page d'accueil
    // Plus tard, vous pourrez implémenter la vraie logique de déconnexion
    return redirect('/');
})->name('logout');
