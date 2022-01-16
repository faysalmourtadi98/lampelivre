@extends('layouts.dashboard.layout')
@section('titre')
    <title>Create Products</title>
@endsection
@section('content')
<div>
  <h2> Product n° --> {{$product->id}}</h2>
</div>
<div class="titre-edit">
        <div class="form-group-image">
            <img src="{{asset("assets/img/".$product->product_image)}}" width="405" height="550">
        </div> 
        <div class="form-group-data">
          <div class="form-group row">
            <label for="categorie_name" class="col-sm-2 col-form-label">Categorie Name :</label>
          <div class="col-sm-10">
            @foreach ($categorie as $item)
            <input  type="text" id="categorie_name" name="categorie_name" class="form-control"placeholder="Categorie Name"value="{{$item->categorie_name}}" disabled>
            @endforeach
          </div>
        </div> 
        <div class="form-group row">
          <label for="product_prix" class="col-sm-2 col-form-label">Product Prix :</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" id="product_prix" name="product_prix" placeholder="Product Prix"value="{{$product->product_prix}}" disabled>
          </div>
        </div>
        <div class="form-group row">
          <label for="product_devise" class="col-sm-2 col-form-label">Product Devise :</label>
          <div class="col-sm-10">
            <input class="form-control" type="text" id="product_devise" name="product_devise" placeholder="Product Devise"value="{{$product->product_devise}}" disabled>
          </div>
        </div>
        <div class="form-group row">
          <label for="product_auteur" class="col-sm-2 col-form-label">Product Auteur :</label>
          <div class="col-sm-10">
            <input class="form-control " type="text" id="product_auteur" name="product_auteur" placeholder="Product Auteur"value="{{$product->product_auteur}}" disabled>
          </div>
        </div>    
        <div class="form-group row">
          <label for="product_description" class="col-sm-2 col-form-label">Product Description :</label>
          <div class="col-sm-10">
            <textarea id="story" name="story"rows="5" cols="102" disabled >{{$product->product_description}}</textarea>
          </div>
        </div> 
        </div> 
        <div class="form-group-btn">
          <a href="{{Route('dashboard.products.index')}}"><button type="button" class="btn btn-danger"">Retour</button> </a>
        </div>
</div>
@endsection