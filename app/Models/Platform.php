<?php

namespace App\Models;

use App\Company;
use App\Game;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Platform extends Model
{
    use HasFactory;

    protected $table = 'platforms';
    protected $fillable = ['name','company_id'];

    public function company(){
    	return $this->belongsTo(Company::class,'company_id');
    }

    public function games(){
    	return $this->hasMany(Game::class);
    }
}
