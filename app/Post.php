<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'name', 'description','thumbnail', 'time', 'date','place','user_id','group_id','created_at','type'
    ];
    protected $appends = ['date_format','post_image'];

    public function getPostImageAttribute(){
        return $this->thumbnail ?: "/posts_img/default_image.png";
    }
    public function getDateFormatAttribute()
    {
        return is_null($this->attributes['created_at']) ? null : date('F d Y', strtotime($this->attributes['created_at']));
    }

    public function user(){
        return $this->belongsTo(User::class)->with('userInfo');
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function scopeOrderBy($query){
        return $query->orderBy('id','DESC');
    }
	
}

