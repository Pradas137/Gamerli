<?php

namespace App\Models;

use App\Company;
use App\Game;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;

    public function company(){
    	return $this->belongsTo(Company::class);
    }

    public function games(){
    	return $this->hasMany(Game::class);
    }
}
