@extends('layouts.dashboard.layout')
@section('titre')
    <title>Categories</title>
@endsection
@section('content')
<a href="{{Route('dashboard.categories.create')}}"><span class="btn btn-success">Create Categorie <i class="fas fa-plus"></i></span></a>
<div class="all-orders mt-2" id="page">
  <div class="page-titre"><h2>Categories</h2><hr></div>
  <table class="table table-bordered table-hover" >
    <thead>
      <tr>
        <th scope="col" class="bg-primary text-white">#</th>
        <th scope="col" class="bg-primary text-white">Name</th>
        <th scope="col" class="bg-primary text-white">Description</th>
        <th scope="col" class="bg-primary text-white">Show</th>
        <th scope="col" class="bg-primary text-white">Edit</th>
        <th scope="col" class="bg-primary text-white">Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>    
          @foreach ($categories as $key)
          <th scope="row">{{$key->id}}</th>            
          <td>{{$key->categorie_name}}</td>
          <td>{{$key->categorie_description}}</td>
        <td>
            <a href="{{Route('dashboard.categories.show',$key->id)}}"><button type="button" class="btn btn-outline-primary">
            <i class="far fa-eye"></i></button></a>
        </td>
        <td>
            <a href="{{Route('dashboard.categories.edit',$key->id)}}"><button type="button" class="btn btn-outline-success">
            <i class="far fa-edit"></i></button></a>
        </td>
        <td>
          <form action="{{Route('dashboard.categories.delete',$key->id)}}" method="post" id="inline_form">
            @csrf
            @method('delete')
            <button type="submit" class="btn btn-outline-danger"><i class="far fa-trash-alt"></i></button>
        </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
</div>
</section>    
@endsection