<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function informations ()
    {
      return $this->hasMany(Information::class);
    }

    public function addInformation(Information $information, $userID)
    {
      $information->user_id = $userID;

      return $this->informations()->save($information);
    }
}
