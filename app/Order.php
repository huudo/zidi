<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    function user(){
    	return $this->belongsTo('App\User');
    }
    function detailOrder(){
    	return $this->hasMany('App\DetailOrder','id_order');
    }
}
