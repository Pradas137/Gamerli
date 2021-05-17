<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Game_Gamelist extends Pivot
{
    use HasFactory;

    public function game(){
    	return $this->hasMany(Game::class);
    }
    public function gamelists(){
    	return $this->hasMany(Gamelist::class);
    }

}
