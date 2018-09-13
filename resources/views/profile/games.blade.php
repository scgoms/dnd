@extends('layouts.master')
@section('content')
@if (session('status'))
{{ session('status') }}
@endif
<div class="container mt-4 mx-auto flex">
    <div class="w-1/4">
        @include('profile.partials.sidebar')
    </div>
    <div class="flex-1 bg-white shadow-md">
        <div class="p-4">
            <game-creator></game-creator>
        </div>
        @if(count($games))
        <ul class="list-reset">
            @foreach($games as $game)
            <li class="border-b border-grey p-2">
                <a href="/game/{{ $game->id }}">{{ $game->name }}</a>
            </li>
            @endforeach
        </ul>
        @endif
        <h1>Invitations</h1>
        @if(count($invitations))
        <ul class="list-reset">
            @foreach($invitations as $invitation)
            <li class="border-b border-grey p-2">
                <div class="form-group flex-row">
                    {{ $invitation->game->name }}
                    <form action="/invitation/{{ $invitation->hash }}/accept" method="POST">
                        @csrf
                        <button class="btn btn-blue">Accept</button>
                    </form>
                    <form action="/invitation/{{ $invitation->hash }}/decline" method="POST">
                        @csrf
                        <button class="btn btn-red">Decline</button>
                    </form>
                </div>
            </li>
            @endforeach
        </ul>
        @endif
    </div>
</div>
@endsection
