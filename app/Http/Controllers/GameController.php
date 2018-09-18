<?php

namespace App\Http\Controllers;

use App\Character;
use App\Game;
use Auth;
use Illuminate\Http\Request;

class GameController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Game $game)
    {
        $user = Auth::user();
        $game_characters = $game->characters()->where('user_id', $user->id)->with(['stats', 'skills', 'saving_throws'])->get();
        $user_characters = $user->characters()->whereDoesntHave('game')->with(['stats', 'skills', 'saving_throws'])->get();
        $characters = $game_characters->merge($user_characters);
        return view('games.show', compact('game', 'user', 'characters'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Game::create([
            'name'  =>  $request->name,
            'description'   =>  $request->description,
            'creator_id'    =>  Auth::id()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Game  $game
     * @return \Illuminate\Http\Response
     */
    public function show(Game $game)
    {
        return view('game.show');
    }

    public function activateCharacter(Game $game, Character $character)
    {
        $game->activateCharacter($character->load(['stats', 'skills', 'saving_throws']));
    }
}
