<?php


namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);

        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');
        $phone = $request->input('phone');
        $birthday = $request->input('birthday');

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => bcrypt($password),
            'phone' => $phone,
            'birthday' => $birthday
        ]);

        if($user) {
            flash()->success("You have been registered successfully.");
        } else {
            flash()->error("Registration failed.");
        }

        return redirect()->route('register');
    }
}
