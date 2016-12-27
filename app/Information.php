<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $fillable = ['body'];

    public function Car ()
    {
      return $this->belongsTo(Car::class);
    }
}
