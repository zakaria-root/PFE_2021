@extends('layouts.master')

@section('content')

<div class="container mt-5">
  <div class="col-12 col-8">
    <div class="card card-primary card-outline">
      <div class="card-body box-profile">
        <div class="text-center">
          <img class="  py-3" style="height:230px; width: 200px;border-radius: 50%;" src="{{ asset('storage/'.$user->image) }}" alt="User profile picture">
        </div>
  
        <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>
  
        <p class="text-muted text-center">
          @if ($user->role == "admin")
          Administrateur du site
          @elseif ($user->role == "serveur")
          Serveur
          @else
          Simple Utilisateur
          @endif
          
        </p>
  
        <ul class="list-group list-group-unbordered mb-3">
          <li class="list-group-item">
            <b>Nom Profile</b> <a class="float-right">{{ Auth::user()->name }}</a>
          </li>
          <li class="list-group-item">
            <b>Email Profile</b> <a class="float-right">{{ Auth::user()->email }}</a>
          </li>
          
        </ul>
  
        <button type="button" class="btn btn-danger btn-block"  data-toggle="modal" data-target="#editeProfile" ><b>edite prfile</b></button>
      </div>
      
      <!-- /.card-body -->
    </div>
  </div>

</div>


@endsection