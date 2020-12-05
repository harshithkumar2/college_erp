<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subject extends Model
{
    protected $table = 'subject';

    public function room()
  {
    return $this->belongsToMany(room::class)->withTimestamps();
  }
}
