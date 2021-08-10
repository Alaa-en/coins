<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class logincontroller extends Controller
{
    public function login(Request $request)
{
    $this->validate($request, [
        'email' =>'required',
        'password' =>'required',

    ]);
    $credentials = $request->only('email', 'password');
    if (Auth::attempt($credentials)) {
        if(Auth::user()->active){
            return redirect('/home');
        }else{
            Auth::logout();
            session()->flash('error', 'Invalid Email address or Password');
            return redirect('/login');
        }
    } else {
        session()->flash('error', 'Invalid Email address or Password');
        return redirect('/login');
        }
}
}
