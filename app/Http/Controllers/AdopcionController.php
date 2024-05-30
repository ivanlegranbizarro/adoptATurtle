<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdopcionRequest;
use App\Http\Requests\UpdateAdopcionRequest;
use App\Models\Adopcion;
use App\Models\Tortuga;
use Illuminate\View\View;

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
    Adopcion::create([
      'tortuga_id' => $request->tortuga_id,
      'user_id' => auth()->id(),
      'motivation' => $request->motivation,
    ]);

    return redirect()->route('adopciones.index')->with('success', 'Adopción creada exitosamente.');
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
