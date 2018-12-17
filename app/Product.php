<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    function orders(){
    	return $this->belongsToMany('App\Order', 'order_product', 'product_id', 'order_id')->withTimestamps();
    }
    function sub_categories(){
    	return $this->belongsTo('App\SubCategory','subcategory_id');
    }
}
