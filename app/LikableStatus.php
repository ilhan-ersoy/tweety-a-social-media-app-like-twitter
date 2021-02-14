<?php


namespace App;


use Illuminate\Database\Eloquent\Builder;

trait LikableStatus
{

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function scopeWithLikes(Builder $query){
        $query->leftJoinSub(
          'select tweet_id, sum(liked) likes, sum(!liked) dislikes from likes group by tweet_id',
            'likes',
            'likes.tweet_id',
            'tweets.id'
        );
    }

    public function isDislikedBy($user)
    {
        return (bool)$user->likes->where('tweet_id', $this->id)->where('liked', 0)->count();
    }

    public function like($user = null, $like = 1)
    {
        $this->likes()->updateOrCreate(
            [
                'user_id' => $user ? $user->id : auth()->id()
            ],
            [
                'liked' => $like
            ]
        );
    }

    public function dislike($user)
    {
        return $this->like($user, 0);
    }

    public function isLikedBy($user)
    {
        return (bool)$user->likes->where('tweet_id', $this->id)->where('liked', 1)->count();
    }
}
