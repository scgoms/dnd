<?php

namespace App\Http\Controllers;

use App\Events\InvitationCreated;
use App\Invitation;
use App\Game;
use Illuminate\Http\Request;
use Auth;

class InvitationController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Game $game)
    {
        if ($this->checkForExistingInvitation($game, $request->email)) {
            $invitation = Invitation::create([
                'email' =>  $request->email,
                'game_id' => $game->id,
                'hash'  =>  uniqid(),
                'open'  =>  true
            ]);
            event(new InvitationCreated($invitation));
        }
    }

    private function checkForExistingInvitation($game, $email)
    {
        // We should not create a new invitation if their is an active invitation to the game adn the email already.
        return count($game->invitations()
            ->where('email', $email)
            ->open()
            ->get());
    }

    public function accept($hash)
    {
        $user = Auth::user();
        $invitation = Invitation::findByHash($hash);
        $invitation->game->addPlayer($user);
        $invitation->close();
        return back();
    }

    public function decline($hash)
    {
        $invitation = Invitation::findByHash($hash);
        $invitation->close();
        return back();
    }
}
