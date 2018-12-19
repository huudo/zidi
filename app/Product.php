<?php

namespace App;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{	
	use Sluggable;
	use SluggableScopeHelpers;
	public function sluggable(){
		return [
			'slug' => [
				'source' => 'title'
			]
		];
	}
    function orders(){
    	return $this->belongsToMany('App\Order', 'order_product', 'product_id', 'order_id')->withTimestamps();
    }
    function sub_categories(){
    	return $this->belongsTo('App\SubCategory','subcategory_id');
    }
    function orderDetail(){
    	return $this->belongsTo('App\DetailOrder','id_product');
    }
}
