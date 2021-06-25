@extends('layouts.master_user')

@section('content')

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
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Sixteen Clothing</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Looking for the best products?</h4>
              <p>Tous les invités aiment bien la fabuleuse cuisine fusion à ce restaurant. Si vous avez faim, venez ici pour manger un saumon sockeye délicieux. La plupart des clients recommandent d'essayer un pain perdue délectable. A Organic Kitchen, les visiteurs peuvent boire un ale délicieux. On vous offrira un jus de fruits frais immense.</p>
              <ul class="featured-list">
                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                <li><a href="#">Consectetur an adipisicing elit</a></li>
                <li><a href="#">It aquecorporis nulla aspernatur</a></li>
                <li><a href="#">Corporis, omnis doloremque</a></li>
                <li><a href="#">Non cum id reprehenderit</a></li>
              </ul>
              <a href="about.html" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/feature-image.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Creative &amp; Unique <em>Sixteen</em> Products</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                </div>
                <div class="col-md-4">
                  <a href="#" class="filled-button">Purchase Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection