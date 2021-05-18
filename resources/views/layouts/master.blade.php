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

  <title>AdminLTE 3 | Starter</title>

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    

  </nav>
  <!-- /.navbar -->
    

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <i class="fas fa-coffee ml-3 "></i>
      <span class="brand-text font-weight-light">CafeRestaut</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="logo.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                 
               <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-user-tie"></i>
                  <p>
                    profile
                    <span class="right badge badge-danger">admin</span>
                  </p>
                </a>
              </li>
          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-users"></i>
              <p>
                utilisateurs
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/utilisateurs') }}" class="nav-link active">
                  <i class="fas fa-user-tag nav-icon"></i>
                  <p>client</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-user-cog nav-icon"></i>
                  <p>employee</p>
                </a>
              </li>
            </ul>
          </li>
         
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-laptop-house nav-icon"></i>
              <p>
                cafes
                
              </p>
            </a>
          </li>

           <li class="nav-item has-treeview ">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-archive"></i>
              <p>
                produit
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="fa fa-business-time nav-icon"></i>
                  <p>materiel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  
                  <i class="fas fa-layer-group nav-icon"></i>
                  <p>matier premier</p>
                </a>
              </li>
            </ul>
          </li></li><li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-toggle-off"></i>
              <p>
                logout
                
              </p>
            </a>
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
          <div class="row ">
            <div class="col-8">
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
         
          

         @yield('content')
       
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
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade " id="ajouter" tabindex="-1" role="dialog" aria-labelledby="ajouterLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ajouterLabel">ajouter utilisateur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('utilisateurs.index') }}" method="post">
        @csrf
      <div class="modal-body">        
        <div class="form-group ">
          <label for="nom">Nom</label>
          <input type="text" class="form-control"name="nom"  id="nom" aria-describedby="emailHelp" placeholder="entrer le nom" value="{{ old('nom') }}"> 
         
        </div>
          <div class="form-group ">
            <label for="exampleInputEmail1">Adress email</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="entrer le email" value="{{ old('email') }}"> 
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Mot de passe</label>
            <input type="password" class="form-control" name="motDePass" id="exampleInputPassword1" placeholder="mot de pass" value="">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary swalDefaultSuccess" data-dismiss="modal">fermer</button>
       
        <button type="submit" class="btn btn-success">cree</button>
      </div>
    </form>
    </div>
  </div>
</div>

<div class="modal fade " id="editutilisateur" tabindex="-1" role="dialog" aria-labelledby="ajouterLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ajouterLabel">modifier utilisateur</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('utilisateurs.update', 'test') }}" method="post">
        @csrf
        @method('patch')
        
        
        <div class="modal-body" >        
        <input id="prodId" class="prodId" name="value" type="hidden" value="" />
        <div class="form-group ">
          <label for="nom">Nom</label>
          <input type="text" class="form-control"name="nom"  id="nom"  placeholder="entrer le nom" value=""> 
         
        </div>
          <div class="form-group ">
            <label for="exampleInputEmail1">Adress email</label>
            <input type="email" class="form-control" name="email" id="email"  placeholder="entrer le email" value=""> 
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Mot de passe</label>
            <input type="password" class="form-control" name="motDePass" id="pass"  value="">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">fermer</button>
        <button type="submit" class="btn btn-success">sauvgarder</button>
      </div>
    </form>
    </div>
  </div>
</div>

<div class="modal fade" id="deleteUtidiant" style="display: none;" aria-hidden="true">
  <div class="modal-dialog">
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
        <button type="button" class="btn btn-outline-light" data-dismiss="modal">fermer</button>
        <button type="submit" class="btn btn-outline-light">valide</button>
      </div>
    </form>
      <!-- /.modal-content -->
    </div>
  </div>
  <!-- /.modal-dialog -->
</div>



<script src="{{ asset('js/app.js') }}"></script>
<script>
  function success_toast() {
    toastr.success("success message");
  }
</script>
<script>
  $(document).ready(function(){
    $(document).on('click','.request', function () {
      var modal = $(this)
            modal.find('.modal-body #prodId').val(ut_id);
            var value= ($(this).data('value'));
    });

  $('#editutilisateur').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget)
   // Button that triggered the modal
  var value = button.data('value_user') // Extract info from data-* attributes
  var value_nom = button.data('value_nom') // Extract info from data-* attributes
  var value_email = button.data('value_email') // Extract info from data-* attributes
  // var value_pass = button.data('value_pass') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

  console.log(value);
  var modal = $(this)
  
  modal.find('.modal-body input#prodId ').val(value);
  modal.find('.modal-body input#nom ').val(value_nom);
  modal.find('.modal-body input#email ').val(value_email);
  

})
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
    
});
</script>



</body>
</html>
