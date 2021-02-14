<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Illuminate\Validation\Rule;

class ProfilesController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', [
            'user'=>$user,
            'tweets'=>$user->tweets()->paginate(3)
        ]);
    }


    public function edit(User $user)
    {
        $this->authorize('edit',$user);

        return view('profiles.edit',compact('user'));
    }
    public function update(User $user){

        $attributes = request()->validate([
            'avatar'=>['file'],
            'bgImg'=>['file'],
            'username' => ['string','required','alpha_dash','max:255',Rule::unique('users','username',)->ignore($user)],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255',Rule::unique('users','email')->ignore($user)],
            'password' => ['required', 'string', 'min:8', 'max:255'],

        ]);

        $attributes['password'] = current_user()->setPassword(request('password')); //

        if(request('avatar')){
            $attributes['avatar'] = request('avatar')->store('avatars'); // store in storage/avatars and return path of image | linked in public directory
        }

        if(request('bgImg')){
            $attributes['bgImg'] = request('bgImg')->store('bgImages'); // store in storage/bgImages and return path of bgImage | linked in public directory
        }

        $user->update($attributes);

        return redirect($user->path());

    }

}
