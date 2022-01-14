@extends('layouts.app')

@section('content')

    <section class="container min-vh-100 d-flex flex-column align-center justify-content-center" style="max-width: 30rem;">
        
        <header class="row logo-slot-machine">
            <div class="col d-flex flex-column justify-content-center">
                <div class="row">
                    <div class="col d-flex ">
                    
                        <div class="d-flex align-items-end position-relative mx-auto mb-2">
                            <img class="m-0 me-2" style="width: 7rem;" src="{{ asset('images/slot-machine-vector.svg')}}"/>
                            <h1 class="fw-bold lh-1 text-black mb-0" style="font-size: 2.4rem !important;">Slot <br/>Machine</h1>
                            <img width="133" height="100" class="position-absolute top-0 end-0 mt-4 me-4" style="width: 3.3rem; height: auto;" src="{{ asset('images/money-vector-1.svg')}}"/>
                        </div>
                        
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="text-secondary fs-5 text-center">@yield('header-message')</p>
                    </div>
                </div>
            </div>
        </header>
        
        @yield('form')

        <footer class="row">
            @yield('footer-link')
        </footer>
        
    </section>

@endsection