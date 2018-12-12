<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    function subcategories(){
    	return $this->hasMany('App\SubCategory');
    }
}
