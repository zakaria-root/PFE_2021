@extends('layouts.master_user')

@section('content')
<style>
  .ml-5, .mx-5 {
    margin-left: 12rem!important;
}
.best-features .container .row {
    border-bottom: 1px solid #eee;
    padding-bottom: 168px;
}
</style>
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>MEILLEUR PLATS</h4>
            <h2>BIENVENUE CHEZ NOUS</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>NOS CAFES</h4>
            <h2>OBTENEZ VOTRE MEILLEUR CAFE</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>NOS RESTAURANTS</h4>
            <h2>OBTENEZ VOTRE MEILLEUR PLAT</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Derniers Plats</h2>
              <a href="{{ url('/h/cafeRestaut') }}">VOIR TOUT LES PLATS
                <i class="fa fa-angle-right"></i></a>
            </div>
          </div>

          @foreach ($plats as $plat)
          <div class="col-md-4">
            <div class="product-item">
              <a href="{{ url('/plate', ['id' =>$plat->id]) }}"><img src="{{ asset('storage/'.$plat->image) }}" style="max-height: 200px"></a>
              <div class="down-content">
                <a href="{{ url('/plate', ['id' =>$plat->id]) }}"><h4>{{ $plat->nomPlat }} </h4></a>
                <h6>${{ $plat->prix }}</h6>
                <p>{{ $plat->description }}</p>
                <ul class="stars">
                 @for($i=0;$i<$plat->etoiles;$i++)
                  <li><i class="fa fa-star"></i></li>
                  @endfor
                </ul>
                <span>Reviews ({{ $plat->nb_revue }})</span>
              </div>
            </div>
          </div>

        @endforeach
          {{-- @foreach --}}
         
        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Concernant Nos Cafe Restaurant</h2>
            </div>
          </div>
          <div class="col-md-5">
            <div class="left-content text-center mt-5">
              <h4>Poisson Sole?</h4>
              <p>Vous n'avez pas besoin de préparations sophistiquées pour obtenir un résultat impressionnant, surtout lorsqu'il s'agit de poisson. La sole meunière est donc une recette très simple et facile à préparer. Le plat final est à la fois savoureux, croustillant, beurré et citronné..</p>
              
              <a href="about.html" class="filled-button px-5 ml+5">Voire Plus</a>
            </div>
          </div>
          <div class="col-md-7">
            <div class="right-image ">
              <img src="https://i.pinimg.com/originals/1d/22/b8/1d22b85173e191be095bd397a837e844.jpg" style="max-height: 300px ;max-width: 80%" class="ml-5" alt="">
            </div>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-12">
          </div>
          <div class="col-md-7">
            <div class="right-image">
              <img src="https://c4.wallpaperflare.com/wallpaper/763/540/956/steak-meat-roasting-roast-beef-wallpaper-preview.jpg" style="max-height: 300px;max-width: 80%" alt="">
            </div>
          </div>
          <div class="col-md-5">
            <div class="left-content text-center mt-2">
              <h4>Morceaux De Bœuf</h4>
              <p>
                Lorsque vous commencez avec des morceaux de bœuf comme celui-ci, il n'en faut pas beaucoup ! Je ne les ai assaisonnés qu'avec du sel de mer et bien sûr du poivre noir moulu, et ils n'ont besoin que d'un peu de sauce. Alors, tout va bien. Je les ai servis avec des pommes de terre rouges rôties (voir recette) et des asperges rôties et nous avons mangé dans la terrasse maintenant que le temps s'est réchauffé - parfait !
                .</p>
              
              <a href="about.html" class="filled-button px-5 ml+5">Voire Plus</a>
            </div>
          </div>
          
        </div>
      </div>
    </div>

  
@endsection