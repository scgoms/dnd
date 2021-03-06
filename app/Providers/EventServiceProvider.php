<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'App\Events\MessageReceived' => [
            'App\Listeners\SendMessageToAllUsers',
        ],
        'App\Events\BackgroundImageReceived'=> [
            'App\Listeners\SendBackgroundToAllUsers'
        ],
        'App\Events\InvitationCreated' => [
            'App\Listeners\SendInvitationEmail'
        ],
        'Illuminate\Auth\Events\Registered' => [
            'App\Listeners\SendRegistrationEmail'
        ],
        'App\Events\CharacterActivated' =>  [
            'App\Listeners\SendCharacterToAllUsers'
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
