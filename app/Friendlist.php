<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friendlist extends Model
{
    protected $table = 'friendlists';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'user_friend_id'];

    public function user(){
    	return $this->hasOne('App\User');
    }
}
