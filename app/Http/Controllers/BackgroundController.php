<?php

namespace App\Http\Controllers;

use App\BackgroundImage;
use App\Events\BackgroundImageReceived;
use App\Game;
use Illuminate\Http\Request;

class BackgroundController extends Controller
{
    public function receiveAndSend(Game $game, Request $request)
    {
        $path = '/storage/' . $request->file('background-image')->store('background-image', 'public');
        event(new BackgroundImageReceived(new BackgroundImage($path), $game));
    }
}
