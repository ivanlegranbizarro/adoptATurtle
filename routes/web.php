<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TortugaController;
use Illuminate\Support\Facades\Route;


Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');


Route::resources([
  'tortugas' => TortugaController::class
]);
