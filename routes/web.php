<?php

use App\Http\Controllers\AuthManager;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');
Route::get('/', [AuthManager::class, 'login'])->name('login');
Route::get('/register', [AuthManager::class, 'register'])->name('register');
