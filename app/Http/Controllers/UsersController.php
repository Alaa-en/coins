<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
class UsersController extends Controller
{
    public function users()
    {
        $users = User::all();
        return view('front.users.users')->with('users', $users);
    }


    public function index()
    {
        //
    }


    public function create()
    {
        return view('front.users.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' =>'required',
            'email' =>'required',
            'password' =>'required',

        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect()->route('users');
    }


    public function show($id)
    {
        //
    }


    public function edit()
    {
        $user = User::where('id', auth()->user()->id)->first();
        return view('front.users.edit')->with('user', $user);
    }




    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $this->validate($request, [
            'name' =>'required',
            'email' =>'required',
            'password' =>'required',

        ]);
        $user->name = $request->name;
        $user->email = $request->email;

        if($request->has('password')){
            $user->password = Hash::make($request->password);
        }
        $user->save();

        return redirect()->route('users');


    }

    public function editProfile()
    {
        $user = User::where('id', auth()->user()->id)->first();
        return view('front.users.editProfile')->with('user', $user);
    }


    public function updateProfile(Request $request, $id)
    {
        $user = User::find($id);

        $this->validate($request, [
            'name' =>'required',
            'email' =>'required',
            'password' =>'required',

        ]);
        $user->name = $request->name;
        $user->email = $request->email;

        if($request->has('password')){
            $user->password = Hash::make($request->password);
        }
        $user->save();

        return redirect()->route('home');


    }


    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        $user->save();
        return redirect()->back();
    }
}
