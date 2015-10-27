<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    protected $table = 'pokemons';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'hp', 'attack', 'defense', 'special_attack', 'special_defense', 'speed', 'type_1', 'type_2', 'image_front', 'image_back'];

    public function types() {
    	return $this->hasMany('App\Type');
    }

}
