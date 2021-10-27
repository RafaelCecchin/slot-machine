@extends('layouts.app')

@section('content')
<header>
    <a class="btn-admin left config" href="#">
        <img src="{{Storage::url('images/config-vector.svg')}}"/>
    </a>
    <a class="btn-admin right exit" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <img src="{{Storage::url('images/exit-vector.svg')}}"/>
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