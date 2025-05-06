<?php

use App\Http\Controllers\ChirpController; // [tl! add]
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

// [tl! add:start]
Route::get('chirps', [ChirpController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('chirps'); // [tl! add:end]

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
