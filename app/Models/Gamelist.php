<?php

namespace App\Models;

use App\Models\Game;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gamelist extends Model
{
    use HasFactory;

protected $fillable = ['name','user_id','visibility'];

    public function games(){
    	return $this->belongsToMany(Game::class)->using(Game_Gamelist::class);
    }

    public function users(){
    	return $this->belongsTo(User::class);
    }

}
