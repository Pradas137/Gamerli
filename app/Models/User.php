<?php

namespace App\Models;

use App\Friend;
use App\Liste;
use App\Comment;
use App\Request;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'surname',
        'email',
        'password',
        'role',
        'list_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function comments(){
    	return $this->hasMany(Comment::class,'comment_id');
    }

    public function friends(){
    	return $this->hasMany(Friend::class,'friend_id');
    }
    public function friends1(){
        return $this->hasMany(Friend::class,'user_id');
    }

    public function liste(){
    	return $this->belongsTo(Liste::class,'list_id');
    }

    public function requests(){
        return $this->hasMany(Request::class,'request_id');
 }
    public function role($role) {     
        $role = (array)$role;     
        return in_array($this->role, $role); 

    }
}
