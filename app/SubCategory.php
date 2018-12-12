<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    function categories(){
    	return $this->belongsTo('App\Category');
    }
    function products(){
    	return $this->hasMany('App\Product');
    }
}
