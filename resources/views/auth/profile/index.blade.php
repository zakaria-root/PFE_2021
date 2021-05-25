@extends('layouts.master')

@section('content')

<div class="container mt-5">
  <div class="col-12 col-8">
    <div class="card card-primary card-outline">
      <div class="card-body box-profile">
        <div class="text-center">
          <img class="  py-3" style="height:200px; width: 200px;border-radius: 50%;" src="default.jpg" alt="User profile picture">
        </div>
  
        <h3 class="profile-username text-center">{{ Auth::user()->name }}</h3>
  
        <p class="text-muted text-center">Administrateur du site</p>
  
        <ul class="list-group list-group-unbordered mb-3">
          <li class="list-group-item">
            <b>Nom Profile</b> <a class="float-right">{{ Auth::user()->name }}</a>
          </li>
          <li class="list-group-item">
            <b>Email Profile</b> <a class="float-right">{{ Auth::user()->email }}</a>
          </li>
          <li class="list-group-item">
            <b>le numero </b> <a class="float-right">0665846999</a>
          </li>
        </ul>
  
        <button type="button" class="btn btn-primary btn-block"  data-toggle="modal" data-target="#editeProfile" ><b>edite prfile</b></button>
      </div>
      
      <!-- /.card-body -->
    </div>
  </div>

</div>


@endsection