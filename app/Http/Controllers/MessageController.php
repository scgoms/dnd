<?php

namespace App\Http\Controllers;

use App\Events\MessageReceived;
use App\Lobby;
use App\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function receiveAndSend(Lobby $lobby, Request $request)
    {
        $message = new Message($request->message, $request->name);
        event(new MessageReceived(new Message($request->message, $request->from), $lobby));
    }
}
