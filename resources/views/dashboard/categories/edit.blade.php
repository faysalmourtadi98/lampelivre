@extends('layouts.dashboard.layout')
@section('titre')
    <title>Create Categories</title>
@endsection
@section('content')
<div class="titre-edit">
    <form  method="POST" action="{{Route('dashboard.categories.update',$categorie->id)}}" enctype="multipart/form-data">
        @csrf 
        @method('PUT')
        <div class="form-group">
            <input  type="text" id="categorie_name" name="categorie_name" class="form-control @error('categorie_name')   is-invalid @enderror"placeholder="Categorie Name"value="{{old('categorie_name',$categorie->categorie_name)}}">
            @error('categorie_name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <input  type="text" id="categorie_description" name="categorie_description" class=" form-control @error('categorie_description')   is-invalid @enderror"placeholder="Categorie Description"value="{{old('categorie_description',$categorie->categorie_description)}}">
            @error('categorie_description')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-success">Edit Categorie</button>
            <a href="{{url()->previous()}}"><button type="button" class="btn btn-danger">Retour</button></a>
          </div>
    </form>
</div>
@endsection