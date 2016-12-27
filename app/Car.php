<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function informations ()
    {
      return $this->hasMany(Information::class);
    }
}
