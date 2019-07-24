<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
	protected $fillable = [
        'key', 'quantity','product_id','created_at','size','color'
    ];

    protected $appends = ['date_format','sub_total'];

    public function getSubTotalAttribute(){
        return $this->price;
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }


    
}
