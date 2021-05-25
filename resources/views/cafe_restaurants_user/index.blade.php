@extends('layouts.layout')
@section('content')

    <div class="d-grid gap-2 mt-2">
        <h1><span class="btn btn-dark btn-block">list des cafe_restaurant disponible</span> </h1>
    </div>

    {{-- <form action="{{ route('cafe_restaurants.fitchVille') }}">
        <input type="text" name="ville">
        <button type="submit">chercher</button>
    </form> --}}



    <div class="row">
        @forelse ($crs  as $i)
            <div class="col-4">
                <div class="card mt-2" style="width: 18rem;">
                    <img src="/img/gg.jpg" class="card-img-top">
                    <div class="card-body">

                        <h5 class="card-title">
                            <a class="text-reset" href="{{ route('plats.afficheCafePlat', ['cafe' => $i->id]) }}">
                                {{ $i->nomCafeRestaurant }}
                            </a>
                        </h5>
                        <h6 class="card-subtitle mb-2 text-muted">ville :{{ $i->ville }}</h6>
                        <p class="card-text">{{ $i->created_at }}</p>

                    </div>
                </div>
            </div>
        @empty

            <div class="mb-4">
                <hr>
                <div class="row justify-content-center mt-4">
                    <i class="fas fa-shopping-bag fa-2x" style="color: rgba(77, 71, 71, 0.715)"></i>
                </div>
                <div class="row justify-content-center mt-2">
                    <span>Aucune restaurant disponible ! Mais pas pour longtemps</span>
                </div>
                <hr>
            </div>

        @endforelse
    </div>

@endsection
