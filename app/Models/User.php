<?php

namespace App\Models;

use App\Friend;
use App\Comment;
use App\Gamelist;
use App\Genre;
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
    	return $this->hasMany(Comment::class);
    }

    public function friends(){
    	return $this->hasMany(Friend::class, 'user_id');
    }

    public function friendOf(){
        return $this->hasMany(Friend::class, 'friend_id');
    }

    public function gamelists(){
        return $this->hasMany(Gamelist::class);
    }

     public function genres(){
        return $this->belongsToMany(Genre::class);
    }

    public function role($role) {     
        $role = (array)$role;    
        return in_array($this->role, $role); 
     }

     public function getAvatarUrl()
     {
         if ($this->avatar)
            return asset('images/users/'.$this->id.'.'.$this->avatar);
            return asset('images/users/default.jpg');
}
}
