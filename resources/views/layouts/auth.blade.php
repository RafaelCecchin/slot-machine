@extends('layouts.app')

@section('content')

    <section class="container">
        
        <header class="row logo-slot-machine">
            <div class="col d-flex flex-column justify-content-center">
                <div class="row">
                    <div class="col d-flex align-items-center justify-content-center position-relative">
                        <img class="slot-machine-icon" src="{{ asset('images/slot-machine-vector.svg')}}"/>
                        <h1 class="fw-bold lh-1 text-black">Slot <br/>Machine</h1>
                        <img width="133" height="100" class="position-absolute money-icon" src="{{ asset('images/money-vector.svg')}}"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-secondary fs-5">@yield('header-message')</p>
                    </div>
                </div>
            </div>
        </header>
        
        @yield('form')

        <footer>
            @yield('footer-link')
        </footer>
        
    </section>

@endsection