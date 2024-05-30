@extends('layouts.base')

@section('title', 'Turtles for Adoption')

@section('content')

@auth
@if (auth()->user()->role == 'admin')
<div class="flex justify-center">
  <a href="{{ route('tortugas.create') }}" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
    Add new information about a turtle
  </a>
</div>
@endif
@endauth

<div class="container mx-auto mt-8">
  @if (count($tortugas) > 0)
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    @foreach($tortugas as $tortuga)
    <div class="bg-white shadow-lg rounded-lg overflow-hidden">
      <img src="{{ asset($tortuga->image) }}" alt="{{ $tortuga->name }}" class="w-full h-56 object-cover">
      <div class="p-6">
        <h2 class="text-xl font-bold mb-2">{{ $tortuga->name }}</h2>
        <p>Age: {{ $tortuga->age }} years</p>
        <p class="text-gray-600 mb-4">Birthday: {{ $tortuga->birthday }}</p>
        <a href="{{ route('tortugas.show', $tortuga) }}" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
          View Details
        </a>
      </div>
    </div>
    @endforeach
  </div>
  @else
  <p class="text-center text-gray-500">Fortunately, no turtles need to be adopted now.</p>
  @endif

</div>
@endsection
