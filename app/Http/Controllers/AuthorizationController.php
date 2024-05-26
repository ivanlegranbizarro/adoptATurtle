<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AuthorizationController extends Controller
{
  public function login(): View
  {
    return view('users.login');
  }


  public function logout(): RedirectResponse
  {
    auth()->logout();
    return redirect()->route('login');
  }
}
