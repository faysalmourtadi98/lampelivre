@extends('layouts.dashboard.layout')
@section('titre')
    <title>Create Products</title>
@endsection
@section('content')
<div>
  <h2> Categorie n° --> {{$categorie->id}}</h2>
</div>
<div class="titre-edit">
    <div class="form-group row">
        <label for="categorie_name" class="col-sm-2 col-form-label">Categorie Name</label>
        <div class="col-sm-10">
          <input  type="text" id="categorie_name" name="categorie_name" class="form-control"placeholder="Categorie Name"value="{{$categorie->categorie_name}}" disabled>
        </div>
      </div>
      <div class="form-group row">
        <label for="categorie_description" class="col-sm-2 col-form-label">Categorie Description</label>
        <div class="col-sm-10">
          <input  type="text" id="categorie_description" name="categorie_description" class=" form-control"placeholder="Categorie Description"value="{{$categorie->categorie_description}}" disabled>  
        </div>
      </div>
      <div>
        <h2> List Products --> </h2>
      </div>
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
              <td><img src="{{asset('/img/'.$key->product_image)}}" width="200" height="250"></td>            
              <td>{{$key->product_name}}</td>
              <td>{{"$key->product_auteur"}}</td>
              <td>{{$key->categorie_id}}</td> 
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
      <div class="form-group">
        <a href="{{url()->previous()}}"><button type="button" class="btn btn-danger">Retour</button></a>
      </div>
</div>
<!--
        @foreach ($products as $product)
      <div class="titre-edit">
        <div class="form-group">
            <img src="{{asset("/img/".$product->product_image)}}" width="200" height="250">
        </div> 
        <div class="form-group">
            <input class="form-control" type="text" id="product_name" name="product_name" placeholder="Product Name"value="{{$product->product_name}}" disabled>
        </div>
        <div class="form-group">
          <input class="form-control" type="text" id="product_prix" name="product_prix" placeholder="Product Prix"value="{{$product->product_prix}}" disabled>
        </div>
        <div class="form-group">
          <input class="form-control" type="text" id="product_devise" name="product_devise" placeholder="Product Devise"value="{{$product->product_devise}}" disabled>
        </div>
        <div class="form-group">
          <input class="form-control" type="text" id="product_description" name="product_description" placeholder="Product Description"value="{{$product->product_description}}" disabled>
        </div>
        <div class="form-group">
          <input class="form-control" type="text" id="product_auteur" name="product_auteur" placeholder="Product Auteur"value="{{$product->product_description}}" disabled>
        </div>       
</div>
      @endforeach
-->
@endsection

