@extends('layouts.master')

@section('content')

<div class="container mt-5">
    
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            
            <h3 class="card-title">
              <i class="fas fa-users p-1 p"></i>
              tableau des utilisateurs
            </h3>
            <div class="col-12 col-4">
              <div class="col-4 offset-11">
                  <button type="button" style="margin-left:45px !important ; padding-top: 3px !important;padding-bottom: 3px !important;" class="btn btn-success px-3 my-0" data-toggle="modal" data-target="#ajouter" >
                      <i class="fas fa-user-plus"></i>
                      
                  </button>
                      
              </div>
              
          </div>
            
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nom</th>
                  <th>Email</th>
                  <th>Temp du creation</th>
                  <th>Action</th>
                </tr>
              </thead>
              @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->login }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        
                            <a type="button" 
                            class="btn btn-primary px-3 py-1" style="color: white"
                            data-value_user="{{ $user->id }}" 
                            data-value_nom="{{ $user->login }}" 
                            data-value_email="{{ $user->email }}" 
                            data-value_pass="{{ $user->motDePass }}" 
                            data-toggle="modal" 
                            data-target="#editutilisateur" >
                            <i class="fas fa-user-edit "></i>
                            </a>
                            
                            <a type="button"
                            class="btn btn-danger px-3 py-1" style="color: white"
                            data-value_user="{{ $user->id }}"  
                            data-toggle="modal" 
                            data-target="#deleteUtidiant" >
                            <i class="fas fa-user-times  "></i>
                            </a>
                        
                    </td>
                  </tr>
                @endforeach

              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
    </div>
    
    
@endsection