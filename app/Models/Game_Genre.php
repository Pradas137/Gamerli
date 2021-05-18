<?php

namespace App\Models;


use App\Genre;
use App\Game;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game_Genre extends Model
{
    use HasFactory;
    protected $table = 'game_genre';
    protected $fillable = ['game_id','genre_id'];
}
