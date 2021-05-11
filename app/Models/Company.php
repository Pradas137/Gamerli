<?php

namespace App\Models;

use App\Platform;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function platforms(){
    	return $this->hasMany(Platform::class);
    }
    public static function searchId($id){
		return $this->where('id',$id)->id;
	}
}

