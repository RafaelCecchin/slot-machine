@extends('layouts.auth')
@section('view-name', 'Register')

@section('header-message') 
    Fill in the fields below to register on the platform
@endsection

@section('form') 
    <form method="post" class="form register" action="{{ route('register') }}">
        @csrf

        <div class="row">
            <div class="mb-3 col-12 col-sm-6">
                <label for="first-name" class="form-label fw-bold">{{ __("First name") }}</label>
                <input id="first-name" name="first-name" type="text" class="form-control rounded" aria-describedby="emailHelp">
                @error('first-name')
                    <span class="d-block invalid-feedback" role="alert">
                        <strong class="fw-normal">{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3 col-12 col-sm-6">
                <label for="last-name" class="form-label fw-bold">{{ __("Last name") }}</label>
                <input id="last-name" name="last-name" type="text" class="form-control rounded" aria-describedby="emailHelp">
                @error('last-name')
                    <span class="d-block invalid-feedback" role="alert">
                        <strong class="fw-normal">{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            @if($hasUser)

                <div class="mb-3 col-12 col-sm-5">
                    <label for="birthday" class="form-label fw-bold">{{ __("Birthday") }}</label>
                    <input id="birthday" name="birthday" type="date" class="form-control rounded" aria-describedby="emailHelp">
                    @error('birthday')
                        <span class="d-block invalid-feedback" role="alert">
                            <strong class="fw-normal">{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3 col-12 col-sm-7">
                    <label for="cpf" class="form-label fw-bold">{{ __("CPF") }}</label>
                    <input id="cpf" name="cpf" type="text" class="form-control rounded" aria-describedby="emailHelp">
                    @error('cpf')
                        <span class="d-block invalid-feedback" role="alert">
                            <strong class="fw-normal">{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                
            @endif

            <div class="mb-3 col-12 col-sm-12">
                <label for="email" class="form-label fw-bold">{{ __('E-Mail address') }}</label>
                <input id="email" name="email" type="email" class="form-control rounded" aria-describedby="emailHelp">
                @error('email')
                    <span class="d-block invalid-feedback" role="alert">
                        <strong class="fw-normal">{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3 col-12 col-sm-6">
                <label for="password" class="form-label fw-bold">{{ __('Password') }}</label>
                <input id="password" name="password" type="password" class="form-control rounded" aria-describedby="emailHelp">
                @error('password')
                    <span class="d-block invalid-feedback" role="alert">
                        <strong class="fw-normal">{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3 col-12 col-sm-6">
                <label for="password-confirm" class="form-label fw-bold">{{ __("Confirm Password") }}</label>
                <input id="password-confirm" name="password-confirm" type="password" class="form-control rounded" aria-describedby="emailHelp">
                @error('password-confirm')
                    <span class="d-block invalid-feedback" role="alert">
                        <strong class="fw-normal">{{ $message }}</strong>
                    </span>
                @enderror
            </div>

        </div>
        <input class="btn btn-warning w-100" type="submit" value="{{ __("Register") }}"/>
    </form> 
@endsection

@section('footer-link') 
    @if($hasUser)
        <a href="{{ route('login') }}" class="d-block m-auto mt-2 w-auto link-dark text-decoration-none">Click here to login</a>
    @endif
@endsection

