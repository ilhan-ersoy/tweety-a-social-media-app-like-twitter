<?php


namespace App;


trait followable
{

    public function follows()
    {
        return $this->belongsToMany(User::class, 'follows', 'user_id', 'following_user_id')->withTimestamps();
    }

    public function follow(User $user)
    {
        return $this->follows()->attach($user->id);
    }


    public function following(User $user){
        return $this->follows()->where('following_user_id',$user->id)->exists();
    }


    public function unfollow(User $user){
        return $this->follows()->detach($user->id);
    }

    public function followSelect(User $user){
        if($this->following($user)){
            $this->unfollow($user);
        }
        else{
            $this->follow($user);
        }
    }

}
