<?php

namespace App\Models;

use App\Game;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    public function game(){
    	return $this->hasMany(Game::class,'game_id');
    }
}
