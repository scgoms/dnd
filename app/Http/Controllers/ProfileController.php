<?php

namespace App\Http\Controllers;

use App\Invitation;
use Auth;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('profile.index');
    }

    /**
     * Show the users game that they've joined.
     *
     * @return \Illuminate\Http\Response
     */
    public function games()
    {
        $user = Auth::user();

        $games = $user->allGames();
        $invitations = Invitation::where('email', $user->email)->open()->get();
        return view('profile.games', compact('games', 'invitations'));
    }

    /**
     * Show the users characters that they've created.
     *
     * @return \Illuminate\Http\Response
     */
    public function characters()
    {
        $characters = Auth::user()->characters;
        return view('profile.characters', compact('characters'));
    }
}
