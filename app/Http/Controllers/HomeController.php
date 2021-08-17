<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('active');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */



    public function index()
    {
        return view('front.index');
    }





    public function change_active($id, $type)
    {
        $user = User::find($id);
        $user->active = $type;
        $user->save();
        return redirect()->back();
    }

    






}
