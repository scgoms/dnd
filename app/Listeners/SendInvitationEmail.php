<?php

namespace App\Listeners;

use App\Events\InvitationCreated;
use App\Mail\GameInvitation;
use Illuminate\Support\Facades\Mail;

class SendInvitationEmail
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
     * @param  InvitationCreated  $event
     * @return void
     */
    public function handle(InvitationCreated $event)
    {
        Mail::to($event->invitation->email)
            ->send(new GameInvitation($event->invitation));
    }
}
