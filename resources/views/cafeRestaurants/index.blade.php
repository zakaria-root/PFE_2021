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
                    <i class="fas fa-plus  pt-1"></i>
                      
                  </button>
                      
              </div>
              
          </div>
            
          </div>
          {{-- search  --}}
          <div class="card-header py-0 pt-2 ">
            <h3 class="card-title  float-right ">
              <div class="card-tools ">
                <form action="{{ url('/cafeRestaurants') }}">
                <div class="input-group input-group-sm " style="width: 180px;">
                  <input type="text" name="nomCafeRestaurant" class="form-control float-right" placeholder="Search">
    
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
          <div class="card-body table-responsive p-0 ">
            <table class="table table-hover ">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Nom cafe_restaurant</th>
                  <th class="px-5">Ville</th>
                  <th >Action</th>
                </tr>
              </thead>
              @foreach ($crs as $cr)
              @if ($cr->nomCafeRestaurant === request()->get('nomCafeRestaurant') or request()->get('nomCafeRestaurant') == null)

                <tr>
                    <th scope="row">{{ $cr->id }}</th>
                    <td>{{ $cr->nomCafeRestaurant }}</td>
                    <td class="px-5">{{ $cr->ville }}</td>
                    <td >
                        
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