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
            <button class="btn btn-blue">Create a Lobby</button>
        </div>
        @if(count($lobbies))
        <ul class="list-reset">
            @foreach($lobbies as $lobby)
            <li class="border-b border-grey p-2">{{ $lobby->name }}</li>
            @endforeach
        </ul>
        @endif
    </div>
</div>
@endsection
