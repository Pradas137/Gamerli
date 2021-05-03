<?php

namespace App\Models;

use App\Deveolper;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    use HasFactory;

    public function developer(){
    	return $this->hasMany(Developers::class,'developer_id');
    }
}
