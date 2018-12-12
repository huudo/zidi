<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    function orders(){
    	return $this->belongsToMany('App\Order', 'order_product', 'product_id', 'order_id')->withTimestamps();
    }
}
