@extends('layouts.master')

@section('content')

<div class="container mt-5">
    
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header py-2">
            
            <h3 class="card-title" >
              <i class="fas fa-users p-1 pt-2 fa-lg"></i>
              tableau des utilisateurs
            </h3>
            <div class="col-12 col-4">
              <div class="col-4 offset-11">
                  <button type="button" style="margin-left:45px !important ; padding-top: 3px !important;padding-bottom: 3px !important;" class="btn btn-success px-3 mt-1" data-toggle="modal" data-target="#ajouter" >
                      <i class="fas fa-user-plus "></i>
                      
                      
                  </button>
                      
              </div>
              
          </div>
            
          </div>
          <div class="card-header py-0 pt-2 ">
            <h3 class="card-title  float-right ">
              <div class="card-tools ">
                <form action="{{ url('/utilisateurs') }}">
                <div class="input-group input-group-sm " style="width: 180px;">
                  <input type="text" name="name" class="form-control float-right" placeholder="Search">
    
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                      <i class="fas fa-search"></i>
                    </button>
                  </div>
                </div>
              </form>
              </div>
            
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>Image</th>
                  <th>Nom</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Temp du creation</th>
                  <th>Action</th>
                </tr>
              </thead>
              @foreach ($users as $user)
              @if ($user->name === request()->get('name') or request()->get('name') == null)
                <tr>
                    <th scope="row"><img src="{{ asset('storage/'.$user->image) }}" width="75px" style="max-height: 60px ; border-radius: 90%" alt="image du plat"></th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td >{{ $user->address }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        
                            <a type="button" 
                            class="btn btn-primary px-3 py-1" style="color: white"
                            data-value_user="{{ $user->id }}" 
                            data-value_nom="{{ $user->name }}" 
                            data-value_email="{{ $user->email }}" 
                            data-value_address="{{ $user->address }}" 
                            data-value_pass="{{ $user->password }}" 
                            data-value_image="{{ $user->image }}"
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
                  @endif
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