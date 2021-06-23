<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="{{ asset('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap') }}" rel="stylesheet">

    <title>Sixteen Clothing - About Page</title>
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
            <a class="navbar-brand" href="{{ url('/') }}"><h2>Sixteen <em>Clothing</em></h2></a>
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
                <li class="nav-item active">
                  <a class="nav-link" href="{{ url('/cafeRestauts') }}">Notre Cafes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ url('/h/cafeRestaut') }}">Nore Plats</a>
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
                <h4>about us</h4>
                <h2>our company</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
  
    

      <div class="team-members">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading d-flex justify-content-between">
                  <div class="col-4">
                      <h2>NOTRE CAFES</h2>
                  </div>
                  <div class="col-6 offset-5">
                      <form action="{{ url('/cafeRestauts') }}">
                    <div class="input-group">
                        <div class="form-outline" >
                          <input type="search" id="form1" class="form-control" name="ville"/>
                          <label class="form-label" for="form1">Search</label>
                        </div>
                        <button type="submit" class="btn btn-danger">
                          <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
                  </div>
                
              </div>
              
            </div>
            @foreach ($crs as $cr)
            @if ($cr->ville === request()->get('ville') or request()->get('ville') == null)
            <div class="col-md-4">
                <div class="team-member">
                  <div class="thumb-container">
                    <img src="https://www.maroc-cuisine-pro.ma/wp-content/uploads/2018/03/%C3%A9quipement-cafe-pour-caf%C3%A9-Maroc.jpg" alt="">
                    <div class="hover-effect">
                      <div class="hover-content">
                        <ul class="social-icons">
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fas fa-at"></i></a></li>
                        <li><a href="#"><i class="fas fa-phone"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <div class="down-content">
                    <a href="{{ route('plats.afficheCafePlat', ['cafe' => $cr->id]) }}"><h4>{{ Str::upper($cr->nomCafeRestaurant)  }}</h4></a>
                    <span>{{ $cr->ville }}</span>
                    <p>ce restaurant au nom de la fameuse plage de sidney est très original, différent par son style, son aménagement, sa carte et l'esprit de ses gérant. la nourriture est fraiche et healty.</p>
                    {{-- <a href=""><span class="float-right"><b>Produits Cafe >></b></span></a> --}}
                    <a
                        href="{{ route('plats.afficheCafePlat', ['cafe' => $cr->id]) }}"
                        type="button"
                        class="btn btn-outline-danger btn-rounded"
                        data-mdb-ripple-color="dark"
                        >
                        Produits Cafe >>
                    </a>
                  </div>
                  
                </div>
              </div>
              @endif
            @endforeach
            

            <div class="col-md-4">
              <div class="team-member">
                <div class="thumb-container">
                  <img src="assets/images/team_02.jpg" alt="">
                  <div class="hover-effect">
                    <div class="hover-content">
                      <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="down-content">
                  <h4>Karry Pitcher</h4>
                  <span>Product Expert</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
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
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="down-content">
                  <h4>Michael Soft</h4>
                  <span>Chief Marketing</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-member">
                <div class="thumb-container">
                  <img src="assets/images/team_04.jpg" alt="">
                  <div class="hover-effect">
                    <div class="hover-content">
                      <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="down-content">
                  <h4>Mary Cool</h4>
                  <span>Product Specialist</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-member">
                <div class="thumb-container">
                  <img src="assets/images/team_05.jpg" alt="">
                  <div class="hover-effect">
                    <div class="hover-content">
                      <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="down-content">
                  <h4>George Walker</h4>
                  <span>Product Photographer</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-member">
                <div class="thumb-container">
                  <img src="assets/images/team_06.jpg" alt="">
                  <div class="hover-effect">
                    <div class="hover-content">
                      <ul class="social-icons">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="down-content">
                  <h4>Kate Town</h4>
                  <span>General Manager</span>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing itaque corporis nulla.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
  
      <div class="services">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-gear"></i>
                </div>
                <div class="down-content">
                  <h4>Product Management</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat.</p>
                  <a href="#" class="filled-button">Read More</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-gear"></i>
                </div>
                <div class="down-content">
                  <h4>Customer Relations</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat.</p>
                  <a href="#" class="filled-button">Details</a>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-gear"></i>
                </div>
                <div class="down-content">
                  <h4>Global Collection</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat.</p>
                  <a href="#" class="filled-button">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  
  
      <div class="happy-clients">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="section-heading">
                <h2>Happy Partners</h2>
              </div>
            </div>
            <div class="col-md-12">
              <div class="owl-clients owl-carousel">
                <div class="client-item">
                  <img src="assets/images/client-01.png" alt="1">
                </div>
                
                <div class="client-item">
                  <img src="assets/images/client-01.png" alt="2">
                </div>
                
                <div class="client-item">
                  <img src="assets/images/client-01.png" alt="3">
                </div>
                
                <div class="client-item">
                  <img src="assets/images/client-01.png" alt="4">
                </div>
                
                <div class="client-item">
                  <img src="assets/images/client-01.png" alt="5">
                </div>
                
                <div class="client-item">
                  <img src="assets/images/client-01.png" alt="6">
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
