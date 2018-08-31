@extends('layouts.master')
@section('content')
<div class="md:w-1/2 md:mx-auto">
    <h1 class="form-header">
    {{ __('Reset Password') }}
    </h1>
    <form method="POST" action="{{ route('password.request') }}" aria-label="{{ __('Reset Password') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="form-group">
            <label class="form-label" for="email">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' form-control-error' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>
            @if ($errors->has('email'))
            <span class="form-message error">
                {{ $errors->first('email') }}
            </span>
            @endif
        </div>
        <div class="form-group">
            <label class="form-label" for="password">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' form-control-error' : '' }}" name="password" required>
            @if ($errors->has('password'))
            <span class="form-message error">
                {{ $errors->first('password') }}
            </span>
            @endif
        </div>
        <div class="form-group">
            <label class="form-label" for="password-confirm">{{ __('Confirm Password') }}</label>
            <input class="form-control" id="password-confirm" type="password" name="password_confirmation" required>
        </div>
        <div class="form-group">
            <button class="btn btn-blue" type="submit">
            {{ __('Reset Password') }}
            </button>
        </div>
    </form>
</div>
@endsection
