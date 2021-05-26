@extends('layouts.master')

@section('content')

<div class="container mt-5">
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header py-2">
        <h3 class="card-title">
            <i class="fas fa-dollar-sign p-1 pt-2 fa-lg"></i>
         
          
          tableau des ventes
        </h3>
        <div class="col-12 col-4">
          <div class="col-4 offset-11 ">
              <button type="button" style="margin-left:45px !important ; padding-top: 3px !important;padding-bottom: 3px !important;" class="btn btn-success px-3 mt-1" data-toggle="modal" data-target="#ajouterEmployee" >
                <i class="fas fa-cart-plus"></i>
                  
              </button>
                  
              <a href="?categorie=cafe">cafe</a>
              <a href="?categorie=restaurant">restaurant</a>
        
          </div>
          
      </div>
        
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover">
          <thead>
            <tr>
                <th>Image</th>
                <th>Nom</th>
                <th>Categorie</th>
                <th>date d'achat</th>
                <th>Quantite</th>
              <th>Prix</th>
            </tr>
          </thead>
          
            @php
            $tPrix = 0
            @endphp
            @php
            $request = Request::all();
            @endphp
          @foreach ($winds as $wind)
          @if ($wind->categorie === request()->get('categorie'))
                
          <tr>
              <td scope="row"><img src="{{ asset('storage/'.$wind->image ) }}" width="80px" alt=""></td>
              <td>{{ $wind->nomPlat }}</td>
              <td >{{ $wind->categorie }}</td>
              <td>{{ $wind->created_at }}</td>
              <td>{{ $wind->quantite }}</td>
              <th>{{ $wind->prix * $wind->quantite }} $</th>
              @php
                    
                    $tPrix = $tPrix + $wind->prix * $wind->quantite 
                    @endphp
              </tr>
              @endif
              @endforeach
             
          </tbody>
          <tfoot >
          <tr style="background-color: rgba(231, 227, 253, 0.89)">
            <td class="pl-4"><b>Prix Totale</b> </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <th class="pl-4">{{ $tPrix }} $
                <i class="fas fa-comment-dollar fa-lg ml-2"></i>
            </th>
          </tr>
            
          </tfoot>
        </table>
      </div>
      
      <!-- /.card-body -->
    </div>
    
  </div>
</div>
</div>


<!-- TODO: ajouter model employee  -->

{{-- <div class="modal fade " id="ajouterEmployee" tabindex="-1" role="dialog" aria-labelledby="ajouterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-teal">
        <h5 class="modal-title" id="ajouterLabel">Ajouter employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{ route('employees.store') }}" method="post">
        @csrf
      <div class="modal-body">        
        <div class="form-group ">
          <label for="nom">Nom</label>
          <input type="text" class="form-control" name="nomEmploye"    placeholder="entrer le nom" value="{{ old('nomEmploye') }}"> 
        
        </div>
          <div class="form-group ">
            <label for="exampleInputEmail1">Prenom</label>
            <input type="text" class="form-control" name="prenomEmploye"  placeholder="entrer le prenom" value="{{ old('prenomEmploye') }}"> 
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Adress</label>
            <input type="text" class="form-control" name="adressEmploye"  placeholder="entrer l'adress" value="{{ old('adressEmploye') }}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Fonction</label>
            <select 
            class="form-select form-select-lg col-12 py-1 mt-2" 
            aria-label=".form-select-lg example"
            name="fonction" >
              <option selected value="serveur">serveur</option>
              <option value="barman">barman</option>
              <option value="cuisinier">cuisinier</option>
              <option value="menage">menage</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">salaire</label>
            <input type="number" class="form-control" name="salaire" placeholder="entrer le salaire" value="{{ old('salaire') }}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">commission</label>
            <input type="number" class="form-control" name="commission" placeholder="entrer la commission" value="{{ old('commission') }}">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Endroit de travail</label>
            <select 
            class="form-select form-select-lg col-12 py-1 mt-2" 
            aria-label=".form-select-lg example"
            name="cafe">
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
<div class="modal fade " id="editEmployee" tabindex="-1" role="dialog" aria-labelledby="ajouterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-blue1">
        <h5 class="modal-title" id="ajouterLabel">modifier employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="{{ route('employees.update', 'test') }}" method="post">
        @csrf
        @method('patch')
        <div class="modal-body" >        
        <input id="prodId" class="prodId" name="value" type="hidden" value="" />
        <div class="form-group ">
          <label for="nom">Nom</label>
          <input type="text" class="form-control" name="nomEmploye"  id="nom_employe"   placeholder="entrer le nom" value=""> 
        <div class="form-group ">
          <label for="exampleInputEmail1">Prenom</label>
          <input type="text" class="form-control" name="prenomEmploye" id="prenom_employe"  placeholder="entrer le prenom" value=""> 
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Adress</label>
          <input type="text" class="form-control" name="adressEmploye" id="adress_employe"  placeholder="entrer l'adress" value="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Fonction</label>
            <select 
            class="form-select form-select-lg col-12 py-1 mt-2" 
            aria-label=".form-select-lg example"
            name="fonction"
            id="fonction" >
              <option selected value="serveur">serveur</option>
              <option value="barman">barman</option>
              <option value="cuisinier">cuisinier</option>
              <option value="menage">menage</option>
            </select>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">salaire</label>
          <input type="number" class="form-control" name="salaire" id="salaire"  placeholder="entrer le salaire" value="">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">commission</label>
          <input type="number" class="form-control" name="commission" id="commission" placeholder="entrer la commission" value="">
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
</div> --}}
@endsection
