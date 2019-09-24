<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messeg extends Model

{
	protected $table='messegs';
    public $primaryKey ='id';
    public $timestamps =true;

    protected $with=['user'];
     public function user()
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
