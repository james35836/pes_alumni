<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    protected $fillable = [
        'title', 'content', 'thumbnail','group_id', 'user_id', 'archived','created_at','updated_at',
    ];
    protected $appends = ['date_format'];

    public function getDateFormatAttribute()
	{
	    return is_null($this->attributes['created_at']) ? null : date('F d Y', strtotime($this->attributes['created_at']));
	}

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

}
