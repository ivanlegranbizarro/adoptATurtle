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

    auth()->attempt($data);

    return redirect()->route('tortugas.index');
  }


  public function logout(): RedirectResponse
  {
    auth()->logout();
    return redirect()->route('login');
  }
}
