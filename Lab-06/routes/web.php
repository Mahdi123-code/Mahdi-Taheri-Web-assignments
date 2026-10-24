<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware('guest')->group(function () {
    Route::get('/signup', [AuthController::class, 'showSignup'])
        ->name('signup');

    Route::post('/signup', [AuthController::class, 'signup'])
        ->name('signup.store');

    Route::get('/signin', [AuthController::class, 'showSignin'])
        ->name('signin');

    Route::post('/signin', [AuthController::class, 'signin'])
        ->name('signin.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');
});
