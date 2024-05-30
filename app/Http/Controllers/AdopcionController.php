<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdopcionRequest;
use App\Http\Requests\UpdateAdopcionRequest;
use App\Models\Adopcion;
use App\Models\Tortuga;
use Illuminate\View\View;

//TODO Implementar las policies

class AdopcionController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index(): View
  {
    $adopciones = Adopcion::all();
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
    $adopcion = Adopcion::create([
      'tortuga_id' => $request->tortuga_id,
      'user_id' => auth()->user()->id,
      'motivation' => $request->motivation,
    ]);

    if ($adopcion) {
      $tortuga = Tortuga::find($request->tortuga_id);
      $tortuga->is_adopted = true;
      $tortuga->save();
    }

    return redirect()->route('tortugas.index')->with('success', 'Adopción creada exitosamente.');
  }

  /**
   * Display the specified resource.
   */
  public function show(Adopcion $adopcion)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   */
  public function edit(Adopcion $adopcion)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateAdopcionRequest $request, Adopcion $adopcion)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Adopcion $adopcion)
  {
    //
  }
}
