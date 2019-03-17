<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stories extends Model
{
    protected $fillable = [
        'title', 'description','thumbnail', 'user_id'
    ];
}
