<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pokemons', function ($table) {
            $table->foreign('type_1')->references('id')->on('types');
            $table->foreign('type_2')->references('id')->on('types');
        });

        Schema::table('teams', function ($table) {
            $table->foreign('pokemon_1')->references('id')->on('pokemons');
            $table->foreign('pokemon_2')->references('id')->on('pokemons');
            $table->foreign('pokemon_3')->references('id')->on('pokemons');
            $table->foreign('pokemon_4')->references('id')->on('pokemons');
            $table->foreign('pokemon_5')->references('id')->on('pokemons');
            $table->foreign('pokemon_6')->references('id')->on('pokemons');
            $table->foreign('atk_1_pokemon_1')->references('id')->on('attacks');
            $table->foreign('atk_1_pokemon_2')->references('id')->on('attacks');
            $table->foreign('atk_1_pokemon_3')->references('id')->on('attacks');
            $table->foreign('atk_1_pokemon_4')->references('id')->on('attacks');
            $table->foreign('atk_1_pokemon_5')->references('id')->on('attacks');
            $table->foreign('atk_1_pokemon_6')->references('id')->on('attacks');
            $table->foreign('atk_2_pokemon_1')->references('id')->on('attacks');
            $table->foreign('atk_2_pokemon_2')->references('id')->on('attacks');
            $table->foreign('atk_2_pokemon_3')->references('id')->on('attacks');
            $table->foreign('atk_2_pokemon_4')->references('id')->on('attacks');
            $table->foreign('atk_2_pokemon_5')->references('id')->on('attacks');
            $table->foreign('atk_2_pokemon_6')->references('id')->on('attacks');
            $table->foreign('atk_3_pokemon_1')->references('id')->on('attacks');
            $table->foreign('atk_3_pokemon_2')->references('id')->on('attacks');
            $table->foreign('atk_3_pokemon_3')->references('id')->on('attacks');
            $table->foreign('atk_3_pokemon_4')->references('id')->on('attacks');
            $table->foreign('atk_3_pokemon_5')->references('id')->on('attacks');
            $table->foreign('atk_3_pokemon_6')->references('id')->on('attacks');
            $table->foreign('atk_4_pokemon_1')->references('id')->on('attacks');
            $table->foreign('atk_4_pokemon_2')->references('id')->on('attacks');
            $table->foreign('atk_4_pokemon_3')->references('id')->on('attacks');
            $table->foreign('atk_4_pokemon_4')->references('id')->on('attacks');
            $table->foreign('atk_4_pokemon_5')->references('id')->on('attacks');
            $table->foreign('atk_4_pokemon_6')->references('id')->on('attacks');
            $table->foreign('atk_5_pokemon_1')->references('id')->on('attacks');
            $table->foreign('atk_5_pokemon_2')->references('id')->on('attacks');
            $table->foreign('atk_5_pokemon_3')->references('id')->on('attacks');
            $table->foreign('atk_5_pokemon_4')->references('id')->on('attacks');
            $table->foreign('atk_5_pokemon_5')->references('id')->on('attacks');
            $table->foreign('atk_5_pokemon_6')->references('id')->on('attacks');
            $table->foreign('atk_6_pokemon_1')->references('id')->on('attacks');
            $table->foreign('atk_6_pokemon_2')->references('id')->on('attacks');
            $table->foreign('atk_6_pokemon_3')->references('id')->on('attacks');
            $table->foreign('atk_6_pokemon_4')->references('id')->on('attacks');
            $table->foreign('atk_6_pokemon_5')->references('id')->on('attacks');
            $table->foreign('atk_6_pokemon_6')->references('id')->on('attacks');
        });

        Schema::table('attacks', function ($table) {
            $table->foreign('type')->references('id')->on('types');
        });

        Schema::table('attacks_pokemons', function ($table) {
            $table->foreign('id_atk')->references('id')->on('attacks');
            $table->foreign('id_pokemon')->references('id')->on('pokemons');
        });

        Schema::table('friendlists', function ($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('user_friend_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pokemons', function (Blueprint $table) {
            //
        });
    }
}
