@extends('layouts.master')

@section('content')

<div class="container mt-5">
    
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header py-2">
            <h3 class="card-title">
              <i class="fas fa-laptop-house fa-lg pt-2"></i>
              tableau des cafe_restaurants</h3>
            <div class="col-12 col-4">
              <div class="col-4 offset-11 ">
                  <button type="button" style="margin-left:45px !important ; padding-top: 3px !important;padding-bottom: 3px !important;" class="btn btn-success px-3 mt-1" data-toggle="modal" data-target="#ajouterCafe" >
                    <i class="fas fa-plus fa-lg pt-1"></i>
                      
                  </button>
                      
              </div>
              
          </div>
            
          </div>
          <!-- /.card-header -->
          <div class="card-body table-responsive p-0 ">
            <table class="table table-hover ">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nom cafe_restaurant</th>
                  <th>Ville</th>
                  <th >Action</th>
                </tr>
              </thead>
              @foreach ($crs as $cr)
                <tr>
                    <th scope="row">{{ $cr->id }}</th>
                    <td>{{ $cr->nomCafeRestaurant }}</td>
                    <td>{{ $cr->ville }}</td>
                    <td>
                        
                            <a type="button"
                            class="btn btn-primary px-3 py-1 " style="color: white "
                            data-value_cr="{{ $cr->id }}" 
                            data-value_nom_cafe="{{ $cr->nomCafeRestaurant }}" 
                            data-value_ville="{{ $cr->ville }}"
                            data-toggle="modal" 
                            data-target="#editCafeRestaut" >
                            <i class="fas fa-edit "></i>
                            </a>
                            
                            <a type="button"
                            class="btn btn-danger px-3 py-1 " style="color: white"
                            data-value_cr="{{ $cr->id }}"  
                            data-toggle="modal" 
                            data-target="#deleteCafeRestaurant" >
                            <i class="fas fa-trash"></i>
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