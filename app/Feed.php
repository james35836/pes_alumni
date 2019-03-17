<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    protected $fillable = [
        'title', 'content', 'thumbnail','group_id', 'user_id', 'archived','created_at','updated_at',
    ];

}
