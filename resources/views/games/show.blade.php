@extends('layouts.master')
@section('content')
@if(Auth::check() && Auth::user()->email === 'scgoms@gmail.com')
@include('layouts.gamemaster')
@endif
@if (session('status'))
{{ session('status') }}
@endif
<div class="flex flex-col flex-1">
    <lobby
        @if(Auth::check())
        :user="{{ Auth::user() }}"
        @endif
        :channel="{{ $game }}"
    >
    </lobby>
</div>
@endsection
