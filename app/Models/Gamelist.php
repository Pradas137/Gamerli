<?php

namespace App\Models;

use App\Game;
use App\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gamelist extends Model
{
    use HasFactory;

protected $fillable = ['name','user_id'];


    public function games(){
    	return $this->belongsToMany(Game::class);
    }

    public function users(){
    	return $this->belongsTo(User::class,'user_id');
    }

}
