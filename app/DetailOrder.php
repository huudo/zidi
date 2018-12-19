<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailOrder extends Model
{
    public function orders(){
    	return $this->belongsTo('App\Order','id_order');
    }
    public function product(){
    	return $this->belongsTo('App\Product','id_product');
    }
}
