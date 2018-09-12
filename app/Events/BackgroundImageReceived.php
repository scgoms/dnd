<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
// use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

use App\BackgroundImage;

class BackgroundImageReceived implements ShouldBroadcast
{
    public $image;
    public $lobby;

    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(BackgroundImage $image, Lobby $lobby)
    {
        $this->image = $image;
        $this->lobby = $lobby;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        // return new Channel('background-image');
        return new PrivateChannel('game.' . $this->lobby->id . '.background-image');
    }
}
