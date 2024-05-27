@extends('layouts.base')

@section('title', 'Register')

@section('content')
<div class="md:flex md:gap-10">
  <div class="md:w-1/2 bg-white shadow-xl rounded-lg p-6">
    <img src="{{ asset('img/tortuga-register.jpg') }}" alt="Welcome turtle" />
  </div>
  <div class="md:w-1/2 bg-white shadow-xl rounded-lg p-6">
    <turbo-frame id="turbo-frame-register">
      <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="mb-4">
          <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Name</label>
          <input type="text" name="name" id="name" placeholder="Your name" value="{{ old('name') }}" class="border p-3 w-full rounded-lg" required minlength="3" />
          @error('name')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-4">
          <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">Email</label>
          <input type="email" name="email" id="email" placeholder="Your email" value="{{ old('email') }}" class="border p-3 w-full rounded-lg" required />
          @error('email')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-4">
          <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">Password</label>
          <input type="password" name="password" id="password" placeholder="Your password" class="border p-3 w-full rounded-lg" required minlength="6" />
          @error('password')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-4">
          <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">Confirm Password</label>
          <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Your password" class="border p-3 w-full rounded-lg" required minlength="6" />
          @error('password_confirmation')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        <input type="submit" value="Register" class="bg-green-600 hover:bg-green-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg mt-5" />
      </form>
    </turbo-frame>
  </div>
</div>
@endsection
