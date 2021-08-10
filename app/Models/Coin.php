<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    protected $fillable = [
        'name' , 'user_id' , 'binance_Smart_Chain' ,'symbol',
        'ethereum','description' , 'solana' , 'polygon','logo' , 
        'price','website' ,'market_cap','telegram','launch_date','twitter','presale','additional_info'
      
      ];
}
