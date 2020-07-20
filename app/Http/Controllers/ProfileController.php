<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    //
    public function show(User $user) 
    {
        return view('profiles.show', [
            'user' => $user,
            'posts' => $user->posts()->withLikes()->paginate(50),
        ]);
    }

    public function edit(User $user)
    {
        return view('profiles.edit', compact('user'));
    }
    
    public function update(User $user)
    {
        $attributes = request()->validate([

            'name'=> ['string', 'required', 'max:255'],
            'avatar'=>['file'],
            'email'=> ['string', 'required', 'email', 'max:255'],
            'password'=>['string', 'required', 'confirmed']
        ]);

        if(request('avatar')){

        $attributes['avatar'] = request('avatar')->store('avatars');

        }

        $user->update($attributes);

        return redirect($user->path());
    }



    
}

