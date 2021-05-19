@extends('layouts.master')

@section('content')

<div class="container mt-5">
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">tableau des employees</h3>
        <div class="col-12 col-4">
          <div class="col-4 offset-10 ">
              <button type="button" style="margin-left:20px; padding-bottom:10px; padding-top:10px;" class="btn btn-outline-success " data-toggle="modal" data-target="#ajouterEmployee" >
                  <i class="fas fa-user-plus"></i>
                  Ajouter nouveau
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
              <th>Prenom</th>
              <th>Adress</th>
              <th>Fonction</th>
              <th>Salaire</th>
              <th>Commission</th>
              <th>date d'emprunt</th>
              <th>Action</th>
            </tr>
          </thead>
          
          @foreach ($emps as $emp)
            <tr>
                <th scope="row">{{ $emp->id }}</th>
                <td>{{ $emp->nomEmploye }}</td>
                <td>{{ $emp->prenomEmploye }}</td>
                <td>{{ $emp->adressEmploye }}</td>
                <td>{{ $emp->fonction }}</td>
                <td>{{ $emp->salaire }}</td>  
                <td>{{ $emp->commission }}</td>
                <td>{{ $emp->created_at }}</td>
                <td>
                        <a type="button"
                        data-value_emp="{{ $emp->id }}" 
                        data-value_nom="{{ $emp->login }}" 
                        data-value_email="{{ $emp->email }}" 
                        data-value_pass="{{ $emp->motDePass }}" 
                        data-toggle="modal" 
                        data-target="#editutilisateur" >
                        <i class="fas fa-user-edit mr-2 teal"></i>
                        </a>
                        /
                        <a type="button"
                        
                        data-value_user="{{ $emp->id }}"  
                        data-toggle="modal" 
                        data-target="#deleteUtidiant" >
                        <i class="fas fa-user-times ml-2 red"></i>
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
</div>
@endsection
