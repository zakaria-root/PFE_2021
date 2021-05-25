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
                  <button type="button" style="margin-left:45px !important ; padding-top: 3px !important;padding-bottom: 3px !important;" class="btn btn-success px-3 my-0" data-toggle="modal" data-target="#ajouterMateriel" >
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
                  <th>prix </th>
                  <th> Marque</th>
                  <th>Action</th>
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
                            class="btn btn-primary px-3 py-1" style="color: white ;"
                            data-value_mt="{{ $mt->id }}" 
                            data-value_nom_produit="{{ $mt->nomProduit }}" 
                            data-value_prix_produit="{{ $mt->prixProduit }}"
                            data-value_marque="{{ $mt->marque }}"
                            data-toggle="modal" 
                            data-target="#editeMateriel" >
                            <i class="fas fa-edit "></i>
                            </a>
                            
                            <a type="button"
                            class="btn btn-danger px-3 py-1" style="color: white"
                            data-value_mt="{{ $mt->id }}"  
                            data-toggle="modal" 
                            data-target="#deleteMateriel" >
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
    
    <!-- Modal materiel materiel-->
<div class="modal fade " id="ajouterMateriel" tabindex="-1" role="dialog" aria-labelledby="ajouterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-teal">
        <h5 class="modal-title" id="ajouterLabel">ajouter materiel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('materiels.index') }}" method="post">
        @csrf
      <div class="modal-body">        
        <div class="form-group ">
          <label for="nom">Nom</label>
          <input type="text" class="form-control"name="nomProduit"  id="nom" placeholder="entrer le nom" value="{{ old('nom') }}"> 
         
        </div>
          <div class="form-group ">
            <label for="exampleInputEmail1">Prix</label>
            <input type="number" class="form-control" name="prixProduit" id="Prix" placeholder="entrer le Prix" value="{{ old('Prix') }}"> 
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Marque</label>
            <input type="text" class="form-control" name="marque" id="Marque" placeholder="mot de Marque" value="{{ old('Marque') }}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Endroit de travail</label>
          <select 
          class="form-select form-select-lg col-12 py-1 mt-2" 
          aria-label=".form-select-lg example"
          name="cafe" 
          id="cafe_id">
            <option selected value="{{ $cafes->first()->id }}">{{$cafes->first()->nomCafeRestaurant }}</option>
            @foreach ($cafes as $cafe)
            @if ($loop->first) @continue @endif
            <option value="{{ $cafe->id }}">{{ $cafe->nomCafeRestaurant }}</option>
            @endforeach
          </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Fourniseur</label>
          <select 
          class="form-select form-select-lg col-12 py-1 mt-2" 
          aria-label=".form-select-lg example"
          name="fourniseur" 
          id="fourniseur">
            <option selected value="{{ $frs->first()->id }}">{{$frs->first()->nomFourniseaur }}</option>
            @foreach ($frs as $fr)
            @if ($loop->first) @continue @endif
            <option value="{{ $fr->id }}">{{ $fr->nomFourniseaur }}</option>
            @endforeach
          </select>
          </div>
      </div>
      <div class="modal-footer  justify-content-between">
        <button type="button" class="btn btn-secondary swalDefaultSuccess px-4" data-dismiss="modal">fermer</button>
       
        <button type="submit" class="btn btn-success px-5">cree</button>
      </div>
    </form>
    </div>
  </div>
</div>

{{-- model materiel modifier --}}
<div class="modal fade " id="editeMateriel" tabindex="-1" role="dialog" aria-labelledby="ajouterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-blue1">
        <h5 class="modal-title" id="ajouterLabel">modifier materiel</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('materiels.update', 'test') }}" method="post">
        @csrf
        @method('patch')
        <div class="modal-body" >        
        <input id="prodId" class="prodId" name="value" type="hidden" value="" />

        <div class="form-group ">
          <label for="nom">Nom</label>
          <input type="text" class="form-control"name="nomProduit"  id="nom_produit" placeholder="entrer le nom" value="{{ old('nomProduit') }}"> 
         
        </div>
          <div class="form-group ">
            <label for="exampleInputEmail1">Prix</label>
            <input type="text" class="form-control" name="prixProduit" id="value_prix_produit" placeholder="entrer le Prix" value="{{ old('prixProduit') }}"> 
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Marque</label>
            <input type="text" class="form-control" name="marque" id="value_marque" placeholder="mot de Marque" value="{{ old('Marque') }}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Endroit de travail</label>
          <select 
          class="form-select form-select-lg col-12 py-1 mt-2" 
          aria-label=".form-select-lg example"
          name="cafe" 
          id="cafe_id">
            <option selected value="{{ $cafes->first()->id }}">{{$cafes->first()->nomCafeRestaurant }}</option>
            @foreach ($cafes as $cafe)
            @if ($loop->first) @continue @endif
            <option value="{{ $cafe->id }}">{{ $cafe->nomCafeRestaurant }}</option>
            @endforeach
          </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Fourniseur</label>
          <select 
          class="form-select form-select-lg col-12 py-1 mt-2" 
          aria-label=".form-select-lg example"
          name="fourniseur" 
          id="fourniseur">
            <option selected value="{{ $frs->first()->id }}">{{$frs->first()->nomFourniseaur }}</option>
            @foreach ($frs as $fr)
            @if ($loop->first) @continue @endif
            <option value="{{ $fr->id }}">{{ $fr->nomFourniseaur }}</option>
            @endforeach
          </select>
          </div>
      </div>
      <div class="modal-footer  justify-content-between">
        <button type="button"  class="btn btn-secondary px-4" data-dismiss="modal">fermer</button>
        <button type="submit" class="btn btn-info px-4">sauvgarder</button>
      </div>
    </form>
    </div>
  </div>
</div>

@endsection