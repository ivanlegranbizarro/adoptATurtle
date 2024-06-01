<?php

namespace Database\Seeders;

use App\Models\Tortuga;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run(): void
  {
    User::factory()->create([
      'name' => 'admin',
      'email' => 'admin@admin.com',
      'password' => Hash::make('password'),
      'role' => 'admin'
    ]);

    User::factory()->create([
      'name' => 'ruben',
      'email' => 'ruben@ruben.com',
      'password' => Hash::make('password'),
      'role' => 'user'
    ]);

    Tortuga::create([
      'name'=> 'Dylan el hermoso',
      'birthday' => '2023-01-01',
      'image'=> \asset('img/dylanElHermoso.jpeg')
    ]);

    Tortuga::create([
      'name'=> 'Jeremy Greenfield',
      'birthday' => '2020-01-01',
      'image'=> \asset('img/JeremyGreenfield.jpg')
    ]);
  }
}
