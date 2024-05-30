<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TortugaController;
use App\Http\Controllers\AdopcionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthorizationController;

Route::get('/', [TortugaController::class, 'index'])->name('tortugas.index');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('registe');

Route::get('/login', [AuthorizationController::class, 'index'])->name('login');
Route::post('/login', [AuthorizationController::class, 'login'])->name('login');
Route::get('/logout', [AuthorizationController::class, 'logout'])->name('logout');


Route::resources([
  'tortugas' => TortugaController::class
]);


Route::get('/adopciones', [AdopcionController::class, 'index'])->name('adopciones.index');
Route::get('/adopciones/create/{tortuga}', [AdopcionController::class, 'create'])->name('adopciones.create');
Route::post('/adopciones', [AdopcionController::class, 'store'])->name('adopciones.store');
