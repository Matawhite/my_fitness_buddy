<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    public function nutrients()
    {
      return $this->hasMany('App\Nutrients');
    }
}
