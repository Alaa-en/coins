<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Coin;
use App\User;
use Auth;
class CoinsController extends Controller
{

    public function index()
    {
        //
    }
    public function new_coins()
    {
        $coins = Coin::where('status', 'new')->get();
        return view('front.users.new_coins',compact('coins'));
    }


    public function accept_coin($id)
    {
        $coin = Coin::find($id);
        $coin->status = 'accepted';
        $coin->save();
        return redirect()->back();
    }


    public function reject_coin($id)
    {
        $coin = Coin::find($id);
        $coin->status = 'rejected';
        $coin->save();
        return redirect()->back();
    }


    public function promoted($id, $type)
    {
        $coin = Coin::find($id);
        $coin->promoted = $type;
        $coin->save();
        return redirect()->back();
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show()
    {
        $coins = Coin::all();
        return view('front.coins.show')->with('coins', $coins);
    }

    public function user_conins($id)
    {
        $user_data = User::where('id',$id)->first();
        $coins = Coin::where('user_id', $id)->get();
        return view('front.users.user_coins', compact('coins', 'user_data'));
    }



    public function details($id)
    {
        $coins = Coin::find($id);
        return view('front.coins.details')->with('coins', $coins);
    }


    public function edit($id)
    {
        $coin = Coin::find($id);
        return view('front.coins.edit')->with('coin', $coin);
    }


    public function update(Request $request, $id)
    {
        $coin = Coin::find($id);
        if ($request->hasFile('logo')) {

            $request->validate([
                'logo' => 'required|image'
            ]);

            $logo = $request->logo;
            $logo_new_name = time(). '.' .$logo->getClientOriginalExtension();
            $logo->move('images/coins/', $logo_new_name);

            $coin->logo = 'images/coins/'.$logo_new_name;
        }

        $coin->name = $request->name;
        $coin->price = $request->price;
        $coin->save();
        return redirect()->route('mycoins', Auth::user()->id);

    }

    public function destroy($id)
    {
        $coin = Coin::find($id);
        $coin->delete();
        $coin->save();
        return redirect()->route('coins.show');
    }
}
