@extends('layouts.dashboard.layout')
@section('titre')
    <title>Order n° --> {{$order->id}}</title>
@endsection
@section('content')
<div>
    <h2> Order n° --> {{$order->id}}</h2>
</div>
<div class="titre-edit">
        <div class="form-group">
            <input class="form-control" type="text"  value="{{$order->checkout_full_name}}" disabled>
        </div>
        <div class="form-group">
            <input class="form-control" type="text"  value="{{$order->checkout_email}}" disabled>
        </div>
        <div class="form-group">
            <input class="form-control" type="text"  value="{{$order->checkout_adress}}" disabled>
        </div>
        <div class="form-group">
            <input class="form-control" type="text"  value="{{$order->checkout_name_on_card}}" disabled>
        </div>
        <div class="form-group">
            <input class="form-control" type="text"  value="{{$order->checkout_exp_month."/".$order->checkout_exp_year}}" disabled>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" value="{{$order->checkout_cvv}}" disabled>
        </div>
        <div class="form-group">
            <input class="form-control" type="text"  value="{{$order->checkout_city}}" disabled>
        </div>
        <div class="form-group">
            <input class="form-control" type="text"  value="{{$order->checkout_state}}" disabled>
        </div>
        <div class="form-group" >
            <input class="form-control" type="text"  value="{{$order->checkout_zip}}" disabled>
        </div>
        <a href="{{url()->previous()}}"><button type="button" class="btn btn-danger"">Retour</button> </a>
@endsection