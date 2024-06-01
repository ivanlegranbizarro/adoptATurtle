@extends('layouts.base')

@section('title', 'Create Adoption')

@section('content')
<div class="container mx-auto mt-8">
  <h1 class="text-2xl font-bold mb-4">Adopt {{ $tortuga->name }}</h1>
  <form action="{{ route('adopciones.store') }}" method="POST">
    @csrf
    <input type="hidden" name="tortuga_id" value="{{ $tortuga->id }}">
    <div class="mb-4">
      <label for="motivation" class="block text-gray-700">Motivation:</label>
      <textarea name="motivation" id="motivation" rows="4" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" placeholder="Why do you want to adopt {{ $tortuga->name }}? Please, provide as much information as possible. We need to know {{ $tortuga->name }} will be in good hands. "></textarea>
    </div>
    <button type="submit" class="bg-blue-300 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded transition-colors duration-200">
      Confirm Adoption
    </button>
  </form>
</div>
@endsection
