@extends('layouts.master')
@section('content')
<div class="md:w-1/2 md:mx-auto">
    <h1 class="form-header">
    {{ __('Reset Password') }}
    </h1>
    <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
        @csrf
        <div class="form-group">
            <label class="form-label" for="email">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' form-control-error' : '' }}" name="email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
            <span class="form-message error">
                {{ $errors->first('email') }}
            </span>
            @endif
        </div>
        <div class="form-group">
            <button class="btn btn-blue" type="submit">
            {{ __('Send Password Reset Link') }}
            </button>
        </div>
    </form>
    @if (session('status'))
    {{ session('status') }}
    @endif
</div>
@endsection
