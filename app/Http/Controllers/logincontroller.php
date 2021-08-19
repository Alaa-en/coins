<?php

namespace App\Http\Controllers;
use App\Models\Guest_voting;
use App\Models\Coins_voting;
use Illuminate\Http\Request;
use Exception;
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
        if(Auth::user()->active  ){
            if(Auth::user()->type == 'user'){
                $exists_coins =Guest_voting::where('ip_adress',$request->ip())->get();
                if(count($exists_coins) > 0 ){
                    foreach($exists_coins as $row){
                        Guest_voting::where('id',$row->id)->delete();
                        try{
                            Coins_voting::create([
                                'coin_id'=> $row->coin_id,
                                'user_id'=> auth()->user()->id
                            ]);
                        }
                        catch (exception $e) {
                            \session()->flash('danger','you have voting before');

                        }
                       

                    }
                    
                }


                    return redirect('/home');
            }
            elseif(Auth::user()->type == 'admin'){
                return redirect('/users');
            }
        }

        else{
            Auth::logout();
            session()->flash('error', 'Invalid Email address or Password');
            return redirect('/login');
        }

    }
     else {
        session()->flash('error', 'Invalid Email address or Password');
        return redirect('/login');
        }
}
}
