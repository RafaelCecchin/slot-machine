@extends('layouts.app')
@section('view-name', 'Register');

@section('content')

<section class="section">
    <div class="container">

        <header>
            <div>
                <img class="slot-machine-icon" src="{{ asset('images/slot-machine-vector.svg')}}"/>
                <h1>Slot <br/>Machine</h1>
                <img class="money-icon" src="{{ asset('images/money-vector.svg')}}"/>
            </div>
            <p>Fill in the fields below to register on the platform</p>
        </header>

        <form method="post" class="form register" action="{{ route('register') }}">
            @csrf

            <div>
                <label for="first-name">
                    <span class="caption">{{ __("First name") }}</span>
                    <input id="first-name" name="name" type="text"/>
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
            <footer>
                <a href="{{ route('login') }}">Click here to login</a>
            </footer>
        </form>                
    </div>
</section>
@endsection
