<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Events\MessageReceived;

class MessageController extends Controller
{
    public function receiveAndSend(Request $request)
    {
        $message = new Message($request->message, $request->name);
        event(new MessageReceived(new Message($request->message, $request->from)));
    }
}
