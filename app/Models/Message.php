<?php

namespace App\Models;

use App\Friend;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    public function friends(){
    	return $this->belongTo(Friend::class);
    }
}
