<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable,followable; // follow methods in followable trait

    protected $fillable = [
       'name', 'email', 'password','username','avatar','bgImg'
    ];


    protected $hidden = [
        'password', 'remember_token',
    ];


    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function getProfileImages($selection)
    {
        if($selection === "avatar") {
            $path = $this->avatar ? asset($this->avatar) : asset('avatars/default-avatar.jpg');
            return $path;
        }
        elseif($selection === "bgImg"){
            $path = $this->bgImg ? asset($this->bgImg) : asset('bgImages/default-profile-banner.jpg');
            return $path;
        }
    }




    public function timeline(){
        $ids = $this->follows()->pluck('id'); //takip edilen kisilerin unique idleri
        $ids->push($this->id);//ids arrayine pushlaz
        return  Tweet::withLikes()->whereIn('user_id',$ids)->latest()->paginate(4); // Tweet modelinde user_id ids olanlari dondur
    }

    public function tweets(){
        return $this->hasMany(Tweet::class)->withLikes()->latest();
    }

    public function setPassword($password){
        return $this->attributes['avatar'] = bcrypt($password);
    }


    public function getRouteKeyName()
    {
        return 'username';
    }

    public function path(){
        return route('profile',$this->username);
    }

    public function likes(){
        return $this->hasMany(Like::class);
    }




}
