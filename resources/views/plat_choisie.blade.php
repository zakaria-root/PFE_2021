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
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
    <style>
      .about-heading {
    
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
              <li class="nav-item active ">
                <a class="nav-link" href="{{ url('/',) }}">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/cafeRestauts') }}">Notre Cafes</a>
              </li>
              <li class="nav-item">
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
    <div class="page-heading about-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>NOUVELLES ARRIVÉES</h4>
              <h2>NOS PLATS</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="best-features about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>NOM PLAT :  <b>{{ Str::upper($plat->nomPlat)  }}</b> </h2>
            </div>
          </div>
         
          <div class="col-md-6 ">
            <div class="right-image">
              <img src="{{ asset('storage/'.$plat->image) }}" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>toutes les informations concernant le plat {{ $plat->nomPlat }}</h4>
              <div class="nav nav-tabs" id="product-tab" role="tablist">
                <a class="nav-item nav-link" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
                <a class="nav-item nav-link active" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Comments</a>
              </div>
              <div class="tab-content p-3" id="nav-tabContent">
                <div class="tab-pane fade" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> 
                    <p>En cuisine, un mets est un plat ou un aliment préparé, servi lors d'un repas. Issu du latin mittere, le « mets » indique, au Moyen Âge, le plat cuisiné, solide ou liquide, que l'on place à table. Il en va à peu près de même dans l'acception actuelle, avec une connotation éventuellement un peu simpliste ou, au contraire, un rien précieuse. 
                      <div class="row">
                        
                          <div class="col-4">
                            <h3>
                              ${{ $plat->prix }}
                            </h3>
                            <h4 class="mt-0 mb-0">
                              <small>Ex Tax: ${{ $plat->prix }} </small>
                            </h4>
                          </div>
                          <div class="col-6 offset-2 mt-1">
                            <form method="get" action="{{ route('panier.add', ['plat' => $plat->id]) }}">
                              <button type="submit" class="btn btn-outline-danger btn-lg btn-flat" >
                              <i class="fa fa-cart-plus fa-lg" aria-hidden="true"></i>
                              Add to Cart
                              </button>
                          </form>
                            
                            
                          </div>
                        
                          
                      </div>
                        

                    </p>
                </div>
                <div class="tab-pane fade active show" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">
                  <p><b>les avies des autre clients qui achet le plat</b><br>
                        le nombre des client qui donne leurs avie sur le plat: <b><span style="color: red ; padding-left: 10px"> Reviews ({{ $plat->nb_revue }})</span></b> <br>
                      le nombre des etoiles du plat: <span style="padding-left: 5px">
                        @for($i=0;$i<$plat->etoiles;$i++)
                        <i class="fa fa-star"></i>
                          @endfor
                        </span>
                        <br>
                      Si vous aimez notre plat, n'hésite pas de nous donner votre avies sur le plat <br>
                      <b style="padding-right: 5px">choisi votre votre avie : </b>
                    <br>
                      <a @if($plat->per_etoiles === 1 ) href="{{ route('etoile.addEtoile', ['id'=>$plat->id,'etoile' => 1 ])  }}" @endif class="active "><i class="fa fa-star"></i></a>
                      <a @if($plat->per_etoiles === 1 ) href="{{ route('etoile.addEtoile', ['id'=>$plat->id,'etoile' => 2 ])  }}" @endif class="active"><i class="fa fa-star"></i></a>
                      <a @if($plat->per_etoiles === 1 ) href="{{ route('etoile.addEtoile', ['id'=>$plat->id,'etoile' => 3 ])  }}" @endif class="active"><i class="fa fa-star"></i></a>
                      <a @if($plat->per_etoiles === 1 ) href="{{ route('etoile.addEtoile', ['id'=>$plat->id,'etoile' => 4 ])  }}" @endif class="active"><i class="fa fa-star"></i></a>
                      <a @if($plat->per_etoiles === 1 ) href="{{ route('etoile.addEtoile', ['id'=>$plat->id,'etoile' => 5 ])  }}" @endif class="active"><i class="fa fa-star"></i></a>
                    </p>
                  </div>
                <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"> Cras ut ipsum ornare, aliquam ipsum non, posuere elit. In hac habitasse platea dictumst. Aenean elementum leo augue, id fermentum risus efficitur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque et erat. Etiam dignissim aliquam ligula, aliquet feugiat nibh rhoncus ut. Aliquam efficitur lacinia lacinia. Morbi ac molestie lectus, vitae hendrerit nisl. Nullam metus odio, malesuada in vehicula at, consectetur nec justo. Quisque suscipit odio velit, at accumsan urna vestibulum a. Proin dictum, urna ut varius consectetur, sapien justo porta lectus, at mollis nisi orci et nulla. Donec pellentesque tortor vel nisl commodo ullamcorper. Donec varius massa at semper posuere. Integer finibus orci vitae vehicula placerat. </div>
              </div>
              <ul class="social-icons">
                  <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                  
                  <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fas fa-at"></i></a></li>
                  <li><a href="#"><i class="fas fa-phone"></i></a></li>
              </ul>
            </div>
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


    <!-- Bootstrap core JavaScript -->
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
{{-- <script src="{{ asset('js/app.js') }}"></script> --}}
<!-- MDB -->
<script
  type="text/javascript"
  src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js') }}"
></script>
  </body>

</html>
