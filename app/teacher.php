<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teacher extends Model
{
    protected $table = 'teacher';

    //public function room()
    //{
    //  return $this->hasMany('App\student', 'room_no', 'room_no');
  //  }

  public function room()
  {
    return $this->belongsToMany(room::class)->withTimestamps();
  }
}
