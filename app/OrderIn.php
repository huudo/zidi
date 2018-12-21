<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderIn extends Model
{
    public function orderDetail(){
    	return $this->hasMany('App\OderInDetail','id_order');
    }
}
