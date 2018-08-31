@extends('layouts.master')
@section('content')
@if (session('status'))
{{ session('status') }}
@endif
<div class="flex flex-col flex-1">
    <lobby></lobby>
</div>
@endsection
