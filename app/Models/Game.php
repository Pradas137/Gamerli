<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    public function genres(){
    	return $this->belongsTo(Genres::class,'genre_id');
    }

    public function developers(){
    	return $this->belongsTo(Developer::class,'developer_id');
    }

    public function directors(){
    	return $this->belongsTo(Director::class,'director_id');
    }

    public function gconsoles(){
    	return $this->belongsTo(Gconsole::class,'gconsole_id');
    }

    public function scores(){
    	return $this->belongsTo(Score::class,'score_id');
    }

    public function publishers(){
    	return $this->belongsTo(Publisher::class,'publisher_id');
    }

    public function sagas(){
    	return $this->belongsTo(Saga::class,'saga_id');
    }

    public function comments(){
    	return $this->belongsTo(Comments::class,'comment_id');
    }

    public function sagas(){
    	return $this->hasMany(Saga::class,'saga_id');
    }

    public function gamelists(){
    	return $this->hasMany(Gamelist::class,'gamelist_id');
    }




}