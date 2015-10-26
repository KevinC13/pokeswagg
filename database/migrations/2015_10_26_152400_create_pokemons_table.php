<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePokemonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pokemons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('hp');
            $table->integer('attack');
            $table->integer('defense');
            $table->integer('special_attack');
            $table->integer('special_defense');
            $table->integer('speed');
            $table->integer('type_1')->unsigned();
            $table->integer('type_2')->unsigned();
            $table->string('image_front');
            $table->string('image_back');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pokemons');
    }
}
