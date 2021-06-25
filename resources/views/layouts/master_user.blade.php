<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Cafe Restaurant</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css"
    rel="stylesheet"
    />
    <style>
      .alert-success {
    color: #cbffdf;
    background-color: #538e6ad4;
    border-color: #b3e9c9;
}
.banner-item-01 {
    padding: 300px 0px;
    background-image: url(/assets/images/home.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
}
.banner-item-02 {
    padding: 300px 0px;
    background-image: url(/assets/images/cafecafe.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
}
.banner-item-03 {
    padding: 300px 0px;
    background-image: url(/assets/images/restaut.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
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
                <a class="nav-link" href="{{ url('/') }}">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/cafeRestauts') }}">notre cafes</a>
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
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
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

        </div><svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
          <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
        </symbol>
      </svg>
        @if (session()->has('valide'))
    <div class="alert alert-success d-flex align-items-center" role="alert">
      <svg class="bi flex-shrink-0 me-2 mr-2 " width="20" height="20" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
      <div>
        {{ session()->get('valide') }}
      </div>      
    </div>
    @endif 
      </nav>
      
     
    </header>
    
    <!-- Page Content -->
    @yield('content')

    
    <footer class="footer">
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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
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
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"
></script>
  
  </body>

</html>
