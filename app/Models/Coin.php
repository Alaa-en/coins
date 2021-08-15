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

      public function getLogoAttribute($logo)
    {
        return asset($logo);
    }
}
