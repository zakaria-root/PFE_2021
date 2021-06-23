@extends('layouts.master')

@section('content')
<script
src="https://code.jquery.com/jquery-3.4.1.min.js"
integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
crossorigin="anonymous"
></script>
<div class="container mt-5">
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header py-2">
        <h3 class="card-title">
            <i class="fas fa-dollar-sign p-1 pt-2 fa-lg"></i>
         
          
            tableau des livraisons
            
        </h3>
        <div class="col-12 col-4">
            
            <div class="col-4 offset-9">
            <a href=" {{ url('serveurs?etat=home') }}" class="btn btn-outline-primary px-4 ml-5 @if ($bt === "serveurs")
              active
            @endif " >livraison</a>
            <a href="{{ url('cordinaire?etat=home') }}" class="btn btn-outline-primary ml-1 px-4" >ordinaire </a>

              {{-- <button type="button" style="" class="btn btn-success px-4 " data-toggle="modal" data-target="#ajouterEmployee" >
                <i class="fas fa-cart-plus"></i>
                  
              </button> --}}
        
          </div>
          
      </div>
      </div>
      @php
            use App\Models\CommandsParSite;
            if (request()->get('id') != null) {
              $id = request()->get('id');
              CommandsParSite::addEtat($id);
            }
          @endphp
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover">
          <thead>
            <tr>
                <th>Nom Client</th>
                <th>Nom du Cafe</th>
                <th>Date d'achat</th>
                <th>Adress client</th>
                <th>Prix command</th>
              <th>etat</th>
            </tr>
          </thead>
{{--           
            @php
            $tPrix = 0
            @endphp
            @php
            $request = Request::all();
            @endphp --}}
            
            @for ($i = 0; $i < count($orders); $i++)
            
          @if ($orders[$i]->etat == 0)
              
          
            {{-- @endfor --}}
          {{-- @foreach ($orders as $order, $totales as $totale) --}}
          {{-- @if ($wind->categorie === request()->get('categorie') or request()->get('categorie') == null) --}}
               
          <tr>
              {{-- <td scope="row"><img src="{{ asset('storage/'.$wind->image ) }}" width="80px" alt=""></td> --}}
              <td>{{ $orders[$i]->name }}</td>
              <td >{{ $orders[$i]->nomCafeRestaurant }}</td>
              <td>{{ $orders[$i]->created_at }}</td>
              <td>{{ $orders[$i]->address }}</td>
              <th>{{ $totales[$i]->prix }} $</th>
              <td class="etat">
                <button id="btn_{{ $orders[$i]->id }}" href="" onclick="myFunction({{ $orders[$i]->id}} , {{ $i }})" class="btn btn-success " type="button" >
                 
                    <span id="spiner_{{ $orders[$i]->id }}" class="spinner-grow spinner-grow-sm d-none" role="status" aria-hidden="true"></span>
                  
                  
                  <span class="text_{{ $orders[$i]->id }}">disponible</span> 
                </button>
                <span class="valider_{{ $orders[$i]->id }}"></span>
              </td>
              

              {{-- @php
                    
                    $tPrix = $tPrix + $wind->prix * $wind->quantite 
              @endphp --}}
              </tr>
              {{-- @endif --}}
              @endif
              @endfor
             

          </tbody>
          <tfoot >
          <tr style="background-color: rgba(231, 227, 253, 0.89)">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="pl-4 float-right"><b><i class="fas fa-dolly-flatbed fa-lg"></i></b> </td>
            
            <td>
                
            </td>
            {{-- <th class="pl-4">{{ $tPrix }} $ --}}
                {{-- <i class="fas fa-comment-dollar fa-lg ml-2"></i> --}}
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
<script>
  function myFunction(id, position) {
    console.log(id);
    var element = document.querySelector('#spiner_'+id);
    document.querySelector('#btn_'+id).setAttribute("disabled", "");
    document.querySelector('.text_'+id).innerHTML =" en cour";
    element = element.classList.remove('d-none');
    document.querySelector('#btn_'+id).classList.remove('btn-success');
    document.querySelector('#btn_'+id).classList.add('btn-danger');
    document.querySelector('.valider_'+id).innerHTML = "<a href=\"?id="+id+"\" class=\"btn btn-outline-success\">valider</a>";
    

     
    
    console.log(element);
  }
</script>
@endsection
