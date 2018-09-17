<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function stats()
    {
        return $this->hasOne(Stat::class);
    }

    public function skills()
    {
        return $this->hasOne(Skill::class);
    }

    public function saving_throws()
    {
        return $this->hasOne(SavingThrow::class);
    }
}
