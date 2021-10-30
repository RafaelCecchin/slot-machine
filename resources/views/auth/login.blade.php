@extends('layouts.auth')
@section('view-name', 'Login')

@section('header-message') 
    Fill in the fields below to access the platform
@endsection

@section('form') 
    <form method="POST" class="form login" action="{{ route('login') }}">
        @csrf

        <div>
            <label for="email">
                <span class="caption">{{ __('E-Mail address') }}</span>
                <input id="email" name="email" type="email"/>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </label>
            <label for="password">
                <span class="caption">{{ __('Password') }}</span>
                <input id="password" name="password" type="password"/>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </label>
        </div>
        <input class="btn" type="submit" value="{{ __("Access") }}"/>
    </form>
@endsection

@section('footer-link') 
    <a rel="noreferrer" href="{{ route('register') }}">Click here to register</a>
@endsection
            