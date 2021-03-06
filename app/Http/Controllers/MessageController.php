<?php

namespace App\Http\Controllers;

use App\Events\MessageReceived;
use App\Game;
use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function receiveAndSend(Game $game, Request $request)
    {
        $message = new Message($request->message, $request->name);
        event(new MessageReceived(new Message($request->message, $request->from), $game));
    }
}
