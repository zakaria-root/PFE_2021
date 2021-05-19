@extends('layouts.master')

@section('content')

<div class="container mt-5">
    
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">tableau des materils</h3>
            <div class="col-12 col-4">
              <div class="col-4 offset-10 ">
                  <button type="button" style="margin-left:20px; padding-bottom:10px; padding-top:10px;" class="btn btn-outline-success " data-toggle="modal" data-target="#ajouterMateriel" >
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
                  <th>Nom </th>
                  <th>prix </th>
                  <th> Marque</th>
                  <th>date d'achat</th>
                </tr>
              </thead>
              @foreach ($mts as $mt)
                <tr>
                    <th scope="row">{{ $mt->id }}</th>
                    <td>{{ $mt->nomProduit }}</td>
                    <td>{{ $mt->prixProduit }}</td>
                    <td>{{ $mt->marque }}</td>
                    <td>
                        
                            <a type="button"
                            data-value_mt="{{ $mt->id }}" 
                            data-value_nom_produit="{{ $mt->nomProduit }}" 
                            data-value_prix_produit="{{ $mt->prixProduit }}"
                            data-value_marque="{{ $mt->marque }}"
                            data-toggle="modal" 
                            data-target="#editeMateriel" >
                            <i class="fas fa-user-edit mr-2 teal"></i>
                            </a>
                            /
                            <a type="button"
                            
                            data-value_mt="{{ $mt->id }}"  
                            data-toggle="modal" 
                            data-target="#deleteMateriel" >
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