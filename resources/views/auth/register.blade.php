@extends('layouts.master')
@section('content')
@panel
    <h1 class="form-header">
    {{ __('Register') }}
    </h1>
    <div>
        <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
            @csrf
            <div class="form-group">
                <label class="form-label" for="name">{{ __('Name') }}</label>
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' form-control-error' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                @if ($errors->has('name'))
                <span class="form-message error">
                    {{ $errors->first('name') }}
                </span>
                @endif
            </div>
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
                {{ __('Register') }}
                </button>
            </div>
        </form>
    </div>
@endpanel
@endsection
