@extends('layouts.master')
@section('content')
@if (session('status'))
{{ session('status') }}
@endif
<div class="container mt-4 mx-auto flex flex-col md:flex-row">
    <div class="md:w-1/4">
        @include('profile.partials.sidebar')
    </div>
    @panel
    <div class="flex-1">
        Some kind of profile content
    </div>
    @endpanel
</div>
@endsection
