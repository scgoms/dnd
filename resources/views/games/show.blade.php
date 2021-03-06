@extends('games.layouts.master')
@section('content')
@if(Auth::check() && Auth::id() === $game->creator_id)
@include('layouts.gamemaster')
@endif
@if (session('status'))
{{ session('status') }}
@endif
@push('navbar-links')
<a href="#" class="navbar-link" @click.prevent="$emit('show-chat')">
    Chat
</a>
<hr class="h-px bg-grey w-full">
@endpush
<game :channel="{{ $game }}"/>
@endsection
