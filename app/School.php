<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{
     protected $fillable = [
      	'id','name'
      ];
      public function student()
    {
        return $this->hasMany('App\Student', 'school_id', 'id');
    }
}
 