<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function characters()
    {
        return $this->hasMany(Character::class);
    }

    public function lobbies()
    {
        return $this->hasMany(Lobby::class, 'creator_id');
    }

    public function lobbies_played_in()
    {
        return $this->belongsToMany(Lobby::class, 'lobby_user');
    }

    public function allLobbies()
    {
        return $this->lobbies->merge($this->lobbies_played_in);
    }
}
