<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>C / RESTAUT</title>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  
  <!-- Font Awesome -->
<style>
 [class*='sidebar-dark-'] .nav-sidebar > .nav-item.menu-open > .nav-link, [class*='sidebar-dark-'] .nav-sidebar > .nav-item:hover > .nav-link, [class*='sidebar-dark-'] .nav-sidebar > .nav-item > .nav-link:focus {
    
  position: relative;
  animation-name: example;
  animation-duration: 0.8s;
  background-color:#c74665ab;

}
@keyframes example {
  0%   {background-color:#c7466500;
    
    #ffffffcf }
  
  100% {background-color:#c74665ab;
    color: #ffffff;}
}

[class*='sidebar-dark-'] .nav-treeview > .nav-item > .nav-link:hover, [class*='sidebar-dark-'] .nav-treeview > .nav-item > .nav-link:focus {
  position: relative;
  animation-name: example;
  animation-duration: 0.8s;
  background-color:#c74665ab;
  
}
[class*='sidebar-dark-'] .nav-treeview > .nav-item > .nav-link.active, [class*='sidebar-dark-'] .nav-treeview > .nav-item > .nav-link.active:hover, [class*='sidebar-dark-'] .nav-treeview > .nav-item > .nav-link.active:focus {
    
    background-color: rgb(218 218 218 / 78%);
  color: #202020e7;
  
}
.sidebar-dark-primary .nav-sidebar > .nav-item > .nav-link.active, .sidebar-light-primary .nav-sidebar > .nav-item > .nav-link.active {
  position: relative;
  animation-name: example;
  animation-duration: 1s;
  background-color:#c74665ab;
}
[class*='sidebar-dark-'] {
    /* background: #C04848;
    background: -webkit-linear-gradient(to top, #480048, #C04848);
    background: linear-gradient(to top, #480048, #333333); */

    
    
    /* background: #C04848;
    background: -webkit-linear-gradient(to top, #480048, #C04848);
    background: linear-gradient(to top, #7d032ce6, #302048); */
  

}
.card-header {
    padding: 0.75rem 1.25rem;
    margin-bottom: 0;
    background-color:rgb(203 196 251 / 35%);
    border-bottom: 1px solid rgba(0, 0, 0, 0.125);
}
.btn-outline-primary {
    color: #7b52c5;
    border-color: #a254a5;
}
.btn-outline-primary:hover {
    color: #fff;
    background-color: #9241a4;
    border-color: #9b56cd;
}
.btn-outline-primary:not(:disabled):not(.disabled):active, .btn-outline-primary:not(:disabled):not(.disabled).active, .show > .btn-outline-primary.dropdown-toggle {
  color: #fff;
    background-color: #a758aa;
    border-color: #9b56cd;
}
.form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #784b79b8;
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgb(144 86 202 / 22%);
}
.btn:focus, .btn.focus {
    outline: 0;
    box-shadow: 0 0 0 0.2rem rgb(133 91 200 / 31%);
}
.btn-danger {
    color: #fff;
    background-color: #9c3c5a;
    border-color: #c34d71;
}
.btn-danger:hover {
    color: #fff;
    background-color: #da3569;
    border-color: #b4315b;
}
.card-primary.card-outline {
    border-top: 3px solid #c53e67;
}
.btn-primary {
    color: #fff;
    background-color: #3b73a0;
    border-color: #3884c2;
}
.btn-primary:hover {
    color: #fff;
    background-color: #3496ff;
    border-color: #3496ff;
}
.btn-success {
    color: #fff;
    background-color: #3d9970;
    border-color: #279c58;
}
.btn-success:hover {
    color: #fff;
    background-color: #33ce75;
    border-color: #47b174;
}
.btn-success:hover {
    color: #fff;
    background-color: #33ce75;
    border-color: #47b174;
}
.content-wrapper {


  background: #cc2b5e;  /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #6f3981, #c22d5c);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #8f42a8, #c42e5d); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
.iconsidebare:hover{
  color: white;
}
.mon-site:hover{
  color: white;
}
</style>
</head>
<body class="hold-transition sidebar-mini content-wrapper" >
<div class="wrapper" >

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" 
  style="border-width: 0px;
  -webkit-box-shadow: 0px 0px;
  box-shadow: 0px 0px;
  background-color: rgba(0,0,0,0.0);
  background-image: -webkit-gradient(linear, 50.00% 0.00%, 50.00% 100.00%, color-stop( 0% , rgba(0,0,0,0.00)),color-stop( 100% , rgba(0,0,0,0.00)));
  background-image: -webkit-linear-gradient(270deg,rgba(0,0,0,0.00) 0%,rgba(0,0,0,0.00) 100%);
  background-image: linear-gradient(180deg,rgba(0,0,0,0.00) 0%,rgba(0,0,0,0.00) 100%);">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars fa-lg iconsidebare" style="color: rgb(235, 235, 235)"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block ">
        <a href="{{ url('/') }}" class="nav-link ml-3 " style="color: rgb(235, 235, 235)"><b>MON SITE</b></a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    
  </nav>
  <!-- /.navbar -->
    

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link text-center">
        <i class="fas fa-coffee ml-3 "></i>
      <span class="brand-text font-weight-light pr-4">C-RESTAU</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3  mb-3 ">
        <div class=" text-center">
          <img src="{{ asset('storage/' . Auth::user()->image) }}" style="width: 80%; max-height: 190px" class="img-circle elevation-2 " alt="User Image">
          
        </div>
        
        <span class="brand-text font-weight-light  d-block text-center pt-3 pb-3 "><a href="{{ url('/profile') }}" class=" "><b>{{ Auth::user()->name }}</b></a></span>
        
        
        
        
        
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 @if (Auth::user()->role == "admin" or Auth::user()->role == "serveur")
               <li class="nav-item">
                <a href="{{ url('/home') }}" class="nav-link @if ($etat === "home")
                active
              @endif ">
                  <i class=" nav-icon fas fa-tachometer-alt"></i>
                  <p>
                    Dashboard
                    
                  </p>
                </a>
              </li>
              @endif
              <li class="nav-item">
                <a href="{{ url('/profile') }}" class="nav-link @if ($etat === "profile")
                active
              @endif "">
                  <i class="nav-icon fas fa-user-tie"></i>
                  <p>
                    Profile
                    
                  </p>
                </a>
              </li>
              @if (Auth::user()->role === "admin")
                
              
          <li class="nav-item has-treeview @if ($etat === "utilisateurs" || $etat === "employees")
          menu-open
        @endif ">
            <a href="#" class="nav-link @if ($etat === "utilisateurs" || $etat === "employees")
            active
          @endif ">
              <i class="nav-icon fas fa-users "></i>
              <p>
                Utilisateurs
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/utilisateurs') }}" class="nav-link  @if ($etat === "utilisateurs")
                  active
                @endif">
                  <i class="fas fa-user-tag nav-icon "></i>
                  <p class="">Comptes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ url('/employees') }}" class="nav-link @if ($etat === "employees")
                active
              @endif">
                    <i class="fas fa-user-cog nav-icon "></i>
                  <p class="">Employés</p>
                </a>
              </li>
            </ul>
          </li>
         
          <li class="nav-item">
            <a  href="{{ url('/cafeRestaurants') }}"  class="nav-link @if ($etat === "cafeRestaurants")
            active
          @endif">
              <i class="fas fa-laptop-house nav-icon"></i>
              <p>
                Cafes-Restaurants
                
              </p>
            </a>
          </li>

           <li class="nav-item has-treeview @if ($etat === "materiels" || $etat === "PAlimantaires")
           menu-open
         @endif ">
            <a href="#" class="nav-link @if ($etat === "materiels" || $etat === "PAlimantaires")
            active
          @endif">
              <i class="nav-icon fas fa-archive"></i>
              <p>
                Stock
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/materiels') }}" class="nav-link @if ($etat === "materiels" )
                active
              @endif">
                  <i class="fa fa-business-time nav-icon "></i>
                  <p class="">Matériels
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/PAlimantaires" class="nav-link @if ( $etat === "PAlimantaires")
                active
              @endif">
                  
                  <i class="fas fa-layer-group nav-icon "></i>
                  <p class="">Matières première</p>
                </a>
              </li>
              
            </ul>
            <li class="nav-item">
              <a href="{{ url('/plats') }}" class="nav-link @if ( $etat === "plats")
              active
            @endif">
                <i class="fas fa-concierge-bell nav-icon"></i>
                   <p>
                  Produits
                  
                </p>
              </a>
            </li>
            @endif
          </li></li><li class="nav-item">
              <a class="dropdown-item nav-link" 
              data-toggle="modal" data-target="#modal-default">
              <i class="nav-icon fas fa-toggle-off"></i>
              <p>
                  {{ __('Logout') }}
              </p>
              </a>
              
              
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   
    <div class="content">
      <div class="container-fluid">
        <div class="container">

              <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
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

              @if (count($errors))
              {{-- <div class="alert alert-danger" role="alert">   --}}
                <div class="alert alert-danger d-flex align-items-center pb-0 pt-2" role="alert">

                  <ul style="list-style-type: none;">
                  @foreach ($errors->all() as $message)
                  <li> 
                    <div>
                    <svg class="bi flex-shrink-0 me-2 mr-2 mb-2" width="20" height="20" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                      {{ $message }}
                    </div>
                  </li>
                  @endforeach
                </ul>
                </div> 
              @endif
              @if (session()->has('modifier'))
          <div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2 mr-2 " width="20" height="20" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div>
              {{ session()->get('modifier') }}
            </div>      
          </div>
          @endif 
          @if (session()->has('supprimer'))
          <div class="alert alert-warning d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2 mr-2 " width="20" height="20" role="img" aria-label="Warning:"><use xlink:href="#check-circle-fill"/></svg>
            <div>
              {{ session()->get('supprimer') }}
            </div>      
          </div>
          @endif 
          @if (session()->has('ajouter'))
          <div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2 mr-2 " width="20" height="20" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div>
              {{ session()->get('ajouter') }}
            </div>      
          </div>
          @endif  
            </div>
          </div>
        
          </div>
         
          
          <div class="pt-1">
         @yield('content')
        </div>
      </div>
    </div>

 
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->

