<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap') }}" rel="stylesheet">

    <title>C / RESTAUT</title>
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
    
    background-image: url(stek.jpg);

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
            <a class="navbar-brand" href="{{ url('/') }}"><h2>C / <em>RESTAUT</em></h2></a>
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
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/h/cafeRestaut') }}">Nore Plats</a>
                </li>
                <li class="nav-item active">
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
              <h4>a propos de nous</h4>
              <h2>notre compagnie
              </h2>
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
              <h2>A Propos De Nous</h2>
            </div>
          </div>
          <div class="col-md-4 mt-5">
            <div class="right-image ">
              <img src="about_us_cofe.jpeg"  alt="">
            </div>
          </div>
          <div class="col-md-4 text-center">
            <div class="left-content ">
              <h4>Qui sommes-nous et que faisons-nous ??</h4>
              <p>
                Nous sommes une entreprise de personnes exceptionnelles qui a pour mission d’avoir les meilleures cafés restaurants du monde. Nous disposant de plusieurs cafés restaurants dans plusieurs villes afin d'offrir la haute disponibilité quoi que ce soit l’endroit de nos clients et la rapidité de service afin de les satisfaire de <b>100%</b>.
                <br><br>
                Nous défendons quelque chose de bon dans tout ce que nous faisons : Cela signifie des ingrédients haut de gamme soigneusement achetée auprès de fournisseurs partageant les mêmes idées que nous admirons et aimons
                <br><br>
                Notre objectif est de fournir un environnement amusant et sûr où nos clients peuvent profiter de bons aliments fabriqués avec des ingrédients de qualité préparé dans un environnement propre, pétillant et à des prix abordables.
              </p>
              <ul class="social-icons pr-4">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fas fa-at"></i></a></li>
                <li><a href="#"><i class="fas fa-phone"></i></a></li>
              </ul>
            </div>
          </div>

          <div class="col-md-4 mt-5">
            <div class="right-image ">
              <img src="stek_restaurant.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="team-members">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>
                Les membres de notre équipe</h2>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="assets/images/team_01.jpg" alt="">
                <div class="hover-effect">
                  <div class="hover-content">
                    <ul class="social-icons">
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fas fa-at"></i></a></li>
                      <li><a href="#"><i class="fab fa-github-alt fa-lg"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>Anass Irizi</h4>
                <span>Casablanca</span>
                <p>e suis un etudiant de faculté ben m'sik bac+2 option base de donne .</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="assets/images/team_03.jpg" alt="">
                
                <div class="hover-effect">
                  <div class="hover-content">
                    <ul class="social-icons">
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                      <li><a href="#"><i class="fas fa-at"></i></a></li>
                      <li><a href="#"><i class="fab fa-github-alt fa-lg"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>Elmourtazak Zakaria</h4>
                <span>Casablanca</span>
                <p>je suis un etudiant de faculté ben m'sik bac+2 option base de donne .</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="team-member">
              <div class="thumb-container">
                <img src="assets/images/team_02.jpg" alt="">
                <div class="hover-effect">
                  <div class="hover-content">
                    <ul class="social-icons">
                      <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fas fa-at"></i></a></li>
                <li><a href="#"><i class="fab fa-github-alt fa-lg"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="down-content">
                <h4>Elmourtazak Kawtar</h4>
                <span>Casablanca</span>
                <p>je suis une etudiante de faculté ben m'sik bac+2 option base de donne .</p>
              </div>
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
  