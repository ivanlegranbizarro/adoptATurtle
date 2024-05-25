<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class RegisterController extends Controller
{
  public function index(): View
  {
    return view('users.register');
  }

  public function store(RegisterRequest $request): RedirectResponse
  {
    $data = $request->validated();

    $user = User::create($data);

    auth()->login($user);

    return redirect()->route('tortugas.index');
  }
}