</div>
<!-- ./wrapper -->
<!-- REQUIRED SCRIPTS -->
<!-- Button trigger modal -->
{{-- logout modale --}}
<div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content ">
      <div class="modal-header bg-teal">
        <h4 class="modal-title">quiter la session</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body text-center">
        <p>vous êtes sûr de vouloir quitter la session administrateur…</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-secondary px-5" data-dismiss="modal">Non</button>
        <a type="button"
        href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();"
        class="btn btn-primary px-5 btn-success">Oui</a>
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>


{{-- model materiel modifier --}}
<div class="modal fade " id="editeProfile" tabindex="-1" role="dialog" aria-labelledby="ajouterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-blue1">
        <h5 class="modal-title" id="ajouterLabel">Modifier le profile</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('profile.update', 'test') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <div class="modal-body" >        
        <input id="prodId" class="prodId" name="value" type="hidden" value="" />

        <div class="form-group ">
          <label for="nom">Nom</label>
          <input type="text" class="form-control"name="nom"  id="nom"  placeholder="entrer le nom" value="{{ auth::user()->name }}"> 
         
        </div>
          <div class="form-group ">
            <label for="exampleInputEmail1">Adress email</label>
            <input type="email" class="form-control" name="email" id="email"  placeholder="entrer le email" value="{{ auth::user()->email }}"> 
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Mot de passe</label>
            <input type="password" class="form-control" name="motDePass" id="pass"  value="">
          </div>
          <label for="image">Image</label>
          
          <div class="form-group input-group mb-3">
            
            <div class="input-group-prepend">
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="image" id="image">
              <label class="custom-file-label px-1" for="inputGroupFile01">Choose file</label>
            </div>
          </div>
      </div>
      <div class="modal-footer  justify-content-between">
        <button type="button"  class="btn btn-secondary px-4" data-dismiss="modal">fermer</button>
        <button type="submit" class="btn btn-info px-4">sauvgarder</button>
      </div>
    </form>
    </div>
  </div>
