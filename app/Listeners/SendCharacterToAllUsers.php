<?php

namespace App\Listeners;

use App\Events\CharacterActivated;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendCharacterToAllUsers
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  CharacterActivated  $event
     * @return void
     */
    public function handle(CharacterActivated $event)
    {
        //
    }
}
