@extends('layouts.auth')
@section('view-name', 'Login')

@section('header-message') 
    Fill in the fields below to access the platform
@endsection

@section('form') 
    <form method="POST" class="form login" action="{{ route('login') }}">
        @csrf
        
        <div>
            <div class="mb-3">
                <label for="email" class="form-label fw-bold">{{ __('E-Mail address') }}</label>
                <input id="email" name="email" type="email" class="form-control rounded" aria-describedby="emailHelp">
                @error('email')
                    <span class="d-block invalid-feedback" role="alert">
                        <strong class="fw-normal">{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label fw-bold">{{ __('Password') }}</label>
                <input id="password" name="password" type="password" class="form-control rounded" aria-describedby="emailHelp">
                @error('password')
                    <span class="d-block invalid-feedback" role="alert">
                        <strong class="fw-normal">{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <input class="btn btn-warning w-100" type="submit" value="{{ __("Access") }}"/>
    </form>
@endsection

@section('footer-link') 
    <a rel="noreferrer" class="d-block m-auto mt-2 w-auto link-dark text-decoration-none" href="{{ route('register') }}">Click here to register</a>
@endsection
            