</div>

<!-- Modal cafeRestaurant ajouter-->
<div class="modal fade " id="ajouterCafe" tabindex="-1" role="dialog" aria-labelledby="ajouterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-teal">
        <h5 class="modal-title" id="ajouterLabel">ajouter cafe_restaurant</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('cafeRestaurants.index') }}" method="post">
        @csrf
      <div class="modal-body">        
        <div class="form-group ">
          <label for="nom">nom du CafeRestaurant</label>
          <input type="text" class="form-control" name="nomCafeRestaurant"  id="nom_cafe"  placeholder="entrer le nom du CafeRestaurant" value=""> 
         
        </div>
          <div class="form-group ">
            <label for="exampleInputEmail1">la ville</label>
            <input type="text" class="form-control" name="ville" id="ville"  placeholder="entrer la ville" value=""> 
          </div>
      </div>
      <div class="modal-footer  justify-content-between">
        <button type="button" class="btn btn-secondary swalDefaultSuccess px-4" data-dismiss="modal">fermer</button>
       
        <button type="submit" class="btn btn-success px-5">cree</button>
      </div>
    </form>
    </div>
  </div>
</div>

<!-- Modal cafeRestaurant supprimer-->

<div class="modal fade" id="deleteCafeRestaurant" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-danger">
      <div class="modal-header">
        <h4 class="modal-title text-center">supprimer cafe_restaurant</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="{{ route('cafeRestaurants.destroy', 'test') }}" method="post">
        @csrf
        @method('delete')
        
        
        <div class="modal-body text-center" >        
        <input id="prodId" class="prodId" name="value" type="hidden" value="" />
        
          <p>! êtes-vous sûr  que vous voulez supprimer cet cafe_restaurant...?</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-outline-light px-4" data-dismiss="modal">fermer</button>
        <button type="submit" class="btn btn-outline-light px-4">valide</button>
      </div>
    </form>
      <!-- /.modal-content -->
    </div>
  </div>
  <!-- /.modal-dialog -->
