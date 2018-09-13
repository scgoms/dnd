<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $guarded = [];

    public function owner()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function invitations()
    {
        return $this->hasMany(Invitation::class);
    }

    public function players()
    {
        return $this->belongsToMany(User::class, 'game_user');
    }

    public function addPlayer($user)
    {
        $this->players()->attach($user);
    }
}
