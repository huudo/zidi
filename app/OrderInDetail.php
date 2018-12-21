<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderInDetail extends Model
{
    public function oderIns(){
    	return $this->belongsTo('App\OrderIn','id_order');
    }
}
