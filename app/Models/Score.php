<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Score extends Model
{
    use HasFactory;

    public function comments(){
        return $this->belongsTo(Comment::class, 'comment_id');
    }

    public function games(){
    	return $this->hasMany(Game::class,'game_id');
    }
}
