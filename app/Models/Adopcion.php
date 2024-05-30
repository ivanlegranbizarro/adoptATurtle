<?php

namespace App\Models;

use App\Models\Tortuga;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Adopcion extends Model
{
  use HasFactory;


  protected $fillable = [
    'tortuga_id',
    'motivation',
  ];


  public function tortuga()
  {
    return $this->belongsTo(Tortuga::class);
  }


  public function user()
  {
    return $this->belongsTo(User::class);
  }
}
