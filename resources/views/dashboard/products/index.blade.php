@extends('layouts.dashboard.layout')
@section('titre')
    <title>Products</title>
@endsection
@section('content')
@if (Session::has('statut1'))
<div class="alert alert-info">{{ Session::get('statut1') }}
<a href="" target="#page" ><i class="far fa-trash-alt"></i></a>
</div>
@endif
@if (Session::has('statut2'))
<div class="alert alert-info">{{ Session::get('statut2') }}
<a href="" target="#page" ><i class="far fa-trash-alt"></i></a>
</div>
@endif
<a href="{{Route('dashboard.products.create')}}"><span class="btn btn-success">Create Products <i class="fas fa-plus"></i></span></a>
<div class="all-orders mt-2" id="page">
  <div class="page-titre"><h2>Products</h2><hr></div>
  <table class="table table-bordered table-hover" >
    <thead>
      <tr>
        <th scope="col" class="bg-primary text-white">#</th>
        <th scope="col" class="bg-primary text-white">Image</th>
        <th scope="col" class="bg-primary text-white">Name</th>
        <th scope="col" class="bg-primary text-white">Auteur</th>
        <th scope="col" class="bg-primary text-white">Categorie</th>
        <th scope="col" class="bg-primary text-white">Description</th>
        <th scope="col" class="bg-primary text-white">Stock</th>
        <th scope="col" class="bg-primary text-white">Prix</th>
        <th scope="col" class="bg-primary text-white">Show</th>
        <th scope="col" class="bg-primary text-white">Edit</th>
        <th scope="col" class="bg-primary text-white">Delete</th>
      </tr>
    </thead>
    <tbody>
      <tr>    
          @foreach ($products as $key)
          <th scope="row">{{$key->id}}</th>
          <td><img src="{{asset('/assets/img/'.$key->product_image)}}" width="200" height="250"></td>            
          <td>{{$key->product_name}}</td>
          <td>{{"$key->product_auteur"}}</td>
          <td>{{$key->categorie->categorie_name}}</td> 
          <td>{{$key->product_description}}</td>
          <td>{{$key->product_in_stock}}</td>
          <td>{{"$key->product_prix $key->product_devise"}}</td>
        <td>
            <a href="{{Route('dashboard.products.show',$key->id)}}"><button type="button" class="btn btn-outline-primary">
            <i class="far fa-eye"></i></button></a>
        </td>
        <td>
            <a href="{{Route('dashboard.products.edit',$key->id)}}"><button type="button" class="btn btn-outline-success">
            <i class="far fa-edit"></i></button></a>
        </td>
        <td>
          <form action="{{Route('dashboard.products.delete',$key->id)}}" method="post" id="inline_form">
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