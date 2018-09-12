<?php

namespace App\Http\Controllers;

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
     * Show the users lobbies that they've joined.
     *
     * @return \Illuminate\Http\Response
     */
    public function lobbies()
    {
        $lobbies = Auth::user()->allLobbies();
        return view('profile.lobbies');
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
