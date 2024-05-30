<?php

namespace App\Policies;

use App\Models\Adopcion;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class AdopcionPolicy
{
  /**
   * Determine whether the user can view any models.
   */
  public function viewAny(User $user): bool|Response
  {
    if ($user->role == 'admin') {
      return true;
    }
    return Response::deny('You are not alloweed to check information about adoptions.');
  }

  /**
   * Determine whether the user can view the model.
   */
  public function view(User $user, Adopcion $adopcion): bool|Response
  {
    if ($user->role == 'admin') {
      return true;
    }
    return Response::deny('You are not alloweed to check information about adoptions.');
  }

  /**
   * Determine whether the user can create models.
   */
  public function create(User $user): bool|Response
  {
    return \auth()->check();
  }

  /**
   * Determine whether the user can update the model.
   */
  public function update(User $user, Adopcion $adopcion): bool|Response
  {
    if ($user->role == 'admin') {
      return true;
    }
    return Response::deny('You are not alloweed to modify information about adoptions.');
  }

  /**
   * Determine whether the user can delete the model.
   */
  public function delete(User $user, Adopcion $adopcion): bool|Response
  {
    if ($user->role == 'admin') {
      return true;
    }
    return Response::deny('You are not alloweed to delete information about adoptions.');
  }

  /**
   * Determine whether the user can restore the model.
   */
  public function restore(User $user, Adopcion $adopcion): bool
  {
    return false;
  }

  /**
   * Determine whether the user can permanently delete the model.
   */
  public function forceDelete(User $user, Adopcion $adopcion): bool
  {
    return false;
  }
}
