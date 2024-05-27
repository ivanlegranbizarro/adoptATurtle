<?php

use App\Http\Controllers\AuthorizationController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TortugaController;
use Illuminate\Support\Facades\Route;


Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('registe');

Route::get('/login', [AuthorizationController::class, 'index'])->name('login');
Route::post('/login', [AuthorizationController::class, 'login'])->name('login');
Route::get('/logout', [AuthorizationController::class, 'logout'])->name('logout');


Route::resources([
  'tortugas' => TortugaController::class
]);
