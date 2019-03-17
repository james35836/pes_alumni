<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
class Shop extends Model
{
	protected $table = 'shops';
    protected $fillable = [
        'name', 'colors','sizes', 'discount',
        'thumbnail_1', 'thumbnail_2','description', 'category_id','price'
    ];

    public function category()
    {
    	return $this->belongsTo(Category::class, 'category_id');
    	return $this->hasOne('App\Category', 'category_id', 'id'); 
        return $this->belongsToMany(Category::class);
    }
}
	