<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
class Userinfo extends Model
{

	protected $fillable = [
        'first_name', 'middle_name','last_name', 'contact', 'birthdate','gender', 'address','college_school', 'high_school', 'biography',
        'civil_status', 'fb_link', 'twitter_link','instagram_link', 'linkedin_link', 'work'
    ];

    protected $appends = ['user_profile','name','birthdate_formatted'];
    

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getUserProfileAttribute(){
        $image = $this->gender == "Female" ? "/default_img/2.jpg" : "/default_img/4.jpg";
        return $this->profile ?: $image;
    }

    public function getNameAttribute(){
        return $this->first_name . " " . $this->last_name;
    }

    public function getBirthdateFormattedAttribute(){
        return $this->birthdate ? date('D, M j, Y',strtotime($this->birthdate)) : "";
    }

    



    
}
