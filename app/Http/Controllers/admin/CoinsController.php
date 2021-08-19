<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Coin;
use App\User;
use Auth;
class CoinsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }





    public function request_delete()
    {
        $coins = Coin::where('delete_request', 'new')->get();
        return view('front.users.request_delete',compact('coins'));
    }

    public function new_request_delete($id)
    {
        $coin = Coin::find($id);
        $coin->delete_request = 'new';
        $coin->save();
        return redirect()->back()->with('success', 'Your request sent wait admin to approve ');
    }

    public function new_request_accept($id)
    {
        $coin = Coin::find($id);
        $coin->delete_request = 'null';
        $coin->delete();
        $coin->save();
        return redirect()->back();
    }

    public function new_request_reject($id)
    {
        $coin = Coin::find($id);
        $coin->delete_request = 'null';
        $coin->save();
        return redirect()->back();
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
        $coins = Coin::withTrashed()->get();
        return view('front.users.show')->with('coins', $coins);
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
