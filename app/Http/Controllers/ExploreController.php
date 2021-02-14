<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;


class ExploreController extends Controller
{

    public function __invoke(){

        $filteredUsers = User::all()->filter(function ($value, $key) {
            return $value->id != current_user()->id;
        });

        return view('explore',[
            'users'=>User::where('id','!=',current_user()->id)->paginate(3)
        ]);

    }
}
