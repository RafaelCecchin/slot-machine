@extends('layouts.app')
@section('view-name', 'Home')

@section('content')
<header class="position-fixed w-100 top-0 left-0 p-3">
    <a class="d-block float-start" href="#">
        <img style="width: 4rem; height: 4rem;" src="{{ asset('images/config-vector.svg')}}"/>
    </a>
    <a class="d-block float-end" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <img style="width: 4rem; height: 4rem;" src="{{ asset('images/exit-vector.svg')}}"/>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </a>
</header>
<section class="section">
    <div class="container">
        
    </div>
</section>
@endsection
