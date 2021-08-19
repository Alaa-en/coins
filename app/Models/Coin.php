<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Coin extends Model
{

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name' , 'user_id' , 'binance_Smart_Chain' ,'symbol',
        'ethereum','description' , 'solana' , 'polygon','logo' ,
        'price','website' ,'market_cap','telegram','launch_date','twitter','presale','additional_info'

      ];

      public function users(){
        return $this->belongsToMany('App\User', 'coins_votings','coin_id' , 'user_id');
    }

    public function coinsVoting(){
        return $this->hasMany(Coins_voting::class);
    }
    public function guestVoting(){
        return $this->hasMany(Guest_voting::class);
    }


}
