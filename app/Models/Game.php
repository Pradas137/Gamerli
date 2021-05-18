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

    protected $table = 'games';
    protected $fillable = ['name','developer','director','publisher','date','pegi','summary','page_reference','image','validate','saga','platform_id'];

    public function platforms(){
    	return $this->belongsTo(Platform::class,'platform_id');
    }

    public function comments(){
    	return $this->belongsTo(Comments::class);
    }

    public function gamelists(){
    	return $this->belongsToMany(Gamelist::class)->using(Game_Gamelist::class);
    }




}