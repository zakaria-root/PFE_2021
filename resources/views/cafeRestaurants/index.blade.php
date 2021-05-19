@extends('layouts.master')

@section('content')

<div class="container mt-5">
    
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">tableau des cafe_restaurants</h3>
            <div class="col-12 col-4">
              <div class="col-4 offset-10 ">
                  <button type="button" style="margin-left:20px; padding-bottom:10px; padding-top:10px;" class="btn btn-outline-success " data-toggle="modal" data-target="#ajouterCafe" >
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
                  <th>Nom cafe_restaurant</th>
                  <th>Ville</th>
                  <th>Action</th>
                </tr>
              </thead>
              @foreach ($crs as $cr)
                <tr>
                    <th scope="row">{{ $cr->id }}</th>
                    <td>{{ $cr->nomCafeRestaurant }}</td>
                    <td>{{ $cr->ville }}</td>
                    <td>
                        
                            <a type="button"
                            data-value_cr="{{ $cr->id }}" 
                            data-value_nom_cafe="{{ $cr->nomCafeRestaurant }}" 
                            data-value_ville="{{ $cr->ville }}"
                            data-toggle="modal" 
                            data-target="#editCafeRestaut" >
                            <i class="fas fa-user-edit mr-2 teal"></i>
                            </a>
                            /
                            <a type="button"
                            
                            data-value_cr="{{ $cr->id }}"  
                            data-toggle="modal" 
                            data-target="#deleteCafeRestaurant" >
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
    
    

@endsection