</div>


<!-- Modal plat supprimer-->

<div class="modal fade" id="deletplat" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-danger">
      <div class="modal-header">
        <h4 class="modal-title text-center">supprimer plat</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="{{ route('plats.destroy', 'test') }}" method="post">
        @csrf
        @method('delete')
        
        
        <div class="modal-body text-center" >        
        <input id="value_plat" class="prodId" name="value" type="hidden" value="" />
        
          <p>! êtes-vous sûr  que vous voulez supprimer cet plat...?</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-outline-light px-4" data-dismiss="modal">fermer</button>
        <button type="submit" class="btn btn-outline-light px-4">valide</button>
      </div>
    </form>
      <!-- /.modal-content -->
    </div>
  </div>
  <!-- /.modal-dialog -->
</div>



<!-- Modal materiel supprimer-->

<div class="modal fade" id="deleteMateriel" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-danger">
      <div class="modal-header">
        <h4 class="modal-title text-center">supprimer materiel</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="{{ route('materiels.destroy', 'test') }}" method="post">
        @csrf
        @method('delete')
        
        
        <div class="modal-body text-center" >        
        <input id="prodId" class="prodId" name="value" type="hidden" value="" />
        
          <p>! êtes-vous sûr  que vous voulez supprimer cet materiel...?</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-outline-light px-4" data-dismiss="modal">fermer</button>
        <button type="submit" class="btn btn-outline-light px-4">valide</button>
      </div>
    </form>
      <!-- /.modal-content -->
    </div>
  </div>
  <!-- /.modal-dialog -->
</div>



<!-- Modal produit alimentaire supprimer -->

<div class="modal fade" id="deletPAlimentaire" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-danger">
      <div class="modal-header">
        <h4 class="modal-title text-center">Supprimer produit alimentaire</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="{{ route('PAlimantaires.destroy', 'test') }}" method="post">
        @csrf
        @method('delete')
        
        
        <div class="modal-body text-center" >        
        <input id="pa_id" class="prodId" name="value" type="hidden" value="" />
        
          <p>! êtes-vous sûr  que vous voulez supprimer cet produit...?</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-outline-light px-4" data-dismiss="modal">fermer</button>
        <button type="submit" class="btn btn-outline-light px-4">valide</button>
      </div>
    </form>
      <!-- /.modal-content -->
    </div>
  </div>
  <!-- /.modal-dialog -->
