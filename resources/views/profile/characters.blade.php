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
        <div class="p-4">
            <character-creator></character-creator>
        </div>
        <character-editor :characters="{{ $characters }}"></character-editor>
    @endpanel
</div>
@endsection
