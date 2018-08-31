@extends('layouts.master')
@section('content')
<div class="md:w-1/2 md:mx-auto">
    <h1 class="form-header">
    {{ __('Login') }}
    </h1>
    <form method="POST" class="flex flex-col" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
        @csrf
        <div class="form-group">
            <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' form-control-error' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
            @if ($errors->has('email'))
            <span class="form-message error">
                {{ $errors->first('email') }}
            </span>
            @endif
        </div>
        <div class="form-group">
            <label for="password" class="form-label">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' form-control-error' : '' }}" name="password" required>
            @if ($errors->has('password'))
            <span class="form-message error">
                {{ $errors->first('password') }}
            </span>
            @endif
        </div>
        <div class="form-group items-center">
            <label class="checkbox">
                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
            </label>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-blue">
            {{ __('Login') }}
            </button>
            <a class="btn btn-grey-lightest" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
        </div>
    </form>
</div>
@endsection
