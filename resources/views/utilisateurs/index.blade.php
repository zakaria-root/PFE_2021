@extends('layouts.master')

@section('content')

<div class="container mt-5">
    <div class="col-12 col-4">
        <div class="col-4 offset-10 ">
            <button type="button" class="btn btn-outline-success mb-3 py-2" data-bs-toggle="modal" data-bs-target="#add" >
                <i class="fas fa-user-plus"></i>
                Ajouter nouveau
            </button>
                
        </div>
    </div>
    
    <table class="table table-striped ">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Temp du creation</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->login }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at }}</td>
                    <td>
                        <a href="#">
                            <i class="fas fa-user-edit m-2"></i>
                        </a>/
                        <a href="#">
                            <i class="fas fa-user-times m-2"></i>
                        </a>
                        
                    </td>
                  </tr>
                @endforeach
              
            </tbody>
          </table>
    
 
</div>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button>
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
@endsection