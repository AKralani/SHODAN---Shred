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
        return view('profiles.show', compact('user'));
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

        
    
}

