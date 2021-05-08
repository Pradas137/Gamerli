<?php

namespace App\Models;


use App\User;
use App\Message;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    use HasFactory;

    public function users(){
    	return $this->belongsTo(User::class);
    }

    public function messages(){
    	return $this->hasMany(Message::class);
    }
}
