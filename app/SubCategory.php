<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    function categories(){
    	return $this->belongsTo('App\Category','category_id');
    }
    function products(){
    	return $this->hasMany('App\Product','subcategory_id');
    }
}
