<?php

namespace App\Listeners;

use App\Events\BackgroundImageReceived;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendBackgroundToAllUsers
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
     * @param  BackgroundImageReceived  $event
     * @return void
     */
    public function handle(BackgroundImageReceived $event)
    {
        //
    }
}
