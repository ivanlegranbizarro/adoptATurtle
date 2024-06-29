<?php

namespace App\Models;

use App\Models\Adopcion;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tortuga extends Model
{
  use HasFactory;



  protected $fillable = [
    'name',
    'comments',
    'birthday',
    'image',
  ];

  public function adopcion()
  {
    return $this->hasOne(Adopcion::class);
  }

  public function scopeNotAdopted($query)
  {
    return $query->where('is_adopted', false);
  }

  public function getAgeAttribute()
  {
    return Carbon::parse($this->attributes['birthday'])->age;
  }
}
