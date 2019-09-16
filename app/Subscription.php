<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
	protected $with=['plan'];
     public function plan()
    {
        return $this->belongsTo(Plan::class,'stripe_plan','stripe_plan');
    }
}
