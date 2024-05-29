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
      <div class="flex justify-around">
        <a href="#" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4">
          Adopt
        </a>
        <a href="{{ route('tortugas.index') }}" class="bg-gray-500 hover:bg-gray-400 text-white font-bold py-2 px-4">
          Back
        </a>

        @if (auth()->user()->role == 'admin')
        <a href="{{ route('tortugas.edit', $tortuga) }}"
          class="bg-orange-600 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded">
          Edit
        </a>
        <form action="{{ route('tortugas.destroy', $tortuga) }}" method="POST" class="inline">
          @csrf
          @method('DELETE')
          <button type="submit" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded" onclick="return confirm('Are you sure?')">
            Delete
          </button>
          @endif
      </div>
    </div>
  </div>
</div>
@endsection
