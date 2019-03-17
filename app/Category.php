<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Shop;
class Category extends Model
{
	protected $table = 'categories';
    public function getCategoryNameAttribute()
	{
	    return $this->attributes['name'];
	}

	public function shop()
    {
    	return $this->hasOne('App\Category', 'category_id', 'id'); 
        return $this->belongsToMany(Shop::class);
    }
}
