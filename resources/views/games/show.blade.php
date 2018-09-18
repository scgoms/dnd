@extends('layouts.master')
@section('content')
@if(Auth::check() && Auth::id() === $game->creator_id)
@include('layouts.gamemaster')
@endif
@if (session('status'))
{{ session('status') }}
@endif
<div class="flex flex-col flex-1 text-white">
    <lobby
        @if(Auth::check())
        :user="{{ $user }}"
        @endif
        :channel="{{ $game }}"
        :characters="{{ $characters }}"
    >
    </lobby>
</div>
@endsection
