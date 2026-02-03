<?php

use Illuminate\Support\Facades\Route;

// Portfolio routes
Route::view('/', 'home')->name('home');
Route::view('/skills', 'skills')->name('skills');
Route::view('/projects', 'projects')->name('projects');
Route::view('/contact', 'contact')->name('contact');

// Dashboard routes (for future admin functionality)
Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
