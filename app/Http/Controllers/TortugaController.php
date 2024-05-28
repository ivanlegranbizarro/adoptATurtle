<?php

namespace App\Http\Controllers;

use App\Models\Tortuga;
use Illuminate\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreTortugaRequest;
use App\Http\Requests\UpdateTortugaRequest;

class TortugaController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index(): View
  {
    return view('layouts.tortugas.index');
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create(): View
  {

    Gate::authorize('create', Tortuga::class);
    return view('layouts.tortugas.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreTortugaRequest $request): RedirectResponse
  {
    $data = $request->validated();

    if ($request->hasFile('image')) {
      $fileName = time() . '.' . $request->file('image')->getClientOriginalExtension();
      $path = $request->file('image')->storeAs('public/images', $fileName);
      $data['image'] = '/storage/' . $path;
    }

    Tortuga::create($data);

    return redirect()->route('tortugas.index')->with('success', 'You have successfully added a new turtle!');
  }

  /**
   * Display the specified resource.
   */
  public function show(Tortuga $tortuga): View
  {
    return view('layouts.tortugas.show', compact('tortuga'));
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Tortuga $tortuga): View
  {
    Gate::authorize('update', $tortuga);
    return view('layouts.tortugas.edit', compact('tortuga'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateTortugaRequest $request, Tortuga $tortuga): RedirectResponse
  {
    $data = $request->validated();

    if ($request->hasFile('image')) {

      if ($tortuga->image) {
        Storage::delete(str_replace('/storage/', 'public/', $tortuga->image));
      }

      $fileName = time() . '.' . $request->file('image')->getClientOriginalExtension();
      $path = $request->file('image')->storeAs('public/images', $fileName);
      $data['image'] = '/storage/' . $path;
    }

    $tortuga->update($data);


    return redirect()->route('tortugas.index')->with('success', 'You have successfully updated information about a turtle!');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Tortuga $tortuga): RedirectResponse
  {
    Gate::authorize('delete', $tortuga);
    if ($tortuga->image) {
      Storage::delete(str_replace('storage/', 'public/', $tortuga->image));
    }

    $tortuga->delete();

    return redirect()->route('tortugas.index')->with('success', 'You have successfully deleted information about a turtle!');
  }
}