</div>

<!-- Model plat ordinaire supprimer -->

<div class="modal fade" id="supprimerPlatOrdinaire" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-danger">
      <div class="modal-header">
        <h4 class="modal-title text-center">Supprimer suprimer un plat ordinaire</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="{{ route('cordinaire.destroy', 'test') }}" method="post">
        @csrf
        @method('delete')
        
        
        <div class="modal-body text-center" >        
        <input id="pl_id" class="prodId" name="value" type="hidden" value="" />
        
          <p>! êtes-vous sûr  que vous voulez supprimer ce plat...?</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-outline-light px-4" data-dismiss="modal">fermer</button>
        <button type="submit" class="btn btn-outline-light px-4">valide</button>
      </div>
    </form>
      <!-- /.modal-content -->
    </div>
  </div>
  <!-- /.modal-dialog -->
</div>





{{-- model cafeRestaurant modifier --}}
<div class="modal fade " id="editCafeRestaut" tabindex="-1" role="dialog" aria-labelledby="ajouterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-blue1">
        <h5 class="modal-title" id="ajouterLabel">modifier cafe_restaurant</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('cafeRestaurants.update', 'test') }}" method="post">
        @csrf
        @method('patch')
        <div class="modal-body" >        
        <input id="prodId" class="prodId" name="value" type="hidden" value="" />

        <div class="form-group ">
          <label for="nom">nom du CafeRestaurant</label>
          <input type="text" class="form-control" name="nomCafeRestaurant"  id="nom_cafe"  placeholder="entrer le nom du cafe restaurant" value=""> 
        </div>
          <div class="form-group ">
            <label for="exampleInputEmail1">la ville</label>
            <input type="text" class="form-control" name="ville" id="ville"  placeholder="entrer la ville" value=""> 
          </div>
      </div>
      <div class="modal-footer  justify-content-between">
        <button type="button"  class="btn btn-secondary px-4" data-dismiss="modal">fermer</button>
        <button type="submit" class="btn btn-info px-4">sauvgarder</button>
      </div>
    </form>
    </div>
  </div>
</div>


<!-- Modal supprimer employee-->

<div class="modal fade" id="deleteEmployee" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-danger">
      <div class="modal-header">
        <h4 class="modal-title text-center">supprimer employe</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="{{ route('employees.destroy', 'test') }}" method="post">
        @csrf
        @method('delete')
        
        
        <div class="modal-body text-center" >        
        <input id="empId" class="prodId" name="value" type="hidden" value="" />
        
          <p>! êtes-vous sûr  que vous voulez supprimer cet employe...?</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-outline-light px-4" data-dismiss="modal">fermer</button>
        <button type="submit" class="btn btn-outline-light px-4">valide</button>
      </div>
    </form>
      <!-- /.modal-content -->
    </div>
  </div>
  <!-- /.modal-dialog -->
</div>




<!-- Modal utilisateur ajouter-->
<div class="modal fade " id="ajouter" tabindex="-1" role="dialog" aria-labelledby="ajouterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-teal">
        <h5 class="modal-title" id="ajouterLabel">ajouter utilisateur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('utilisateurs.store') }}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="modal-body">        
        <div class="form-group ">
          <label for="nom">Nom</label>
          <input type="text" class="form-control"name="nom"  id="nom" aria-describedby="emailHelp" placeholder="entrer le nom" value="{{ old('nom') }}" required> 
         
        </div>
          <div class="form-group ">
            <label for="exampleInputEmail1">Adress email</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="entrer le email" value="{{ old('email') }}" required> 
            
          </div>
          <div class="form-group">
            <label for="address">Address</label>
            <div >
                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address"  placeholder="entrer votre address" value="{{ old('address') }}" required  >

                @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Mot de passe</label>
            <input type="password" class="form-control" name="motDePass" id="exampleInputPassword1" placeholder="mot de pass" value="" required>
          </div>
          <label for="image">Image</label>
            <div class="form-group input-group mb-3">
            
              <div class="input-group-prepend">
              </div>
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="image" id="inputGroupFile01">
                <label class="custom-file-label px-1" for="inputGroupFile01">Choose file</label>
              </div>
            </div>
            
      </div>
      <div class="modal-footer  justify-content-between">
        <button type="button" class="btn btn-secondary swalDefaultSuccess px-4" data-dismiss="modal">fermer</button>
       
        <button type="submit" class="btn btn-success px-5">cree</button>
      </div>
    </form>
    </div>
  </div>
