@extends('layouts.master')
@section('content')
@if (session('status'))
{{ session('status') }}
@endif
<div class="container mt-4 mx-auto flex">
    <div class="w-1/4">
        @include('profile.partials.sidebar')
    </div>
    <div class="flex-1 bg-green">
        Content
    </div>
</div>
@endsection
