@extends('layouts.layout')
@section('content')

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <div class="d-grid gap-2 mt-2">
        <h1><span class="btn btn-dark btn-block">list des plats disponible</span> </h1>
    </div>

    <a class="btn btn-warning" href="{{ route('plats.fitchR', 'restaurant') }}">restaurant</a>
    <a class="btn btn-warning" href="{{ route('plats.fitchR', 'cafe') }}">cafe</a>
    <a class="btn btn-warning" href="{{ route('plats.index') }}">all</a>

    <div class="row">
        @forelse ($plats as $i)
        
            <div class="col-4">
                <div class="card mt-2" style="width: 18rem;">
                    <img src="/img/gg.jpg" class="card-img-top">
                    <div class="card-body">

                        <h5 class="card-title">
                            <a class="text-reset" href="{{ route('plats.show', ['plat' => $i->id]) }}">
                                {{ $i->nomPlat }}</a>
                        </h5>
                        <p> : prix: {{ $i->prix }}</p>
                        <p>description: {{ $i->description }}</p>
                        <p> {{ $i->categorie }}</p>
                        <form method="get" action="{{ route('panier.add', ['plat' => $i->id]) }}">
                            <button type="submit" class="btn btn-dark">Ajouter au panier</button>
                            
                        </form>
                        {{-- les etoiles --}}
                        <div class="rating mt-2 pb-0"><small><!--
                        --><a href="#5" title="Donner 5 étoiles">☆</a><!--
                        --><a href="#4" title="Donner 4 étoiles">☆</a><!--
                        --><a href="#3" title="Donner 3 étoiles">☆</a><!--
                        --><a href="#2" title="Donner 2 étoiles">☆</a><!--
                        --><a href="#1" title="Donner 1 étoile">☆</a></small>
                     </div>
                    </div>
                </div>
            </div>
        @empty
            
        <div class="mb-4">
            <hr>
            <div class="row justify-content-center mt-4">
                <i class="fas fa-grin-wink fa-2x" style="color: rgba(77, 71, 71, 0.715)"></i>
            </div>
            <div class="row justify-content-center mt-2">
                <span>Cette Cafe_restaurant est vide ! Mais pas pour longtemps</span>
            </div>
            <div class="row justify-content-center mt-2">
                <a class="btn btn-outline-danger" href="{{ route('cafeRestaurants.index') }}">aller au restaurant >>></a>
            </div>
            <hr>
        </div>

        @endforelse
    </div>
   

@endsection
