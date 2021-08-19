<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Coins_voting extends Model
{
    protected $fillable = ['user_id' , 'coin_id'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function coin(){
        return $this->belongsTo(Coin::class);
    }

}
