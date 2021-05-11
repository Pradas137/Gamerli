<?php

namespace App\Models;


use App\Platform;
use App\Comments;
use App\Gamelist;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    public function platforms(){
    	return $this->belongsTo(Platform::class);
    }

    public function comments(){
    	return $this->belongsTo(Comments::class);
    }

    public function gamelists(){
    	return $this->belongsToMany(Gamelist::class);
    }




}