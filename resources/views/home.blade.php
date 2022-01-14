@extends('layouts.app')
@section('view-name', 'Home')

@section('content')

    <header class="position-relative w-auto m-4">
        <div class="w-100 py-2">
            <a class="d-block float-start me-3" href="#">
                <img width="84" height="84" src="{{ asset('images/config-vector.svg')}}"/>
            </a>
            <a class="d-block float-start" href="#">
                <img width="84" height="88" src="{{ asset('images/certificate.svg')}}"/>
            </a>

            <a class="d-block float-end" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <img width="84" height="84" src="{{ asset('images/exit-vector.svg')}}"/>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </a>
        </div>
        <div class="w-100 py-2 d-flex">
            <button class="btn btn-none m-auto">
                <div class="d-flex justify-content-center">
                    <p class="fs-4 fw-normal">Seu crédito</p>
                    <img width="40" height="42" class="ms-2" src="{{ asset('images/add-button.svg')}}"/>
                </div>
                <div class="d-flex justify-content-center">
                    <img width="69" height="56" class="me-2" style="font-size: 1.5rem;" src="{{ asset('images/money-vector-2.svg')}}"/>
                    <p class="fw-bold lh-1 pb-2" style="font-size: 2.6rem; color: var(--color-green-1);">R$200,00</p>
                </div>
            </button>
        </div>
    </header>

    <section class="section h-100 my-auto">
        <div class="container" style="max-width: 55rem;">
            
            <div class="game">

                <div class="row screen mb-2">
                    <div class="col-4">
                        <div class="w-100 position-relative rounded" style="background-color: var(--color-grey-1); padding-bottom: 140%; height: 0;">
                            <img class="position-absolute top-50 start-50 translate-middle" style="width: 70%; height: auto;" width="160" height="160" src="{{ asset('images/game-icon-1.svg')}}"/>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="w-100 position-relative rounded" style="background-color: var(--color-grey-1); padding-bottom: 140%; height: 0;">
                            <img class="position-absolute top-50 start-50 translate-middle" style="width: 70%; height: auto;" width="160" height="160" src="{{ asset('images/game-icon-2.svg')}}"/>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="w-100 position-relative rounded" style="background-color: var(--color-grey-1); padding-bottom: 140%; height: 0;">
                            <img class="position-absolute top-50 start-50 translate-middle" style="width: 70%; height: auto;" width="160" height="160" src="{{ asset('images/game-icon-3.svg')}}"/>
                        </div>
                    </div>
                </div>
                <div class="row money-counter mb-3 d-flex justify-content-center">
                    <button class="btn btn-none w-auto p-0">
                        <img width="40" height="42" src="{{ asset('images/remove-button.svg')}}"/>
                    </button>
                    <input type="text" class="form-check-input h-auto rounded mx-2" style="width: 6rem; background-color: var(--color-grey-1);"/>
                    <button class="btn btn-none w-auto p-0">
                        <img width="40" height="42" src="{{ asset('images/add-button.svg')}}"/>
                    </button>
                </div>
                <div class="row button">
                    <button class="btn btn-warning w-auto m-auto px-5">Spin</button>
                </div>

            </div>

        </div>
    </section>

@endsection
