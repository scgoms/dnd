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

    public function game()
    {
        return $this->hasMany(Game::class, 'creator_id');
    }

    public function game_played_in()
    {
        return $this->belongsToMany(Game::class, 'game_user');
    }

    public function allGames()
    {
        return $this->game->merge($this->game_played_in);
    }
}
