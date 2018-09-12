<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use User;

class Character extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
