<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coin;
use App\Models\Coins_voting;
use App\Models\Guest_voting;
use Exception;



class CoinsVotingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request , $id)
    {
        $coins = Coin::find($id);

        if(auth()->user()){
            try {
                Coins_voting::create([
                    'coin_id'=>$coins->id,
                    'user_id'=>$coins->user_id,
                 ]);
            }
            catch (exception $e) {
                \session()->flash('danger','you have voting before');
                return redirect()->back();
            }
           
        }else{
            try {
                Guest_voting::create([
                    'coin_id'=>$coins->id,
                    'ip_adress'=>$request->ip(),
                 ]);
            }
            catch (exception $e) {
                \session()->flash('danger','you have voting before');
                return redirect()->back();
            }
           
        }

        
         return redirect(route('home'));

          
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
