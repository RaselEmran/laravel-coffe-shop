<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $with =['coffee'];
    protected $fillable = [
        'name',
        'slug',
        'stripe_plan',
        'cost',
        'description'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

      public function coffee()
    {
        return $this->belongsTo(Coffee::class,'product','product_id');
    }
}
