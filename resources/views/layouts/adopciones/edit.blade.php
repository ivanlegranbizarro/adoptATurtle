@extends('layouts.base')

@section('title', 'Edit Adoption')

@section('content')
<div class="container mx-auto mt-8">
  <h1 class="text-2xl font-bold mb-4">Edit Adoption of {{ $tortuga->name }}</h1>
  <form action="{{ route('adopciones.update', $adopcion->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="tortuga_id" value="{{ $tortuga->id }}">
    <div class="mb-4">
      <label for="motivation" class="block text-gray-700">Motivation:</label>
      <textarea name="motivation" id="motivation" rows="4" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm" minlength="10" maxlength="500">{{ old('motivation', $adopcion->motivation) }}</textarea>
    </div>
    <button type="submit" class="bg-blue-300 hover:bg-blue-400 text-white font-bold py-2 px-4 rounded transition-colors duration-200">
      Update Adoption
    </button>
    <a href="{{ route('adopciones.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded transition-colors duration-200">
      Back
    </a>
  </form>
</div>
@endsection
