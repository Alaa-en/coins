<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoinsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('coins', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            $table->string('binance_Smart_Chain');
            $table->string('symbol');
            $table->string('ethereum');
            $table->string('description');
            $table->string('solana');
            $table->string('polygon');
            $table->string('logo');
            $table->double('price');
            $table->string('website');
            $table->string('market_cap');
            $table->string('telegram');
            $table->string('launch_date');
            $table->string('twitter');
            $table->bigInteger('presale')->default(0);
            $table->string('additional_info');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('coins');
    }
}
