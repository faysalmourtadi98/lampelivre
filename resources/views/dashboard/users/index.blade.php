@extends('layouts.dashboard.layout')
@section('titre')
    <title>Categories</title>
@endsection
@section('content')
<div class="all-orders mt-2">
  <div class="page-titre">    <h2>Users</h2><hr></div>
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <th scope="col" class="bg-primary text-white">#</th>
        <th scope="col" class="bg-primary text-white">Nom</th>
        <th scope="col" class="bg-primary text-white">Prenom</th>
        <th scope="col" class="bg-primary text-white">Email</th>
        <th scope="col" class= "bg-primary text-white">Date Naissance</th>
        <th scope="col" class="bg-primary text-white">Show</th>
        <th scope="col" class="bg-primary text-white">Edit</th>
        <th scope="col" class="bg-primary text-white">Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>
          @foreach ($users as $key)
          <th scope="row">{{$key->id}}</th>
          <td>{{$key->first_name}}</td> 
          <td>{{$key->last_name}}</td>
          <td>{{$key->email}}</td>
          <td>{{$key->date_naissance}}</td>
        <td>
            <a href="{{Route('dashboard.users.show',$key->id)}}">
                <button type="button" class="btn btn-outline-primary"><i class="far fa-eye"></i></button>
            </a>
        </td>
        <td>
                <a href="{{Route('dashboard.users.edit',$key->id)}}">
                    <button type="button" class="btn btn-outline-success"><i class="fas fa-edit"></i></button>
                </a>
        </td>
        <td>
            <form action="{{Route('dashboard.users.delete',$key->id)}}" method="post" id="inline_form">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
            </form>
        </td>  
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
</section>    
@endsection