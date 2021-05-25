@extends('layouts.layout')
@section('content')

    <div class="d-grid gap-2 mt-2">
        <h1><span class="btn btn-dark btn-block">votre panier</span> </h1>
    </div>

    @if (Session::has('cart'))
        <div class="row">
            <div class="col-6 mb-4">
                <ul class="list-group">
                    @forelse ($plats as $i)

                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold"><b>{{ $i['item']['nomPlat'] }}</b></div>
                                total prix: {{ $i['price'] }}
                            </div>
                            <div class="row col-6">
                                <span class="badge bg-dark text-white rounded-pill px-2">{{ $i['qty'] }}</span>
                            </div>
                            <div>
                                <a href="{{ route('panier.supprimerItem', ['item' => $i['item']['id']]) }}">
                                    <i class="fas fa-times" style="color:rgb(51, 48, 48)"></i>
                                </a>
                            </div>
                        </li>

                    @empty
                        <span class="badge badge-danger">panier vide :
                            <a href="{{ route('plats.index') }}">aller au magasin</a>
                        </span>
                    @endforelse
                </ul>
            </div>
            <div class="col-sm-6">
                <hr>
                <strong>Total prix du panier : {{ $totalPrix }}</strong>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                <a href="{{ route('store') }}" class="btn btn-dark ">valider commande</a>
                </div>
                <hr>

                <a href="{{ route('panier.viderPanier') }}" class="btn btn-outline-danger">vider panier</a>

            </div>


        </div>

    @else
    <div class="mb-4">
    <hr>
    <div class="row justify-content-center mt-4">
        <i class="fas fa-shopping-bag fa-2x" style="color: rgba(77, 71, 71, 0.715)"></i>
    </div>
    <div class="row justify-content-center mt-2">
        <span >votre panier est vide ! Mais pas pour longtemps</span>
    </div>
    <div class="row justify-content-center mt-2">
        <a class="btn btn-outline-danger" href="{{ route('plats.index') }}">aller au magasin >>></a>
    </div>
    <hr>
    </div>
    @endif


@endsection
