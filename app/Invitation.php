<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    protected $guarded = [];

    public static function findByHash($hash)
    {
        return static::where('hash', $hash)->firstOrFail();
    }

    public function game()
    {
        return $this->belongsTo(Game::class);
    }

    public function close()
    {
        $this->update([
            'open'  =>  false
        ]);
    }

    /**
     * Scope a query to only include active users.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeOpen($query)
    {
        return $query->where('open', 1);
    }
}
