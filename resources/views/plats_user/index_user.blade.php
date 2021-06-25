<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap') }}" rel="stylesheet">

    <title>Cafe Restaurant</title>
    {{-- <link rel="stylesheet" href="{{ asset('css/style.css') }}"> --}}
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<!--
  

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo-sixteen.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.css') }}">

    <!-- Font Awesome -->
<link
href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css') }}"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="{{ asset('https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap') }}"
rel="stylesheet"
/>
<!-- MDB -->
<link
href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css') }}"
rel="stylesheet"
/>
<style>
.products-heading {
    background-image: url(/assets/images/food.jpg);
}
</style>
  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

 
    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
          <div class="container p-0" >
            <a class="navbar-brand" href="{{ url('/') }}"><h2>Cafe <em>Restaurant</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto " >
                <li class="nav-item  ">
                  <a class="nav-link" href="{{ url('/',) }}">Home
                    <span class="sr-only">(current)</span>
                  </a>
                </li> 
                <li class="nav-item ">
                  <a class="nav-link" href="{{ url('/cafeRestauts') }}">Notre Cafes</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="{{ url('/h/cafeRestaut') }}">Notre Plats</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/About') }}">propos de nous</a>
                </li>
                @if (Route::has('login'))
                  
                      @auth
                          <li class="nav-item pl-5">
                            @if (Auth::user()->role == "admin" or Auth::user()->role == "serveur")
                            <a class="nav-link" href="{{ url('/home') }}">
                                Your Acount</a>
                                @endif
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                      log out
                              </a>
  
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                          </li>
                              
                            
                      @else
                          <li class="nav-item pl-5">
                              <a class="nav-link" href="{{ route('login') }}">
                                  log in</a>
                            </li>
                          @if (Route::has('register'))
                              <li class="nav-item" href="{{ route('register') }}">
                                  <a class="nav-link" href="contact.html">register</a>
                                </li>
                          @endif
                      @endauth
                 
              @endif
                
                
  
              </ul>
              
            </div>
           
            <ul>
                <li>
                    <a class="text-reset " href="{{ route('panier.affichePanier') }}">
              <i class="fas fa-shopping-cart" style="color: rgb(176, 174, 174)"></i>
              <span class="badge bg-danger rounded-pill">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
              </a>  
                </li>
            </ul>
  
          </div>
          
        </nav>
      </header>
  

    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>
                NOUVELLES ARRIVÉES</h4>
              <h2>NOS PLATS </h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="filters">
              <ul>
                  <li class="active" data-filter="*">tout produit</li>
                  <li data-filter=".cafe">produit cafe</li>
                  <li data-filter=".Restaurant">produit restaurant</li>
                  
              </ul>
            </div>
          </div>
          @php
              $cat = "all";
          @endphp
          <div class="col-md-12">
            <div class="filters-content">
                <div class="row grid">
                    @foreach ($plats as $plat)
                    <div class="col-lg-4 col-md-4 all {{ $plat->categorie }}">
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

                    
                  
          
                  
          

                </div>
            </div>
          </div>

        
          <div class="col-md-12">
            <ul class="pages">
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.
            
            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>


    <!-- Additional Scripts -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/owl.js') }}"></script>
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script src="{{ asset('assets/js/isotope.js') }}"></script>
    <script src="{{ asset('assets/js/accordions.js') }}"></script>

    <script language = "{{ asset('text/Javascript') }}"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>

<script
  type="text/javascript"
  src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js') }}"
></script>
  </body>

</html>
