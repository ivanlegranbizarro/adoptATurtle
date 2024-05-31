@extends('layouts.base')

@section('title', 'Adoption Index')

@section('content')
<div class="container mx-auto mt-8">
  @if ($adopciones->count() > 0)
  <div class="overflow-x-auto">
    <table class="min-w-full bg-white border">
      <thead class="bg-gray-200">
        <tr>
          <th class="py-2 px-4 border text-center">User</th>
          <th class="py-2 px-4 border text-center">Turtle</th>
          <th class="py-2 px-4 border text-center">Adoption Date</th>
          <th class="py-2 px-4 border text-center">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($adopciones as $adopcion)
        <tr>
          <td class="py-2 px-4 border text-center">{{ $adopcion->user->name }}</td>
          <td class="py-2 px-4 border text-center">{{ $adopcion->tortuga->name }}</td>
          <td class="py-2 px-4 border text-center">{{ $adopcion->created_at->format('d M Y') }}</td>
          <td class="py-2 px-4 border text-center">
            <a href="{{ route('adopciones.edit', ['adopcion' => $adopcion->id]) }}" class="bg-blue-400 hover:bg-blue-500 text-white font-bold py-1 px-3 rounded transition-colors duration-200">Edit</a>
            <form action="{{ route('adopciones.destroy', $adopcion->id) }}" method="POST" style="display:inline;">
              @csrf
              @method('DELETE')
              <button type="submit" class="bg-red-200 hover:bg-red-300 text-white font-bold py-1 px-3 rounded transition-colors duration-200" onclick="return confirm('Are you sure you want to delete this adoption?')">Delete</button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  @else
  <p class="text-center text-gray-500">No turtle adoptions have been recorded yet.</p>
  @endif
</div>
@endsection
