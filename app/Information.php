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

    public function user ()
    {
      return $this->belongsTo(User::Class);
    }

    public function from (User $user)
    {
      $this->user_id = $user->id;
    }
}
