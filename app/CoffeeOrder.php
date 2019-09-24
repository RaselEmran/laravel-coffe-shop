<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CoffeeOrder extends Model
{
     protected $with=['user','plan'];
     public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }

     public function plan()
    {
        return $this->belongsTo(Plan::class,'plan_id','id');
    }
}
