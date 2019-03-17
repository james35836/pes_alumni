<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Officer extends Model
{
    protected $fillable = [
        'position', 'name', 'description','thumbnail', 'fb_link', 'linkedin_link','twitter_link',
    ];

    protected $appends = ['archived_status'];
    

    

    public function getArchivedStatusAttribute(){
        return $this->archived ? "Active" : "Removed";
    }

}
