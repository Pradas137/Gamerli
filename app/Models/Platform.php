<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;

    public function gconsole(){
    	return $this->hasMany(Gconsole::class,'gconsole_id');
    }
}
