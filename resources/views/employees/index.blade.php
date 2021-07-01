@extends('layouts.master')

@section('content')

<div class="container ">
<div class="row ">
  <div class="col-12">
    <div class="card">
      <div class="card-header py-1 ">
        <h3 class="card-title">
          <i class="fas fa-users p-1 pt-2 fa-lg"></i>
          tableau des employés
        </h3>
        <div class="col-12 col-4">
          <div class="col-4 offset-11 ">
              <button type="button" style="margin-left:40px !important ; padding-top: 3px !important;padding-bottom: 3px !important;" class="btn btn-success px-3 mt-1" data-toggle="modal" data-target="#ajouterEmployee" >
                  <i class="fas fa-user-plus"></i>
                  
              </button>
                  
          </div>
         
      </div>
        
      </div>
      <div class="card-header py-0 pt-2">
        <h3 class="card-title  float-right ">
          <div class="card-tools ">
            <form action="{{ url('/employees') }}">
            <div class="input-group input-group-sm " style="width: 180px;">
              <input type="text" name="fonction" class="form-control float-right" placeholder="Search">

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
      <div class="card-body table-responsive p-0">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Image</th>
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

          @if ($emp->fonction === request()->get('fonction') or request()->get('fonction') == null)
              
          
            <tr>
                <th scope="row"><img src="{{ asset('storage/'.$emp->image) }}" width="75px" style="max-height: 60px ; border-radius: 90%" alt="image du plat"></th>
                <td>{{ $emp->nomEmploye }}</td>
                <td>{{ $emp->prenomEmploye }}</td>
                <td>{{ $emp->adressEmploye }}</td>
                <td>{{ $emp->fonction }}</td>
                <td>{{ $emp->salaire }}</td>  
                <td>{{ $emp->commission }}</td>
                <td>{{ $emp->created_at }}</td>
                <td>
                        <a type="button"
                        class="btn btn-primary px-3 py-1" style="color: white ;"
                        data-value_emp="{{ $emp->id }}" 
                        data-value_nom_employe="{{ $emp->nomEmploye }}" 
                        data-value_prenom_employe="{{ $emp->prenomEmploye }}" 
                        data-value_adress_employe="{{ $emp->adressEmploye }}" 
                        data-value_fonction="{{ $emp->fonction }}" 
                        data-value_salaire="{{ $emp->salaire }}" 
                        data-value_commission="{{ $emp->commission }}" 
                        data-value_cafe="{{ $emp->cafe_restaurants->nomCafeRestaurant }}" 
                        data-value_image="{{ $emp->image }}"
                        data-toggle="modal" 
                        data-target="#editEmployee" >
                        <i class="fas fa-user-edit "></i>
                        </a>
                        
                        <a type="button"
                        class="btn btn-danger px-3 py-1" style="color: white"
                        data-value_emp="{{ $emp->id }}"  
                        data-toggle="modal" 
                        data-target="#deleteEmployee" >
                        <i class="fas fa-user-times "></i>
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
    
  </div>
</div>
</div>


<!-- TODO: ajouter model employee  -->

<div class="modal fade " id="ajouterEmployee" tabindex="-1" role="dialog" aria-labelledby="ajouterLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header bg-teal">
        <h5 class="modal-title" id="ajouterLabel">Ajouter employee</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <form action="{{ route('employees.store') }}" method="post" enctype="multipart/form-data">
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
          <div class="form-group">
            <label for="image">Image</label>
            <div class="form-group input-group mb-3">
            
              <div class="input-group-prepend">
              </div>
              <div class="custom-file">
                <input type="file" class="custom-file-input" name="image" id="inputGroupFile01">
                <label class="custom-file-label px-1" for="inputGroupFile01">Choose file</label>
              </div>
            </div>
            
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
      <form action="{{ route('employees.update', 'test') }}" method="post" enctype="multipart/form-data">
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
        <label for="image">Image</label>
          
          <div class="form-group input-group mb-3">
            
            <div class="input-group-prepend">
            </div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="image" id="image">
              <label class="custom-file-label px-1" for="inputGroupFile01">Choose file</label>
            </div>
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
