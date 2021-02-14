<?php

namespace App\Http\Controllers;

use App\Tweet;
use App\User;
use Illuminate\Http\Request;
class TweetsController extends Controller
{
    public function index()
    {
        return view('tweets.index',[
            'tweets'=>current_user()->timeline()
        ]);
    }

    public function store(){

        $attributes = request()->validate(['body'=>'required|max:255']);

        Tweet::create([
            'user_id'=>current_user()->id,
            'body'=>$attributes['body']
        ]);

        return redirect()->route('home');

    }

    public function deleteTweet($id){

        $tweet = Tweet::find($id);

        $this->authorize('deleteTweet',$tweet->user);

        $tweet->delete();

        return back();
    }

}
