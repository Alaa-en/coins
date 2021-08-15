<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Coin;
class CoinsController extends Controller
{

    public function index()
    {
        //
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

    public function details($id)
    {
        $coins = Coin::find($id);
        return view('front.coins.details')->with('coins', $coins);
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
        $coin = Coin::find($id);
        $coin->delete();
        $coin->save();
        return redirect()->route('coins.show');
    }
}
