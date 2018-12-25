<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    function product(){
    	return $this->belongsTo('App\Product','id_product');
    }
}
