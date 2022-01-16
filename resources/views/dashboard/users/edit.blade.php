@extends('layouts.dashboard.layout')
@section('titre')
    <title>Edit Products</title>
@endsection
@section('content')
<div class="titre-edit">
    <form  method="POST" action="{{Route('dashboard.users.update',$user->id)}}" enctype="multipart/form-data">
        @csrf 
        @method('PUT')
        <div class="form-group">
            <input  type="text" id="first_name" name="first_name" class="form-control @error('first_name')   is-invalid @enderror"placeholder="First Name"value="{{old('first_name',$user->first_name)}}">
            @error('first_name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <input  type="text" id="last_name" name="last_name" class="form-control @error('last_name')   is-invalid @enderror"placeholder="Last Name"value="{{old('last_name',$user->last_name)}}">
            @error('last_name')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <input  type="text" id="email" name="email" class="form-control @error('email')   is-invalid @enderror"placeholder="Email"value="{{old('email',$user->email)}}">
            @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <input  type="password" id="password" name="password" class="form-control @error('password')   is-invalid @enderror"placeholder="Password">
            @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <input  type="date" id="date_naissance" name="date_naissance" class="form-control @error('date_naissance')   is-invalid @enderror"placeholder="Date Naissance"value="{{old('date_naissance',$user->date_naissance)}}">
            @error('date_naissance')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
            <div class="form-group">
            <button type="submit" class="btn btn-primary">Edit User</button>
            @if (url()->previous()<> url()->current())
            <a href="{{url()->previous()}}"><button type="button" class="btn btn-danger">Retour</button></a>
            @else
            <a href="{{Route("dashboard.products.index")}}"><button type="button" class="btn btn-danger">Retour</button></a>
            @endif
          </div>
    </form>
</div>
@endsection