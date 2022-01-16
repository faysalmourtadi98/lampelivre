@extends('layouts.dashboard.layout')
@section('titre')
    <title>Create Products</title>
@endsection
@section('content')
<div>
    <h2> User n° --> {{$user->id}}</h2>
</div>
<div class="titre-edit">
        <div class="form-group">
            <input class="form-control" type="text" id="first_name" name="first_name" value="{{$user->first_name}}" disabled>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" id="last_name" name="last_name" value="{{$user->last_name}}" disabled>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" id="email" name="email" value="{{$user->email}}" disabled>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" id="date_naissance" name="date_naissance" value="{{$user->date_naissance}}" disabled>
        </div>
        <a href="{{url()->previous()}}"><button type="button" class="btn btn-danger"">Retour</button> </a>
@endsection