<?php

namespace App\Policies;

use App\Models\Tortuga;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class TortugaPolicy
{
  /**
   * Determine whether the user can view any models.
   */
  public function viewAny(User $user): bool
  {
    return true;
  }

  /**
   * Determine whether the user can view the model.
   */
  public function view(User $user, Tortuga $tortuga): bool
  {
    return true;
  }

  /**
   * Determine whether the user can create models.
   */
  public function create(User $user): bool|Response
  {
    if ($user->hasRole('admin')) {
      return true;
    }
    return Response::deny('You are not alloweed to register information about turtles.');
  }

  /**
   * Determine whether the user can update the model.
   */
  public function update(User $user, Tortuga $tortuga): bool|Response
  {
    if ($user->hasRole('admin')) {
      return true;
    }
    return Response::deny('You are not alloweed to modify information about turtles.');
  }

  /**
   * Determine whether the user can delete the model.
   */
  public function delete(User $user, Tortuga $tortuga): bool|Response
  {
    if ($user->hasRole('admin')) {
      return true;
    }
    return Response::deny('You are not alloweed to delete information about turtles.');
  }

  /**
   * Determine whether the user can restore the model.
   */
  public function restore(User $user, Tortuga $tortuga): bool
  {
    return false;
  }

  /**
   * Determine whether the user can permanently delete the model.
   */
  public function forceDelete(User $user, Tortuga $tortuga): bool
  {
    return false;
  }
}
