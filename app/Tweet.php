<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use LikableStatus;

    protected $fillable = [
        'body',
        'user_id'
    ];

    public  function user(){
        return $this->belongsTo(User::class);
    }


}
