<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table = 'stud';

    //public function teachers()
    //{
    //  return $this->hasMany('App\teacher', 'room_no', 'room_no');
    //}

    public function rooms()
  {
    return $this->belongsToMany(room::class)->withTimestamps();
  }
}
