@extends('layouts.master')
@section('content')
Dashboard
@if (session('status'))
{{ session('status') }}
@endif
You are logged in!
@endsection
