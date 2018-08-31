@extends('layouts.master')
@section('content')
@if (session('status'))
{{ session('status') }}
@endif
<div class="flex flex-col flex-1">
    <lobby
        @if(Auth::check())
        :user="{{ Auth::user() }}"
        @endif
    >
    </lobby>
</div>
@endsection
