<?php

use App\Models\Tortuga;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('adopcions', function (Blueprint $table) {
      $table->id();
      $table->foreignIdFor(User::class)->constrained()->onDelete('cascade')->onUpdate('cascade')->nullable(false);
      $table->foreignIdFor(Tortuga::class)->constrained()->onDelete('cascade')->onUpdate('cascade')->nullable(false);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('adopcions');
  }
};
