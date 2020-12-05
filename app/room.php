<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class room extends Model
{
  protected $table = 'room';

  public function students()
  {
    return $this->belongsToMany(student::class)->withTimestamps();
  }
  public function teachers()
  {
    return $this->belongsToMany(teacher::class)->withTimestamps();
  }
  public function subjects()
{
  return $this->belongsToMany(subject::class)->withTimestamps();
}
}
