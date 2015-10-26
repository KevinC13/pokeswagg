<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('team_name');
            $table->integer('type_team')->unsigned();
            $table->integer('pokemon_1')->unsigned();
            $table->integer('pokemon_2')->unsigned();
            $table->integer('pokemon_3')->unsigned();
            $table->integer('pokemon_4')->unsigned();
            $table->integer('pokemon_5')->unsigned();
            $table->integer('pokemon_6')->unsigned();
            $table->integer('atk_1_pokemon_1')->unsigned();
            $table->integer('atk_1_pokemon_2')->unsigned();
            $table->integer('atk_1_pokemon_3')->unsigned();
            $table->integer('atk_1_pokemon_4')->unsigned();
            $table->integer('atk_1_pokemon_5')->unsigned();
            $table->integer('atk_1_pokemon_6')->unsigned();
            $table->integer('atk_2_pokemon_1')->unsigned();
            $table->integer('atk_2_pokemon_2')->unsigned();
            $table->integer('atk_2_pokemon_3')->unsigned();
            $table->integer('atk_2_pokemon_4')->unsigned();
            $table->integer('atk_2_pokemon_5')->unsigned();
            $table->integer('atk_2_pokemon_6')->unsigned();
            $table->integer('atk_3_pokemon_1')->unsigned();
            $table->integer('atk_3_pokemon_2')->unsigned();
            $table->integer('atk_3_pokemon_3')->unsigned();
            $table->integer('atk_3_pokemon_4')->unsigned();
            $table->integer('atk_3_pokemon_5')->unsigned();
            $table->integer('atk_3_pokemon_6')->unsigned();
            $table->integer('atk_4_pokemon_1')->unsigned();
            $table->integer('atk_4_pokemon_2')->unsigned();
            $table->integer('atk_4_pokemon_3')->unsigned();
            $table->integer('atk_4_pokemon_4')->unsigned();
            $table->integer('atk_4_pokemon_5')->unsigned();
            $table->integer('atk_4_pokemon_6')->unsigned();
            $table->integer('atk_5_pokemon_1')->unsigned();
            $table->integer('atk_5_pokemon_2')->unsigned();
            $table->integer('atk_5_pokemon_3')->unsigned();
            $table->integer('atk_5_pokemon_4')->unsigned();
            $table->integer('atk_5_pokemon_5')->unsigned();
            $table->integer('atk_5_pokemon_6')->unsigned();
            $table->integer('atk_6_pokemon_1')->unsigned();
            $table->integer('atk_6_pokemon_2')->unsigned();
            $table->integer('atk_6_pokemon_3')->unsigned();
            $table->integer('atk_6_pokemon_4')->unsigned();
            $table->integer('atk_6_pokemon_5')->unsigned();
            $table->integer('atk_6_pokemon_6')->unsigned();
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
        Schema::drop('teams');
    }
}