</div>

<!-- Modal modifier-->

<div class="modal fade " id="editutilisateur" tabindex="-1" role="dialog" aria-labelledby="ajouterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-blue1">
        <h5 class="modal-title" id="ajouterLabel">modifier utilisateur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('utilisateurs.update', 'test') }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('patch')
        
        <div class="modal-body" >        
        <input id="prodId" class="prodId" name="value" type="hidden" value="" />
        <div class="form-group ">
          <label for="nom">Nom</label>
          <input type="text" class="form-control" name="nom"  id="nom"  placeholder="entrer le nom" value=""> 
         
        </div>
          <div class="form-group ">
            <label for="exampleInputEmail1">Adress email</label>
            <input type="email" class="form-control" name="email" id="email"  placeholder="entrer le email" value=""> 
          </div>
          <div class="form-group">
            <label for="address">Address</label>
            <div >
                <input id="address" type="text" id ="address" class="form-control @error('address') is-invalid @enderror" name="address"  placeholder="entrer votre address" value="{{ old('address') }}" required  >

                @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Mot de passe</label>
            <input type="password" class="form-control" name="motDePass" id="pass"  value="">
          </div>
          <label for="image">Image</label>
          
          <div class="form-group input-group mb-3">
            
            <div class="input-group-prepend">
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="image" id="image">
              <label class="custom-file-label px-1" for="inputGroupFile01">Choose file</label>
            </div>
          </div>
      </div>
      <div class="modal-footer  justify-content-between">
        <button type="button"  class="btn btn-secondary px-4" data-dismiss="modal">fermer</button>
        <button type="submit" class="btn btn-info px-4">sauvgarder</button>
      </div>
    </form>
    </div>
  </div>
</div>

<!-- Modal supprimer-->

<div class="modal fade" id="deleteUtidiant" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-danger">
      <div class="modal-header">
        <h4 class="modal-title text-center">supprimer utilisateur</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <form action="{{ route('utilisateurs.destroy', 'test') }}" method="post">
        @csrf
        @method('delete')
        
        
        <div class="modal-body text-center" >        
        <input id="prodId" class="prodId" name="value" type="hidden" value="" />
        
          <p>! êtes-vous sûr  que vous voulez supprimer cet utilisateur...?</p>
      </div>
      <div class="modal-footer justify-content-between">
        <button type="button" class="btn btn-outline-light px-4" data-dismiss="modal">fermer</button>
        <button type="submit" class="btn btn-outline-light px-4">valide</button>
      </div>
    </form>
      <!-- /.modal-content -->
    </div>
  </div>
  <!-- /.modal-dialog -->
</div>

<!-- Modal employee ajouter-->





<script src="{{ asset('js/app.js') }}"></script>
<script>

