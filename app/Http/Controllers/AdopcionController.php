<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdopcionRequest;
use App\Http\Requests\UpdateAdopcionRequest;
use App\Models\Adopcion;
use Illuminate\View\View;

class AdopcionController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index(): View
  {
    $adopciones = Adopcion::all();
    return view('adopciones.index', compact('adopciones'));
  }

  /**
   * Show the form for creating a new resource.
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreAdopcionRequest $request)
  {
    //
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
