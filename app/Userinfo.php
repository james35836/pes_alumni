<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User;
class Userinfo extends Model
{

	protected $fillable = [
        'name', 'first_name', 'middle_name','last_name', 'contact', 'birthdate','gender', 'current_address', 'permanent_address','college_school', 'college_graduated', 'high_school', 'high_graduated', 'biography',
        'civil_status', 'fb_link', 'twitter_link','instagram_link', 'linkedin_link', 'work','work_position',
    ];

    protected $appends = ['user_profile'];
    

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function getUserProfileAttribute(){
        if($this->gender == "Male")
        {
            return $this->profile ? $this->profile : "/backend/img/student/4.jpg";
        }
        else
        {
            return $this->profile ? $this->profile : "/backend/img/student/2.jpg";
        }
        // return $this->profile;
    }

    
}
