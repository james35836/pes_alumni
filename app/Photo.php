<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'name', 'description','album_id'
    ];


    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
