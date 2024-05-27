@extends('layouts.base')

@section('title', 'Edit Turtle Information')

@section('content')
<div class="md:flex justify-center">
  <div class="bg-white shadow-xl rounded-lg p-6">
    <form method="POST" action="{{ route('tortugas.update', $tortuga->id) }}" enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <div class="mb-4">
        <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Name</label>
        <input type="text" name="name" id="name" placeholder="Turtle name" value="{{ old('name', $tortuga->name) }}" class="border p-3 w-full" />
        @error('name')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-4">
        <label for="birthday" class="mb-2 block uppercase text-gray-500 font-bold">Birthday</label>
        <input type="date" name="birthday" id="birthday" placeholder="Turtle's birthday" value="{{ old('birthday', $tortuga->birthday->format('Y-m-d')) }}" class="border p-3 w-full rounded-lg" />
        @error('birthday')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-4">
        <label for="image" class="mb-2 block uppercase text-gray-500 font-bold">Image</label>
        <input type="file" name="image" id="image" class="border p-3 w-full rounded-lg @error('image') border-red-500 @enderror" />
        @error('image')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror

        @if($tortuga->image)
        <img src="{{ asset('storage/' . $tortuga->image) }}" alt="Turtle image" class="mt-4 w-32 h-32 object-cover rounded-full">
        @endif
      </div>

      <input type="submit" value="Update Turtle" class="bg-green-600 hover:bg-green-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg mt-5" />
    </form>
  </div>
</div>
@endsection
