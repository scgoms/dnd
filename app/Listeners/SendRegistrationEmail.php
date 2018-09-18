<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Registered;
use Mail;

class SendRegistrationEmail
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
     * @param  Registered  $event
     * @return void
     */
    public function handle(Registered $event)
    {
        Mail::to($event->invitation->email)
            ->send(new RegistrationEmail($event->user));
    }
}
