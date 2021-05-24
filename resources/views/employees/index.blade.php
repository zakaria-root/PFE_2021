@extends('layouts.master')

@section('content')

<div class="container mt-5">
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">tableau des employees</h3>
        <div class="col-12 col-4">
          <div class="col-4 offset-11 ">
              <button type="button" style="margin-left:45px !important ; padding-top: 3px !important;padding-bottom: 3px !important;" class="btn btn-success px-3 my-0" data-toggle="modal" data-target="#ajouterEmployee" >
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
                {{ $emp->CafeRestaurant()->idcafe }}
                <td>{{ $emp->created_at }}</td>
                <td>
                        <a type="button"
                        class="btn btn-primary px-3 py-1" style="color: white"
                        data-value_emp="{{ $emp->id }}" 
                        data-value_nom_employe="{{ $emp->nomEmploye }}" 
                        data-value_prenom_employe="{{ $emp->prenomEmploye }}" 
                        data-value_adress_employe="{{ $emp->adressEmploye }}" 
                        data-value_fonction="{{ $emp->fonction }}" 
                        data-value_salaire="{{ $emp->salaire }}" 
                        data-value_commission="{{ $emp->commission }}" 
                        data-toggle="modal" 
                        data-target="#editEmployee" >
                        <i class="fas fa-user-edit mr-2 teal"></i>
                        </a>
                        /
                        <a type="button"
                        class="btn btn-danger px-3 py-1" style="color: white"
                        data-value_emp="{{ $emp->id }}"  
                        data-toggle="modal" 
                        data-target="#deleteEmployee" >
                        <i class="fas fa-user-times ml-2 red"></i>
                        </a>
                    
                </td>
                    
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
