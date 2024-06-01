<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TortugaController;
use App\Http\Controllers\AdopcionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthorizationController;

Route::get('/', [TortugaController::class, 'index'])->name('tortugas.index');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::get('/login', [AuthorizationController::class, 'index'])->name('login');
Route::post('/login', [AuthorizationController::class, 'login'])->name('login.perform');
Route::get('/logout', [AuthorizationController::class, 'logout'])->name('logout');

Route::resources([
  'tortugas' => TortugaController::class
]);

Route::get('/adopciones/create/{tortuga}', [AdopcionController::class, 'createWithTortuga'])->name('adopciones.createWithTortuga');

Route::resource('adopciones', AdopcionController::class)->except(['create']);
