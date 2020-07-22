<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\User;

use Session;

class ProfileController extends Controller
{
    //
    public function show(User $user) 
    {
        return view('profiles.show', [
            'user' => $user,
            'posts' => $user->posts()->withLikes()->latest()->paginate(50)
        ]);

    }
     
    public function profileUpdate(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email'
        ]);

        $user = Auth::user();

        if($request->hasFile('avatar'))
        {
            $avatar = $request->avatar;
            $avatar_new_name = time() . $avatar->getClientOriginalName();
            $avatar->move('uploads/avatars', $avatar_new_name);
            $user->profile->avatar ='uploads/avatars' . $avatar_new_name;
            $user->profile()->save();
        }
         $user->name = $request->name;
         $user->email = $request->email;

         if($request->has('password'))
         {
             $user->password = bcrypt($request->password);

             $user->save();
             $user->profile()->save();
         }

         Session::flash('success', 'Account profile update');

         return redirect()->back();
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

