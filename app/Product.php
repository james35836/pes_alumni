<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'colors','price', 'sizes', 'discount','thumbnail','description','category_id','created_at'
    ];

    protected $appends = ['date_format','product_image','product_price'];

    public function getProductImageAttribute(){
        return $this->thumbnail ?: "/products_img/tshirt.jpg";
    }

    public function getProductPriceAttribute(){
        return number_format($this->price,2);
    }

    public function getDateFormatAttribute()
    {
        return is_null($this->attributes['created_at']) ? null : date('F d Y', strtotime($this->attributes['created_at']));
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

}
