<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Liste extends Model
{
    use HasFactory;

    public function gamelist(){
    	return $this->belongsTo(Gamelist::class,'glist_id');
    }

    public function users(){
    	return $this->hasMany(User::class,'user_id');
    }
}
