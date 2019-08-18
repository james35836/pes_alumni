<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pin extends Model
{
    protected $fillable = [
        'code', 'status','created_at'
    ];


    public function user()
    {
        return $this->hasOne(User::class);
    }
}