$(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End

</script>
<script>
  $(document).ready(function(){
    $(document).on('click','.request', function () {
      var modal = $(this)
            modal.find('.modal-body #prodId').val(ut_id);
            var value= ($(this).data('value'));
    });
// modale utilisateur for update
  $('#editutilisateur').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
   // Button that triggered the modal
  var value = button.data('value_user') // Extract info from data-* attributes
  var value_nom = button.data('value_nom') // Extract info from data-* attributes
  var value_pass = button.data('value_pass') // Extract info from data-* attributes
  var value_email = button.data('value_email') // Extract info from data-* attributes
  var value_address = button.data('value_address') // Extract info from data-* attributes
  // var value_pass = button.data('value_pass') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

  console.log(value);
  var modal = $(this)
  
  modal.find('.modal-body input#prodId ').val(value);
  modal.find('.modal-body #nom ').val(value_nom);
  modal.find('.modal-body input#email ').val(value_email);
  modal.find('.modal-body input#pass ').val(value_pass);
  modal.find('.modal-body input#address ').val(value_address);
  

})
// modale utilisateur pour delete
$('#deleteUtidiant').on('show.bs.modal', function (event) {
    console.log('test valide');
  var button = $(event.relatedTarget)
   // Button that triggered the modal
  var value = button.data('value_user') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

  console.log(value);
  var modal = $(this)
  
  modal.find('.modal-body input#prodId ').val(value);

})
// modale employe pour update
$('#editEmployee').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
   // Button that triggered the modal
  var value = button.data('value_emp') // Extract info from data-* attributes
  var value_nom_employe = button.data('value_nom_employe') // Extract info from data-* attributes
  var value_prenom_employe = button.data('value_prenom_employe') // Extract info from data-* attributes
  var value_adress_employe = button.data('value_adress_employe') // Extract info from data-* attributes
  var value_fonction = button.data('value_fonction') // Extract info from data-* attributes
  var value_salaire = button.data('value_salaire') // Extract info from data-* attributes
  var value_commission = button.data('value_commission') // Extract info from data-* attributes
  var value_cafe = button.data('value_cafe') // Extract info from data-* attributes
   // Extract info from data-* attributes
  // Extract info from data-* attributes
  // var value_pass = button.data('value_pass') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

  console.log(value_cafe);
  var modal = $(this)
  
  modal.find('.modal-body input#prodId ').val(value);
  modal.find('.modal-body input#nom_employe ').val(value_nom_employe);
  modal.find('.modal-body input#prenom_employe ').val(value_prenom_employe);
  modal.find('.modal-body input#adress_employe ').val(value_adress_employe);
  modal.find('.modal-body #fonction ').val(value_fonction);
  modal.find('.modal-body input#salaire ').val(value_salaire);
  modal.find('.modal-body input#commission ').val(value_commission);
  
 
  

})
// modale employe pour delete
$('#deleteEmployee').on('show.bs.modal', function (event) {
    console.log('test valide');
  var button = $(event.relatedTarget)
   // Button that triggered the modal
  var value = button.data('value_emp') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  console.log(value);
  var modal = $(this)
  
  modal.find('.modal-body input#empId ').val(value);
})

// modale cafeRestaurant pour update
$('#editCafeRestaut').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
   // Button that triggered the modal
  var value = button.data('value_cr') // Extract info from data-* attributes
  var value_nom_cafe = button.data('value_nom_cafe') // Extract info from data-* attributes
  var value_ville = button.data('value_ville') // Extract info from data-* attributes
 // Extract info from data-* attributes
  // Extract info from data-* attributes
  // var value_pass = button.data('value_pass') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

  console.log(value);

  var modal = $(this)
  
  modal.find('.modal-body input#prodId ').val(value);
  modal.find('.modal-body input#nom_cafe ').val(value_nom_cafe);
  modal.find('.modal-body input#ville ').val(value_ville);

})

// modale employe pour delete
$('#deleteCafeRestaurant').on('show.bs.modal', function (event) {
    console.log('test valide');
  var button = $(event.relatedTarget)
   // Button that triggered the modal
  var value = button.data('value_cr') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  console.log(value);
  var modal = $(this)
  
  modal.find('.modal-body input#prodId ').val(value);
})
// modale materiel pour update
$('#editeMateriel').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
   // Button that triggered the modal
  var value = button.data('value_mt') // Extract info from data-* attributes
  var value_nom_produit = button.data('value_nom_produit') // Extract info from data-* attributes
  var value_prix_produit = button.data('value_prix_produit') // Extract info from data-* attributes
  var value_marque = button.data('value_marque') // Extract info from data-* attributes
 // Extract info from data-* attributes
  // Extract info from data-* attributes
  // var value_pass = button.data('value_pass') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

  console.log(value);
  console.log(value_nom_produit);
  var modal = $(this)
  
  modal.find('.modal-body input#prodId ').val(value);
  modal.find('.modal-body input#nom_produit ').val(value_nom_produit);
  modal.find('.modal-body input#value_prix_produit ').val(value_prix_produit);
  modal.find('.modal-body input#value_marque ').val(value_marque);

})
// modale employe pour delete
$('#deleteMateriel').on('show.bs.modal', function (event) {
    console.log('test valide');
  var button = $(event.relatedTarget)
   // Button that triggered the modal
  var value = button.data('value_mt') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  console.log(value);
  var modal = $(this)
  
  modal.find('.modal-body input#prodId ').val(value);
})

