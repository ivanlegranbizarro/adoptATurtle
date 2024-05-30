@extends('layouts.base')

@section('title', 'Adoption Index')

@section('content')
<div class="container mx-auto mt-8">
  @if ($adopciones->count() > 0)
  <div class="overflow-x-auto">
    <table class="min-w-full bg-white border">
      <thead class="bg-gray-200">
        <tr>
          <th class="py-2 px-4 border">User</th>
          <th class="py-2 px-4 border">Turtle</th>
          <th class="py-2 px-4 border">Adoption Date</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($adopciones as $adopcion)
        <tr>
          <td class="py-2 px-4 border">{{ $adopcion->user->name }}</td>
          <td class="py-2 px-4 border">{{ $adopcion->tortuga->name }}</td>
          <td class="py-2 px-4 border">{{ $adopcion->created_at->format('d M Y') }}</td>
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
