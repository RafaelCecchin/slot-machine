@extends('layouts.app')
@section('content')
<section class="section">
    <div class="container">
        <header>
            <div>
                <img class="slot-machine-icon" src="{{Storage::url('images/slot-machine-vector.svg')}}"/>
                <h1>Slot <br/>Machine</h1>
                <img class="money-icon" src="{{Storage::url('images/money-vector.svg')}}"/>
            </div>
            <p>Fill in the fields below to access the platform</p>
        </header>
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
        <footer>
            <a rel="noreferrer" href="{{ route('register') }}">Click here to register</a>
        </footer>
    </div>
</section>
@endsection