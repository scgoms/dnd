<?php

namespace App\Http\Controllers;

use App\Lobby;
use Illuminate\Http\Request;

use Auth;

class LobbyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Lobby $lobby)
    {
        return view('profile.lobbies');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Lobby::create([
            'name'  =>  $request->name,
            'description'   =>  $request->description,
            'creator_id'    =>  Auth::id()
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lobby  $lobby
     * @return \Illuminate\Http\Response
     */
    public function show(Lobby $lobby)
    {
        return view('lobbies.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lobby  $lobby
     * @return \Illuminate\Http\Response
     */
    public function edit(Lobby $lobby)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lobby  $lobby
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lobby $lobby)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lobby  $lobby
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lobby $lobby)
    {
        //
    }
}
