@extends('layouts.dashboard.layout')
@section('titre')
    <title>Create Products</title>
@endsection
@section('content')
<div class="titre-edit">
    <form  method="POST" action="{{Route('dashboard.products.store')}}" enctype="multipart/form-data">
        @csrf 
        <div class="form-group">
          <label for="categorie_name">Categorie Name :</label>
          <select name="categorie_name" id="categorie_name">
          @foreach ($categorie as $item)
          <option value="{{$item->id}}">{{$item->categorie_name}}</option>
          @endforeach
          </select> 
        </div> 
        <div class="form-group">
            <input  type="text" id="product_name" name="product_name" class="form-control @error('product_name')   is-invalid @enderror"placeholder="Product Name"value="{{old('product_name')}}">
            @error('product_name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <input  type="text" id="product_prix" name="product_prix" class=" form-control @error('product_prix')   is-invalid @enderror"placeholder="Product Prix"value="{{old('product_prix')}}">
            @error('product_prix')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <input  type="text" id="product_devise" name="product_devise" class=" form-control @error('product_devise')   is-invalid @enderror" placeholder="Product Devise"value="{{old('product_devise')}}">
            @error('product_devise')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <input  type="text" id="product_description" name="product_description" class="form-control @error('product_description') is-invalid @enderror" placeholder="Product Description"value="{{old('product_description')}}">
            @if ($errors->has('product_description'))
            <div role="alert" class="invalid-feedback">{{ $errors->first('product_description') }}</div>
            @else
            <div role="alert" class="valid-feedback">Good</div>
            @endif
          </div>
          <div class="form-group">
            <input  type="text" id="product_auteur" name="product_auteur" class="form-control @error('product_auteur')   is-invalid @enderror" placeholder="Product Auteur"value="{{old('product_auteur')}}">
            @error('product_auteur')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <input  type="text" id="product_in_stock"class="form-control @error('product_in_stock')   is-invalid @enderror" name="product_in_stock" placeholder="product_in_stock"value="{{old('product_in_stock')}}">
            @error('product_in_stock')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <input  type="file" id="product_image" name="product_image"class="form-control @error('product_image')   is-invalid @enderror"> 
            @error('product_image')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>  
            <div class="form-group">
            <button type="submit" class="btn btn-success">Add Product</button>
            @if (url()->previous()<> url()->current())
            <a href="{{url()->previous()}}"><button type="button" class="btn btn-danger">Retour</button></a>
            @else
            <a href="{{Route("dashboard.products.index")}}"><button type="button" class="btn btn-danger">Retour</button></a>
            @endif
          </div>
    </form>
</div>
@endsection