@extends('layouts.base')

@section('title', $tortuga->name)

@section('content')
<div class="container mx-auto mt-8 flex justify-center">
  <div class="bg-white shadow-lg rounded-lg overflow-hidden">
    <img src="{{ asset($tortuga->image) }}" alt="{{ $tortuga->name }}" class="w-100 h-100 object-cover">
    <div class="p-6">
      <h2 class="text-xl font-bold mb-2">{{ $tortuga->name }}</h2>
      <p>Age: {{ $tortuga->age }} years</p>
      <p class="text-gray-600 mb-4">Birthday: {{ $tortuga->birthday }}</p>
      <p class="text-gray-600 mb-4">Comments: {{ $tortuga->comments }}</p>
      <a href="#" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
        Adopt
      </a>
    </div>
  </div>
</div>
@endsection
