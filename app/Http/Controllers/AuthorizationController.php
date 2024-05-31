<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AuthorizationController extends Controller
{
  public function index(): View
  {
    return view('users.login');
  }

  public function login(LoginRequest $request): RedirectResponse
  {
    $data = $request->validated();

    if (auth()->attempt(['email' => $data['email'], 'password' => $data['password']])) {
      $request->session()->regenerate();
      return redirect()->intended(route('tortugas.index'));
    }

    return back()->withErrors([
      'email' => 'The provided credentials do not match our records.',
    ]);
  }


  public function logout(): RedirectResponse
  {
    auth()->logout();
    return redirect()->route('login');
  }
}
