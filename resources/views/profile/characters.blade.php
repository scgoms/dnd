@extends('layouts.master')
@section('content')
@if (session('status'))
{{ session('status') }}
@endif
<div class="container mt-4 mx-auto flex">
    <div class="w-1/4">
        @include('profile.partials.sidebar')
    </div>
    @panel
        <div class="p-4">
            <character-creator></character-creator>
        </div>
        @if(count($characters))
        <ul class="list-reset">
            @foreach($characters as $character)
            <li class="border-b border-grey p-2">Content</li>
            @endforeach
        </ul>
        @endif
    @endpanel
</div>
@endsection
