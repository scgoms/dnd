@extends('layouts.master')
@section('content')
@if (session('status'))
{{ session('status') }}
@endif
<div class="container mx-auto">
    @panel
    <div class="text-grey-light">
        <h1>DND</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi nemo corporis, accusantium obcaecati velit nulla qui, eos iusto soluta, temporibus ipsam non expedita doloribus quas, iste unde quae quaerat cumque?</p>
    </div>
    @endpanel
</div>
@endsection
