<?php

namespace App\Models;

use App\Gconsole;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function platforms(){
    	return $this->hasMany(Platform::class);
    }
}