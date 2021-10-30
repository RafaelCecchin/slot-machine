@extends('layouts.app')

@section('content')
<section class="section">
    <div class="container">
        <header>
            <div>
                <img class="slot-machine-icon" src="{{ asset('images/slot-machine-vector.svg')}}"/>
                <h1>Slot <br/>Machine</h1>
                <img class="money-icon" src="{{ asset('images/money-vector.svg')}}"/>
            </div>
            <p>@yield('header-message')</p>
        </header>

        @yield('form')

        <footer>
            @yield('footer-link')
        </footer>
    </div>
</section>
@endsection