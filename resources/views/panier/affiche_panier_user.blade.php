<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap') }}" rel="stylesheet">

    <title>C / RESTAU</title>
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
  .about-heading {

background-image: url(/assets/images/food.jpg);

}
</style>
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}
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
          <a class="navbar-brand" href="{{ url('/') }}"><h2>C / <em>RESTAU</em></h2></a>
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
              <h2>VOTRE PANIER </h2>
            </div>
          </div>
         
          <div class="col-md-6 ">
            <div class="right-image">
              <ul class="list-group ">
                @if (Session::has('cart'))
                
                  
              
                @forelse ($plats as $i)
                  <li>
                    <div class="card border border-danger shadow-0 mb-3 "  >
                      <div class="card-header d-flex justify-content-between">
                        <div class="col-5">

                          NOM PRODUIT : <b>{{ Str::upper($i['item']['nomPlat'])  }}</b>
                        </div>
                        <div class="row col-2 offset-4">
                          <span class="badge bg-danger text-white rounded-pill px-2">{{ $i['qty'] }}</span>
                      </div>
                      <div>
                          <a href="{{ route('panier.supprimerItem', ['item' => $i['item']['id']]) }}">
                              <i class="fas fa-times" style="color:rgb(58, 58, 58)"></i>
                          </a>
                      </div>
                      </div>
                      <div class="card-body text-danger">
                        <h6 class="card-title">le prix totale du plat est : ${{ $i['price'] }}</h6>
                       
                      </div>
                    </div>
                  </li>
                    
                  
                  @empty
                  
                  <div class="card text-center mt-5" >
                    <div class="card-header " style="color: red">ATTENTION</div>
                    <div class="card-body">
                      <h5 class="card-title">votre panier est vide</h5>
                      <p class="card-text">
                        désolé monsieur je pense que votre panier est vide vous pouver choiosire votre achat dans la list des magasin avant de les validé. <br><br>
                      </p>
                      <a href="{{ route('plat_user') }}" class="btn btn-danger">notre magasin</a>
                    </div>
                      
                  </div>
                  @endforelse
                  
            </ul>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>la validation de la commande </h4>
              <p>
                <div class="row">
                  
                    <div class="col-8  ml-2">
                      
                      <h3>
                        <i class="fas fa-dollar-sign"></i>
                        {{ $totalPrix ?? '0' }}
                      </h3>
                      <h4 class="mt-0">
                        <small>Ex Tax: ${{ $totalPrix ?? '0' }} </small>
                      </h4>
                      
                    </div>

                  </div>
                    </p>
                    
                      <a href="{{ route('store') }}" class="btn btn-outline-success btn-lg btn-flat float-right " >
                      <i class="fas fa-check fa-lg pr-1"></i>
                    Valider panier
                    </a>
                    
                    <div class="">
                       <a href="{{ route('panier.viderPanier') }}" class="btn btn-outline-danger btn-lg btn-flat ">
                        <i class="fas fa-trash pr-2"></i>
                      vider panier</a>
                    </div>
                   
                      <p></p>
                </div>
         
              <ul class="social-icons">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fas fa-at"></i></a></li>
                <li><a href="#"><i class="fas fa-phone"></i></a></li>
              </ul>
            </div>
            
            @else
            
          </div>
        </div>
      </div>
    </div>

    
    


 



    <div class="container">
    <div class="row">
      <div class="col-10 offset-1">
        <div class="card text-center " >
      <div class="card-header bold" style="color: red">ATTENTION</div>
      <div class="card-body">
        <h5 class="card-title pt-3">votre panier est vide</h5>
        <p class="card-text py-3">
          désolé monsieur je pense que votre panier est vide vous pouver choiosire votre achat dans la list des magasin avant de les validé. <br><br>
        </p>
        <a href="{{ route('plat_user') }}" class="btn btn-danger">notre magasin</a>
      </div>
    </div>
  </div>
      </div>
    </div>
  </div>
        @endif
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2021 C / RESTAU.
              </p></div>
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
