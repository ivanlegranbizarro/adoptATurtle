<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdopcionRequest;
use App\Http\Requests\UpdateAdopcionRequest;
use App\Models\Adopcion;
use App\Models\Tortuga;
use Illuminate\Support\Facades\Gate;
use Illuminate\View\View;


class AdopcionController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index(): View
  {
    if (auth()->user()->role == 'admin') {
      $adopciones = Adopcion::all();
    } else {
      $adopciones = Adopcion::where('user_id', auth()->user()->id)->get();
    }
    return view('layouts.adopciones.index', compact('adopciones'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create(Tortuga $tortuga): View
  {
    return view('layouts.adopciones.create', compact('tortuga'));
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreAdopcionRequest $request)
  {
    $data = $request->validated();
    $data = array_merge($data, ['user_id' => auth()->user()->id]);

    Adopcion::create($data);

    $tortuga = Tortuga::find($request->tortuga_id);
    $tortuga->is_adopted = true;
    $tortuga->save();

    return redirect()->route('tortugas.index')->with('success', 'Your adoption has been registered!');
  }

  /**
   * Display the specified resource.
   */
  public function show(Adopcion $adopcion)
  {
    Gate::authorize('view', $adopcion);
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Adopcion $adopcion)
  {
    Gate::authorize('update', $adopcion);
    $tortuga = $adopcion->tortuga;
    return view('layouts.adopciones.edit', compact('adopcion', 'tortuga'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateAdopcionRequest $request, Adopcion $adopcion)
  {
    $data = $request->validated();
    $adopcion->update($data);

    return redirect()->route('adopciones.index')->with('success', 'Adoption updated successfully');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Adopcion $adopcion)
  {
    Gate::authorize('delete', $adopcion);

    $tortuga = $adopcion->tortuga;
    $tortuga->is_adopted = false;
    $tortuga->save();
    $adopcion->delete();

    return \redirect()->back()->with('success', 'Adoption deleted successfully');
  }
}
