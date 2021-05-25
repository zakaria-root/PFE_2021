<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- icons --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <title>Document</title>
</head>

<body>
    @if (session()->has('status'))
        <h3 style="color:green">
            {{ session()->get('status') }}
        </h3>
    @endif



<header>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <!-- Container wrapper -->
    <div class="container-fluid">
      <!-- Collapsible wrapper -->
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Navbar brand -->
        <a class="navbar-brand mt-2 mt-lg-0" href="#">
          <img
            src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png"
            height="15"
            alt=""
            loading="lazy"
          />
        </a>
        <!-- Left links -->
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('cafeRestaurants.index') }}">Restaurant</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Team</a>
          </li>
          {{-- <li class="nav-item"><a class="nav-link" href="{{ route('panier.affichePanier') }}">panier
            <span class="badge">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
        </a></li> --}}
        </ul>
      </div>
  
      <!-- Right elements -->
      <div class="d-flex align-items-center">
        <!-- Icon -->

        <a class="text-reset me-3" href="{{ route('panier.affichePanier') }}">
            <i class="fas fa-shopping-cart" style="color: rgb(176, 174, 174)"></i>
            <span class="badge bg-warning rounded-pill">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }}</span>
        </a>

        <!-- Avatar -->
        
      </div>
      <!-- Right elements -->
    </div>
    <!-- Container wrapper -->
  </nav>
  <!-- Navbar -->



 <!-- Background image -->
 <div
 id="intro-example"
 class="p-5 text-center bg-image"
 style="background-image: url('/img/pp.jpg');"
>
 <div class="mask" style="background-color: rgba(0, 0, 0, 0.326);">
   <div class="d-flex justify-content-center align-items-center h-100">
     <div class="text-white">
       <h1 class="mb-3">Café_Restaurant</h1>
       <h6 class="mb-4">selectionner votre ville, le café_restaurant que vous desiriez et commandez vous en lige           
       </h6>

       <form action="{{ route('cafe_restaurants.fitchVille') }}">
        
        <div class="form-outline text-center">
            <input type="text" class="form-control" name="ville" placeholder="ville">
          
        <button type="submit" class="btn btn-outline-light btn-lg m-2">chercher</button>
    </div>
    </form>

     </div>
   </div>
 </div>
</div>
<!-- Background image -->
</header>













   

    <div class="container">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
