<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Userinfo;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password','auth', 'access', 'status', 'group_id', 'pin_id', 'password','created_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $appends = ['user_status','user_registered','access_level'];
    

    public function getUserStatusAttribute(){
        return $this->status == 0 ? 'Need Approval' : "Active";
    }
    public function getUserRegisteredAttribute(){
        return date("F j, Y", strtotime($this->created_at));
    }

    public function getAccessLevelAttribute(){

        $access_level = "Member";

        if($this->access == 1){
            $access_level = "Reserve";
        }

        if($this->access == 2){
            $access_level = "Editor";
        }

        if($this->access == 3){
            $access_level = "Admin";
        }

        if($this->access == 4){
            $access_level = "Super Admin";
        }
        return $access_level;
    }
    

    public function identities() {
       return $this->hasMany('App\SocialIdentity');
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function pin()
    {
        return $this->belongsTo(Pin::class);
    }

    public function userinfo()
    {
        return $this->hasOne(Userinfo::class);
    }

    public function feed()
    {
        return $this->hasMany(Feed::class);
    }
}
