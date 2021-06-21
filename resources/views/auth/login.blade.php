

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Sixteen Clothing HTML Template</title>

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
    <link rel="stylesheet" href="assets/css/form.css">
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
          <a class="navbar-brand" href="index.html"><h2>Sixteen <em>Clothing</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto " >
              <li class="nav-item  ">
                <a class="nav-link" href="{{ url('/') }}">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="{{ url('/cafeRestauts') }}">notre cafes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>
              @if (Route::has('login'))
                
                    @auth
                        <li class="nav-item pl-5">
                            <a class="nav-link" href="{{ url('/home') }}">
                                Your Acount</a>
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
                        <li class="nav-item pl-5 active">
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

        </div>
        
      </nav>
    </header>
<section class="intro">
    <div class="mask d-flex align-items-center h-100 gradient-custom">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-xl-10">
            <div class="card">
              <div class="card-body p-5">
  
                <div class="row d-flex align-items-center">
                  <div class="col-md-6 col-xl-7">
  
                    <div class="text-center pt-md-5 pb-5 my-md-5" style="padding-right: 24px;">
                      <i class="fas fa-laptop" style="color: #D6D6D6;"></i>
                    </div>
  
                  </div>
                  <div class="col-md-6 col-xl-4 text-center">
  
                    <h2 class="fw-bold mb-4 pb-2">Member Login</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="from-group mt-3">
                            
                            <div class="form-outline">
                                <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <label for="email" class="form-label" >Email</label>
                                
                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert" style="position: relative; background-color: rgb(255 219 219 / 50%);">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="form-outline mt-4">
                                <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                                <label for="password" class="form-label" >password</label>
                                
                                @error('password')
                                <span class="invalid-feedback" role="alert" style="position: relative; background-color: rgb(255 219 219 / 50%);">
                                    {{ $message }}
                                </span>
                            @enderror
                                </div>
                        </div>

                        

                        <div class="form-group ">
                            <div class="text-center">
                                <button type="submit" class="btn btn-danger btn-block btn-lg" >Login</button>
                                <p class="small mt-3 mb-4 text-muted">Forgot <span class="fw-bold"><a href="#!" class="text-muted">Username</a> / <a class="text-muted" href="{{ route('password.request') }}">
                                   password
                                </a>?</span></p>
                                <a href="{{ route('register') }}" class="link-danger">Create your Account <i class="fas fa-long-arrow-alt-right"></i></a>
                              </div>
                        </div>
                    </form>
                    
                  </div>
                </div>
  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

{{-- <div class="container" style="padding-top: 200px ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}


<footer style="position: absolute;
                bottom: 0px;
                width: 100%;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="">
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

