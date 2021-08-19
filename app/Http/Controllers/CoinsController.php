<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Models\Coin;
use Auth;
use App\Traits\offerTrait;




class CoinsController extends Controller
{


    use offerTrait;

    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }

    public function index()
    {
        $coins=Coin::all();
        return view('front.index')->with('coins', $coins);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::User()){
            return view('front.coins.addCoin');
        }else{
            return redirect('login');
        }
    }


    public function store(Request $request)
    {
        $input=$request->all();
        $input['user_id'] = auth()->user()->id ;

        $file_name = $this->saveImage($request->file('logo'),'images/coins' );
        $input['logo'] = $file_name;

        Coin::Create($input);
       return  redirect(route('coin.add'))->with('success', 'your coin will be reviewd by the admin');
    }


    public function show()
    {
        $coins = Coin::where('user_id', auth()->user()->id)->get();
        return view('front.coins.mycoins')->with('coins', $coins);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
