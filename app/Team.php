<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
     protected $table = 'teams';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'team_name', 'type_team', 'pokemon_1', 'pokemon_2', 'pokemon_3', 'pokemon_4', 'pokemon_5', 'pokemon_6', 'atk_1_pokemon_1', 'atk_1_pokemon_2', 'atk_1_pokemon_3', 'atk_1_pokemon_4', 'atk_1_pokemon_5', 'atk_1_pokemon_6', 'atk_2_pokemon_1', 'atk_2_pokemon_2', 'atk_2_pokemon_3', 'atk_2_pokemon_4', 'atk_2_pokemon_5', 'atk_2_pokemon_6', 'atk_3_pokemon_1', 'atk_3_pokemon_2', 'atk_3_pokemon_3', 'atk_3_pokemon_4', 'atk_3_pokemon_5', 'atk_3_pokemon_6', 'atk_4_pokemon_1', 'atk_4_pokemon_2', 'atk_4_pokemon_3', 'atk_4_pokemon_4', 'atk_4_pokemon_5', 'atk_4_pokemon_'];

    public function pokemon() {
    	return $this->hasMany('App\Pokemon');
    }
	public function user(){
    	return $this->belongsTo('App\User');
    }
}
