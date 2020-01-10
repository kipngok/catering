<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
      protected $fillable = [
      	'id','student_id','date','time','payment_mode','code','narrative','user_id'
      ];


	 public function student()
    {
        return $this->hasOne('App\Student', 'id', 'student_id');
    }
      


}
 