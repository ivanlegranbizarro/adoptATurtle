<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTortugaRequest;
use App\Http\Requests\UpdateTortugaRequest;
use App\Models\Tortuga;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

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
    return view('layouts.tortugas.create');
  }

  /**
   * Store a newly created resource in storage.
   */
  public function store(StoreTortugaRequest $request): RedirectResponse
  {
    $data = $request->validated();

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
    return view('layouts.tortugas.edit', compact('tortuga'));
  }

  /**
   * Update the specified resource in storage.
   */
  public function update(UpdateTortugaRequest $request, Tortuga $tortuga): RedirectResponse
  {
    $data = $request->validated();

    $tortuga->update($data);

    return redirect()->route('tortugas.index')->with('success', 'You have successfully updated information about a turtle!');
  }

  /**
   * Remove the specified resource from storage.
   */
  public function destroy(Tortuga $tortuga): RedirectResponse
  {
    $tortuga->delete();

    return redirect()->route('tortugas.index')->with('success', 'You have successfully deleted information about a turtle!');
  }
}
