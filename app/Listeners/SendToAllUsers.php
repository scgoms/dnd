<?php

namespace App\Listeners;

use App\Events\MessageReceived;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendToAllUsers
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
     * @param  MessageReceived  $event
     * @return void
     */
    public function handle(MessageReceived $event)
    {
        //
    }
}
