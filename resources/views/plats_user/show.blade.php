@extends('layouts.layout')
@section('content')

    <h1> {{ $plat->nomPlat }}</h1>
    <h1> {{ $plat->prix }}</h1>
    <p> {{ $plat->description }}</p>
    <p> {{ $plat->categorie }}</p>

@endsection
