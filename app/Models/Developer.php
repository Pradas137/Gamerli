<?php

namespace App\Models;

use App\Game;
use App\Director;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    use HasFactory;

    public function directors(){
    	return $this->belongsTo(Directors::class,'director_id');
    }

    public function game(){
        return $this->hasMany(Game::class, 'game_id');
    }

}
