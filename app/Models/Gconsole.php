<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gconsole extends Model
{
    use HasFactory;

    public function platform(){
    	return $this->belongsTo(Platform::class,'platform_id');
    }

    public function game(){
    	return $this->hasMany(Game::class,'game_id');
    }
}
