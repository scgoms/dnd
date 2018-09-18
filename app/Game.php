<?php

namespace App;

use App\Events\CharacterActivated;
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

    public function characters()
    {
        return $this->belongsToMany(Character::class);
    }

    public function addPlayer($user)
    {
        $this->players()->attach($user);
    }

    public function activateCharacter(Character $character)
    {
        if (!$this->characters->contains($character)) {
            $this->characters()->attach($character);
        }
        event(new CharacterActivated($character, $this));
    }
}