// modale materiel pour update
$('#editPAlimentaire').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
   // Button that triggered the modal
  var value = button.data('value_pa') // Extract info from data-* attributes
  var value_nom_produit = button.data('value_nom_produit') // Extract info from data-* attributes
  var value_prix_produit = button.data('value_prix_produit') // Extract info from data-* attributes
  var value_date = button.data('value_date') // Extract info from data-* attributes
 // Extract info from data-* attributes
  // Extract info from data-* attributes
  // var value_pass = button.data('value_pass') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

  console.log(value);
  console.log(value_nom_produit);
  var modal = $(this)
  
  modal.find('.modal-body input#prodId ').val(value);
  modal.find('.modal-body input#nom ').val(value_nom_produit);
  modal.find('.modal-body input#Prix ').val(value_prix_produit);
  modal.find('.modal-body input#date1 ').val(value_date);

})
// modale produit alimentaire pour delete
$('#deletPAlimentaire').on('show.bs.modal', function (event) {
    console.log('test valide');
  var button = $(event.relatedTarget)
   // Button that triggered the modal
  var value = button.data('value_pa') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  console.log(value);
  var modal = $(this)
  
  modal.find('.modal-body input#pa_id').val(value);
})
// modale plat pour update
$('#editplat').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
   // Button that triggered the modal
  var value_plat = button.data('value_plat') // Extract info from data-* attributes
  var value_nom_plat = button.data('value_nom_plat') // Extract info from data-* attributes
  var value_prix = button.data('value_prix') // Extract info from data-* attributes
  var value_description = button.data('value_description') // Extract info from data-* attributes
  var value_image = button.data('value_image') // Extract info from data-* attributes
 // Extract info from data-* attributes
  // Extract info from data-* attributes
  // var value_pass = button.data('value_pass') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

  console.log(value_plat);
  
  var modal = $(this)
  
  modal.find('.modal-body input#value_plat ').val(value_plat);
  modal.find('.modal-body input#value_nom_plat ').val(value_nom_plat);
  modal.find('.modal-body input#value_prix ').val(value_prix);
  modal.find('.modal-body textarea ').text(value_description);
  modal.find('.modal-body input#value_image ').text(value_image);

})
$('#modifierPlatOrdinaire').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
   // Button that triggered the modal
  // var value_plat = button.data('value_plat') // Extract info from data-* attributes
  var value_nom_plat = button.data('value_nom_plat') // Extract info from data-* attributes
  var value_quantite = button.data('value_quantite') // Extract info from data-* attributes
  var value_nom_cafe = button.data('value_nom_cafe') // Extract info from data-* attributes
  // var value_image = button.data('value_image') // Extract info from data-* attributes
 // Extract info from data-* attributes
  // Extract info from data-* attributes
  // var value_pass = button.data('value_pass') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

  console.log(value_plat);
  
  var modal = $(this)
  
  // modal.find('.modal-body input#value_plat ').val(value_plat);
  modal.find('.modal-body input#value_nom_plat ').val(value_nom_plat);
  modal.find('.modal-body input#value_quantite ').val(value_quantite);
  modal.find('.modal-body input#value_nom_cafe ').text(value_nom_cafe);
  // modal.find('.modal-body input#value_image ').text(value_image);

})
// modale plat pour delete
$('#deletplat').on('show.bs.modal', function (event) {
    console.log('test valide');
  var button = $(event.relatedTarget)
   // Button that triggered the modal
  var value_plat = button.data('value_plat') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  console.log(value_plat);
  var modal = $(this)
  
  modal.find('.modal-body input#value_plat').val(value_plat);
})
// modale plat ordinaire pour delete
$('#supprimerPlatOrdinaire').on('show.bs.modal', function (event) {
    console.log('test valide');
  var button = $(event.relatedTarget)
   // Button that triggered the modal
  var value_plat = button.data('value_plat') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  console.log(value_plat);
  var modal = $(this)
  
  modal.find('.modal-body input#pl_id').val(value_plat);
})
});

</script>
</body>
</html>
