<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttacksPokemonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attacks_pokemons', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_atk')->unsigned();
            $table->integer('id_pokemon')->unsigned();
        });

        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('attacks_pokemons');
    }
}
