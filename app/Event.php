<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Event extends Model
{
    protected $fillable = [
        'name', 'description','thumbnail', 'time', 'date','place','user_id','group_id','created_at'
    ];

    public function getDateAttribute()
	{
	    return is_null($this->attributes['date']) ? null : date('F d Y', strtotime($this->attributes['date']));
	}
	
}
