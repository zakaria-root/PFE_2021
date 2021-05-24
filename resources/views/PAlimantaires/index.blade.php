@extends('layouts.master')

@section('content')

<div class="container mt-5">
    
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">tableau des materils</h3>
            <div class="col-12 col-4">
              <div class="col-4 offset-11 ">
                  <button type="button" style="margin-left:45px !important ; padding-top: 3px !important;padding-bottom: 3px !important;" class="btn btn-success px-3 my-0" data-toggle="modal" data-target="#ajouterPAlimantaire" >
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
                  <th>Nom </th>
                  <th>Prix </th>
                  <th>Date d'expiration</th>
                  <th>Action</th>
                </tr>
              </thead>
              @foreach ($pas as $pa)
                <tr>
                    <th scope="row">{{ $pa->id }}</th>
                    <td>{{ $pa->nomProduit }}</td>
                    <td>{{ $pa->prixProduit }}</td>
                    <td>{{ $pa->dateExpiration }}</td>
                    <td>
                        
                            <a type="button" 
                            class="btn btn-primary px-3 py-1" style="color: white"
                            data-value_pa="{{ $pa->id }}" 
                            data-value_nom_produit="{{ $pa->nomProduit }}" 
                            data-value_prix_produit="{{ $pa->prixProduit }}"
                            data-value_date="{{ $pa->dateExpiration }}"
                            data-toggle="modal" 
                            data-target="#editPAlimentaire" >
                            <i class="fas fa-user-edit mr-2 teal"></i>
                            </a>
                            /
                            <a type="button"
                            class="btn btn-danger px-3 py-1" style="color: white"
                            data-value_pa="{{ $pa->id }}"  
                            data-toggle="modal" 
                            data-target="#deletPAlimentaire" >
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