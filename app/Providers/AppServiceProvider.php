<?php

namespace App\Providers;

use App\Models\Tortuga;
use App\Models\Adopcion;
use App\Policies\TortugaPolicy;
use App\Policies\AdopcionPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
  /**
   * Register any application services.
   */
  public function register(): void
  {
  }

  /**
   * Bootstrap any application services.
   */
  public function boot(): void
  {
    Gate::policy(Tortuga::class, TortugaPolicy::class);
    Gate::policy(Adopcion::class, AdopcionPolicy::class);
  }
}
