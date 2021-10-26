@extends('layouts.app')

@section('content')
<header>
    <a class="btn-admin left config" href="#">
        <img src="{{Storage::url('images/config-vector.svg')}}"/>
    </a>
    <a class="btn-admin right exit" href="{{ route('logout') }}">
        <img src="{{Storage::url('images/exit-vector.svg')}}"/>
    </a>
</header>
<section class="section">
    <div class="container">

    </div>
</section>
@endsection
