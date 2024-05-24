<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
  return view('layouts.base');
});

Route::get('/register', function () {
  return view('users.register');
});
