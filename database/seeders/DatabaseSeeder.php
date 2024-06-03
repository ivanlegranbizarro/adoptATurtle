<?php

namespace Database\Seeders;

use App\Models\Tortuga;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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

    $tortugas = [
      [
        'name' => 'Dylan el hermoso',
        'birthday' => '2023-01-01',
        'image' => 'img/dylanElHermoso.jpeg'
      ],
      [
        'name' => 'Jeremy Greenfield',
        'birthday' => '2020-01-01',
        'image' => 'img/JeremyGreenfield.jpg'
      ]
    ];

    foreach ($tortugas as $tortuga) {
      $this->createTortuga($tortuga);
    }
  }

  private function createTortuga(array $data)
  {
    Tortuga::create([
      'name' => $data['name'],
      'birthday' => $data['birthday'],
      'image' => Storage::url($data['image'])
    ]);
  }
}
