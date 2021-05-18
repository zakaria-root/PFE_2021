@extends('layouts.master')

@section('content')

<div class="container mt-5">
    <div class="col-12 col-4">
        <div class="col-4 offset-10 ">
            <button type="button" class="btn btn-outline-success mb-3 py-2" data-toggle="modal" data-target="#ajouter" >
                <i class="fas fa-user-plus"></i>
                Ajouter nouveau
            </button>
                
        </div>
    </div>
    <table class="table table-striped ">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Temp du creation</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->login }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        
                            <a type="button"
                            data-value_user="{{ $user->id }}" 
                            data-value_nom="{{ $user->login }}" 
                            data-value_email="{{ $user->email }}" 
                            data-value_pass="{{ $user->motDePass }}" 
                            data-toggle="modal" 
                            data-target="#editutilisateur" >
                            <i class="fas fa-user-edit m-2"></i>
                            </a>
                            /
                            <a type="button"
                            data-value_user="{{ $user->id }}"  
                            data-toggle="modal" 
                            data-target="#deleteUtidiant" >
                            <i class="fas fa-user-times m-2"></i>
                            </a>
                        
                    </td>
                  </tr>
                @endforeach
              
            </tbody>
          </table>
    
@endsection