<?php

namespace App\Models;


use App\User
use App\Game;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    public function users(){
    	return $this->belongsTo(User::class,'user_id');
    }

    public function users_validator(){
    	return $this->belongsTo(User::class,'user_id_validator');
    }
    
    public function games(){
    	return $this->hasMany(Game::class,'game_id');
    }


}
