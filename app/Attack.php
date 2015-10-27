<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attack extends Model
{
    protected $table = 'attacks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'type', 'categorie', 'precision', 'puissance', 'pp'];

    public function type(){
    	return $this->hasOne('App\Type');
    }
}
