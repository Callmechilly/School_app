<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Spatie\MediaLibrary\HasManyMedia;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class teacher extends Model implements HasMedia
{
  use HasFactory, InteractsWithMedia;
  protected $fillable = ['name'];

  public function media() : MorphMany
  {
    // return $this->morphMany(teacher_file::class,'teacher_id','id');
    return $this->morphMany(teacher_file::class, 'model');
  }
}
