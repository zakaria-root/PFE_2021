@extends('layouts.master')

@section('content')

<div class="container mt-5">
    
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">tableau des plats</h3>
            <div class="col-12 col-4">
              <div class="col-4 offset-11 ">
                  <button type="button" style="margin-left:45px !important ; padding-top: 3px !important;padding-bottom: 3px !important;" class="btn btn-success px-3 my-0" data-toggle="modal" data-target="#ajouterPlat" >
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
              @foreach ($plats as $plat)
                <tr>
                    <th scope="row">{{ $plat->id }}</th>
                    <td>{{ $plat->nomPlat }}</td>
                    <td>{{ $plat->prix }}</td>
                    <td>{{ $plat->description }}</td>
                    <td>
                        
                            <a type="button"
                            class="btn btn-primary px-3 py-1" style="color: white ;"
                            data-value_plat="{{ $plat->id }}" 
                            data-value_nom_plat="{{ $plat->nomPlat }}" 
                            data-value_prix="{{ $plat->prix }}"
                            data-value_description="{{ $plat->description }}"
                            data-toggle="modal" 
                            data-target="#editplat" >
                            <i class="fas fa-edit "></i>
                            </a>
                            
                            <a type="button"
                            class="btn btn-danger px-3 py-1" style="color: white"
                            data-value_plat="{{ $plat->id }}"  
                            data-toggle="modal" 
                            data-target="#deletplat" >
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

<div class="modal fade " id="ajouterPlat" tabindex="-1" role="dialog" aria-labelledby="ajouterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-teal">
        <h5 class="modal-title" id="ajouterLabel">ajouter plat</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('plats.store') }}" method="post">
        @csrf
      <div class="modal-body">        
        <div class="form-group ">
          <label for="nom">Nom</label>
          <input type="text" class="form-control" name="nomPlat"  id="nom" placeholder="entrer le nom" value="{{ old('nomPlat') }}"> 
         
        </div>
          <div class="form-group ">
            <label for="exampleInputEmail1">Prix</label>
            <input type="number" class="form-control" name="prix" id="Prix" placeholder="entrer le Prix" value="{{ old('Prix') }}"> 
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <textarea type="text" class="form-control" name="description" id="Marque" placeholder="mot de description" value="{{ old('description') }}"></textarea>
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
      </div>
      <div class="modal-footer  justify-content-between">
        <button type="button" class="btn btn-secondary swalDefaultSuccess px-4" data-dismiss="modal">fermer</button>
       
        <button type="submit" class="btn btn-success px-5">cree</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!-- Modal modifier-->

<div class="modal fade " id="editplat" tabindex="-1" role="dialog" aria-labelledby="ajouterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-blue1">
          <h5 class="modal-title" id="ajouterLabel">modifier materiel</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="{{ route('plats.update', 'test') }}" method="post">
          @csrf
          @method('patch')
          <div class="modal-body" >        
          <input id="value_plat" class="prodId" name="value" type="hidden" value="" />
  
          <div class="form-group ">
              <label for="nom">Nom</label>
              <input type="text" class="form-control" name="nomPlat"  id="value_nom_plat" placeholder="entrer le nom" value="{{ old('nomPlat') }}"> 
             
            </div>
              <div class="form-group ">
                <label for="exampleInputEmail1">Prix</label>
                <input type="number" class="form-control" name="prix" id="value_prix" placeholder="entrer le Prix" value="{{ old('Prix') }}"> 
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Description</label>
                <textarea type="text" class="form-control" name="description" id="value_description" placeholder="mot de description" value="">{{ old('description') }}</textarea>
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