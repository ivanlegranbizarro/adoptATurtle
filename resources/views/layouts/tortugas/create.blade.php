@extends('layouts.base')

@section('title', 'Register information about a turtle')

@section('content')
<div class="md:flex justify-center">
  <div class="bg-white shadow-xl rounded-lg p-6">
    <turbo-frame id="turbo-frame-create">
      <form method="POST" action="{{ route('tortugas.store') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-4">
          <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">Name</label>
          <input type="text" name="name" id="name" placeholder="Turtle name" value="{{ old('name') }}" class="border p-3 w-full rounded-lg" required minlength="2" />
          @error('name')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-4">
          <label for="birthday" class="mb-2 block uppercase text-gray-500 font-bold">Birthday</label>
          <input type="date" name="birthday" id="birthday" placeholder="Turtle's birthday" value="{{ old('birthday') }}" class="border p-3 w-full rounded-lg" required />
          @error('birthday')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        <div class="mb-4">
          <label for="image" class="mb-2 block uppercase text-gray-500 font-bold">Image</label>
          <input type="file" name="image" id="image" class="border p-3 w-full rounded-lg" required accept="image/*" />
          )
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        <input type="submit" value="Create Turtle" class="bg-green-600 hover:bg-green-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg mt-5" />
      </form>
    </turbo-frame>
  </div>
</div>
@endsection
