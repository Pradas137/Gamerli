<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gamelist extends Model
{
    use HasFactory;

    public function liste(){
    	return $this->hasMany(Liste::class,'list_id');
    }

    public function game(){
    	return $this->belongsTo(Game::class,'game_id');
    }
}
