@extends('layouts.auth')
@section('view-name', 'Register')

@section('header-message') 
    Fill in the fields below to register on the platform
@endsection

@section('form') 
    <form method="post" class="form register" action="{{ route('register') }}">
        @csrf

        <div>
            <label for="first-name">
                <span class="caption">{{ __("First name") }}</span>
                <input id="first-name" name="first-name" type="text"/>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </label>
            <label for="last-name">
                <span class="caption">{{ __("Last name") }}</span>
                <input id="last-name" name="last-name" type="text"/>
                @error('last-name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </label>

            @if($hasUser)

                <label for="birthday">
                    <span class="caption">{{ __("Birthday") }}</span>
                    <input id="birthday" name="birthday" type="date"/>
                    @error('birthday')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>
                
                <label for="cpf">
                    <span class="caption">{{ __("CPF") }}</span>
                    <input id="cpf" name="cpf" type="text"/>
                    @error('cpf')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </label>

            @endif

            <label for="email">
                <span class="caption">{{ __("E-mail") }}</span>
                <input id="email" name="email" type="email"/>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </label>
            <label for="password">
                <span class="caption">{{ __("Password") }}</span>
                <input id="password" name="password" type="password"/>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </label>
            <label for="password-confirm">
                <span class="caption">{{ __("Confirm Password") }}</span>
                <input id="password-confirm" name="password_confirmation" type="password"/>
            </label>
        </div>
        <input class="btn" type="submit" value="{{ __("Register") }}"/>
    </form> 
@endsection

@section('footer-link') 
    @if($hasUser)
        <a href="{{ route('login') }}">Click here to login</a>
    @endif
@endsection

