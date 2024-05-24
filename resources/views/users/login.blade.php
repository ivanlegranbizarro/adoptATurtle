@extends('layouts.base')

@section('title', 'Login')

@section('content')
<div class="md:flex md:justify-center md:gap-10 md:items-center">
  <div class="md:w-4/12 bg-white shadow-xl rounded-lg p-6">
    <img src="{{ asset('img/tortuga-george.jpg') }}" alt="Login Turtle" />
  </div>
  <div class="md:w-4/12 bg-white shadow-xl rounded-lg p-6">
    <form method="POST" action="{{ route('login') }}">
      @csrf

      <div class="mb-4">
        <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
        <input type="email" name="email" id="email" placeholder="Your email" value="{{ old('email') }}" class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror" />
        @error('email')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-4">
        <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Password</label>
        <input type="password" name="password" id="password" placeholder="Your password" class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror" />
        @error('password')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <input type="submit" value="Login" class="bg-green-600 hover:bg-green-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg mt-5" />
    </form>
  </div>
</div>
@endsection
